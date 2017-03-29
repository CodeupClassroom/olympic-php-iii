<?php 
// start each page with session_start();
session_start();

function pageController() {
	$data = [];

	// set default classname and placeholders for login inputs
	$data['inputClass'] = "form-group";
	$data['usernamePlaceholder'] = "Your user name";
	$data['background'] = "";

	// if user is logged in already, automatically forward them
	if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
		header("Location: http://php.dev/authorized.php");
		die();
	}

	// check if user submitted login form
	if(!empty($_POST)) {
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";

		// if username and password are good, set $_SESSION['username'] and redirect
		if($username === "admin" && $password === "password") {
			// set the username on the session array and redirect the user to authorized.php
			$_SESSION['username'] = $username;
			header("Location: http://php.dev/authorized.php");
			die();
		} else {
			// send a message to the user that their username or password
			$data['inputClass'] = "form-group has-error";
			$data['usernamePlaceholder'] = "Username or password is incorrect";
			$data['background'] = "error";
		}
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
	<title>Login</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/css/paper.min.css">

<!-- Custom CSS -->
<style>
	.error {
		background-color:black;
		color: red;
	}

</style>
</head>
<body class="<?= $background ?>">
	<main class="container">
		<section class="col-md-6 col-md-offset-3">
			<h3>Login now</h3>
			
			<form method="POST" action="/login.php" class="form-horizontal">
			  <fieldset>
			    <!-- <legend>Legend</legend> -->
			    <div class="<?= $inputClass ?>">
			      <label for="username" class="col-lg-2 control-label">Username</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" name="username" id="username" placeholder="<?= $usernamePlaceholder ?>" autofocus required>
			      </div>
			    </div>
			    <div class="<?= $inputClass ?>">
			      <label for="password" class="col-lg-2 control-label">Password</label>
			      <div class="col-lg-10">
			        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
			        <div class="checkbox">
			          <label>
			            <input type="checkbox" name="stay_logged_in" value="1" checked>Keep me logged in
			          </label>
			        </div>
			      </div>
			    </div>
			    
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="submit" class="btn btn-primary">Login</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</section>

	</main>
	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>

