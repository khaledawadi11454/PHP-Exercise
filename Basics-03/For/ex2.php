
<?php

// Read in the sides and diagonal of the parallelogram
$side1 = 4;
$side2 = 5;
$diagonal = 6;

// Compute the square of each side
$side1_sq = $side1 ** 2;
$side2_sq = $side2 ** 2;

// Compute the sum of the squares of the sides
$sum_sides_sq = $side1_sq + $side2_sq;

// Determine whether the parallelogram is a rectangle or a rhombus
if ($sum_sides_sq == $diagonal ** 2) {
  echo "The parallelogram is a rectangle.";
} elseif ($side1 == $side2) {
  echo "The parallelogram is a rhombus.";
} else {
  echo "The parallelogram is neither a rectangle nor a rhombus.";
}

?>