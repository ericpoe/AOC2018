<?php
declare(strict_types=1);

namespace AOC2018\Day03;

class PatternCoordinate
{
    /** @var int */
    private $xCoord;

    /** @var int */
    private $yCoord;

    public function __construct(int $x, int $y)
    {
        $this->xCoord = $x;
        $this->yCoord = $y;
    }

    public function getCoordinates(): string
    {
        return sprintf('%d, %d', $this->xCoord, $this->yCoord);
    }

    public function getX(): int
    {
        return $this->xCoord;
    }

    public function getY(): int
    {
        return $this->yCoord;
    }
}
