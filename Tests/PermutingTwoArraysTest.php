<?php
use PHPUnit\Framework\TestCase;

final class PermutingTwoArraysTest extends TestCase
{
    public function testCase01() {
        $expected = 'YES';
        $arr1 = [2, 1, 3];
        $arr2 = [7, 8, 9];
        $this->assertEquals($expected, twoArrays(10, $arr1, $arr2));
    }

    public function testCase02() {
        $expected = 'NO';
        $arr1 = [1, 2, 2, 1];
        $arr2 = [3, 3, 3, 4];
        $this->assertEquals($expected, twoArrays(6, $arr1, $arr2));
    }

    public function testCase03() {
        $expected = 'NO';
        $arr1 = [7, 6, 8, 4, 2];
        $arr2 = [5, 2, 6, 3, 1];
        $this->assertEquals($expected, twoArrays(10, $arr1, $arr2));
    }
}