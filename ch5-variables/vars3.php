<?php
/*
5.3 Exchanging Values Without Using Temporary Variables
Problem
You want to exchange the values in two variables without using additional variables for
storage.
*/
$a = 'Alice';
$b = 'Bob';
list($a,$b) = array($b,$a);
// now $a is Bob and $b is Alice
print "$a\n";
print "$b\n";

$yesterday = 'pleasure';
$today = 'sorrow';
$tomorrow = 'celebrate';
list($yesterday,$today,$tomorrow) = array($today,$tomorrow,$yesterday);
// now $yesterday is 'sorrow', $today is 'celebrate'
// and $tomorrow is 'pleasure'

print "$yesterday\n";
print "$today\n";
print "$tomorrow\n";
?>