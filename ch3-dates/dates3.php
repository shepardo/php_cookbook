<?php
/*
3.2 Converting Time and Date Parts to an Epoch
Timestamp
Problem
You want to know what epoch timestamp corresponds to a set of time and date parts.
Solution
Use mktime() if your time and date parts are in the local time zone, as shown in
Example 3-7.
*/

// 7:45:03 PM on March 10, 1975, local time
// Assuming your "local time" is US Eastern time
$then = mktime(19,45,3,3,10,1975);
$formatted = date('c', $then);
print $formatted . "\n";
// 7:45:03 PM on March 10, 1975, in GMT
$then = gmmktime(19,45,3,3,10,1975);
$formatted = date('c', $then);
print $formatted . "\n";
// 7:45:03 PM on March 10, 1975, in a particular timezone
$then = DateTime::createFromFormat(DateTime::ATOM, "1975-03-10T19:45:03-04:00");
date_default_timezone_set('America/New_York');
$formatted = $then->format('Y-m-d H:i:s');
print $formatted . "\n";
// $stamp_future is 1733257500
$stamp_future = mktime(15,25,0,12,3,2024);
// $formatted is '2024-12-03T15:25:00-05:00'
$formatted = date('c', $stamp_future);
print $formatted . "\n";

$text = "Birthday: May 11, 1918.";
$when = DateTime::createFromFormat("*: F j, Y.|", $text);
// $formatted is "Saturday, 11-May-18 00:00:00 UTC"
$formatted = $when->format(DateTime::RFC850);
print $formatted . "\n";
?>