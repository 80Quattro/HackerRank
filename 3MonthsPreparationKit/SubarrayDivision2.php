<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-the-birthday-bar/problem
    
    Two children, Lily and Ron, want to share a chocolate bar. Each of the squares has an integer on it.
    Lily decides to share a contiguous segment of the bar selected such that:
    The length of the segment matches Ron's birth month, and,
    The sum of the integers on the squares is equal to his birth day.
    Determine how many ways she can divide the chocolate.

    Example
        s = [2,2,1,3,2]
        d = 4
        m = 2
        Lily wants to find segments summing to Ron's birth day, d = 4 with a length equalling his birth month, m = 2. 
        In this case, there are two segments meeting her criteria: [2,2] and [1,3].
*/

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {
    $combinations = 0;
    for($i = 0; $i < (count($s) - $m + 1); $i++) {
        $sum = 0;
        for($j = $i; $j < $i + $m; $j++) {
            $sum += $s[$j];
            // if last value is already added to the sum 
            // and sum is equal to the $d (day value)
            if($j === ($m + $i - 1) && $sum === $d) {
                $combinations++;
            }
        }
    }
    return $combinations;
}