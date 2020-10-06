<?php
/*
4.1 Specifying an Array Not Beginning at Element 0
Problem
You want to assign multiple elements to an array in one step, but you don’t want the first
index to be 0.
*/
$fruits = array('Apples', 'Bananas', 'Cantaloupes', 'Dates');

$fruits[0] = 'Apples';
$fruits[1] = 'Bananas';
$fruits[2] = 'Cantaloupes';
$fruits[3] = 'Dates';

$fruits[] = 'Apples';
$fruits[] = 'Bananas';
$fruits[] = 'Cantaloupes';
$fruits[] = 'Dates';

$fruits = ['Apples', 'Bananas', 'Cantaloupes', 'Dates'];

foreach ($fruits as $fruit) {
  print "$fruit.\n";
}

print "****\n";

$fruits = array('red' => 'Apples', 'yellow' => 'Bananas',
  'beige' => 'Cantaloupes', 'brown' => 'Dates');

foreach ($fruits as $color => $fruit) {
  print "$fruit are $color.\n";
}
print "****\n";

$fruits['red'] = 'Apples';
$fruits['yellow'] = 'Bananas';
$fruits['beige'] = 'Cantaloupes';
$fruits['brown'] = 'Dates';

foreach ($fruits as $color => $fruit) {
  print "$fruit are $color.\n";
}
print "****\n";

$fruits = [
  'red' => 'Apples',
  'yellow' => 'Bananas',
  'beige' => 'Cantaloupes',
  'brown' => 'Dates'
];

foreach ($fruits as $color => $fruit) {
  print "$fruit are $color.\n";
}
print "****\n";

$fruits['red'] = 'Strawberry';
$fruits['orange'] = 'Orange';

foreach ($fruits as $color => $fruit) {
  print "$fruit are $color.\n";
}
print "****\n";

$fruits = array('red' => 'Apples', 'yellow' => 'Bananas',
  'beige' => 'Cantaloupes', 'brown' => 'Dates');

foreach ($fruits as $color => $fruit) {
  print "$fruit are $color.\n";
}
print "****\n";

$fruits = array('Apples', 'Bananas', 'Cantaloupes', 'Dates');
list($red, $yellow, $beige, $brown) = $fruits;

print "red is $red, yellow is $yellow, beige is $beige, brown si $brown\n";

$presidents = array(1 => 'Washington', 'Adams', 'Jefferson', 'Madison');

foreach ($presidents as $number => $president) {
  print "$number: $president\n";
}
print "****\n";

foreach ($presidents as $number => $president) {
  $number++;
  print "$number: $president\n";
}
print "****\n";

?>