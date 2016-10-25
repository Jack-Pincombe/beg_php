<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 25/10/2016
 * Time: 20:00
 */

$descriptions = [

    'Earth' => "Generally quite harmless" ,
    'Marvin' => "Paranoid Android"

    ];

$descriptions['Zaphod'] = 'President of the imperial galactic government';

//print_r($descriptions);
//echo $descriptions['Earth'];

echo "Earth is described as {$descriptions['Earth']}";