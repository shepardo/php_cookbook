<?php
/*
8.8 Reading an HTTP Header
Problem
You want to read an HTTP request header.
*/

// User-Agent Header
echo $_SERVER['HTTP_USER_AGENT'];
// For all headers, call getallheaders():
$headers = getallheaders();
echo $headers['User-Agent'];
?>