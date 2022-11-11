<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-flipping-bits/problem
    
    You will be given a list of 32 bit unsigned integers. Flip all the bits (1 -> 0) and (0 -> 1) 
    and return the result as an unsigned integer. 
*/

/*
 * Complete the 'flippingBits' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function flippingBits($n) {
    
    $sum = 0;
    for($i = 0; $i < 32; $i++) {
        $bit = $n % 2;
        $n = floor($n / 2);
        $sum += !$bit * pow(2, $i);
    }
    
    /* More transparent way:
    // change int[10] to int[2]
    $bits = [];
    for($i = 0; $i < 32; $i++) {
        array_push($bits, $n % 2);
        $n = $n / 2;
    }
    
    // flip the bits
    $sum = 0;
    for($i = 0; $i < count($bits); $i++) {
        $bits[$i] = !$bits[$i];
        $sum += !$bits[$i] * pow(2, $i);
    }
    
    // change int[2] to int[10]
    $sum = 0;
    for($i = 0; $i <= count($bits); $i++) {
        $sum += $bits[$i] * pow(2, $i);
    }*/
    
    return $sum;
}