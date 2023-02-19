<?php


$i = 1;
$max_rows = 8;


while ($i <= $max_rows) {


  for ($j = 1; $j <= $i; $j++) {
    echo "*";
  }
  echo "\n";
  $i++;
}

?>