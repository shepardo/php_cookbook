<?php
/*
2.13 Calculating Trigonometric Functions
Problem
You want to use trigonometric functions, such as sine, cosine, and tangent.
*/
// cosine of 2 pi is 1, $result = 1
$result = cos(2 * M_PI);
print $result . "\n";
// arctan of pi/4 is about 0.665773
$result = atan(M_PI / 4);
print $result . "\n";
$n = 0.707;
// secant of 0.707 is about 1.53951
$secant = 1 / sin($n);
print $secant . "\n";
// cosecant of 0.707 is about 1.31524
$cosecant = 1 / cos($n);
print $cosecant . "\n";
// cotangent of 0.707 is about 1.17051
$cotangent = 1 / tan($n);
print $cotangent . "\n";
?>