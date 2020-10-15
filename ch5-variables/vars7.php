<?php
/*
5.7 Encapsulating Complex Data Types in a String
Problem
You want a string representation of an array or object for storage in a file or database.
This string should be easily reconstitutable into the original array or object.
*/
//$file = './tmp/pantry';
$file = 'pantry.json';
$pantry = array('sugar' => '2 lbs.','butter' => '3 sticks');
$fp = fopen($file,'w') or die ("Can't open pantry");
fputs($fp,serialize($pantry));
fclose($fp);
// $new_pantry will be the array:
// array('sugar' => '2 lbs.','butter' => '3 sticks'
$new_pantry = unserialize(file_get_contents($file));
$pantry = array('sugar' => '2 lbs.','butter' => '3 sticks');
$fp = fopen($file,'w') or die ("Can't open pantry");
fputs($fp,json_encode($pantry));
fclose($fp);
// $new_pantry will be the array:
// array('sugar' => '2 lbs.','butter' => '3 sticks')
$new_pantry = json_decode(file_get_contents($file), TRUE);
print_r($new_pantry);

?>