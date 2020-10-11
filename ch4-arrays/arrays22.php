<?php
/*
4.22 Applying a Function to Each Element in an Array
Problem
You want to apply a function or method to each element in an array. This allows you to
transform the input data for the entire set all at once.
*/
$names = array('firstname' => "Baba",
  'lastname' => "O'Riley");
array_walk($names, function (&$value, $key) {
  $value = htmlentities($value, ENT_QUOTES);
});
foreach ($names as $name) {
  print "$name\n";
}
?>