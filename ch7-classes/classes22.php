<?php
/*
7.22 Autoloading Class Files upon Object Instantiation
Problem
You don’t want to include all your class definitions within every page. Instead, you want
to dynamically load only the ones necessary in that page.
*/
function __autoload($class_name) {
  include "$class_name.php";
}
$person = new Person('juan');
$person->dump();
?>
