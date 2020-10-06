<?php
/*
4.2 Storing Multiple Elements per Key in an Array
Problem
You want to associate multiple elements with a single key.
*/
$fruits = array('red' => array('strawberry','apple'),
  'yellow' => array('banana'));
print_r($fruits);
print "***\n";

foreach ($fruits as $color => $color_fruit) {
  // $color_fruit is an array
  foreach ($color_fruit as $fruit) {
  print "$fruit is colored $color.<br>";
  }
}

print "***\n";
foreach ($fruits as $color => $color_fruit) {
  print "$color colored fruits include " .
  array_to_comma_string($color_fruit) . "<br>";
}

?>