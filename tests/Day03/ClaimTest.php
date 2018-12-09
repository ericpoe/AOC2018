<?php

namespace AOC2018\Tests\Day03;

use AOC2018\Day03\Claim;
use PHPUnit\Framework\TestCase;

class ClaimTest extends TestCase
{
    /** @var Claim */
    protected $claim;

    public function testCanParseClaim()
    {
        $claim = new Claim('#123 @ 3,2: 5x4');

        $this->assertEquals(123, $claim->getId());
        $this->assertEquals(3, $claim->getLeftEdge());
        $this->assertEquals(2, $claim->getTopEdge());
        $this->assertEquals(5, $claim->getWLength());
        $this->assertEquals(4, $claim->getLengthH());
    }

    public function getClaimIds()
    {
        return [
            ['#1 @ 1,3: 4x4', 1],
            ['#2 @ 3,1: 4x4', 2],
            ['#3 @ 5,5: 2x2', 3],
        ];
    }
}
