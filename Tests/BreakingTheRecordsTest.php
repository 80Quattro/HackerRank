<?php
use PHPUnit\Framework\TestCase;

final class BreakingTheRecordsTest extends TestCase
{
    public function testCase01() {
        $expected = [2, 4];
        $result = breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1]);
        $this->assertEquals($expected, $result);
    }

    public function testCase02() {
        $expected = [4, 0];
        $result = breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42]);
        $this->assertEquals($expected, $result);
    }
}