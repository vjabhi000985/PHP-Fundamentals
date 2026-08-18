<?php 

/*
PHP_EOL means PHP End Of Line.

It is a PHP-defined constant that represents the correct new-line character(s) for the operating system where PHP is running or we can just use '\n'. 

*/
echo "Hello World".PHP_EOL;
// echo "Hello World"."\n";

// In php, dot(.) is used to concatenate two strings or string with a variable. 

$state = "Jharkhand";
$capital = "Ranchi";

$pincode = 834001;

// In PHP, Double quotes allow variable interpolation.
// Interpolation means putting the value of a variable directly inside a string instead of concatenating it separately.
echo "Capital of $state is $capital with a pin code $pincode".PHP_EOL;

// Whereas, Single quotes generally treat the contents literally.
echo 'Capital of $state is $capital with a pin code $pincode'.PHP_EOL;

// Therefore, we have to use concatenation operator (.)
echo 'Capital of '.$state.' is '.$capital.' with a pin code '.$pincode;
