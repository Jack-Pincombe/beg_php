<?php
/**
 * Created by PhpStorm.
 * User: jackpincombe
 * Date: 09/11/2016
 * Time: 13:42

 */




function lyn_copyright($startyear){
    //getting the current year
    $currentYear = date('Y');
    //comparing if current year is greater than start year
    if($startyear < $currentYear){

        // changing current year to last two digits
        $currentYear = date('y');
        return "&copy; $startyear&ndash;$currentYear";
    }
    else{
        return "&copy; $startyear";
    }


    // &copy is ©
}

echo lyn_copyright(2014);