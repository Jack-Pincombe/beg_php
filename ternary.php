<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 27/10/2016
 * Time: 18:26
 */


// $var = (condition) ? value if true: value if false;

$answer = 40 ;
$unit_cost = 0;


$resut = ($answer == 42 ) ? 'The answer to the Qustion of the Life, 
the Universe and everything': 'Keep calculating';

$wholesale_price = $unit_cost ?: 25;

echo $wholesale_price;