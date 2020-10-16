<?php
/*
6.3 Passing Values by Reference
Problem
You want to pass a variable to a function and have it retain any changes made to its value
inside the function.
*/
$mytext = 'john rambo';
print($mytext . "\n");
function wrap_in_html_tag(&$text, $tag = 'strong') {
  $text = "<$tag>$text</$tag>";
}
wrap_in_html_tag($mytext);
print($mytext . "\n");

?>