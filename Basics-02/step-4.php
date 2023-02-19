<?php

function isArmstrong($num) {
  $digits = str_split($num); // Splitting the number into an array of its digits
  $sum = 0;

  foreach ($digits as $digit) {
    $sum += pow($digit, 3); // Summing up the cube of each digit
  }

  if ($sum == $num) {
    return true;
  } else {
    return false;
  }
}

// Testing the function
$num1 = 153;
$num2 = 371;
$num3 = 947;

if (isArmstrong($num1)) {
  echo "$num1 is an Armstrong number\n";
} else {
  echo "$num1 is not an Armstrong number\n";
}

if (isArmstrong($num2)) {
  echo "$num2 is an Armstrong number\n";
} else {
  echo "$num2 is not an Armstrong number\n";
}

if (isArmstrong($num3)) {
  echo "$num3 is an Armstrong number\n";
} else {
  echo "$num3 is not an Armstrong number\n";
}

?>