<?php
/*
7.4 Implementing Access Control
Problem
You want to assign a visibility to methods and properties so they can only be accessed
within classes that have a specific relationship to the object.
*/
class Person {
  public $name; // accessible anywhere
  protected $age; // accessible within the class and child classes
  private $salary; // accessible only within this specific class
  public function __construct() {
  // ...
  }
  protected function set_age() {
  // ...
  }
  private function set_salary() {
    // ...
  }
  public function dump() {
    print("name: $this->name, age: $this->age, salary: $this->salary\n");
  }
}

$p = new Person();
$p->name = "Juan";
//$p->set_age(10);
$p->dump();


?>