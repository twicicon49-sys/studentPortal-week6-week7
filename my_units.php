<?php
session_start();
if(!isset($_SESSION['user']) || (isset($_SESSION['role']) && $_SESSION['role'] !== 'student')){
    header("Location: dashboard.php");
    exit();
}
if(!isset($_SESSION['user_id'])) {
    header("Location: logout.php");
    exit();
}
include 'db.php';

$success = "";
$error = "";
$user_id = $_SESSION['user_id'];

if(isset($_GET['drop'])){
    $unit_id = intval($_GET['drop']);
    if(mysqli_query($conn, "DELETE FROM student_units WHERE user_id=$user_id AND unit_id=$unit_id")){
        header("Location: my_units.php");
        exit();
    } else {
        $error = "Failed to drop unit.";
    }
}

$sql = "SELECT units.* FROM units 
        JOIN student_units ON units.id = student_units.unit_id 
        WHERE student_units.user_id = $user_id 
        ORDER BY units.unit_code ASC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Registered Units - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container container-wide">
            <div class="header-actions">
                <a href="dashboard.php" class="btn-outline">&larr; Dashboard</a>
                <a href="available_units.php" class="btn-outline">Register New Unit</a>
            </div>
            
            <h2>My Registered Units</h2>
            <?php if($error) echo "<div class='error-msg'>$error</div>"; ?>
            <?php if($success) echo "<div class='success-msg'>$success</div>"; ?>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Unit Code</th>
                            <th>Unit Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['unit_code']); ?></td>
                            <td><?php echo htmlspecialchars($row['unit_name']); ?></td>
                            <td>
                                <div class="action-links">
                                    <a href="my_units.php?drop=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Drop this unit?');">Drop Unit</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if(mysqli_num_rows($result) == 0): ?>
                        <tr>
                            <td colspan="3" style="text-align: center; color: var(--text-muted);">You have not registered for any units yet.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
