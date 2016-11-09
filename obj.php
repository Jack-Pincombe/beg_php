<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 09/11/2016
 * Time: 13:24
 */

$xmas2067 = strtotime('Dec 25, 2067');
// creating the format of outpu to the time xmas2067
echo date('l, F j, Y', $xmas2067) . '</br>';


$date1 = new DateTime();
$date2 = new DateTime();

//getting new timezone
$west_coast = new DateTimeZone('America/Los_Angeles');

//applying the timezone to the datetime
$date2 ->setTimezone($west_coast);

echo $date1-> format('g:ia, l, F j, Y') . '</br>';
echo $date2-> format('g:ia, l, F j, Y') . '</br>';