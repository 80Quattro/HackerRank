<?php
use PHPUnit\Framework\TestCase;

final class GradingStudentsTest extends TestCase
{
    public function testCase01() {
        $expected = [75, 67, 40, 33];
        $result = gradingStudents([73, 67, 38, 33]);
        $this->assertEquals($expected, $result);
    }
}