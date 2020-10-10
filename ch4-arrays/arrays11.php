<?php
/*
4.11 Checking if an Element Is in an Array
Problem
You want to know if an array contains a certain value.
*/
$book_collection = array('Emma', 'Pride and Prejudice', 'Northhanger Abbey');
$book = 'Sense and Sensibility';
if (in_array($book, $book_collection)) {
echo 'Own it.';
} else {
echo 'Need it.';
}

$array = array(1, '2', 'three');
print "\n" . in_array(0, $array); // true!
print "\n" .in_array(0, $array, true); // false
print "\n" .in_array(1, $array); // true
print "\n" .in_array(1, $array, true); // true
print "\n" .in_array(2, $array); // true
print "\n" .in_array(2, $array, true); // false
print "\n";
$book_collection = array('Emma',
  'Pride and Prejudice',
  'Northhanger Abbey');
// convert from numeric array to associative array
$book_collection = array_flip($book_collection);
$book = 'Sense and Sensibility';
if (isset($book_collection[$book])) {
  echo 'Own it.';
} else {
  echo 'Need it.';
}

?>