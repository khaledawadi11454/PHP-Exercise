<?php
  $name = "khaled awad";
  $position = "FullStack Developer";
  $github_url = "https://github.com/khaledawadi11454";

  // Using double quotation and .
  echo "Hello, I'm $name, I'm a $position. Please check my github link $github_url.\n";

  // Using double quotation and without .
  echo "Hello, I'm " . $name . ", I'm a " . $position . ". Please check my github link " . $github_url . ".\n";

  // Without using double quotation
  echo 'Hello, I\'m ' . $name . ', I\'m a ' . $position . '. Please check my github link ' . $github_url . '.\n';
?>