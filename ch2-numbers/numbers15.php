<?php
/*
2.16 Converting Between Bases
Problem
You need to convert a number from one base to another.
*/

// hexadecimal number (base 16)
$hex = 'a1';
// convert from base 16 to base 10
// $decimal is '161'
$decimal = base_convert($hex, 16, 10);

print "decimal = $decimal\n";

// convert from base 2 to base 10
// $a = 27
$a = bindec(11011);
print "a = $a\n";
// convert from base 8 to base 10
// $b = 27
$b = octdec(33);
print "b = $b\n";
// convert from base 16 to base 10
// $c = 27
$c = hexdec('1b');
print "c = $c\n";
// convert from base 10 to base 2
// $d = '11011'
$d = decbin(27);
print "d = $d\n";
// $e = '33'
$e = decoct(27);
print "e = $e\n";
// $f = '1b'
$f = dechex(27);
print "f = $f\n";

$red = 0;
$green = 102;
$blue = 204;
// $color is '#0066CC'
$color = sprintf('#%02X%02X%02X', $red, $green, $blue);

?>