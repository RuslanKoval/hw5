<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 07.11.15
 * Time: 12:48
 */

namespace Test;

use Layer\Calculate;

class CalculateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider addRectangle
     */
    public function testRectangle($ex, $a, $b)
    {
        $calc = new Calculate;
        $this->assertEquals($ex, $calc->rectangle($a, $b));
        $this->assertTrue(true);
    }

    public function addRectangle()
    {
        return [
            [9, 3, 3],
            [4, 2, 2],
            [8, 2, 4],
            [25, 5, 5],
            [30, 15, 2],
            [6, 6, 1],
            [14, 2, 7],
        ];
    }

    /**
     * @dataProvider addTrapezoid
     */
    public function testTrapezoid($ex, $a, $b, $h)
    {
        $calc = new Calculate;
        $this->assertEquals($ex, $calc->trapezoid($a, $b, $h));
        $this->assertTrue(true);
    }

    public function addTrapezoid()
    {
        return [
            [16, 3, 5, 4],
            [12, 2, 2, 6],
            [18, 2, 4, 6],
        ];
    }

    /**
     * @dataProvider addRound
     */
    public function testRound($ex, $r)
    {
        $calc = new Calculate;
        $this->assertEquals($ex, $calc->round($r));
        $this->assertTrue(true);
    }

    public function addRound()
    {
        return [
            [200.96, 8],
            [12.56, 2],
            [78.5, 5],
        ];
    }

    public function testUsingMock()
    {
        $mock = $this->getMock('Layer\Calculate');
        $mock->expects($this->once())
            ->method('scripRow')
            ->will($this->returnValue(4));
        $this->assertEquals($mock->scripRow(4), 4);
    }
}