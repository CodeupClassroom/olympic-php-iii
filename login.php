<?php 

	var_dump($_POST);
	$message = "";

	// check if the form was submitted
	if(!empty($_POST)) {
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";

		if($username == "guest" && $password == "password") {
			header("Location: http://php.dev/authorized.php");
			exit;
		} else {
			$message = "Please retry your username or password";
			$image = "/img/401.jpeg";
		}
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
	<title>Login</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Custom CSS -->
<style></style>
</head>
<body>
	<main class="container">
		<h1>Login to your super secure site!</h1>
		<p><?= $message ?></p>
		<?php if(!empty($image)): ?>
			<img src="<?= $image ?>">
		<?php endif; ?>

		<form action="/login.php" method="POST">
			<div class="form-group">
		    	<label for="username">Username</label>
		    	<input type="text" name="username" class="form-control" id="username" placeholder="username">
		  	</div>
		  	<div class="form-group">
    			<label for="password">Password</label>
    			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
  			</div>
  			<button type="submit" class="btn btn-default">Login</button>
		</form>
	</main>
	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>

