<?php

// Define the size of the pattern
$size = 7;

// Print the first row of asterisks
for ($i = 1; $i <= $size; $i++) {
  echo "*";
}
echo "\n";

// Print the diagonal of the Z
for ($i = $size - 1; $i >= 1; $i--) {
  for ($j = 1; $j <= $size; $j++) {
    if ($j == $i + 1) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "\n";
}

// Print the last row of asterisks
for ($i = 1; $i <= $size; $i++) {
  echo "*";
}
echo "\n";

?>