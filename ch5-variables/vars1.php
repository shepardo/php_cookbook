<?php
/*
5.1 Avoiding == Versus = Confusion
Problem
You don’t want to accidentally assign values when comparing a variable and a constant.
*/
$dwarves = 1;
if (12 == $dwarves) {
  print "this runs\n";
}
if ($dwarves == 12) {  
  print "this runs\n";
}
/*
if (12 = $dwarves) { 
  print "this fails\n";
}*/
if ($dwarves = 12) {
  print "this runs\n";
}

?>