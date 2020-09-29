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


function squares($start, $stop) {
    if ($start < $stop) {
      for ($i = $start; $i <= $stop; $i++) {
        yield $i => $i * $i;
      }
    }
    else {
      for ($i = $stop; $i >= $start; $i--) {
      yield $i => $i * $i;
    }
  }
}


foreach (squares(3, 15) as $n => $square) {
  printf("%d squared is %d\n", $n, $square);
}



?>