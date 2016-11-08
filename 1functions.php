<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 02/11/2016
 * Time: 22:22
 */

$version = phpversion();

$name = 'JACK';
// Lowers all of the keys in a string
echo strtolower($name);
echo '<br>';


// capitilizes firs letter ucfirst()
$name = ucfirst(strtolower($name));

echo $name;

//causes a pop up to apeear
$input = "<p>Hi, there! <script>alert('What are you up to?');
</script>. <a href='http://www.lynda.com/PHP-training-tutorials/282-0.html'>
Expand your php skills ";

// displays the tags used on browser
echo strip_tags($input);