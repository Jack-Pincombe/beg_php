<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 18/11/2016
 * Time: 20:38
 */



?>

<!doctype html>
<html lang ='en'>
<head>
    <meta charset="UTF-8">
    <title>Get and Post</title>
</head>
<body>
<form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </p>

    <p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </p>

    <p>
        <label for="comments">Comments:</label>
        <br>
        <textarea name="comments" id="comments"></textarea>
    </p>
    <p>
        <input type="submit" name="send" id="send" value="Send Comments">
    </p>


</form>
</body>