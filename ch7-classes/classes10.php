<?php
/*
7.10 Cloning Objects
Problem
You want to copy an object.
*/
class Address {
  protected $city;
  protected $country;
  public function setCity($city) { $this->city = $city; }
  public function getCity() { return $this->city; }
  public function setCountry($country) { $this->country = $country; }
  public function getCountry() { return $this-> country;}
}

class Person {
  protected $name;
  protected $address;
  public function __construct() { $this->address = new Address; }
  public function setName($name) { $this->name = $name; }
  public function getName() { return $this->name; }
  public function __call($method, $arguments) {
    if (method_exists($this->address, $method)) {
      return call_user_func_array( array($this->address, $method), $arguments);
    }
  }
  public function __clone() {
    $this->address = clone $this->address;
  }
}

$rasmus = new Person;
$rasmus->setName('Rasmus Lerdorf');
$rasmus->setCity('Sunnyvale');
$zeev = clone $rasmus;
$zeev->setName('Zeev Suraski');
$zeev->setCity('Tel Aviv');
print $rasmus->getName() . ' lives in ' . $rasmus->getCity() . ".\n";
print $zeev->getName() . ' lives in ' . $zeev->getCity() . ".\n";
?>