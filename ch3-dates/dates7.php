<?php
/*
3.6 Finding the Day in a Week, Month, or Year
Problem
You want to know the day or week of the year, the day of the week, or the day of the
month. For example, you want to print a special message every Monday, or on the first
of every month.
*/
print "Today is day " . date('d') . ' of the month and ' . date('z') .
' of the year.';
print "\n";
$birthday = new DateTime('January 17, 1706', new DateTimeZone('America/New_York'));
print "Benjamin Franklin was born on a " . $birthday->format('l') . ", " .
"day " . $birthday->format('N') . " of the week.";
?>