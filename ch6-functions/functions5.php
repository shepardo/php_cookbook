<?php
/*
6.5 Enforcing Types of Function Arguments
Problem
You want to ensure argument values have certain types.
*/
function must_be_an_array(array $fruits) {
  foreach ($fruits as $fruit) {
    print "$fruit\n";
  }
}
function array_or_null_is_ok(array $fruits = null) {
  if (is_array($fruits)) {
    foreach ($fruits as $fruit) {
      print "$fruit\n";
    }
  }
}

?>