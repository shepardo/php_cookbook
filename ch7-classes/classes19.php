<?php
/*
7.19 Controlling Object Serialization
Problem
You want to control how an object behaves when you serialize() and unserial
ize() it. This is useful when you need to establish and close connections to remote
resources, such as databases, files, and web services.
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

$logfile = new LogFile("hello.txt");
$data = serialize($logfile);
print_r($data);
$newvar = unserialize($data);
print_r($newvar);

?>