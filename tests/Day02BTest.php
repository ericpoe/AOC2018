<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 12/2/18
 * Time: 11:56 PM
 */

namespace AOC2018\Tests;

use AOC2018\Day02\HammingDistance;
use PHPUnit\Framework\TestCase;

class Day02BTest extends TestCase
{
    /** @var HammingDistance */
    private $hammingDistance;

    public function setUp()
    {
        $this->hammingDistance = new HammingDistance();
    }

    /**
     * @dataProvider twoStrings
     */
    public function testCanGetHammingDistanceBetweenTwoStrings(array $strings, int $distance) : void
    {
        $this->assertEquals($distance, $this->hammingDistance->getDistance($strings[0], $strings[1]));
    }

    public function twoStrings() : array
    {
        return [
            [['abc', 'abc'], 0],
            [['a', 'c'], 1],
            [['dog', 'dig'], 1],
            [['orange', 'purple'], 5]
        ];
    }
}
