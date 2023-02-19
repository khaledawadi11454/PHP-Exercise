<?php

// Set the input sentence and word to search for
$text = "The quick brown fox jumps over the lazy dog";
$search_word = "the";

// Convert the sentence into an array of words
$words = explode(" ", $text);

// Set initial variables
$count = 0;
$i = 0;

// Loop through the words and count occurrences of the search word
while ($i < count($words)) {
  if (strtolower($words[$i]) == strtolower($search_word)) {
    $count++;
  }
  $i++;
}

// Print the result
echo "The word '$search_word' appears in the sentence '$text' $count times.";

?>