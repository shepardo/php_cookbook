<?php
/*
8.5 Reading the POST Request Body
Problem
You want direct access to the body of a request, not just the parsed data that PHP puts
in $_POST for you. For example, you want to handle an XML document that’s been posted
as part of a web services request.
*/
$body = file_get_contents('php://input');
print $body;
?>