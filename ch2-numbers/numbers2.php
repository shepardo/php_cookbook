<?php
/*
2.2 Comparing Floating-Point Numbers
Problem
You want to check whether two floating-point numbers are equal.
*/
$delta = 0.00001;
$a = 1.00000001;
$b = 1.00000000;
if (abs($a - $b) < $delta) {
  print '$a and $b are equal enough.';
}
?>