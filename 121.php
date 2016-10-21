<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 21/10/2016
 * Time: 12:53
 */


//Users information
$name = "Jack Pincombe";
$email = "jackpincombe@hotmail.co.uk";

//displaying the users information
echo $name ,'s ' , 'email is ' , $email;


$firstName = 'Jack';
$lastName = 'Pincombe';
$title = '"The Hitchhicker\'s guide to the galaxy"';
$author = 'Douglas Adams';
$answer = 420;
$newlines = "\r\n\r\n";
$brain_size = "The size of a planet";
$fullName = $firstName . ' ' . $lastName;
$book = "$title by $author";


$heredoc = <<< EOC

In $title by $author, $fullName the "paranoid android" complains that he's asked to do 
menial tasks, even though he's got "a brain $brain_size."

EOC;



?>

<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Embedded software</title>

</head>
<body>
<h1>Dynamic text In Action</h1>
<p>There is o need for everything in a PHP file to be store in variables and displayed using echo.
PHP code is designed to be embedded in HTML</p>
<p><mark><?= $book; ?></mark> is a comedy sci-fi
series originally written by <mark><?php echo $author; ?></mark>, and
subsenquently turned into a book, TB series, movie and numerous stage shows. It
Reveals that the Answer to the Ultimate Question of Life, The universe, and
Everything is <mark><?php echo $answer; ?></mark></p>

<p><mark><?php echo $heredoc; ?></mark></p>

</body>

</html>


