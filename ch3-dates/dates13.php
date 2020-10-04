<?php
/*
3.12 Generating Time Ranges
Problem
You need to know all the days in a week or a month. For example, you want to print out
a list of appointments for a week.
*/
// Start on August 1
$start = new DateTime('August 1, 2014');
// End date is exclusive, so this will stop on August 31
$end = new DateTime('September 1, 2014');
// Go 1 day at a time
$interval = new DateInterval('P1D');
$range1 = new DatePeriod($start, $interval, $end);
foreach ($range1 as $d) {
  print "A day in August is " . $d->format('d') . "\n";
}
print "***\n";
// Start on August 1
$start = new DateTime('August 1, 2014');
// Go 1 day at a time
$interval= new DateInterval('P1D');
// Recur 30 times more after the first occurrence.
$recurrences = 30;
$range2 = new DatePeriod($start, $interval, $recurrences);
foreach ($range2 as $d) {
  print "A day in August is " . $d->format('d') . "\n";
}
print "***\n";
$range3 = new DatePeriod('R30/2014-08-01T00:00:00Z/P1D');
foreach ($range3 as $d) {
  print "A day in August is " . $d->format('d') . "\n";
}
print "***\n";

?>