<?php
session_start();
include 'db.php';

$error = "";
$success = "";

if(isset($_POST['register'])){
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = isset($_POST['role']) ? mysqli_real_escape_string($conn, $_POST['role']) : 'student';

    $check_sql = "SELECT * FROM users WHERE email='$email'";
    $check_res = mysqli_query($conn, $check_sql);

    if(mysqli_num_rows($check_res) > 0) {
        $error = "Email already registered!";
    } else {
        $sql = "INSERT INTO users (fullname, email, password, role) VALUES ('$fullname', '$email', '$password', '$role')";
        if(mysqli_query($conn, $sql)){
            $success = "Registration successful! You can now login.";
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2>Create Account</h2>
            
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
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <select name="role" required style="width: 100%; padding: 14px 16px; background: rgba(15, 23, 42, 0.6); border: 1px solid var(--border); border-radius: 10px; color: #fff; font-size: 16px; outline: none; transition: all 0.3s ease; box-sizing: border-box; appearance: none;">
                        <option value="student" style="background: var(--bg); color: #fff;">Student</option>
                        <option value="lecturer" style="background: var(--bg); color: #fff;">Lecturer</option>
                        <option value="admin" style="background: var(--bg); color: #fff;">Admin</option>
                    </select>
                </div>
                <button name="register">Register</button>
            </form>
            
            <a href="login.php" class="link-text">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>