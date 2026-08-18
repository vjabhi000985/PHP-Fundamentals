<?php

/*
==========================================================
        PHP TYPE CASTING — TRAP QUESTION QUIZ
==========================================================

Instructions:
1. Predict the output before running the code.
2. Use both gettype() and var_dump().
3. Write your prediction in the comment.
4. Then run the program and compare.

==========================================================
ROUND 1 — BOOLEAN TRAPS
==========================================================
*/


// Q1
// What is the type and value?

$value = -10;

echo "Q1: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q2
$value = 0;

echo "Q2: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q3
$value = "0";

echo "Q3: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q4
$value = "00";

echo "Q4: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q5
$value = "false";

echo "Q5: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q6
$value = "";

echo "Q6: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q7
$value = " ";

echo "Q7: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q8
$value = null;

echo "Q8: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------



/*
==========================================================
ROUND 2 — NUMERIC STRING TRAPS
==========================================================
*/


// Q9
$value = "99.98 USD";

echo "Q9: ";
echo gettype((int) $value) . PHP_EOL;
var_dump((int) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q10
$value = "99.98 USD";

echo "Q10: ";
echo gettype((float) $value) . PHP_EOL;
var_dump((float) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q11
$value = "USD 99.98";

echo "Q11: ";
echo gettype((int) $value) . PHP_EOL;
var_dump((int) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q12
$value = "USD 99.98";

echo "Q12: ";
echo gettype((float) $value) . PHP_EOL;
var_dump((float) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------



/*
==========================================================
ROUND 3 — BOSS ROUND
==========================================================
*/


// Q13
$value = "0.0";

echo "Q13: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q14
$value = "000";

echo "Q14: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q15
$value = "-0";

echo "Q15: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q16
$value = "123abc456";

echo "Q16: ";
echo gettype((int) $value) . PHP_EOL;
var_dump((int) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q17
$value = "123.45abc";

echo "Q17: ";
echo gettype((float) $value) . PHP_EOL;
var_dump((float) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q18
$value = "  42xyz";

echo "Q18: ";
echo gettype((int) $value) . PHP_EOL;
var_dump((int) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q19
$value = "  42.75xyz";

echo "Q19: ";
echo gettype((float) $value) . PHP_EOL;
var_dump((float) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


// Q20
$value = "null";

echo "Q20: ";
echo gettype((bool) $value) . PHP_EOL;
var_dump((bool) $value);

// Prediction:
// Type:
// Value:
// ------------------------------------------


