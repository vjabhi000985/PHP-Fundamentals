<?php

/* we use `$` symbol before the variable 
  name to identify the variable in php.
*/

// String
$name = "Abhi";

// Integer
$salary = 1000000;

// Temperature
$temperature = 35.67;

// Indexed Array
$basket = ['Apple', 'Banana', 'Orange'];

// Associative Array (Custom Indexes) or (Like Python Dictionary)
$dictionary = [
  'veg' => "Sahi Paneer",
  'non-veg' => "Tandori Chicken",
  'starter' => "Fruit Salad",
  'dessert' => "Gulab Jamun with Ice-cream"
];

// Boolean
$is_raining = true;
$is_cold = false;

// NULL -> represents no value / no assigned value 
$empty = null;

// Declaring Constants
// 1. Using define method(Function)
// We can use (define) it inside a conditional statement.
// creates a constant at runtime.
define("PI", 3.14);

// 2. Using const keyword.
// Use `const` when you know the constant at declaration time. 
const interest = 3.14;

// PHP, prefers camelCase variable naming convention.