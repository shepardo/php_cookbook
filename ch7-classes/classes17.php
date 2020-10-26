<?php
/*
7.17 Defining Class Constants
Problem
You want to define constants on a per-class basis, not on a global basis.
*/
class Math {
  const pi = 3.14159; // universal
  const e = 2.71828; // constants
}
$radius = 10;
$area = math::pi * $radius * $radius;
print($area . "\n");

define('pi', 10); // global pi constant

class Circle {
  const pi = 3.14159;
  protected $radius;
  public function __construct($radius) {
    $this->radius = $radius;
  }
  public function circumference() {
    return 2 * self::pi * $this->radius;
  }
}

$c = new circle(1);
print $c->circumference() . "\n";

?>