<?php 

require_once "Player.php";

// http://codeup.dev/php_lec/PHP_III/constructors_destructors/playerTest.php

function pageController()
{
	$data = [];

	$testPlayer = new Player("johnny99", "32", "johnny@howdy.com", date('m-d-Y'));


	$data = [

		'username' => $testPlayer->username,
		'age' => $testPlayer->age,
		'email' => $testPlayer->email,
		'joined' => $testPlayer->date_joined

	];

	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Constructors and Destructors</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">

</head>

<body>

    <main class="container">
        
		<h1>Constructors and Destructors</h1>

		<table class="table table bordered">
			<thead>
				<tr>
					<th>Username</th>
					<th>Age</th>
					<th>Email</th>
					<th>Joined</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?= $username ?></td>
					<td><?= $age ?></td>
					<td><?= $email ?></td>
					<td><?= $joined ?></td>
				</tr>
			</tbody>
		</table>

		

    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
    crossorigin="anonymous"></script>

</body>

</html>
