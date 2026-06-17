<?php
session_start();
if(!isset($_SESSION['user']) || (isset($_SESSION['role']) && $_SESSION['role'] === 'student')){
    header("Location: dashboard.php");
    exit();
}
include 'db.php';

$success = "";
$error = "";

if(isset($_POST['save'])){
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $sql = "INSERT INTO students (fullname, email, course) VALUES ('$fullname', '$email', '$course')";
    
    if(mysqli_query($conn, $sql)){
        $success = "Student Added Successfully";
    } else {
        $error = "Failed to add student.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Student - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header-actions">
                <a href="dashboard.php" class="btn-outline">&larr; Back</a>
            </div>
            
            <h2>Add New Student</h2>
            
            <?php if($error) echo "<div class='error-msg'>$error</div>"; ?>
            <?php if($success) echo "<div class='success-msg'>$success</div>"; ?>
            
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="course" placeholder="Course" required>
                </div>
                <button name="save">Save Student</button>
            </form>
        </div>
    </div>
</body>
</html>