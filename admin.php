<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'Admin') {
    header("Location: access_denied.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h2>Welcome Admin</h2>

<p>Hello, <?php echo $_SESSION['username']; ?>!</p>

<h3>Admin Controls</h3>
<ul>
    <li>Manage Users</li>
    <li>View Reports</li>
    <li>System Settings</li>
</ul>

<a href="logout.php">Logout</a>

</body>
</html>
