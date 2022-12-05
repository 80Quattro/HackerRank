<?php
use PHPUnit\Framework\TestCase;

final class MigratoryBirdsTest extends TestCase
{
    public function testCase01() {
        $expected = 4;
        $arr = [1, 4, 4, 5, 3];
        $this->assertEquals($expected, migratoryBirds($arr));
    }
    
    public function testCase02() {
        $expected = 3;
        $arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
        $this->assertEquals($expected, migratoryBirds($arr));
    }
}