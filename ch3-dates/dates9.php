<?php
/*
3.8 Parsing Dates and Times from Strings
Problem
You need to get a date or time in a string into a format you can use in calculations. For
example, you want to convert date expressions such as “last Thursday” or “February 9,
2004” into an epoch timestamp.
*/
$a = strtotime('march 10'); // defaults to the current year
$b = strtotime('last thursday');
$c = strtotime('now + 3 months');


print date(DATE_RFC850, $a) . "\n";
print date(DATE_RFC850, $b) . "\n";
print date(DATE_RFC850, $c) . "\n";

$a = strtotime('now');
print date(DATE_RFC850, $a);
print "\n";
$a = strtotime('today');
print date(DATE_RFC850, $a);

?>