<?php
use PHPUnit\Framework\TestCase;

final class SubarrayDivision2Test extends TestCase
{
    public function testCase01() {
        $expected = 2;
        $arr = [1, 2, 1, 3, 2];
        $this->assertEquals($expected, birthday($arr, 3, 2));
    }

    public function testCase02() {
        $expected = 0;
        $arr = [1, 1, 1, 1, 1, 1];
        $this->assertEquals($expected, birthday($arr, 3, 2));
    }

    public function testCase03() {
        $expected = 1;
        $arr = [4];
        $this->assertEquals($expected, birthday($arr, 4, 1));
    }
}