<!DOCTYPE html>
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="./css/default.css" rel="stylesheet" type="text/css">	
             <title>Tete Logovi the real Eagle | WEB250|Home</title>
</head>
<body>
	<header>
		<h1>Tete Logovi the real Eagle| WEB250</h1>

<nav class="navbar">

	<a href="index.php?page=home">HOME</a>
	<a href="index.php?page=introduction">Introduction</a>   |
	<a href="index.php?page=contract">Contract</a>   |
	<a href="index.php?page=brand">Brand</a>   |
	</nav>
</header>
	<!-- dynamic content goes here -->

	<main>
	<?php
    $pageFound = true; // Assume the page is found initially

    // Check if page parameter is set and not empty
    if(isset($_GET['page']) && !empty($_GET['page'])) {
        // Define the content file path based on the page parameter
        $content_path = 'contents/' . $_GET['page'] . '.php';
        
        // if the content file exists
        if(file_exists($content_path)) {
            // Include the content file
            include $content_path;
        } else {
            // Set pageFound to false if file does not exist
            $pageFound = false;
        }
    } else {
        // Default content for the home page
        include 'contents/home.php';
    }

    // Display "Page not found." message if the page is not found
    if(!$pageFound) {
        echo 'Page not found.';
    }
?>
	</main
		<footer> 
	
		<nav class="navbar">
 
                <a href="https://github.com/Tlogovi0/Tlogovi0.github.io">Github.io</a>   |
		<a href="https://www.freecodecamp.org/fccc35594b7-aa93-4d23-a1da-68675e421126">freeCodeCamp</a>   |
		<a href=https://www.codecademy.com/profiles/Tlogovi0">Codecademy</a>   |
		<a href="https://pathfinder.w3schools.com/profile">W3schools</a>   |
		<a href="https://www.linkedin.com/learning/?u=76141674">LinkedIn</a>   | 
	      </nav>
</footer>
<p>&copy; 2024 Home Paradise. All rights reserved.</p>   
		<p>
		<a href="http://validator.w3.org/check?uri=https://Tlogovi0.github.io/web250.io/index.htm">
		  <img src="images/html_validation_button.gif" alt="Validate HTML">
		</a>
		 
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=https://Tlogovi0.github.io/web250.io/index.htm">
		 <img src="images/validation_button_css_rectangle_blue.gif" alt="Validate CSS">
		</a>
		</p>
	
</body>
</html>
