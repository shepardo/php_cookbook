<?php
/*
7.18 Defining Static Properties and Methods
Problem
You want to define methods in an object, and be able to access them without instantiating
a object.
*/

class Format {
  public static function number($number, $decimals = 2,
    $decimal = '.', $thousands = ',') {
    return number_format($number, $decimals, $decimal, $thousands);
  }
  public static function integer($number) {
    return self::number($number, 0);
  }
}
print Format::number(1234.567) . "\n";
print Format::integer(1234.567) . "\n";

class Model {
  protected static function validateArgs($args) {
    throw new Exception("You need to override this in a subclass!");
  }
  public static function find($args) {
    static::validateArgs($args);
    $class = get_called_class();
    print($class . "\n");
    // now you can do a database query, such as:
    // SELECT * FROM $class WHERE ...
  }
}
class Bicycle extends Model {
  protected static function validateArgs($args) {
    print("validateArgs\n");
    return true;
  }
}
Bicycle::find(['owner' => 'peewee']);

?>