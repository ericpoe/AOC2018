<?php
namespace AOC2018\Tests;

use AOC2018\Day02\Analyzer;
use PHPUnit\Framework\TestCase;

class Day02ATest extends TestCase
{
    private $analyzer;

    public function setUp()
    {
        $this->analyzer = new Analyzer();
    }

    /**
     * @dataProvider aBoxIds
     */
    public function testCanGetTwosAndThrees(string $id, array $expectedTwos, array $expectedThrees) : void
    {
        $this->analyzer->setBoxId($id);
        $twos = $this->analyzer->getRepeatedByCount(2);
        $threes = $this->analyzer->getRepeatedByCount(3);

        $this->assertEquals($expectedTwos, $twos);
        $this->assertEquals($expectedThrees, $threes);
    }

    public function aBoxIds() : array
    {
        return [
            'None' => ['abcdef', [], [],],
            'Both' => ['bababc', ['a'], ['b'] ],
            '2b, but no 3s' => ['abbcde', ['b'], []],
            'No 2, 3c' => ['abcccd', [], ['c']],
            '2 a, d; no 3s -- counts once' => ['aabcdd', ['a', 'd'], []],
            '2e, no 3s' => ['abcdee', ['e'], []],
            'no 2s, 3a, b -- counts once' => ['ababab', [],['a', 'b']],
        ];
    }

    /**
     * @dataProvider aBoxIdsChecksum
     */
    public function testCanGetChecksum(array $ids, int $twos, int $threes)
    {
        $twoCount = 0;
        $threeCount = 0;

        foreach ($ids as $id) {
            $this->analyzer->setBoxId($id);
            $two = $this->analyzer->getRepeatedByCount(2);
            $three = $this->analyzer->getRepeatedByCount(3);

            if (!empty($two)) {
                $twoCount++;
            }

            if (!empty($three)) {
                $threeCount++;
            }
        }

        $checkSum = $twoCount * $threeCount;

        $this->assertEquals($twos * $threes, $checkSum);
    }

    public function aBoxIdsChecksum()
    {
        return [
            'Should be twelve' => [
                [
                    'abcdef',
                    'bababc',
                    'abbcde',
                    'abcccd',
                    'aabcdd',
                    'abcdee',
                    'ababab'
                ], 4, 3
            ],
        ];
    }
}
