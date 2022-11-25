<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-sock-merchant/problem

    There is a large pile of socks that must be paired by color. Given an array of integers representing 
    the color of each sock, determine how many pairs of socks with matching colors there are.
*/

/*
 * Complete the 'sockMerchant' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY ar
 */

function sockMerchant($n, $ar) {
    // if amount of socks is 0 or 1 there are no pairs
    if($n <= 1) {
        return 0;
    }
    $pairs = 0;
    sort($ar);
    for($i = 1; $i < count($ar); $i++) {
        if($ar[$i] === $ar[$i - 1]) {
            $pairs++;
            $i++;
        }
    }
    return $pairs;
}