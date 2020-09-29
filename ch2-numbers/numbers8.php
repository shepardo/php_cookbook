
<?php
/*
2.9 Calculating Exponents
Problem
You want to raise a number to a power
*/
// $exp (e squared) is about 7.389
$exp = exp(2);
print $exp . "\n";
// $exp (2^e) is about 6.58
$exp = pow( 2, M_E);
// $pow1 (2^10) is 1024
$pow1 = pow( 2, 10);
// $pow2 (2^-2) is 0.25
$pow2 = pow( 2, -2);
// $pow3 (2^2.5) is about 5.656
$pow3 = pow( 2, 2.5);
// $pow4 ( (-2)^10 ) is 1024
$pow4 = pow(-2, 10);
// is_nan($pow5) returns true, because
// fractional exponent of negative 2 is not a real number.
$pow5 = pow(-2, -2.5);

print $exp . "\n";
print $pow1 . "\n";
print $pow2 . "\n";
print $pow3 . "\n";
print $pow4 . "\n";
print $pow5 . "\n";
?>