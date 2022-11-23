<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-two-arrays/problem

    There are two n-element arrays of integers, A and B. Permute them into some A' and B' such that the relation 
    A'[i] + B'[i] >= k holds for all i where 0 <= i < n.
    There will be q queries consisting of A, B, and k. For each query, return YES if some permutation A', B' satisfying 
    the relation exists. Otherwise, return NO. 
    Example
        A = [0, 1]
        B = [0, 2]
        k = 1
        A valid A', B' is A'=[1,0] and B'=[0,2]:1+0>=1 and 0+2>=1. Return YES.
    Function Description
        Complete the twoArrays function in the editor below. It should return a string, either YES or NO.
        twoArrays has the following parameter(s):
            int k: an integer
            int A[n]: an array of integers
            int B[n]: an array of integers
    Returns
        - string: either YES or NO 
*/

/*
 * Complete the 'twoArrays' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY A
 *  3. INTEGER_ARRAY B
 */

function twoArrays($k, $A, $B) {
    sort($A);
    rsort($B);
    for($i = 0; $i < count($A); $i++) {
        if($A[$i] + $B[$i] < $k) {
            return "NO";
        }
    }
    return "YES";
}