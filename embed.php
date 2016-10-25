<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 25/10/2016
 * Time: 20:08
 */

$book = [

    'title' => "The hitchhikers guide to the galaxy",
    'author' => "Douglas Adams",
    'description' => 'A comedy sci-fi adventure originally based on a BBC radio series'
];

$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Startibartfast'
];
?>
<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1><?php echo " {$book['title']} by {$book['author']}"?></h1>
<p><? echo $book['title'] . ' is a ' .$book['description']?> Written by <? echo $book['author']?></p>
<h2>Main Characters</h2>

    <ul><? echo $characters[0] ?></ul>
    <ul><? echo $characters[1] ?></ul>
    <ul><? echo $characters[2] ?></ul>
    <ul><? echo $characters[3] ?></ul>
    <ul><? echo $characters[4] ?></ul>


</body>
</html>
