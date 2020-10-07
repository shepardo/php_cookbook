<?php
/*
4.5 Deleting Elements from an Array
Problem
You want to remove one or more elements from an array.
*/

// create a "numeric" array
$animals = array('ant', 'bee', 'cat', 'dog', 'elk', 'fox');
print $animals[1]; // prints 'bee'
print $animals[2]; // prints 'cat'
count($animals); // returns 6
print_r($animals);
// unset()
unset($animals[1]); // removes element $animals[1] = 'bee'
print $animals[1]; // prints nothing and throws an E_NOTICE error
print $animals[2]; // still prints 'cat'
count($animals); // returns 5, even though $array[5] is 'fox'
print_r($animals);
// add new element
$animals[] = 'gnu'; // add new element (not Unix)
print $animals[1]; // prints nothing, still throws an E_NOTICE error
print $animals[6]; // prints 'gnu', this is where 'gnu' ended up
count($animals); // returns 6
print_r($animals);
// assign ''
$animals[2] = ''; // zero out value
print $animals[2]; // prints ''
count($animals); // returns 6, count does not decrease
print_r($animals);

$animals = array_values($animals);
print_r($animals);

// create a "numeric" array
$animals = array('ant', 'bee', 'cat', 'dog', 'elk', 'fox');
array_splice($animals, 2, 2);
print_r($animals);

?>