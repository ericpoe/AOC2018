<?php

namespace AOC2018\Tests\Day03;

use AOC2018\Day03\PatternCoordinate;
use PHPUnit\Framework\TestCase;

class PatternCoordinateTest extends TestCase
{
    /**
     * @dataProvider getCoords
     */
    public function testCanCreateCoordinate(PatternCoordinate $coord, string $expected)
    {

           $this->assertEquals($expected, $coord->getCoordinates());
    }

    /**
     * @dataProvider getXCoord
     */
    public function testCanGetXCoordinate(PatternCoordinate $coord, int $x)
    {
        $this->assertEquals($x, $coord->getX());
    }

    /**
     * @dataProvider getYCoord
     */
    public function testCanGetYCoordinate(PatternCoordinate $coord, int $y)
    {
        $this->assertEquals($y, $coord->getY());
    }

    public function getCoords()
    {
        return [
            [new PatternCoordinate(1, 1), '1, 1'],
            [new PatternCoordinate(2, 0), '2, 0'],
            [new PatternCoordinate(-1, -5), '-1, -5'],
        ];
    }

    public function getXCoord()
    {
        return [
            [new PatternCoordinate(1, 1), 1],
            [new PatternCoordinate(2, 0), 2],
            [new PatternCoordinate(-1, -5), -1],
        ];
    }

    public function getYCoord()
    {
        return [
            [new PatternCoordinate(1, 1), 1],
            [new PatternCoordinate(2, 0), 0],
            [new PatternCoordinate(-1, -5), -5],
        ];
    }
}

