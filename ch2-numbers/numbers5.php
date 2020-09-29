<?php
/*
2.5 Generating Random Numbers Within a Range
Problem
You want to generate a random number within a range of numbers.

2.6 Generating Predictable Random Numbers
Problem
You want to make the random number generate predictable numbers so you can guarantee
repeatable behavior.
*/
$lower = 65;
$upper = 97;
// random number between $upper and $lower, inclusive
$random_number = mt_rand($lower, $upper);
print $random_number . "\n";

function pick_color() {
  $colors = array('red','orange','yellow','blue','green','indigo','violet');
  $i = mt_rand(0, count($colors) - 1);
  return $colors[$i];
}

mt_srand(34534);
$first = pick_color();
$second = pick_color();

// Because a specific value was passed to mt_srand(), we can be
// sure the same colors will get picked each time: red and yellow
print "$first is red and $second is yellow.";


?>