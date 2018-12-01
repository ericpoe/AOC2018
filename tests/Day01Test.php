<?php

namespace AOC2018\Tests;

use AOC2018\Day01\Analyzer;
use PHPUnit\Framework\TestCase;

class Day01Test extends TestCase
{
    /** @var Analyzer analyzer */
    private $analyzer;

    protected function setUp()
    {
        $this->analyzer = new Analyzer();
    }

    /**
     * @dataProvider aFrequencies
     */
    public function testCanGetFinalFrequency(array $frequencies, int $expected)
    {
        $this->analyzer->setFrequencies($frequencies);
        $sum = $this->analyzer->getSum();

        $this->assertEquals($expected, $sum);
    }

    public function aFrequencies()
    {
        return [
            [["+1", "-2", "+3", "+1"], 3],
            [["+1", "+1", "+1"], 3],
            [["+1", "+1", "-2"], 0],
            [["-1", "-2", "-3"], -6],
        ];
    }

    /**
     * @dataProvider bFrequencies
     */
    public function testCanGetFirstDuplicateFrequency(array $frequencies, int $expected)
    {
        $this->analyzer->setFrequencies($frequencies);
        $firstDuplicate = $this->analyzer->getFirstDuplicate();

        $this->assertEquals($expected, $firstDuplicate);
    }

    public function bFrequencies()
    {
        return [
            [["+1", "-2", "+3", "+1", "+1", "-2", "+2000"], 2],
            [["+1", "-1"], 0],
            [["+3", "+3", "+4", "-2", "-4"], 10],
            [["-6", "+3", "+8", "+5", "-6"], 5],
            [["+7", "+7", "-2", "-7", "-4"], 14],
        ];
    }
}
