<?php
/*
6.6 Creating Functions That Take a Variable Number of
Arguments
Problem
You want to define a function that takes a variable number of arguments.
*/
// find the "average" of a group of numbers
function mean($numbers) {
  // initialize to avoid warnings
  $sum = 0;
  // the number of elements in the array
  $size = count($numbers);
  // iterate through the array and add up the numbers
  for ($i = 0; $i < $size; $i++) {
  $sum += $numbers[$i];
  }
  // divide by the amount of numbers
  $average = $sum / $size;
  // return average
  return $average;
}
// $mean is 96.25
$mean = mean(array(96, 93, 98, 98));  
print $mean . "\n";

// find the "average" of a group of numbers
function mean2() {
  // initialize to avoid warnings
  $sum = 0;
  // the arguments passed to the function
  $size = func_num_args();
  // iterate through the arguments and add up the numbers
  for ($i = 0; $i < $size; $i++) {
  $sum += func_get_arg($i);
  }
  // divide by the amount of numbers
  $average = $sum / $size;
  // return average
  return $average;
}
// $mean is 96.25
$mean = mean2(96, 93, 98, 98);
print $mean . "\n";


// find the "average" of a group of numbers
function mean3() {
  // initialize to avoid warnings
  $sum = 0;
  // the arguments passed to the function
  $size = func_num_args();
  // iterate through the arguments and add up the numbers
  foreach (func_get_args() as $arg) {
  $sum += $arg;
  }
  // divide by the amount of numbers
  $average = $sum / $size;
  // return average
  return $average;
}
// $mean is 96.25
$mean = mean3(96, 93, 98, 98);
print $mean . "\n";

?>