<?php
/*
2.14 Doing Trigonometry in Degrees, Not Radians
Problem
You have numbers in degrees but want to use the trigonometric functions.
*/
$degree = 90;
// cosine of 90 degrees is 0
$cosine = cos(deg2rad($degree));
print $cosine . "\n";
?>