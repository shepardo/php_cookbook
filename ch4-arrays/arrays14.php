<?php
/*
4.14 Finding the Largest or Smallest Valued Element in an
Array
Problem
You have an array of elements, and you want to find the largest or smallest valued
element. For example, you want to find the appropriate scale when creating a histogram.
*/
#$a = array(1, 2, 3, 4, 5, 6);
$a = range(1, 10);
$largest = max($a);
print "largest = $largest\n";
$smallest = min($a);
print "smallest = $smallest\n";
//$array = array_flip($a);
$copy = $a;
arsort($copy);
print_r($a);
?>