<?php
/*
3.3 Converting an Epoch Timestamp to Time and Date
Parts
Problem
You want the set of time and date parts that corresponds to a particular epoch timestamp.
Solution
Pass an epoch timestamp to getdate(): $time_parts = getdate(163727100);.
*/
$when = new DateTime("@163727100");
$when->setTimezone(new DateTimeZone('America/Los_Angeles'));
$parts = explode('/', $when->format('Y/m/d/H/i/s'));
// Year, month, day, hour, minute, second
// $parts is array('1975', '03','10', '16','45', '00'))
print_r($parts);
?>