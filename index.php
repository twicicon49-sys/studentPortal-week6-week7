<?php
// Initialize database on first visit
$conn = @mysqli_connect("localhost", "root", "");
if($conn) {
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS studentportal");
    mysqli_select_db($conn, "studentportal");
    
    $users_sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role ENUM('student', 'lecturer', 'admin') DEFAULT 'student'
    )";
    mysqli_query($conn, $users_sql);
    
    // Attempt to add the role column if the table already existed before this update
    try {
        @mysqli_query($conn, "ALTER TABLE users ADD COLUMN role ENUM('student', 'lecturer', 'admin') DEFAULT 'student'");
    } catch (mysqli_sql_exception $e) {
        // Column already exists, ignore
    }
    
    $students_sql = "CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        course VARCHAR(255) NOT NULL
    )";
    mysqli_query($conn, $students_sql);

    $units_sql = "CREATE TABLE IF NOT EXISTS units (
        id INT AUTO_INCREMENT PRIMARY KEY,
        unit_code VARCHAR(50) NOT NULL,
        unit_name VARCHAR(255) NOT NULL
    )";
    mysqli_query($conn, $units_sql);

    $student_units_sql = "CREATE TABLE IF NOT EXISTS student_units (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        unit_id INT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (unit_id) REFERENCES units(id) ON DELETE CASCADE
    )";
    mysqli_query($conn, $student_units_sql);
}

header("Location: login.php");
exit();
?>
