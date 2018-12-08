<?php

namespace AOC2018\Day02;

class HammingDistance
{
    public function getDistance(string $first, string $second) : int
    {
        $strSize = strlen($first);

        if ($strSize !== strlen($second)) {
            throw new \InvalidArgumentException('Both strings must be of the same length');
        }
        if ($first === $second) {
            return 0;
        }

        $distance = 0;

        for ($i = 0; $i < $strSize; $i++) {
            if ($first[$i] !== $second[$i]) {
                $distance++;
            }
        }

        return $distance;
    }
}
