<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 21/10/2016
 * Time: 16:26
 * For an interview I had to return true id a word was a paradim
 * and of course the next day after looking at some php syntax I was able to
 * achieve this
 *
 * FFS
 */

$string = "jack";
$x = strrev($string);

if( mb_strtoupper($string) == mb_strtoupper($x)){

    echo $string . " is a paradim";
}else{

    echo $string . " is not a paradim";
}


