<?php
/*
7.2 Defining Object Constructors
Problem
You want to define a method that is called when an object is instantiated. For example,
you want to automatically load information from a database into an object upon creation.
*/
class user {
  public $username;
  function __construct($username, $password) {
    if ($this->validate_user($username, $password)) {
      $this->username = $username;
    }
  }

  function validate_user($username, $password) {
    print("username: $username, password: $password\n");
  }
}
$user = new user('Grif', 'Mistoffelees'); // using built-in constructor
?>