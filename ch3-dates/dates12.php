<?php
/*
3.11 Generating a High-Precision Time
Problem
You need to measure time with finer than one-second resolution—for example, to generate
a unique ID or benchmark a function call.
*/
$_SERVER['QUERY_STRING'] = '?age=20';
$start = microtime(true);
for ($i = 0; $i < 1000; $i++) {
  preg_match('/age=\d{1,5}/',$_SERVER['QUERY_STRING']);
}
$end = microtime(true);
$elapsed = $end - $start;
print $elapsed . "\n";

list($microseconds,$seconds) = explode(' ',microtime());
$id = $seconds.$microseconds.getmypid();
print $id . "\n";
?>