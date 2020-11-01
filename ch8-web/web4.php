<?php
/*
8.4 Building a Query String
Problem
You need to construct a link that includes name/value pairs in a query string.
*/
$vars = array('name' => 'Oscar the Grouch',
  'color' => 'green',
  'favorite_punctuation' => '#');
$query_string = http_build_query($vars);
$url = '/muppet/select.php?' . $query_string;
print $url;
?>