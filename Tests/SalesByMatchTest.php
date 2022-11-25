<?php
use PHPUnit\Framework\TestCase;

final class SalesByMatchTest extends TestCase
{
    public function testCase01() {
        $expected = 3;
        $arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];
        $this->assertEquals($expected, sockMerchant(9, $arr));
    }
}