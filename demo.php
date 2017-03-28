<?php 
	if(isset($_SESSION['username']) && $_SESSION['username'] == 'guest') {
		$sessionId = session_id();
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<script type="text/javascript">
	
		var	sessionId = "<?= $sessionId; ?>";
		if($loggedIn == "guest")

		console.log(test);
	</script>
</body>
</html>