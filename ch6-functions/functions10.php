<?php
/*
6.10 Returning Failure
Problem
You want to indicate failure from a function.
*/
function lookup($name) {
  if (empty($name)) { return false; }
}
$name = 'alice';
if (false !== lookup($name)) {
  /* act upon lookup */
} else {
  /* log an error */
}
function myfunc($val) {
  return $val - 1;
}
if (myfunc(2)) {
  print ("1 is not false\n");
}

if (myfunc(1)) {
  // this doesn't print
  print ("0 is not false\n");
}

if (myfunc(1) != false) {
  // this doesn't print
  print ("0 again is not false\n");
}

if (myfunc(1) !== false) {
  print ("0 again is not false\n");
}

?>