<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
include 'db.php';

// Get counts
$student_count = 0;
$result = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM students");
if($result && $row = mysqli_fetch_assoc($result)) {
    $student_count = $row['cnt'];
}
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'student';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container container-wide">
            <div class="header-actions">
                <h2>Dashboard</h2>
                <a href="logout.php" class="btn-outline">Logout</a>
            </div>
            
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
            <p style="text-align: center; color: var(--text-muted); margin-top: -20px; margin-bottom: 30px; text-transform: capitalize;">Role: <?php echo htmlspecialchars($role); ?></p>
            
            <div class="dashboard-cards">
                <?php if($role !== 'student'): ?>
                <a href="add_student.php" class="card">
                    <div class="card-icon">➕</div>
                    <div class="card-title">Add Student</div>
                </a>
                
                <a href="view_students.php" class="card">
                    <div class="card-icon">👥</div>
                    <div class="card-title">View Students (<?php echo $student_count; ?>)</div>
                </a>
                
                <a href="manage_units.php" class="card">
                    <div class="card-icon">📚</div>
                    <div class="card-title">Manage Units</div>
                </a>
                <?php else: ?>
                <a href="available_units.php" class="card">
                    <div class="card-icon">📋</div>
                    <div class="card-title">Available Units</div>
                </a>
                
                <a href="my_units.php" class="card">
                    <div class="card-icon">🎓</div>
                    <div class="card-title">My Registered Units</div>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>