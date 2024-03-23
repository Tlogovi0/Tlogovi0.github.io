!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login or Register</title>
    <style>
        form {
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <label for="login_username">Username:</label>
        <input type="text" id="login_username" name="login_username" required>
        
        <label for="login_password">Password:</label>
        <input type="password" id="login_password" name="login_password" required>
        
        <input type="submit" value="Login">
    </form>
    
    <form action="register.php" method="post">
        <h2>Register</h2>
        <label for="register_firstname">First Name:</label>
        <input type="text" id="register_firstname" name="register_firstname" required>
        
        <label for="register_lastname">Last Name:</label>
        <input type="text" id="register_lastname" name="register_lastname" required>
        
        <label for="register_email">Email:</label>
        <input type="email" id="register_email" name="register_email" required>
        
        <label for="register_username">Username:</label>
        <input type="text" id="register_username" name="register_username" required>
        
        <label for="register_password">Password:</label>
        <input type="password" id="register_password" name="register_password" required>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <input type="submit" value="Register">
    </form>
</body>
