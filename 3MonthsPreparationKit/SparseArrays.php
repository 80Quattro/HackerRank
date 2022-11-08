<?php

/*
    Full description on: https://www.hackerrank.com/challenges/three-month-preparation-kit-sparse-arrays/problem
    
    There is a collection of input strings and a collection of query strings. For each query string, 
    determine how many times it occurs in the list of input strings. Return an array of the results.
    
    Example
        strings = ['ab','ab','abc']
        queries = ['ab','abc','bc']
        There are 2 instances of 'ab', 1 of 'abc' and 0 of 'bc'. 
        For each query, add an element to the return array, results = [2, 1, 0]
    Function Description
        Complete the function matchingStrings in the editor below. The function must return an array of integers representing the frequency of occurrence of each query string in strings.
        matchingStrings has the following parameters:
        • string strings[n] - an array of strings to search
        • string queries[q] - an array of query strings
    Returns
        • int[q]: an array of results for each query

*/

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

function matchingStrings($strings, $queries) {
    $occurs = array();
    
    foreach($queries as $q) {
        array_push($occurs, 0);
        foreach($strings as $s) {
            if($q == $s) {
                $occurs[array_key_last($occurs)]++;
            }
        }
    }
    
    return $occurs;

}