<?php

/*
    Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. 
    Print the decimal value of each fraction on a new line with 6 places after the decimal.
*/

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $p = 0;
    $z = 0;
    $n = 0;
    
    foreach($arr as $e) {
        if($e > 0) {
            $p++;
        }
        elseif($e < 0) {
            $n++;
        }
        else {
            $z++;
        }
    }
    
    $i = count($arr);
    
    print( round($p / $i, 6) . "\n" );
    print( round($n / $i, 6) . "\n" );
    print( round($z / $i, 6) );

}