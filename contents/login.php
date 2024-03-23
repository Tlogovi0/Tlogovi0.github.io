<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="login_id">Login ID:</label><br>
        <input type="text" id="login_id" name="login_id" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "username"; // Your MySQL username
    $password = "password"; // Your MySQL password
    $dbname = "user_authentication";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user credentials from form
    $login_id = $_POST['login_id'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE login_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists and verify password
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Successful login, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login_id'] = $user['login_id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['email'] = $user['email'];

            // Redirect to welcome page or wherever you want to go after login
            header("Location: welcome.php");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password. <a href='login.php'>Try again</a>";
        }
    } else {
        // User not found
        echo "User not found. <a href='login.php'>Try again</a>";
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirect to login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['first_name']; ?>!</h2>
    <p>Your email: <?php echo $_SESSION['email']; ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>
