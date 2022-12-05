<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-migratory-birds/problem

    Given an array of bird sightings where every element represents a bird type id, 
    determine the id of the most frequently sighted type. If more than 1 type has been spotted 
    that maximum amount, return the smallest of their ids.
    Example
        arr = [1,1,2,2,3]
        There are two each of types 1 and 2, and one sighting of type 3. Pick the lower of the two types seen twice: type 1.
*/

/*
 * Complete the 'migratoryBirds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function migratoryBirds($arr) {
    // frequency of sighted birds. Bird with id = 1 is stored at index 0 etc.
    $frequency = [0, 0, 0, 0, 0];
    foreach ($arr as $a) {
        $frequency[$a - 1]++;
    }
    return array_search(max($frequency), $frequency) + 1;
}