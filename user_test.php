<?php 
	require_once "User.php";
	require_once "Person.php";

	$admin = new User();
	$admin->username = "admin";
	$admin->password = "supersecure";

	$bob = new Person();

	$bob->firstName = "Bob";
	$bob->lastName = "Bobberson";
	$bob->addFruit("pineapple");
	$bob->addFruit("banana");

	var_dump($bob);
	var_dump($admin);

	echo $bob->firstName . " is a " . gettype($bob) . PHP_EOL;

	echo $admin->username . " is a " . gettype($admin) . PHP_EOL;

	foreach($bob->fruit as $fruit) {
		echo $fruit . PHP_EOL;
	}

?>
