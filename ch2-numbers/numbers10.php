<?php
/*
2.11 Formatting Monetary Values
Problem
You have a number and you want to print it with thousands and decimal separators. For
instance, you want to display prices for items in a shopping cart.
*/
$number = 1234.56;
// US uses $ , and .
// $formatted1 is $1,234.56
$usa = new NumberFormatter("en-US", NumberFormatter::CURRENCY);
$formatted1 = $usa->format($number);
print $formatted1 . "\n";
$formatted = $usa->formatCurrency($number, 'EUR');
print $formatted1 . "\n";

// France uses , and €
// $formatted2 is 1 234,56 €
$france = new NumberFormatter("fr-FR", NumberFormatter::CURRENCY);
$formatted2 = $france->format($number);
print $formatted2 . "\n";
?>