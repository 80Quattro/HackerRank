<?php

/*
    Given five positive integers, find the minimum and maximum values that can be calculated by summing 
    exactly four of the five integers. Then print the respective minimum and maximum values as a single line 
    of two space-separated long integers.

    Original description on: https://www.hackerrank.com/challenges/three-month-preparation-kit-mini-max-sum/problem
*/

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $sum = 0;
    $min = $arr[0];
    $max = $arr[0];
    
    foreach($arr as $e) {
        $sum += $e;
        
        if($e < $min) {
            $min = $e;
        }
        
        if($e > $max) {
            $max = $e;
        }
    }
    
    $maxsum = $sum - $min;
    $minsum = $sum - $max;
    
    print( $minsum . ' ' . $maxsum);

}