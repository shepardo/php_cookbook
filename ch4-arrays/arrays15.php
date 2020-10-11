<?php
/*
4.15 Reversing an Array
Problem
You want to reverse the order of the elements in an array.
*/
$array = array('Zero', 'One', 'Two');
$reversed = array_reverse($array);
print_r($reversed);
for ($i = 0, $size = count($array); $i < $size; $i++) {
  print "{$array[$i]} ";
}
print "\n";

for ($i = count($array) - 1; $i >=0 ; $i--) {
  print "{$array[$i]} ";
}
print "\n";
?>