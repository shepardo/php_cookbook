<?php
/*
4.19 Sorting an Array Using a Method Instead of a
Function
Problem
You want to define a custom sorting routine to order an array. However, instead of using
a function, you want to use an object method.
*/
$tests = array('test1.php', 'test10.php', 'test11.php', 'test2.php');
$access_times = array('12/14/2000', '08/10/2001', '08/07/1999');

class sort {
  // reverse-order string comparison
  static function strrcmp($a, $b) {
    return strcmp($b, $a);
  }
}
usort($tests, array('sort', 'strrcmp'));
print_r($tests);

class Dates {
  public function compare($a, $b) { 
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
}
$dates = new Dates;
usort($access_times, array($dates, 'compare'));
print_r($access_times);

?>