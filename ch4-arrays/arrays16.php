<?php
/*
4.16 Sorting an Array
Problem
You want to sort an array in a specific way.
*/
$states = array('Delaware', 'Pennsylvania', 'New Jersey');
sort($states);
print_r($states);

$scores = array(1, 10, 2, 20);
sort($scores, SORT_NUMERIC);
print_r($scores);

$states = array(1 => 'Delaware', 'Pennsylvania', 'New Jersey');
asort($states);
while (list($rank, $state) = each($states)) {
  print "$state was the #$rank state to join the United States\n";
}
print "\n";

?>