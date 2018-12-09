<?php
declare(strict_types=1);

namespace AOC2018\Day03;


class Claim
{
    /** @var string */
    private $id;

    /** @var string */
    private $leftEdge;

    /** @var string */
    private $topEdge;

    /** @var string */
    private $hLength;

    /** @var string */
    private $wLength;

    public function __construct(string $claim)
    {
        [$rawId, , $leftEdge, $rawTopEdge, $rawDimensions] = preg_split("/[\s,]+/", $claim, -1, PREG_SPLIT_NO_EMPTY);
        $this->id = substr($rawId, 1);
        $this->leftEdge = $leftEdge;
        $this->topEdge = substr($rawTopEdge, 0, -1);
        [$this->wLength, $this->hLength] = preg_split("/[x]/", $rawDimensions);

    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getLeftEdge(): int
    {
        return (int) $this->leftEdge;
    }

    public function getTopEdge(): int
    {
        return (int) $this->topEdge;
    }

    public function getHLength(): int
    {
        return (int) $this->hLength;
    }

    public function getWLength(): int
    {
        return (int) $this->wLength;
    }
}
