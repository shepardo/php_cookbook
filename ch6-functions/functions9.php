<?php
/*
6.9 Skipping Selected Return Values
Problem
A function returns multiple values, but you only care about some of them.
*/
// Only care about minutes
function time_parts($time) {
  return explode(':', $time);
}
list(, $minute,) = time_parts('12:34:56');
print("minute: $minute\n");


?>