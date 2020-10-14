<?php
/*
5.2 Establishing a Default Value
Problem
You want to assign a default value to a variable that doesn’t already have a value. It often
happens that you want a hardcoded default value for a variable that can be overridden
from form input or through an environment variable.
*/
$default_cars = 'Koenigsegg Regera';
if (! isset($cars)) {
  $cars = $default_cars;
}
print $cars . "\n";
$vehicles = array('cars' => null);
// array_key_exists() returns TRUE because the key is present.
$ake_result = array_key_exists('cars', $vehicles);
print $ake_result . "\n";
// isset() returns values because the key's value is NULL
$isset_result = isset($vehicles['cars']);
$defaults = array('emperors' => array('Rudolf II','Caligula'),
  'vegetable' => 'celery',
  'acres' => 15);
foreach ($defaults as $k => $v) {
  if (! isset($GLOBALS[$k])) { $GLOBALS[$k] = $v; }
}
print ":$emperors"."\n";
?>