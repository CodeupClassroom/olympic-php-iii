<?php 

	// VAr dumping the super global is a good idea for testing manners.
	var_dump($_GET);

	function pageController(){

		$data = [];

		// check with issset the parameters that comes from the get request it's always a good idea to avoid undefined vars when we first load the website
		if(isset($_GET['q'])){
			$data['myname']  = strtoupper($_GET['q']);
		}else{
			$data['myname'] = 'This is where your name goes';
		}

		if(isset($_GET['age'])){
			$data['myage']  = $_GET['age'];
		}else{
			$data['myage'] = 0;
		}

		return $data;

	}

	extract(pageController());

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

<!-- Is a good practice to include the name of the name in the action, since this is the same file we called we point to this file, if it was a separate file we should change the url -->
 <form action="get-lecture.php" method="get">
 	<label>Name</label>
 	<!-- Without the attr name on the input, the submission will fail to send data to the controller -->
 	<input type="text" name="q" placeholder="Search name">
 	<label>Age</label>
 	<input type="text" name="age" placeholder="Search age">
 	<button type="submit">Search</button>

 	<!-- Do stuff with the data returned by the controller. -->
 	<h1> Hi i'm <?=  $myname ?> and i'm <?= $myage ?> old</h1>

 </form>

 </body>
 </html>