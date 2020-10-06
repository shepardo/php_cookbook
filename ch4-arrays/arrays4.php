<?php
/*
4.4 Iterating Through an Array
Problem
You want to cycle though an array and operate on all or some of the elements inside.
*/

$a = range(1,10);

print "***\n";
foreach ($a as $value) {
  // Act on $value
  print "$value ";
}

print "***\n";
foreach ($a as $key => $value) {
  // Act II
  print "key=$key, value=$value; ";
}

print "***\n";
for ($key = 0, $size = count($a); $key < $size; $key++) {
  // Act III
  print "$key = $value, ";
}

print "***\n";
reset($a); // reset internal pointer to beginning of array
while (list($key, $value) = each ($a)) {
  // Final Act
  print "$key = $value, ";
}
print "***\n";

$words = array('HELLO,', 'World', 'AgaiN');
settype($items, 'string');
$words = array_map('strtolower', $words);
foreach ($words as $word) {
  print "$word, ";
}
/*
for (reset($words); $key = key($words); next($words) ) {
  // ...
  print "$key, ";
}*/
print "***\n";

if (is_array($a)) {
  // foreach loop code for array
  print "Is an array\n";
} else {
  // code for scalar
  print "Is not an array\n";
}

?>