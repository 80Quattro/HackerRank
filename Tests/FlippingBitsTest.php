<?php
use PHPUnit\Framework\TestCase;

final class FlippingBitsTest extends TestCase
{
    public function testCase01() {
        $this->assertEquals(2147483648, flippingBits(2147483647));
        $this->assertEquals(4294967294, flippingBits(1));
        $this->assertEquals(4294967295, flippingBits(0));
        $this->assertEquals(4294967291, flippingBits(4));
        $this->assertEquals(4294843839, flippingBits(123456));
        $this->assertEquals(3492223820, flippingBits(802743475));
        $this->assertEquals(4259365872, flippingBits(35601423));
    }
}