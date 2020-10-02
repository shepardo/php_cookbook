
<?php
/*
3.1 Finding the Current Date and Time
Problem
You want to know what the time or date is.
Solution
Use date() for a formatted time string, as in Example 3-2.
*/

print date('r');
$when = new DateTime();
print $when->format('r');
$now_1 = getdate();
$now_2 = localtime();
print "{$now_1['hours']}:{$now_1['minutes']}:{$now_1['seconds']}\n";
print "$now_2[2]:$now_2[1]:$now_2[0]";

?>