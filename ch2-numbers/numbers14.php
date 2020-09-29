<?php
/*
2.15 Handling Very Large or Very Small Numbers
Problem
You need to use numbers that are too large (or small) for PHP’s built-in floating-point
numbers.
Solution
Use either the BCMath or GMP libraries.
*/
//require_once('big_int.php');

if (!function_exists('bcadd')) {
  print "Cannot use BCMath\n";
}
if (!function_exists('gmp_init')) {
  print "Cannot use GMP\n";
}
// $sum = "9999999999999999"
$sum = bcadd('1234567812345678', '8765432187654321');
print gmp_strval($sum) . "\n"; // prints 9999999999999999
$sum = gmp_add('1234567812345678', '8765432187654321');
// $sum is now a GMP resource, not a string; use gmp_strval() to convert
print gmp_strval($sum) . "\n"; // prints 9999999999999999

$four = gmp_add(2, 2); // You can pass integers
$eight = gmp_add('4', '4'); // Or strings
$twelve = gmp_add($four, $eight); // Or GMP resources

// Raising a number to a power
$pow = gmp_pow(2, 10);
// Computing large factorials very quickly
$factorial = gmp_fact(20);
// Finding a GCD
$gcd = gmp_gcd(123, 456);
// Other fancy mathematical stuff
$legendre = gmp_legendre(1, 7);

print "pow = $pow\n";
print "factorial = $factorial\n";
print "gcd = $gcd\n";
print "legendre = $legendre\n";


// The following code commented out, since bit_int library is no longer maintained according to
// https://pecl.php.net/package/big_int
// But source code still available since
// https://github.com/valyala/big_int
/*
$two = bi_from_str('2');
$four = bi_add($two, $two);
// Use bi_to_str() to get strings from big_int resources
print bi_to_str($four); // prints 4
// Computing large factorials very quickly
$factorial = bi_fact(20);


print "factorial = $factorial\n";
*/
?>