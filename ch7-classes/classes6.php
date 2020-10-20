<?php
/*
7.6 Defining Object Stringification
Problem
You want to control how PHP displays an object when you print it.
*/
class Person {
  public $name;
  public $email;
  // Rest of class here
  public function __toString() {
    return "$this->name <$this->email>";
  }
}

$p = new Person();
$p->name = "Jogn";
$p->email = "f@f.com";
print($p . "\n");

?>