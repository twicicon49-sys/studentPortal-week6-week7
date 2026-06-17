<?php
session_start();
if(!isset($_SESSION['user']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'student')){
    header("Location: dashboard.php");
    exit();
}
include 'db.php';

$success = "";
$error = "";

if(isset($_POST['add_unit'])){
    $unit_code = mysqli_real_escape_string($conn, $_POST['unit_code']);
    $unit_name = mysqli_real_escape_string($conn, $_POST['unit_name']);

    $sql = "INSERT INTO units (unit_code, unit_name) VALUES ('$unit_code', '$unit_name')";
    if(mysqli_query($conn, $sql)){
        $success = "Unit added successfully!";
    } else {
        $error = "Failed to add unit.";
    }
}

if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    if(mysqli_query($conn, "DELETE FROM units WHERE id=$id")){
        header("Location: manage_units.php");
        exit();
    }
}

$result = mysqli_query($conn, "SELECT * FROM units ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manage Units - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container container-wide">
            <div class="header-actions">
                <a href="dashboard.php" class="btn-outline">&larr; Dashboard</a>
            </div>
            
            <h2>Manage Units</h2>
            
            <div style="max-width: 500px; margin: 0 auto; background: rgba(15, 23, 42, 0.4); padding: 20px; border-radius: 12px; margin-bottom: 30px; border: 1px solid var(--border);">
                <h3 style="margin-top: 0; text-align: center;">Add New Unit</h3>
                <?php if($error) echo "<div class='error-msg'>$error</div>"; ?>
                <?php if($success) echo "<div class='success-msg'>$success</div>"; ?>
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="unit_code" placeholder="Unit Code (e.g. CS101)" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="unit_name" placeholder="Unit Name" required>
                    </div>
                    <button name="add_unit">Add Unit</button>
                </form>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Unit Code</th>
                            <th>Unit Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['unit_code']); ?></td>
                            <td><?php echo htmlspecialchars($row['unit_name']); ?></td>
                            <td>
                                <div class="action-links">
                                    <a href="manage_units.php?delete=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Delete this unit?');">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if(mysqli_num_rows($result) == 0): ?>
                        <tr>
                            <td colspan="4" style="text-align: center; color: var(--text-muted);">No units available</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
