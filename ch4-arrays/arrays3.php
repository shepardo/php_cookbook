<?php
/*
4.3 Initializing an Array to a Range of Integers
Problem
You want to assign a series of consecutive integers to an array.
*/

$cards = range(1, 52);
$odd = range(1, 52, 2);
$even = range(2, 52, 2);

print "cards\n";
foreach($cards as $c) {
  print "$c ";
}
print "odd\n";
foreach($odd as $c) {
  print "$c ";
}
print "even\n";
foreach($even as $c) {
  print "$c ";
}
print "\n";
?>