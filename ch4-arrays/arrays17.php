<?php
/*
4.17 Sorting an Array by a Computable Field
Problem
You want to define your own sorting routine.
*/
$tests = array('test1.php', 'test10.php', 'test11.php', 'test2.php');
// sort in reverse natural order
usort($tests, function ($a, $b) {
  return strnatcmp($b, $a);
});
print_r($tests);

// expects dates in the form of "MM/DD/YYYY"
function date_sort($a, $b) {
  list($a_month, $a_day, $a_year) = explode('/', $a);
  list($b_month, $b_day, $b_year) = explode('/', $b);
  if ($a_year > $b_year ) return 1;
  if ($a_year < $b_year ) return -1;
  if ($a_month > $b_month) return 1;
  if ($a_month < $b_month) return -1;
  if ($a_day > $b_day ) return 1;
  if ($a_day < $b_day ) return -1;
  return 0;
}
$dates = array('12/14/2000', '08/10/2001', '08/07/1999');
usort($dates, 'date_sort');
print_r($dates);

function array_sort($array, $map_func, $sort_func = '') {
  $mapped = array_map($map_func, $array); // cache $map_func() values
  if ('' === $sort_func) {
  asort($mapped); // asort() is faster then usort()
  } else {
  uasort($mapped, $sort_func); // need to preserve keys
  }
  while (list($key) = each($mapped)) {
  $sorted[] = $array[$key]; // use sorted keys
  }
  return $sorted;
}

function u_length($a, $b) {
  $a = strlen($a);
  $b = strlen($b);
  if ($a == $b) return 0;
  if ($a > $b) return 1;
  return -1;
}
function map_length($a) {
  return strlen($a);
}
$tests = array('one', 'two', 'three', 'four', 'five',
  'six', 'seven', 'eight', 'nine', 'ten');
// faster for < 5 elements using u_length()
usort($tests, 'u_length');
print_r($tests);
// faster for >= 5 elements using map_length()
$tests = array_sort($tests, 'map_length');  
print_r($tests);
?>