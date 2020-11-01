<?php
/*
8.2 Reading Cookie Values
Problem
You want to read the value of a cookie that you’ve previously set.
*/
if (isset($_COOKIE['flavor'])) {
  print "You ate a {$_COOKIE['flavor']} cookie.";
}
print "<br/>";
foreach ($_COOKIE as $cookie_name => $cookie_value) {
  print "$cookie_name = $cookie_value <br/>";
}
?>