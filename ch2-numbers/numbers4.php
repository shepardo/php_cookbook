<?php
/*
2.4 Operating on a Series of Integers
Problem
You want to apply a piece of code to a range of integers
*/
$start = 3;
$end = 7;
for ($i = $start; $i <= $end; $i++) {
  printf("%d squared is %d\n", $i, $i * $i);
}

$start = 3;
$end = 7;
for ($i = $start; $i <= $end; $i += 2) {
  printf("The odd number %d squared is %d\n", $i, $i * $i);
}

$numbers = range(3, 7);
foreach ($numbers as $n) {
  printf("%d squared is %d\n", $n, $n * $n);
}

foreach ($numbers as $n) {
  printf("%d cubed is %d\n", $n, $n * $n * $n);
}

print_r(range('l', 'p'));

?>