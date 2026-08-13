<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role)
            VALUES ('$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "User Registered Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    Role:
    <select name="role">
        <option value="Admin">Admin</option>
        <option value="User">User</option>
    </select><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>
