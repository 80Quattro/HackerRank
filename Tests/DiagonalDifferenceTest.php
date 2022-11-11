<?php
use PHPUnit\Framework\TestCase;

final class DiagonalDifferenceTest extends TestCase
{
    public function testCase01() {
        $expected = 15;
        $ar = [
            [11, 2, 4],
            [4, 5, 6],
            [10, 8, -12]
        ];
        $result = diagonalDifference($ar);
        $this->assertEquals($expected, $result);
    }
}