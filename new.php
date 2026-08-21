<?php

$start = microtime(true);

$score = 0;

$ans = strtoupper(readline("What's your name? "));

sleep(2);

$ans = strtoupper(readline("What's your age? "));

sleep(3);

$ans = strtoupper(readline("What's your domain? "));

$end = microtime(true);

$exec_time = $end - $start ;

echo "Execution Time".$exec_time." seconds";


declare(strict_types=1);

function calculateSimpleInterestOne($p, $r, $t){
  return ($p * $r * $t) / 100; 
};
function calculateSimpleInterestTwo(int $p, float $r, int $t){
  return ($p * $r * $t) / 100; 
};

echo "Simple Interest:".calculateSimpleInterestOne("10000", 3.8, 3);

echo "Simple Interest:".calculateSimpleInterestTwo("10000", 3.8, 3);




