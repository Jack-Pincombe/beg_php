<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 21/10/2016
 * Time: 16:26
 */

$string = "jack";
$x = strrev($string);

if( mb_strtoupper($string) == mb_strtoupper($x)){

    echo $string . " is a paradim";
}else{

    echo $string . " is not a paradim";
}
