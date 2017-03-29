<?php 

// codeup.dev/php_lec/PHP_III/include_ex/ping_include.php

require_once "functions.php";

function pageController()
{
    $data = [];
    $data['score'] = inputGet('score');

    function gameOver()
    {
        $data['score'] = 0;
    }

    if (inputGet('ball') == 'miss') {
        gameOver();
    }

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

    <title>Ping</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

    <main class="container">

        <h1>Ping</h1>   
        <a href="pong_include.php?ball=hit&score=<?=escape($score + 1)?>" class="btn btn-primary">HIT</a> 
        <a href="pong_include.php?ball=miss" class="btn btn-primary">MISS</a>  
        <h3>Score <?=$score?></h3>   

    </main>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
