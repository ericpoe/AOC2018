<?php

use AOC2018\Day03\Claim;
use AOC2018\Day03\PatternAnalyzer;

require __DIR__ . '/../../vendor/autoload.php';

$analyzer = new PatternAnalyzer();

$claims = file(__DIR__ . '/input.txt');

foreach ($claims as $claim) {
    $analyzer->addClaim(new Claim($claim));
}

printf("\nOverlap: %d", $analyzer->getOverlap());
