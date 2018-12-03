<?php
require __DIR__ . '/../../vendor/autoload.php';

$analyzer = new AOC2018\Day02\Analyzer();
$ids = file(__DIR__ . '/input.txt');

$twoCount = 0;
$threeCount = 0;

foreach ($ids as $id) {
    $analyzer->setBoxId($id);
    $two = $analyzer->getRepeatedByCount(2);
    $three = $analyzer->getRepeatedByCount(3);

    if (!empty($two)) {
        $twoCount++;
    }

    if (!empty($three)) {
        $threeCount++;
    }
}

$checkSum = $twoCount * $threeCount;

printf("Checksum: %s\n", $checkSum);