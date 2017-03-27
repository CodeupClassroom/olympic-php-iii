<?php

var_dump($_GET);

// on page load, set counter to 0
// make a button or link that increments the counter by 1
// make a button or link that decreases the counter by 1
// add up over time

function pageController() {
	$data = [];
	
	//if a value exists, get that value and assign to variable, else assign default value
	if(isset($_GET['count']) && is_numeric($_GET['count'])) {
		$data['count'] = $_GET['count'];
	} else {
		$data['count'] = 0;
	}

	return $data;
}

extract(pageController());

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
	<title>Counter Example</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Custom CSS -->
<style></style>
</head>
<body>
	<main class="container">
		<h1>Pong!</h1>
		<h1>Counter: <?= $count ?></h1>
		<a class="btn btn-primary" href="ping.php?count=<?= $count +1 ?>">Hit</a>
		<a class="btn btn-primary" href="ping.php?count=0">Miss</a>


	</main>
	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>

