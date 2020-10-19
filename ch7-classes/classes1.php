<?php
/*
7.1 Instantiating Objects
Problem
You want to create a new instance of an object.
*/
class user {
  function load_info($username) {
    // load profile from database
    print("loading info for $username\n");
  }
}
$_GET['username'] = "admin";
$user = new user;
$user->load_info($_GET['username']);
$adam = new user;
$adam->load_info('adam');
$dave = new user;
$dave->load_info('adam');
?>