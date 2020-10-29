<?php
/*
7.20 Introspecting Objects
Problem
You want to inspect an object to see what methods and properties it has, which lets you
write code that works on any generic object, regardless of type.
*/

class LogFile {
  protected $filename;
  protected $handle;
  public function __construct($filename) {
    $this->filename = $filename;
    $this->open();
  }
  private function open() {
    $this->handle = fopen($this->filename, 'a');
  }
  public function __destruct() {
    fclose($this->handle);
  }
    // called when object is serialized
    // should return an array of object properties to serialize
  public function __sleep() {
    return array('filename');
  }
  // called when object is unserialized
  public function __wakeUp() {
    $this->open();
  }
}


Reflection::export(new ReflectionClass('LogFile'));

$logfile = new ReflectionClass('LogFile');
if ($logfile->hasMethod('open')) {
  print("yes it has method open()\n");
}

print ("**********************************************\n");

class Person {
  public $name;
  protected $spouse;
  private $password;
  public function __construct($name) {
    $this->name = $name;
  }
  public function getName() {
    return $name;
  }
  protected function setSpouse(Person $spouse) {
    if (!isset($this->spouse)) {
      $this->spouse = $spouse;
    }
  }
  private function setPassword($password) {
    $this->password = $password;
  }
}

Reflection::export(new ReflectionClass('Person'));
$class = 'LogFile';
$method = 'open';
$reflect = new ReflectionMethod($class, $method);
$file = $reflect->getFileName();
$line = $reflect->getStartLine();
printf ("%s | %s | %d\n", "$method()", $file, $line);



?>