<?php
declare(strict_types=1);

namespace AOC2018\Day03;


class PatternAnalyzer
{
    /** @var Claim[] */
    private $claims;

    /** @var PatternCoordinate[] */
    private $patternCoordinates;

    /** @var PatternCoordinate[] */
    private $overlapCoordinates;

    public function __construct()
    {
        $this->claims = [];
        $this->patternCoordinates = [];
        $this->overlapCoordinates = [];
    }

    public function addClaim(Claim $claim): void
    {
        $this->claims[] = $claim;
        $this->addPatternFromClaim($claim);
    }

    public function getOverlap(): int
    {
        return count($this->overlapCoordinates);
    }

    private function addPatternFromClaim(Claim $claim): void
    {
        $leftMost = $claim->getLeftEdge() + $claim->getWLength();
        $bottomMost = $claim->getTopEdge()+ $claim->getHLength();
        for ($x = $claim->getLeftEdge(); $x < $leftMost; $x++ ) {
            for ($y = $claim->getTopEdge(); $y < $bottomMost; $y++) {
                $coord = new PatternCoordinate($x, $y);
                $this->checkForOverlap($coord);
                $this->patternCoordinates[] = $coord;
            }
        }
    }

    private function checkForOverlap(PatternCoordinate $coord): void
    {
        if (in_array($coord, $this->patternCoordinates)) {
            if (in_array($coord, $this->overlapCoordinates)) {
                return;
            }

            $this->overlapCoordinates[] = $coord;
        }
    }
}
