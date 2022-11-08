<?php
use PHPUnit\Framework\TestCase;

final class SparseArraysTest extends TestCase
{
    public function testCase01() {
        $expected = [2, 1, 0];
        $result = breakingRecords(["aba", "baba", "aba", "xzxb"], ["aba", "xzxb", "ab"]);
        $this->assertEquals($expected, $result);
    }

    public function testCase02() {
        $expected = [1, 0, 1];
        $result = breakingRecords(["def", "de", "fgh"], ["de", "lmn", "fgh"]);
        $this->assertEquals($expected, $result);
    }

    public function testCase03() {
        $expected = [1, 3, 4, 3, 2];
        $result = breakingRecords(
            ["abcde", "sdaklfj", "asdjf", "na", "basdn", "sdaklfj", "asdjf", "na", "asdjf", "na", "basdn", "sdaklfj", "asdjf"], 
            ["abcde", "sdaklfj", "asdjf", "na", "basdn"]
        );
        $this->assertEquals($expected, $result);
    }
}