<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-counting-valleys/problem
    
    An avid hiker keeps meticulous records of their hikes. During the last hike that took exactly `steps` steps, 
    for every step it was noted if it was an uphill, U, or a downhill, D step. Hikes always start and end at sea level, 
    and each step up or down represents a 1 unit change in altitude. We define the following terms:
        A mountain is a sequence of consecutive steps above sea level, 
            starting with a step up from sea level and ending with a step down to sea level.
        A valley is a sequence of consecutive steps below sea level, 
            starting with a step down from sea level and ending with a step up to sea level.

    Given the sequence of up and down steps during a hike, find and print the number of valleys walked through. 
*/

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path) {
    $currentLevel = 0;
    $valleysNo = 0;
    
    // convert string to char array
    $steps = str_split($path);
    
    foreach ($steps as $step) {
        if($currentLevel == 0 && $step == 'D') {
            $valleysNo++;
        }
        if($step == 'D') {
            $currentLevel--;
        }
        else {
            $currentLevel++;
        }
    }
    
    return $valleysNo;
}