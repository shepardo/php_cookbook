<?php
/*
8.6 Using HTTP Basic or Digest Authentication
Problem
You want to use PHP to protect parts of your website with passwords. Instead of storing
the passwords in an external file and letting the web server handle the authentication,
you want the password verification logic to be in a PHP program.
*/
if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == '123') {
  echo "Access granted!";
} else {
  http_response_code(401);
  header('WWW-Authenticate: Basic realm="My Website"');
  echo "You need to enter a valid username and password.";
  exit();
}

?>