<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
   <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
   <?php
session_start();

// Include database connection
require_once 'db.php';

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user from database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verify password
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
    } else {
        $_SESSION['error'] = 'Invalid username or password.';
        header('Location: login.php');
    }
} else {
    $_SESSION['error'] = 'User not found.';
    header('Location: login.php');
}

$conn->close();
?>
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Display user information
$user = $_SESSION['user'];
echo '<h2>Welcome, ' . $user['first_name'] . ' ' . $user['last_name'] . '</h2>';
echo '<p>Email: ' . $user['email'] . '</p>';
echo '<a href="logout.php">Logout</a>';
?>
<?php
$serverName = "localhost";
$username = "$uper";
$password = "$ecret";
$dbName = "your_database";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    <?php
session_start();
session_destroy();
header('Location: login.php');
exit();
?>
</body>
</html>
