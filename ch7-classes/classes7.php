<?php
/*
7.7 Requiring Multiple Classes to Behave Similarly
Problem
You want multiple classes to use the same methods, but it doesn’t make sense for all the
classes to inherit from a common parent class.
*/
interface NameInterface {
  public function getName();
  public function setName($name);
 }
class Book implements NameInterface {
  private $name;
  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    return $this->name = $name;
  }
}

trait NameTrait {
  private $name;
  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    return $this->name = $name;
  }
}
class Book2 {
  use NameTrait;
}
class Child2 {
  use NameTrait;
}

$b = new Book();
$b->setName('Juan');
print($b->getName() . "\n");


$b = new Book2();
$b->setName('Juan');
print($b->getName() . "\n");
?>