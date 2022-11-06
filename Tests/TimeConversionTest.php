<?php
use PHPUnit\Framework\TestCase;

final class TimeConversionTest extends TestCase
{
    public function testCase01() {
        $expected = "19:05:45";
        $result = timeConversion("07:05:45PM");
        $this->assertEquals($expected, $result);
    }
}