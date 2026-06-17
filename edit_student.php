<?php
session_start();
if(!isset($_SESSION['user']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'student')){
    header("Location: dashboard.php");
    exit();
}
include 'db.php';

if(!isset($_GET['id'])) {
    header("Location: view_students.php");
    exit();
}

$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(!$row) {
    header("Location: view_students.php");
    exit();
}

if(isset($_POST['update'])){
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $sql = "UPDATE students SET fullname='$fullname', email='$email', course='$course' WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: view_students.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Student - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header-actions">
                <a href="view_students.php" class="btn-outline">&larr; Back to List</a>
            </div>
            
            <h2>Edit Student</h2>
            
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="fullname" value="<?php echo htmlspecialchars($row['fullname']); ?>" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="course" value="<?php echo htmlspecialchars($row['course']); ?>" required>
                </div>
                <button name="update">Update Student</button>
            </form>
        </div>
    </div>
</body>
</html>