<?php
/*
4.8 Turning an Array into a String
Problem
You have an array, and you want to convert it into a nicely formatted string
*/
// make a comma delimited list
$array = array('banana', 'apple', 'grape', 'watermelon', 'strawberry', 'orange', 'guava');
$string = join(',', $array);
print $string . "\n";

$string = '';
foreach ($array as $key => $value) {
  $string .= ",$value";
}
$string = substr($string, 1); // remove leading ","
print $string . "\n";

/*
$left = '<b>';
$right = '</b>';
$html = $left . join("$right,$left", $html) . $right;

$string = '';
foreach ($fields as $key => $value) {
  // don't include password
  if ('password' != $key) {
    $string .= ",<b>$value</b>";
  }
}
$string = substr($string, 1); // remove leading ","

$string = '';
foreach ($fields as $key => $value) {
  // don't include password
  if ('password' != $value) {
    if (!empty($string)) { $string .= ','; }
    $string .= "<b>$value</b>";
  }
}
*/
?>