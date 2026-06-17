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

if(isset($_POST['register_unit'])){
    $unit_id = intval($_POST['unit_id']);
    
    // Check if already registered
    $check = mysqli_query($conn, "SELECT * FROM student_units WHERE user_id=$user_id AND unit_id=$unit_id");
    if(mysqli_num_rows($check) > 0){
        $error = "You are already registered for this unit.";
    } else {
        if(mysqli_query($conn, "INSERT INTO student_units (user_id, unit_id) VALUES ($user_id, $unit_id)")){
            $success = "Successfully registered for the unit!";
        } else {
            $error = "Registration failed.";
        }
    }
}

$result = mysqli_query($conn, "SELECT * FROM units ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Available Units - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container container-wide">
            <div class="header-actions">
                <a href="dashboard.php" class="btn-outline">&larr; Dashboard</a>
                <a href="my_units.php" class="btn-outline">My Units</a>
            </div>
            
            <h2>Available Units</h2>
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
                                <form method="POST" style="margin: 0;">
                                    <input type="hidden" name="unit_id" value="<?php echo $row['id']; ?>">
                                    <button name="register_unit" style="padding: 6px 12px; width: auto; font-size: 13px;">Register</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if(mysqli_num_rows($result) == 0): ?>
                        <tr>
                            <td colspan="3" style="text-align: center; color: var(--text-muted);">No units available</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
