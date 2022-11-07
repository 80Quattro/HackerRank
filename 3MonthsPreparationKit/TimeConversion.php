<?php

/*
    Given a time in 12-hour AM/PM format, convert it to military (24-hour) time.

    Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
        - 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock. 

    Original description on: https://www.hackerrank.com/challenges/three-month-preparation-kit-time-conversion/problem
*/

function timeConversion($s) {
    
    $time = substr($s, 2, 6);
    $h = substr($s, 0, 2);
    
    if( strpos($s, 'PM') ) {
        
        $h += 12;
        if($h == 24){
            $h = '12';
        }
        
        return $h . $time;
        
    }
    else { // AM
        
        if($h == 12) {
            $h = '00';
        }
        
        return $h . $time;
        
    }

}