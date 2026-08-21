<?php

// Quiz App
$score = 0;

print("--------------Welcome to our quiz app---------\n");
echo "----------------------------------------------\n";

$choice = readline("Do you want to play? ");

if(strtolower($choice) != 'yes'){
  echo "Gracias!";
  exit;
}

echo "\nLets play :)\n";
echo "----------------------------------------------\n";

// Question 1
echo "Q1. What does CPU stands for?\n";

$ans = readline("Answer: ");

if(strtolower($ans) == 'central processing unit')
{
  echo "Correct Answer\n";
  $score += 1;
}
else
{
  echo "Incorrect Answer\n";
}
echo "----------------------------------------------\n";

// Question 2
echo "Q2. What does GPU stands for?\n";

$ans = readline("Answer: ");


if(strtolower($ans) == 'graphics processing unit')
{
  echo "Correct Answer\n";
  $score += 1;
}
else
{
  echo "Incorrect Answer\n";
}
echo "----------------------------------------------\n";

// Question 3
echo "Q3. What does RAM stands for?\n";

$ans = readline("Answer: ");

if(strtolower($ans) == 'random access memory')
{
  echo "Correct Answer\n";
  $score += 1;
}
else
{
  echo "Incorrect Answer\n";
}
echo "----------------------------------------------\n";

// Question 4
echo "Q4. What does ROM stands for?\n";

$ans = readline("Answer: ");

if(strtolower($ans) == 'read only memory')
{
  echo "Correct Answer\n";
  $score += 1;
}
else
{
  echo "Incorrect Answer\n";
}
echo "----------------------------------------------\n";

// Question 5
echo "Q5. What does PSU stands for?\n";

$ans = readline("Answer: ");

if(strtolower($ans) == 'power supply unit')
{
  echo "Correct Answer\n";
  $score += 1;
}
else
  {
  echo "Incorrect Answer\n";
}

echo "----------------------------------------------\n";

echo "You scored: $score. You answered ".($score / 5 * 100)." % correctly!\n";
echo "----------------------------------------------\n";

?>