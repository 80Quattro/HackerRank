<?php

/*
    Given an array of integers, where all elements but one occur twice, find the unique element.

    Example
        a = [1, 2, 3, 4, 3, 2, 1]
        The unique element is 4.
    Function Description
        Complete the lonelyinteger function in the editor below.
        lonelyinteger has the following parameter(s):
        int a[n]: an array of integers
    Returns
        int: the element that occurs only once
*/

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyInteger($a) {
    $unique = null;
    
    if(count($a) == 1) {
        $unique = $a[0];
    }
    
    sort($a);
    
    for($i = 1; $i < count($a); $i += 2) {
        if($a[$i - 1] != $a[$i]) {
            $unique = $a[$i - 1];
            break;
        }
    }
    
    if($unique == null) {
        $unique = end($a);
    }
    
    return $unique;
}