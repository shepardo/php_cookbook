<?php
/*
2.3 Rounding Floating-Point Numbers
Problem
You want to round a floating-point number, either to an integer value or to a set number
of decimal places.
*/
$number = round(2.4);
printf("2.4 rounds to the float %s", $number);

$number = ceil(2.4);
printf("2.4 rounds up to the float %s", $number);

$number = floor(2.4);
printf("2.4 rounds down to the float %s", $number);

$number = round(2.5);
printf("Rounding a positive number rounds up: %s\n", $number);

$number = round(-2.5);
printf("Rounding a negative number rounds down: %s\n", $number);

$cart = 54.23;
$tax = $cart * .05;
$total = $cart + $tax;
$final = round($total, 2);
print "Tax calculation uses all the digits it needs: $total, but ";
print "round() trims it to two decimal places: $final\n";

$number1 = floor(2.1); // floor(2.1) is the float 2.0
$number2 = floor(2.9); // floor(2.9) is the float 2.0, also
$number3 = floor(-2.1); // floor(-2.1) is the float -3.0
$number4 = floor(-2.9); // floor(-2.9) is the float -3.0, also

print "$number1, $number2, $number3, $number4\n";

$number1 = ceil(2.1); // ceil(2.1) is the float 3.0
$number2 = ceil(2.9); // ceil(2.9) is the float 3.0, also
$number3 = ceil(-2.1); // ceil(-2.1) is the float -2.0
$number4 = ceil(-2.9); // ceil(-2.9) is the float 2.0, also

print "$number1, $number2, $number3, $number4\n";

?>