<?php
/*
4.6 Changing Array Size
Problem
You want to modify the size of an array, either by making it larger or smaller than its
current size.
*/
// start at three
$array = array('apple', 'banana', 'coconut');
// grow to five
$array = array_pad($array, 5, '');
// no assignment to $array
array_splice($array, 2);

// make a four-element array with 'dates' to the right
$array = array('apple', 'banana', 'coconut');
$array = array_pad($array, 4, 'dates');
print_r($array);

// make a six-element array with 'zucchinis' to the left
$array = array_pad($array, -6, 'zucchini');
print_r($array);

$array = array('apple', 'banana', 'coconut');
$array[4] = 'dates';
print_r($array);

// make a four-element array
$array = array('apple', 'banana', 'coconut', 'dates');
// shrink to three elements
array_splice($array, 3);
// remove last element, equivalent to array_pop()
array_splice($array, -1);
// only remaining fruits are apple and banana
print_r($array);

?>