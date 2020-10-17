<?php
/*
6.7 Returning Values by Reference
Problem
You want to return a value by reference, not by value. This allows you to avoid making
a duplicate copy of a variable.
*/
function &array_find_value($needle, &$haystack) {
  foreach ($haystack as $key => $value) {
    if ($needle == $value) {
      return $haystack[$key];
    }
  }
}
//$band =& array_find_value('The Doors', $artists);
$minnesota = array('Bob Dylan', 'F. Scott Fitzgerald',
  'Prince', 'Charles Schultz');
print_r($minnesota);
$prince =& array_find_value('Prince', $minnesota);
$prince = 'O(+>'; // The ASCII version of Prince's unpronounceable symbol
print_r($minnesota);


?>