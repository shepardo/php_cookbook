<?php
/*
2.1 Checking Whether a Variable Contains a Valid Number
Problem
You want to ensure that a variable contains a number, even if it’s typed as a string.
Alternatively, you want to check if a variable is not only a number, but is also specifically
typed as one.
*/
foreach ([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200']
  as $maybeNumber) {
  $isItNumeric = is_numeric($maybeNumber);
  $actualType = gettype($maybeNumber);
  print "Is the $actualType $maybeNumber numeric? ";
  if (is_numeric($maybeNumber)) {
    print "yes";
  } else {
    print "no";
  }
  print "\n";
}
?>