<?php
use PHPUnit\Framework\TestCase;

final class MiniMaxSumTest extends TestCase
{
    public function testCase01() {
        $this->expectOutputString( "10 14" );
        miniMaxSum( [1, 2, 3, 4, 5] );
    }

    public function testCase02() {
        $this->expectOutputString( "299 9271" );
        miniMaxSum( [7, 69, 2, 221, 8974] );
    }

}