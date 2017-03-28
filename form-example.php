<?php
    $items = array('Item One', 'Item Two', 'Item Three');
    $allItems = array_merge($items, $_POST);

    function output($string) {
        // parameters are like local variables inside of functions
        // parameters are given values (assigned) when you call the function and pass it a value

        if(gettype($string) == "array" || gettype($string) == "object") {
            return;
        }

        if(strpos($string, "") !== false) {
            return;
        }
        
        echo htmlspecialchars(strip_tags($string));
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Alternative Syntax</title>
</head>
<body>
    <h1>List of Items</h1>
    <ul>
    <?php foreach ($allItems as $item): ?>
        <li><?php output($item); ?></li>
    <?php endforeach; ?>
    </ul>

    <form method="POST" action="/form-example.php">
        <input type="text" id="newitem" name="newitem" placeholder="Add new todo item">
        <input type="submit" value="add">
    </form>
</body>
</html>