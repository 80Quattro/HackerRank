<?php

/*
    Original description: https://www.hackerrank.com/challenges/three-month-preparation-kit-divisible-sum-pairs/problem

    Given an array of integers and a positive integer k, determine the number of (i, j) pairs 
    where i < j and ar[i] + ar[j] is divisible by k.

    Example
        ar = [1, 2, 3, 4, 5, 6]
        k = 5
        Three pairs meet the criteria: [1,4], [2,3] and [4,6]

    Function Description
        Complete the divisibleSumPairs function in the editor below.
        divisibleSumPairs has the following parameter(s):
            int n: the length of array 
            int ar[n]: an array of integers
            int k: the integer divisor

    Returns
    - int: the number of pairs

    Input Format
        The first line contains 2 space-separated integers, n and k.
        The second line contains n space-separated integers, each a value of ar[i].
        
    Sample Input
        STDIN           Function
        -----           --------
        6 3             n = 6, k = 3
        1 3 2 6 1 2     ar = [1, 3, 2, 6, 1, 2]

    Sample Output
        5

    Explanation
        Here are the 5 valid pairs when k=3: 
            (0,2) -> ar[0] + ar[2] = 1 + 2 = 3
            (0,5) -> ar[0] + ar[5] = 1 + 2 = 3
            (1,3) -> ar[1] + ar[3] = 3 + 6 = 9
            (2,4) -> ar[2] + ar[4] = 2 + 1 = 3
            (4,5) -> ar[4] + ar[5] = 1 + 2 = 3
*/

/*
 * Complete the 'divisibleSumPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER_ARRAY ar
 */

function divisibleSumPairs($n, $k, $ar) {
    sort($ar);
    $pairs = 0;
    for($i = 0; $i < $n; $i++) {
        for($j = $i + 1; $j < $n; $j++) {
            if(($ar[$i] + $ar[$j]) % $k == 0) {
                $pairs++;
            }
        }
    }
    return $pairs;
}