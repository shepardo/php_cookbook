<?php
/*
6.2 Setting Default Values for Function Parameters
Problem
You want a parameter to have a default value if the function’s caller doesn’t pass it. For
example, a function to wrap text in an HTML tag might have a parameter for the tag
name, which defaults to strong if none is given.
*/
function wrap_in_html_tag($text, $tag = 'strong') {
  return "<$tag>$text</$tag>";
}
print wrap_in_html_tag("Look over there!", "em");

$my_favorite_html_tag = 'blink';

function wrap_in_html_tag2($text, $tag = 'blink') {
  return "<$tag>$text</$tag>";
}

print wrap_in_html_tag2('chomp chomp') . "\n";
print wrap_in_html_tag2('chomp chomp', 'kiko') . "\n";

function log_db_error($message = NULL) {
  if (is_null($message)) {
    $message = "Couldn't connect to DB";
  }
  error_log("[DB] [$message]");
}

print_r(log_db_error(null));
print_r(log_db_error('Fatar error on x3903434'));
?>