<?php
use PHPUnit\Framework\TestCase;

final class MarsExplorationTest extends TestCase
{
    public function testCase01() {
        $expected = 3;
        $string = 'SOSSPSSQSSOR';
        $this->assertEquals($expected, marsExploration($string));
    }

    public function testCase02() {
        $expected = 1;
        $string = 'SOSSOT';
        $this->assertEquals($expected, marsExploration($string));
    }

    public function testCase03() {
        $expected = 0;
        $string = 'SOSSOSSOS';
        $this->assertEquals($expected, marsExploration($string));
    }
}