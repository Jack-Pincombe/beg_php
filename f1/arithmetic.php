<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 28/10/2016
 * Time: 12:12
 */

$x = 7;
$y = 10;

echo -$x . '<br>';
echo $x + $y . '<br>';
echo $x - $y . '<br>';
echo $x * $y . '<br>';
echo $x / $y . '<br>';

$degf = 98.6;
$degc = ($degf - 32) / 9 * 5;

echo $degc . ' degc' . "<br>";

if ($x % 2 ==0 ){

    echo 'This is a even number';

} else{

    echo "This is a odd number";

}