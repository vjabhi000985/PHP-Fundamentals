<?php 

# QUESTION 1: Write a program to check whether a person is eligible for voting or not.
$age = readline("Please provide your age? ");

if($age >= 18){
  echo "He can vote";
}else{
  echo "He can't vote";
}

# Question 2: Write a program to get the last digit of a number.
$number = 87181;

$last_digit = $number % 10;

echo "Last digit of $number is $last_digit.";


# Question 3: Check whether the person is senior citizen or not.
$my_age = readline("Please provide your age? ");

if($my_age >= 60){
  echo "He is a senior citizen.";
}else{
  echo "He is not a senior citizen.";
}


# Question 4: Design a calculator that converts hours to seconds.
$hours = 7;

$secs = $hours * 60 * 60;

echo "$hours hrs = $secs seconds.";


# Question 5: Write a program to find the quotient and remainder of the given two number.
$dividend = 250;

$divisor = 6;

$remainder = $dividend % $divisor;

$quotient = ($dividend - $remainder) / $divisor;

echo "Quotient  = $quotient\n";
echo "Remainder = $remainder";

# Question 6: Currency convertor : USD to INR and USD to CAD (Candian Dollar)
print("*****Currency Calculator (USD)******\n");

$money = readline("Enter your money:");
$money = (float)$money;

echo "USD to INR :".($money * 83.50)."\n";

echo "USD to CAD :".($money * 1.37);

?>