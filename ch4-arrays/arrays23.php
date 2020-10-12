<?php
/*
4.23 Finding the Union, Intersection, or Difference of Two
Arrays
Problem
You have a pair of arrays, and you want to find their union (all the elements), intersection
(elements in both, not just one), or difference (in one but not both).
*/
//print_r(explode(' ', 'a b c g h'));
$a = explode(' ', 'a b c g h');
$b = explode(' ', 'a b d e f h');
//print_r($a);
//print_r($b);
// To compute the union:
print_r(array_merge($a, $b));
$union = array_unique(array_merge($a, $b));
// To compute the intersection:
$intersection = array_intersect($a, $b);
// To find the simple difference:
$difference = array_diff($a, $b);
// And for the symmetric difference:
$difference = array_merge(array_diff($a, $b), array_diff($b, $a));

print "union\n";
print_r($union);
print "intersection\n";
print_r($intersection);
print "difference\n";
print_r($difference);
print "difference\n";
print_r($difference);

$old = array('To', 'be', 'or', 'not', 'to', 'be');
$new = array('To', 'be', 'or', 'whatever');
$difference = array_diff($old, $new);
print_r($difference);

$old = array('To', 'be', 'or', 'not', 'to', 'be');
$new = array('To', 'be', 'or', 'whatever');
$reverse_diff = array_diff($new, $old);
print_r($reverse_diff);

// implement case-insensitive diffing; diff -i
$seen = array();
foreach ($new as $n) {
  $seen[strtolower($n)]++;
}
print_r($seen);
foreach ($old as $o) {
  $o = strtolower($o);
  if (!$seen[$o]) { $diff[$o] = $o; }
}

?>