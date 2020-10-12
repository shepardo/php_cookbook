<?php
/*
4.25 Accessing an Object Using Array Syntax
Problem
You have an object, but you want to be able to read and write data to it as an array. This
allows you to combine the benefits from an object-oriented design with the familiar
interface of an array.
*/
class FakeArray implements ArrayAccess {
  private $elements;

  public function __construct() {
    $this->elements = array();
  }

  public function offsetExists($offset) {
    return isset($this->elements[$offset]);
  }

  public function offsetGet($offset) {
    return $this->elements[$offset];
  }

  public function offsetSet($offset, $value) {
    return $this->elements[$offset] = $value;
  }

  public function offsetUnset($offset) {
    unset($this->elements[$offset]);
  }
}
$array = new FakeArray;
// What's Opera, Doc?
$array['animal'] = 'wabbit';
// Be very quiet I'm hunting wabbits
if (isset($array['animal']) &&
  // Wabbit tracks!!!
  $array['animal'] == 'wabbit') {
  // Kill the wabbit, kill the wabbit, kill the wabbit
  unset($array['animal']);
  // Yo ho to oh! Yo ho to oh! Yo ho...
}
// What have I done?? I've killed the wabbit....
// Poor little bunny, poor little wabbit...
if (!isset($array['animal'])) {
  print "Well, what did you expect in an opera? A happy ending?\n";
}
?>