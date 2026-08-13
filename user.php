<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'User') {
    header("Location: access_denied.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>

<h2>Welcome User</h2>

<p>Hello, <?php echo $_SESSION['username']; ?>!</p>

<h3>User Panel</h3>
<ul>
    <li>View Profile</li>
    <li>Access Resources</li>
    <li>Update Account</li>
</ul>

<a href="logout.php">Logout</a>

</body>
</html>
