<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 28/10/2016
 * Time: 12:26
 */

$total_minutes = 318;
$minutes = $total_minutes % 60;
$hours = ($total_minutes - $minutes) / 60;


echo "Time taken is ". $hours . " Hours and " . $minutes ." minutes";