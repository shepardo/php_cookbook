<?php
/*
2.17 Calculating Using Numbers in Bases Other Than
Decimal
Problem
You want to perform mathematical operations with numbers formatted not in decimal,
but in octal or hexadecimal. For example, you want to calculate web-safe colors in hexadecimal.
*/

for ($i = 0x1; $i < 0x10; $i++) {
  print "$i\n";
}

for ($i = 0x1; $i < 0x10; $i++) { print dechex($i) . "\n"; }

function times_33_hash($str) {
  $h = 5381;
  for ($i = 0, $j = strlen($str); $i < $j; $i++) {
    // Shifting $h left by 5 bits is a quick way to multiply by 32
    $h += ($h << 5) + ord($str[$i]);
  }
  return $h;
}

print times_33_hash("Once, I ate a papaya.") . "\n";

function times_33_hash2($str) {
  $h = 5381;
  for ($i = 0, $j = strlen($str); $i < $j; $i++) {
    // Shifting $h left by 5 bits is a quick way to multiply by 32
    $h += ($h << 5) + ord($str[$i]);
    // Only keep the lower 32 bits of $h
    $h = $h & 0xFFFFFFFF;
  }
  return $h;
}

print times_33_hash2("Once, I ate a papaya.") . "\n";



?>