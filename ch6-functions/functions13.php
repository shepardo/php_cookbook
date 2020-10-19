<?php
/*
6.13 Creating Dynamic Functions
Problem
You want to create and define a function as your program is running.
*/
$increment = 7;
$add = function($i, $j) use ($increment) { return $i + $j + $increment; };
$sum = $add(1, 2);
print($sum . "\n");
?>