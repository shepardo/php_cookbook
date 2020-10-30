<?php
class Person { 
  public function __construct($name) {
    $this->name = $name;
  }
  public function dump() {
    print("$this->name\n");
  }
}
?>