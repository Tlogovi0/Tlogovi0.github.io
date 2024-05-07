<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Connect to database
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch user details
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password correct, set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["last_name"] = $row["last_name"];
            $_SESSION["email"] = $row["email"];
            header("Location: welcome.php"); // Redirect to welcome page
        } else {
            // Password incorrect
            $_SESSION["login_error"] = "Invalid username or password";
            header("Location: login.php"); // Redirect back to login page
        }
    } else {
        // User not found
        $_SESSION["login_error"] = "Invalid username or password";
        header("Location: login.php"); // Redirect back to login page
    }

    $conn->close();
}
?>
Welcome page (welcome.php):
php
Copy code
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

// Display welcome message
echo "Welcome, " . $_SESSION["first_name"] . " " . $_SESSION["last_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?></h2>
    <p>Email: <?php echo $_SESSION["email"]; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
