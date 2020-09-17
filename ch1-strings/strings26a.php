<?php
/*
1.10 Trimming Blanks from a String
Problem
You want to remove whitespace from the beginning or end of a string. For example, you
want to clean up user input before validating it.
*/

$_GET['zipcode'] = '   90160  ';
$_GET['text'] = '            My little text.';
$_GET['name'] = '        Juan             ';

$zipcode = trim($_GET['zipcode']);
$no_linefeed = rtrim($_GET['text']);
$name = ltrim($_GET['name']);

print "$zipcode\n";
print "$no_linefeed\n";
print "$name\n";

// Remove numerals and space from the beginning of the line
print ltrim('10 PRINT A$',' 0..9') . "\n";
// Remove semicolon from the end of the line
print rtrim('SELECT * FROM turtles;',';') . "\n";

?>