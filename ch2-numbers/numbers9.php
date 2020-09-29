<?php
/*
2.10 Formatting Numbers
Problem
You have a number and you want to print it with thousands and decimal separators. For
example, you want to display the number of people who have viewed a page, or the
percentage of people who have voted for an option in a poll.
*/

$number = 1234.56;
// $formatted1 is "1,235" - 1234.56 gets rounded up and , is
// the thousands separator");
$formatted1 = number_format($number);
print $formatted1 . "\n";
// Second argument specifies number of decimal places to use.
// $formatted2 is 1,234.56
$formatted2 = number_format($number, 2);
print $formatted2 . "\n";
// Third argument specifies decimal point character
// Fourth argument specifies thousands separator
// $formatted3 is 1.234,56
$formatted3 = number_format($number, 2, ",", ".");
print $formatted3 . "\n";

$number = '1234.56';
// $formatted1 is 1,234.56
$usa = new NumberFormatter("en-US", NumberFormatter::DEFAULT_STYLE);
$formatted1 = $usa->format($number);
print $formatted1 . "\n";
// $formatted2 is 1 234,56
// Note that it's a "non breaking space (\u00A0) between the 1 and the 2
$france = new NumberFormatter("fr-FR", NumberFormatter::DEFAULT_STYLE);
$formatted2 = $france->format($number);
print $formatted2 . "\n";

$number = 31415.92653; // your number
list($int, $dec) = explode('.', $number);
// $formatted is 31,415.92653
$formatted = number_format($number, strlen($dec));
print $formatted . "\n";

?>