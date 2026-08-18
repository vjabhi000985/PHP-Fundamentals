<?php 

/*
In php, data types are classified into 3 types.
1. Scalar -> It can hold a single type of value. Eg: int, float, string or  boolean.

2. Compound -> That contain more than one value. Eg: indexed array, associated array, object (oops).

3. Special -> It has two special types.
(i) NULL => represents no value / no assigned value.
(ii) Reference => Special variable that references to external resources like a file, database or a network connection.  
*/

// gettype()
// gettype() tells you the type of a variable as a string.

$name = 'Vaani';

echo gettype($name);

// var_dump()
// var_dump() gives you much more information.
// type + additional information + value

$carts = [ 'laptop', 'mouse', 'keyboard' ];

echo var_dump($name);
echo var_dump($carts);

/* Type Casting -> Changing the nature of the variable.
Syntax : (type) variableName;

The most common types are as follows:
- (int)
- (float)
- (string)
- (bool)
- (array)
- (object)

*/

// In php, there are basically two types of type casting.
// A. Explicit Type Casting
//  - string to integer
$value = "100";
$number = (int) $value;
var_dump($number);

//  - string to float
$value = "99.99";
$price = (float) $value;
var_dump($price);

//  - integer to string
$age = 25;
$text = (string) $age;
var_dump($text);

//  - float to integer
$price = 99.99;
$number = (int) $price;
var_dump($number);

//  - integer to float
$number = 10;
$value = (float) $number;
var_dump($value);

//  - string to boolean
$value = "Hello";
$result = (bool) $value;
var_dump($result); // true

$value = "";
$result = (bool) $value;
var_dump($result); // false

//  - integer to boolean
$value = 10;
var_dump((bool) $value); // true

$value = 0;
var_dump((bool) $value); // false

//  - boolean to integer
var_dump((int) true); // 1
var_dump((int) false); // 0


// B. Type Juggling (Automatic Type conversion)
// PHP can sometimes automatically convert types.
$num = 10;
$text = "20";

$result = $num + $text;

var_dump($result);