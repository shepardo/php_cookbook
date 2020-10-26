<?php
/*
7.15 Creating Methods Dynamically
Problem
You want to dynamically provide methods without explicitly defining them.
*/
class User {
  static function find($args) {
    // here's where the real logic lives
    // for example a database query:
    // SELECT user FROM users WHERE $args['field'] = $args['value']
    $s = implode(' ', $args);
    print("find invoked with args: {$s}\n");
    // php string interpolation cannot evaluate functions
    //print(eval("find invoked with args: {implode(' ', $args)}\n"));
  }
  static function __callStatic($method, $args) {
    if (preg_match('/^findBy(.+)$/', $method, $matches)) {
      return static::find(array('field' => $matches[1],
        'value' => $args[0]));
    }
  }
}
$user = User::findById(123);
$user = User::findByEmail('rasmus@php.net');
?>