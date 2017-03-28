<?php 
	
	session_start();

	function clearSession()
	{
	    // clear $_SESSION array
	    session_unset();

	    // ensure client is sent a new session cookie
	    session_regenerate_id();

	    // delete session data on the server
	    session_destroy();

	    // start a new session - session_destroy() ended our previous session so
	    // if we want to store any new data in $_SESSION we must start a new one
	    session_start();
	}

	clearSession();
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