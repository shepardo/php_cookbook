<?php
/*
6.12 Accessing a Global Variable Inside a Function
Problem
You need to access a global variable inside a function.
*/
$chew_count = 3;
function eat_fruit($fruit) {
  global $chew_count;
  for ($i = $chew_count; $i > 0; $i--) {
    print ("chew: $i for $fruit\n");
  }
}

function eat_fruit2($fruit) {
  for ($i = $GLOBALS['chew_count']; $i > 0; $i--) {
    print ("chew: $i for $fruit\n");
  }
}

eat_fruit("apple");
eat_fruit("watermelon");

$food = 'pizza';
$drink = 'beer';
function party() {
  global $food, $drink;
  unset($food); // eat pizza
  unset($GLOBALS['drink']); // drink beer
}
print "$food: $drink\n";
party();
print "$food: $drink\n"

?>