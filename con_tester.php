<?php 

// http://codeup.dev/php_lec/PHP_III/constructors_destructors/con_tester.php

require_once "Test.php";


$testClass = new Test();


unset($testClass);

var_dump($testClass);

echo "Something";
