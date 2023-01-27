<?php

/*
    Full description: https://www.hackerrank.com/challenges/three-month-preparation-kit-maximum-perimeter-triangle/problem

    Given an array of stick lengths, use 3 of them to construct a non-degenerate triangle with the maximum possible perimeter. 
    Return an array of the lengths of its sides as 3 integers in non-decreasing order.

    If there are several valid triangles having the maximum perimeter:
        1. Choose the one with the longest maximum side.
        2. If more than one has that maximum, choose from them the one with the longest minimum side.
        3. If more than one has that maximum as well, print any one them.

    If no non-degenerate triangle exists, return [-1].

    Example
        sticks = [1, 2, 3, 4, 5, 10]
        The triplet (1, 2, 3) will not form a triangle. Neither will (4, 5, 10) or (2, 3, 5), so the problem is 
        reduced to (2, 3, 4) and (3, 4, 5). The longer perimeter is 3+4+5=12.
*/

/*
 * Complete the 'maximumPerimeterTriangle' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY sticks as parameter.
 */

function maximumPerimeterTriangle($sticks) {
    rsort($sticks);
    for($i = 0; $i < count($sticks) - 2; $i++) {
        if($sticks[$i + 1] + $sticks[$i + 2] > $sticks[$i]) {
            return([
                $sticks[$i + 2],
                $sticks[$i + 1],
                $sticks[$i]
            ]);
        }
    }
    return [-1];
}