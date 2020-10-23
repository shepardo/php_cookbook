<?php
/*
7.11 Overriding Property Accesses
Problem
You want handler functions to execute whenever you read and write object properties.
This lets you write generalized code to handle property access in your class.

Implementing these two methods isn’t required when using __get() and __set(), but
it’s best to do so because it’s hard to predict how you may use object properties. Failing
to code these methods will lead to confusion when someone (perhaps even yourself)
doesn’t know (or forgets) that this class is using magic accessor methods.

Other reasons to consider not using magical accessors are:
• They’re relatively slow. They’re both slower than direct property access and explicitly
writing accessor methods for all your properties.
• They make it impossible for the Reflection classes and tools such as phpDocumentor
to automatically document your code.
• You cannot use them with static properties.
*/

class Person {
  private $__data = array();
  public function __construct() {
    $this->__data['email'] = '';
  }
  public function __get($property) {
    if (isset($this->__data[$property])) {
      return $this->__data[$property];
    } else {
      return false;
    }
  }
  /*
  public function __set($property, $value) {
    $this->__data[$property] = $value;
  }*/
  // enforce the restriction of only setting
  // predefined properties
  public function __set($property, $value) {
    if (isset($this->__data[$property])) {
      return $this->__data[$property] = $value;
    } else {
      return false;
    }
  }

  public function __isset($property) {
    return isset($this->data[$property]);
  }
  public function __unset($property) {
    if (isset($this->data[$property])) {
      unset($this->data[$property]);
    }
  }
}

$johnwood = new Person;
$johnwood->email = 'jonathan@wopr.mil'; // sets $user->__data['email']
print $johnwood->email . "\n"; // reads $user->__data['email']
$person->__data['fake_property'] = 'fake_data';

?>