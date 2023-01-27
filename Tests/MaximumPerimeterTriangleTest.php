<?php
use PHPUnit\Framework\TestCase;

final class MaximumPerimeterTriangleTest extends TestCase
{
    public function testCase01() {
        $expected = [1, 3, 3];
        $result = maximumPerimeterTriangle([1, 1, 1, 3, 3]);
        $this->assertEquals($expected, $result);
    }

    public function testCase02() {
        $expected = [-1];
        $result = maximumPerimeterTriangle([1, 2, 3]);
        $this->assertEquals($expected, $result);
    }
}