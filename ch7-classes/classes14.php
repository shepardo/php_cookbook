<?php
/*
7.14 Accessing Overridden Methods
Problem
You want to access a method in the parent class that’s been overridden in the child.
*/
class shape {
  function __construct() {

  }
  function draw($origin, $radius) {
    // write to screen
    print("shape::draw\n");
  }
}
class circle extends shape {
  function __construct($x, $y, $r) {
    // call shape's constructor first
    parent::__construct();
  }
  function draw($origin, $radius) {
    // validate data
    if ($radius > 0) {
      parent::draw($origin, $radius);
      print("circle::draw\n");
      return true;
    }
    return false;
  }
}

$origin = 10;
$radius = 20;
$circle = new circle(1,2,3);
if ($circle->draw($origin, $radius)) {
  print("yes\n");
}

?>