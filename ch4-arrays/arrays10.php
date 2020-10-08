<?php
/*
4.10 Checking if a Key Is in an Array
Problem
You want to know if an array contains a certain key.
*/
$array = [
  'key1' => 1,
  'key2' => 2,
  'key' => 0,
  'key3' => 3,
];
if (array_key_exists('key', $array)) {
  /* there is a value for $array['key'] */
  print "found\n";
}
if (isset($array['key'])) { /* there is a non-null value for 'key' in $array */ 
  print "found again\n";
}
?>