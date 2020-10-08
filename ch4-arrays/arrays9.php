<?php
/*
4.9 Printing an Array with Commas
Problem
You want to print out an array with commas separating the elements and with an and
before the last element if there are more than two elements in the array.
*/
function array_to_comma_string($array) {
  switch (count($array)) {
    case 0:
      return '';
    case 1:
      return reset($array);
    case 2:
      return join(' and ', $array);
    default:
      $last = array_pop($array);
      return join(', ', $array) . ", and $last";
  }
}

$thundercats = array('Lion-O', 'Panthro', 'Tygra', 'Cheetara', 'Snarf');
print 'ThunderCat good guys include ' . join(', ', $thundercats) . '.'. "\n";
print array_to_comma_string($thundercats). "\n";
?>