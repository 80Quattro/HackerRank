<?php
use PHPUnit\Framework\TestCase;

final class CountingValleysTest extends TestCase
{
    public function testCase01() {
        $expected = 1;
        $result = countingValleys(8, 'UDDDUDUU');
        $this->assertEquals($expected, $result);
    }
}