<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testAddition()
    {
        $expected = 4;
        $actual = 2 + 2;
        $this->assertEquals($expected, $actual, "2 + 2 should equal 4");
    }

    public function testSubtraction()
    {
        $expected = 2;
        $actual = 5 - 3;
        $this->assertEquals($expected, $actual, "5 - 3 should equal 2");
    }

    public function testMultiplication()
    {
        $expected = 9;
        $actual = 3 * 3;
        $this->assertEquals($expected, $actual, "3 * 3 should equal 9");
    }

    public function testDivision()
    {
        $expected = 2;
        $actual = 10 / 5;
        $this->assertEquals($expected, $actual, "10 / 5 should equal 2");
    }
}
