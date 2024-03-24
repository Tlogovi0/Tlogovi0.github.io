<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    /* Basic styling for the form */
    body {
        font-family: Arial, sans-serif;
    }
    form {
        width: 300px;
        margin: 0 auto;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .register-button {
        display: none;
    }
</style>
</head>
<body>

<form id="login-form" action="login.php" method="post">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
</form>

<!-- JavaScript to toggle register button visibility -->
<script>
    // Function to toggle the visibility of the register button
    function toggleRegisterButton() {
        var registerButton = document.querySelector('.register-button');
        registerButton.style.display = (registerButton.style.display === 'none') ? 'block' : 'none';
    }

    // Event listener for clicking the login form
    document.getElementById('login-form').addEventListener('click', function(event) {
        toggleRegisterButton();
        event.preventDefault(); // Prevent form submission
    });
</script>

</body>
</html>
