<?php
use PHPUnit\Framework\TestCase;

final class DivisibleSumPairsTest extends TestCase
{
    public function testCase01() {
        $expected = 5;
        $result = divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2]);
        $this->assertEquals($expected, $result);
    }
}