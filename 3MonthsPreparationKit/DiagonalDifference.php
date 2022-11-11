<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-diagonal-difference/problem

    Given a square matrix, calculate the absolute difference between the sums of its diagonals.
    For example, the square matrix is shown below:
        1 2 3
        4 5 6
        9 8 9
    The left-to-right diagonal = 1 + 5 + 9 = 15. 
    The right to left diagonal = 3 + 5 + 9 = 17. Their absolute difference is |15 - 17| = 2.

    Function description
        Complete the diagonalDifference function in the editor below.
    
    diagonalDifference takes the following parameter:
        int arr[n][m]: an array of integers
    Return
        int: the absolute diagonal difference

*/

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $len = count($arr);
    $diag1 = 0;
    $diag2 = 0;
    for($i = 0; $i < $len; $i++) {
        $diag1 += $arr[$i][$i];
        $diag2 += $arr[$i][$len - $i - 1];
    }
    return abs($diag1 - $diag2);
}