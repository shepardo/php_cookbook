<?php
/*
7.13 Aggregating Objects
Problem
You want to compose two or more objects together so that they appear to behave as a
single object.
*/
class Address {
  protected $city;
  public function setCity($city) {
    $this->city = $city;
  }
  public function getCity() {
    return $this->city;
  }
}

class Person {
  protected $name;
  protected $address;
  public function __construct() {
    $this->address = new Address;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function __call($method, $arguments) {
    if (method_exists($this->address, $method)) {
      return call_user_func_array(
      array($this->address, $method), $arguments);
    }
  }
}
$rasmus = new Person;
$rasmus->setName('Rasmus Lerdorf');
$rasmus->setCity('Sunnyvale');
print $rasmus->getName() . ' lives in ' . $rasmus->getCity() . ".\n";
?>