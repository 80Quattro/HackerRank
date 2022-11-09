<?php
use PHPUnit\Framework\TestCase;

final class LonelyIntegerTest extends TestCase
{
    public function testCase01() {
        $expected = 1;
        $result = breakingRecords([1]);
        $this->assertEquals($expected, $result);
    }

    public function testCase02() {
        $expected = 2;
        $result = breakingRecords([1, 1, 2]);
        $this->assertEquals($expected, $result);
    }

    public function testCase03() {
        $expected = 2;
        $result = breakingRecords([0, 0, 1, 2, 1]);
        $this->assertEquals($expected, $result);
    }
}