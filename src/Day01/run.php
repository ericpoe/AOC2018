<?php

require __DIR__ . '/../../vendor/autoload.php';

$analyzer = new \AOC2018\Day01\Analyzer(__DIR__ . '/input.txt');
printf("Day 01A Answer: %s\n", $analyzer->getSum());

$analyzer = new \AOC2018\Day01\Analyzer(__DIR__ . '/input.txt');

printf("Day 01B Answer: %s\n", $analyzer->getFirstDuplicate());
