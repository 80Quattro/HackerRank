<?php

/*
    Original description: https://www.hackerrank.com/challenges/three-month-preparation-kit-mars-exploration/problem

    A space explorer's ship crashed on Mars! They send a series of SOS messages to Earth for help.
    Letters in some of the SOS messages are altered by cosmic radiation during transmission. 
    Given the signal received by Earth as a string, s, determine how many letters of the SOS message 
    have been changed by radiation.
    
    Example
        s = 'SOSTOT'
    The original message was SOSSOS. Two of the message's characters were changed in transit. 
*/

/*
 * Complete the 'marsExploration' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function marsExploration($s) {
    $changed = 0;
    $previousLetter = 'S';
    $expectedLetter = 'S';
    $letters = str_split($s);
    foreach ($letters as $letter) {
        if($expectedLetter !== $letter) {
            $changed++;
            $letter = $expectedLetter;
        }
        if($letter === 'O') {
            $expectedLetter = 'S';
        }
        else if($letter === 'S' && $previousLetter === 'O') {
            $expectedLetter = 'S';
        }
        else if($letter === 'S' && $previousLetter === 'S') {
            $expectedLetter = 'O';
        }
        $previousLetter = $letter;
    }
    return $changed;
}
