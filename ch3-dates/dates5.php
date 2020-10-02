<?php
/*
3.4 Printing a Date or Time in a Specified Format
Problem
You need to print out a date or time formatted in a particular way.
Solution
Use date() or DateTime::format(), as shown in Example 3-13.
*/
print date('d/M/Y') . "\n";
$when = new DateTime();
print $when->format('d/M/Y');
?>