<?php 

	// Returns a complete name using the first name and the last one(s)
	function fullName($fname, $lname){
		return $fname . " " . $lname;
	}
	

	// Prepare the vars that we want to use in the view
	function pageController(){
		
		$data=[];

		$data['name'] = 'Fernando';
		$data['lname'] = 'Mendoza Rodriguez';

		$data['fullName'] = fullName($data['name'], $data['lname']);

		$data["colors"] = ["Blue", "Red", "Black", "White"];

		$data["school"]["name"] = "Codeup";
		$data["school"]["addr"] = "600 navarro";

		// We always want to return the whole array
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
 	<h1><?= $fullName; ?></h1>
 	<h1><?= $school['addr']; ?></h1>
 	
 	<ol>

 	This is the <?= $colors[3]?> color.

 	<?php foreach($colors as $color): ?>
		<li><?= $color; ?></li>
	<?php endforeach; ?>
 	</ol>

 </body>
 </html>