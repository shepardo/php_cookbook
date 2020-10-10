<?php
/*
4.12 Finding the Position of a Value in an Array
Problem
You want to know if a value is in an array. If the value is in the array, you want to know
its key.
*/
$array = array(1, 2, 3, 4, 5, 6);
$value = 4;
$position = array_search($value, $array);
if ($position !== false) {
  // the element in position $position has $value as its value in array $array
  echo "found!\n";
}
$favorite_foods = array(1 => 'artichokes', 'bread', 'cauliflower',
  'deviled eggs');
$food = 'cauliflower';
$position = array_search($food, $favorite_foods);
if ($position !== false) {
  echo "My #$position favorite food is $food";
} else {
  echo "Blech! I hate $food!";
}
print "\n";

?>