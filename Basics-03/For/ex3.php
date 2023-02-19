<?php

// Define the number of rows in the pattern
$rows = 5;

// Construct the top half of the pattern
for ($i = 1; $i <= $rows; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "* ";
  }
  echo "\n";
}

// Construct the bottom half of the pattern
for ($i = $rows - 1; $i >= 1; $i--) {
  for ($j = 1; $j <= $i; $j++) {
    echo "* ";
  }
  echo "\n";
}

?>