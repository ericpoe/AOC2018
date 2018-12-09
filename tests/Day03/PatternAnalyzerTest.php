<?php

namespace AOC2018\Tests\Day03;

use AOC2018\Day03\Claim;
use AOC2018\Day03\PatternAnalyzer;
use PHPUnit\Framework\TestCase;

class PatternAnalyzerTest extends TestCase
{
    /** @var PatternAnalyzer */
    private $analyzer;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->analyzer = new PatternAnalyzer();
    }

    /**
     * @dataProvider oneClaim
     */
    public function testOneClaimHasNoOverlap($pattern)
    {
        $claim = new Claim($pattern);
        $this->analyzer->addClaim($claim);
        $this->assertEquals(0, $this->analyzer->getOverlap());
    }

    public function testMultipleClaims()
    {
        $claims = [
            new Claim('#1 @ 1,3: 4x4'),
            new Claim('#2 @ 3,1: 4x4'),
            new Claim('#3 @ 5,5: 2x2'),
        ];

        foreach($claims as $claim) {
            $this->analyzer->addClaim($claim);
        }

        $this->assertEquals(4, $this->analyzer->getOverlap());
    }

    public function oneClaim()
    {
        return [
            ['#1 @ 1,3: 4x4'],
            ['#2 @ 3,1: 4x4'],
            ['#3 @ 5,5: 2x2'],
        ];
    }
}
