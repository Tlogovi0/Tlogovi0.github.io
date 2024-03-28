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

	<a href="index.php?page=home">Home</a>   |
	<a href="index.php?page=introduction">Introduction</a>   |
	<a href="index.php?page=contract">Contract</a>   |
	<a href="index.php?page=brand">Brand</a>   |
	<a href="index.php?page=form">Form</a>   |   
	<a href="index.php?page=login">Login</a>   |   

</nav>
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
