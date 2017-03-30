<?php

require_once "Log.php";

// create a new log object
$log = new Log();

// log an info message
$log->info("user logged in");
$log->info("some other user logged in");

// log an error message;
$log->error("we're all out of bananas");
