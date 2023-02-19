<?php

// Get input from user
$num = 6;

// Set initial variables
$factorial = 1;
$i = $num;

// Loop through numbers and calculate factorial
while ($i >= 1) {
  $factorial *= $i;
  $i--;
}

// Print result
echo "Factorial of $num is: $factorial";

?>