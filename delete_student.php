<?php
session_start();
if(!isset($_SESSION['user']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
    header("Location: dashboard.php");
    exit();
}
include 'db.php';

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
}

header("Location: view_students.php");
exit();
?>