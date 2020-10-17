<?php
/*
6.8 Returning More Than One Value
Problem
You want to return more than one value from a function.
*/
function array_stats($values) {
  $min = min($values);
  $max = max($values);
  $mean = array_sum($values) / count($values);
  return array($min, $max, $mean);
}
$values = array(1,3,5,9,13,1442);
list($min, $max, $mean) = array_stats($values);
function time_parts($time) {
  return explode(':', $time);
}
list($hour, $minute, $second) = time_parts('12:34:56');
print("hour: $hour, minute: $minute, second: $second\n");

function time_parts2($time, &$hour, &$minute, &$second) {
  list($hour, $minute, $second) = explode(':', $time);
}
time_parts2('12:34:56', $hour, $minute, $second);
print("hour: $hour, minute: $minute, second: $second\n");

function time_parts3($time) {
  global $hour, $minute, $second;
  list($hour, $minute, $second) = explode(':', $time);
}
time_parts3('12:34:56');
print("hour: $hour, minute: $minute, second: $second\n");

?>