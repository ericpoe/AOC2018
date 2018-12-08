<?php
require __DIR__ . '/../../vendor/autoload.php';

$ids = file(__DIR__ . '/input.txt');
$hamming = new \AOC2018\Day02\HammingDistance();

$correct = [];

foreach ($ids as $id1) {
    foreach ($ids as $id2) {
        if ($hamming->getDistance($id1, $id2) === 1) {
            $correct = [$id1, $id2];
        }
    }
    unset($id1); // no need to scan over this one again!
}

var_dump($correct);
