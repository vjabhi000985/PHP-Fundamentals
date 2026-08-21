<?php

$first_num = (float)readline("Enter the first number: ");
$second_num = (float)readline("Enter the second number: ");

$choice = (int)readline("Enter your choice: 
  1. Add 
  2. Subtract
  3. Multiply
  4. Divide
  5. Exit\n
");

$result = match($choice){
  1 => $first_num + $second_num,
  2 => $first_num - $second_num,
  3 => $first_num * $second_num,
  4 => $first_num + $second_num,
  default => exit
};

echo "The result is: ".$result.".";




