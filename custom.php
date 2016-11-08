<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 08/11/2016
 * Time: 18:55
 */
function lyn_convertToMinutes($seconds){
    // getting remainder seconds
    $sec = $seconds % 60;
    if (function_exists('intdiv')) {
        $min = intdiv($seconds, 60);

    } else {

        $min = ($seconds - $sec) / 60;
    }
    // to remove the - symbol in seconds
    $sec = abs($sec);
    $sec = ( $sec < 10) ? '0'.$sec :$sec;
    return "$min:$sec";

}

echo lyn_convertToMinutes(-547);