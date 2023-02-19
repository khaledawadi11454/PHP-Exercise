<?php

// Set the input number
$num = 12345;

// Convert the number to a string
$num_str = (string) $num;

// Set initial variables
$sum = 0;
$i = 0;

// Loop through the digits and add them to the sum
while ($i < strlen($num_str)) {
  $sum += (int) $num_str[$i];
  $i++;
}

// Print the result
echo "The sum of the digits in $num is: $sum";

?>