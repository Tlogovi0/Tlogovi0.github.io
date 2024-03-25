<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding-top: 50px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .registerbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login Form</h2>
    <form action="/login" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password..">

        <button type="submit">Login</button>
    </form>
    <button onclick="document.getElementById('id01').style.display='block'" class="registerbtn">Register</button>
</div>

<div id="id01" class="modal">
    <form class="modal-content animate" action="/register" method="post">
        <div class="container">
            <label for="fname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fname" required>

            <label for="lname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Confirm Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <button type="submit">Register</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
This code creates a login form with email and password fields, along with a "Register" button. Clicking the "Register" button opens a modal window with fields for first name, last name, email, password, and confirm password.

User
create a login page php wiith register button wich ask user first name , last name ,  email, password , confirm password .
ChatGPT
Sure, here's an example of a login page in PHP with a registration button:

php
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<?php
// Define variables and initialize with empty values
$fname = $lname = $email = $password = $confirm_password = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate first name
    $fname = trim($_POST["fname"]);
    
    // Validate last name
    $lname = trim($_POST["lname"]);
    
    // Validate email
    $email = trim($_POST["email"]);
    
    // Validate password
    $password = trim($_POST["password"]);
    
    // Validate confirm password
    $confirm_password = trim($_POST["confirm_password"]);
    
    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // TODO: Insert the data into your database or perform other necessary actions
        
        echo "Registration successful!";
    }
}
?>

<h2>Login Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email.."><br><br>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password.."><br><br>

    <button type="submit">Login</button>
</form>
<br>

<button onclick="document.getElementById('registerForm').style.display='block'">Register</button>

<div id="registerForm" style="display:none;">
    <h2>Register Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your first name.."><br><br>
        
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name.."><br><br>

        <label for="email_reg">Email</label>
        <input type="text" id="email_reg" name="email_reg" placeholder="Your email.."><br><br>

        <label for="password_reg">Password</label>
        <input type="password" id="password_reg" name="password_reg" placeholder="Your password.."><br><br>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password.."><br><br>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>
