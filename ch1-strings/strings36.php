<?php
/*
1.15 Taking Strings Apart
Problem
You need to break a string into pieces. For example, you want to access each line that a
user enters in a <textarea> form field.
*/
$dwarves = 'dopey,sleepy,happy,grumpy,sneezy,bashful,doc';
$dwarf_array = explode(',',$dwarves);
print_r($dwarf_array);

$math = "3 + 2 / 7 - 9";
$stack = preg_split('/ *([+\-\/*]) */',$math,-1,PREG_SPLIT_DELIM_CAPTURE);
print_r($stack);
?>