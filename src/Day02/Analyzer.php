<?php

namespace AOC2018\Day02;

class Analyzer
{
    /** @var array */
    private $char_count;

    public function __construct()
    {
        $this->char_count = [];
    }

    public function setBoxId($id) : void
    {
        $this->char_count = count_chars($id, 1);
    }

    public function getRepeatedByCount(int $count) : array
    {
        $duplicates = [];
        foreach ($this->char_count as $key => $value) {
            if ($value === $count) {
                $duplicates[] = chr($key);
            }
        }

        return $duplicates;
    }
}