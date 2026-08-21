<?php

// echo "<h1>Hi</h1>";

// compound interest
$p = 12000;
$r = 5;
$t = 3;

// simplifying the rate in rate/100 form. 
$r = $r/100;

// echo $r;

// Improved formula to check the compound interest. 
$ci = $p * (pow((1+$r), $t) - 1);

echo pow((1+$r), $t).PHP_EOL;

$i = (pow((1+$r), $t) - 1);

echo "I : $i".PHP_EOL;

echo "Compound Interest: ₹$ci".PHP_EOL; 

echo ($p * $i);