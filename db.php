<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "studentportal"
);

if(!$conn){
    die("Connection Failed");
}

// Ensure the role column exists to prevent 'Unknown column' errors globally
try {
    @mysqli_query($conn, "ALTER TABLE users ADD COLUMN role ENUM('student', 'lecturer', 'admin') DEFAULT 'student'");
} catch (mysqli_sql_exception $e) {
    // Column already exists, ignore exception
}

@mysqli_query($conn, "CREATE TABLE IF NOT EXISTS units (id INT AUTO_INCREMENT PRIMARY KEY, unit_code VARCHAR(50) NOT NULL, unit_name VARCHAR(255) NOT NULL)");
@mysqli_query($conn, "CREATE TABLE IF NOT EXISTS student_units (id INT AUTO_INCREMENT PRIMARY KEY, user_id INT NOT NULL, unit_id INT NOT NULL, FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE, FOREIGN KEY (unit_id) REFERENCES units(id) ON DELETE CASCADE)");
?>