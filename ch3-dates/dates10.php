<?php
/*
3.9 Adding to or Subtracting from a Date
Problem
You need to add or subtract an interval from a date.
*/

$birthday = new DateTime('March 10, 1975');
// When is 40 weeks before $birthday?
$human_gestation = new DateInterval('P40W');
$birthday->sub($human_gestation);
print $birthday->format(DateTime::RFC850) . "\n";
print "\n";
// What if it was an elephant, not a human?
$elephant_gestation = new DateInterval('P616D');

$birthday->add($elephant_gestation);
print $birthday->format(DateTime::RFC850) . "\n";

$year = 2016;
$when = new DateTime("November 1, $year");
if ($when->format('D') != 'Mon') {
  $when->modify("next Monday");
}
$when->modify("next Tuesday");
print "In $year, US election day is on the " .
$when->format('jS') . ' day of November.' . "\n";

?>