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

	?> href="index.php?page=home">HOME</a>
	<a href="index.php?page=introduction">Introduction</a>   |
	<a href="index.php?page=contract">Contract</a>   |
	<a href="index.php?page=brand">Brand</a>   |
	
</header>
</nav>
	<!-- dynamic content goes here -->
	<main>
	<?php
	$url = 'contents/home.php';
	if (!empty($_GET['contents'])) {
		$url = 'contents/';
		$url .= $_GET['contents'] . '/';
	}
	if (!empty($_GET['page'])) {
		$url = 'contents/';
		$url .= $_GET['page'] . '.php';
	}
	include $url;
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
