<?php
// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!

session_start();
var_dump($_SESSION);

if(isset($_GET['logout']) && $_GET['logout'] == 1) {
	clearSession();
} 

// get the current session ID
$sessionId = session_id();

// initialize a view count variable
$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

// increment the counter
$viewCount++;

// finally, store the new value in the session
$_SESSION['view_count'] = $viewCount;
$_SESSION['username'] = "Ryan";
$_SESSION['last_item_viewed'] = "crowbar";



function clearSession(){
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();

    // ensure client is sent a new session cookie
    session_regenerate_id();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <ul>
        <li>Session ID: <?= $sessionId; ?></li>
        <li>View Count: <?= $viewCount; ?></li>
    </ul>
    <a href="sessions.php?logout=1">Logout</a>
</body>
</html>