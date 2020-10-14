<?php
/*
5.4 Creating a Dynamic Variable Name
Problem
You want to construct a variable’s name dynamically. For example, you want to use
variable names that match the field names from a database query.
*/
$animal = 'turtles';
$turtles = 103;
print $$animal . "\n";

$stooges = array('Moe','Larry','Curly');
$stooge_moe = 'Moses Horwitz';
$stooge_larry = 'Louis Feinberg';
$stooge_curly = 'Jerome Horwitz';

foreach ($stooges as $s) {
  print "$s's real name was ${'stooge_'.strtolower($s)}.\n";
}

$title = "learn chess";
$title_1 = "learn programming";
$title_2 = "learn checkers";
$title_3 = "learn math";
$title_4 = "learn chess";
$n = 4;
for ($i = 1; $i <= $n; $i++) {
  $t = "title_$i";
  if ($title == $$t) { /* match */ print "$title\n"; }
}
?>