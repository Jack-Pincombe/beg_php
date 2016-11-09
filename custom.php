<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 08/11/2016
 * Time: 18:55
 */

echo lyn_convertTomins(45);


function lyn_convertTomins($seconds)
{
    // collecting the remainder seconds
    $sec = $seconds % 60;
    if (function_exists('intdiv')) {
        $min = intdiv($seconds, 60);
    } else {
        $min = ($seconds - $sec) - $sec / 60;
    }
    // making sec an absolute number
    $sec = abs($sec);
    //if sec is less than one minute
    $sec = ($sec < 10) ? '0' . $sec : $sec;

    return "$min:$sec" . '</br>';

}

$number = 2;

function doubleIt($number) {

    return $number *= 2;

}


echo "When $number is doubled it becomes " . doubleIt($number);
