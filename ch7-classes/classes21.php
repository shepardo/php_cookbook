<?php
/*
7.21 Checking If an Object Is an Instance of a Specific Class
Problem
You want to check if an object is an instance of a specific class.
*/

class AddressBook {
  public function add(Person $person) {
  // add $person to address book
    if (!($person instanceof Person)) {
      print("Argument 1 must be an instance of Person");
    }
  }
}

class Person { 
  public function __construct($name) {
    $this->name = $name;
  }
  public function dump() {
    print("$this->name\n");
  }
 }

class Kid extends Person { 
  public function __construct($name) {
    parent::__construct($name);
  }
  public function dump() {
    print("$this->name its a kid!\n");
  }
 }

$book = new AddressBook;
//$person = 'Rasmus Lerdorf';
$person = new Person('Rasmus Lerdorf');
$book->add($person);

$kid = new Kid('Daniel el travieso');
if ($kid instanceof Person) {
  print "Kids are people, to.\n";
  $kid->dump();
}

?>