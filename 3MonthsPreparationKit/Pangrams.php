<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-pangrams/problem

    A pangram is a string that contains every letter of the alphabet. Given a sentence determine whether it 
    is a pangram in the English alphabet. Ignore case. Return either pangram or not pangram as appropriate.
*/

/*
 * Complete the 'pangrams' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function pangrams($s) {
    // all letters from english alphbet
    $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    
    $s = strtoupper($s);
    $letters = str_split($s);
    foreach($letters as $letter) {
        $index = array_search($letter, $alphabet);
        // if letter is found in alphabet array - delete it 
        if($index !== false) {
            array_splice($alphabet, $index, 1);
        }
        if(count($alphabet) == 0) {
            return 'pangram';
        }
    }
    return 'not pangram';
}
