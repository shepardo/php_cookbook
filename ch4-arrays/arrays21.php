<?php
/*
4.21 Removing Duplicate Elements from an Array
Problem
You want to eliminate duplicates from an array.
*/
$array = array(1,2,4,4, 1, 2, 3, 4, 6, 5, 3, 3);
$unique = array_unique($array);
print_r($array);
print_r($unique);
?>