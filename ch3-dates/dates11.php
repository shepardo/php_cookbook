<?php
/*
3.10 Calculating Time with Time Zones and Daylight
Saving Time
Problem
You need to calculate times in different time zones. For example, you want to give users
information adjusted to their local time, not the local time of your server.
*/
$nowInNewYork = new DateTime('now', new DateTimeZone('America/New_York'));
$nowInCalifornia = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
printf("It's %s in New York but %s in California." . "\n",
  $nowInNewYork->format(DateTime::RFC850),
  $nowInCalifornia->format(DateTime::RFC850));

$now = time();
date_default_timezone_set('America/New_York');
print date(DATE_RFC850, $now);
print "\n";
date_default_timezone_set('Europe/Paris');
print date(DATE_RFC850, $now) . "\n";
?>