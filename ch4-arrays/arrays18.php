<?php
/*
4.18 Sorting Multiple Arrays
Problem
You want to sort multiple arrays or an array with multiple dimensions.
*/
$colors = array('Red', 'White', 'Blue');
$cities = array('Boston', 'New York', 'Chicago');
array_multisort($colors, $cities);
print_r($colors);
print_r($cities);

$stuff = array('colors' => array('Red', 'White', 'Blue'),
  'cities' => array('Boston', 'New York', 'Chicago'));
array_multisort($stuff['colors'], $stuff['cities']);
print_r($stuff);

$numbers = array(0, 1, 2, 3);
$letters = array('a', 'b', 'c', 'd');
array_multisort($numbers, SORT_NUMERIC, SORT_DESC,
  $letters, SORT_STRING , SORT_DESC);
print_r($numbers);
print_r($letters);
?>