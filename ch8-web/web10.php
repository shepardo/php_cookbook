<?php
/*
8.10 Sending a Specific HTTP Status Code
Problem
You want to explicitly set the HTTP status code. For example, you want to indicate that
the user is unauthorized to view the page or the page is not found.
*/

http_response_code(401);