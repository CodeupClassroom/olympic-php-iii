<?php  
session_start();
// if user aint logged in, redirect them to login.php
if(!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
	header("Location: http://php.dev/login.php");
	die();
} 

?>

<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="Keywords" content="">
    <meta name="author" content="">
	<title>Authorized!</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/css/paper.min.css">

</head>
<body>
	<main class="container">
		<div class="col-md-6 jumbotron">
			<h1>Authorized!</h1>

			<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<p><a class="btn btn-primary btn-lg">Learn more</a></p>
			<p><a href="/logout.php" class="btn btn-default btn-lg">Logout</a></p>

		</div>
		
		<div class="col-md-6 col-md-offset-6">
			<img src="/img/200.jpg">
		</div>
	</main>
	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>

