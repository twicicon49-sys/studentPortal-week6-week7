<?php
session_start();
if(!isset($_SESSION['user']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'student')){
    header("Location: dashboard.php");
    exit();
}
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'student';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Students - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container container-wide">
            <div class="header-actions">
                <a href="dashboard.php" class="btn-outline">&larr; Dashboard</a>
                <?php if($role !== 'student'): ?>
                <a href="add_student.php" class="btn-outline">Add New</a>
                <?php endif; ?>
            </div>
            
            <h2>Students List</h2>
            
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['fullname']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['course']); ?></td>
                            <td>
                                <div class="action-links">
                                    <?php if($role === 'admin' || $role === 'lecturer'): ?>
                                    <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                                    <?php endif; ?>
                                    
                                    <?php if($role === 'admin'): ?>
                                    <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                                    <?php endif; ?>
                                    
                                    <?php if($role === 'student'): ?>
                                    <span style="color: var(--text-muted); font-size: 13px;">View Only</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if(mysqli_num_rows($result) == 0): ?>
                        <tr>
                            <td colspan="5" style="text-align: center; color: var(--text-muted);">No students found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>