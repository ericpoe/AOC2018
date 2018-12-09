<?php

namespace AOC2018\Day01;

class Analyzer
{
    /** @var array */
    private $frequencies;

    public function __construct(?string $fileName = '')
    {
        $this->frequencies = [];

        if ($fileName !== '') {
            $this->frequencies = file($fileName);
        }
    }

    public function setFrequencies(array $input) : void
    {
        $this->frequencies = $input;
    }

    public function getSum() : int
    {
        return array_reduce($this->frequencies, function ($total, $num) {
            return $total + (int) $num;
        }, 0);
    }

    public function getFirstDuplicate() : int
    {
        $running = [0];
        $duplicates = [];
        $runningTotal = 0;
        $loops = 1;
        $lengthOfNums = count($this->frequencies);

        $infinite = new \InfiniteIterator(new \ArrayIterator($this->frequencies));

        while (empty($duplicates)) {
//            echo "On loop: $loops" . PHP_EOL;
            foreach (new \LimitIterator($infinite, 0, $lengthOfNums) as $value) {
                $runningTotal += (int)$value;
                if (in_array($runningTotal, $running, true)) {
                    $duplicates[] = $runningTotal;
                }

                $running[] = $runningTotal;
            }
            $loops ++;
        }

        return $duplicates[0];
    }
}
