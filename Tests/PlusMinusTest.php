<?php
use PHPUnit\Framework\TestCase;

final class PlusMinusTest extends TestCase
{
    public function testCase01() {
        $this->expectOutputString( "0.375\n0.375\n0.25" );
        plusMinus([1, 2, 3, -1, -2, -3, 0, 0]);
    }

    public function testCase02() {
        $this->expectOutputString( "0.5\n0.333333\n0.166667" );
        plusMinus( [-4, 3, -9, 0, 4, 1] );
    }

}