<?php 
	require_once "Auth.php";
	require_once "Log.php";

	session_start();

	function pageController() {
		Auth::logout();
		$log = new Log();
		$log->info(Auth::user() . " logged out.");	
	}
	
	pageController();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>You have logged out</h1>
	<p>Yay... have a good life!</p>
	<a href="/login.php">Log back in, you king you!</a>
</body>
</html>