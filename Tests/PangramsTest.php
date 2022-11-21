<?php
use PHPUnit\Framework\TestCase;

final class PangramsTest extends TestCase
{
    public function testCase01() {
        $expected = 'not pangram';
        $string = 'We promptly judged antique ivory buckles for the prize';
        $this->assertEquals($expected, pangrams($string));
    }

    public function testCase02() {
        $expected = 'pangram';
        $string = 'We promptly judged antique ivory buckles for the next prize';
        $this->assertEquals($expected, pangrams($string));
    }
}