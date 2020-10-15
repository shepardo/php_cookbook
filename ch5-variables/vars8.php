<?php
/*
5.8 Dumping Variable Contents as Strings
Problem
You want to inspect the values stored in a variable. It may be a complicated nested array
or object, so you can’t just print it out or loop through it.
*/
$info = array('name' => 'frank', 12.6, array(3, 4));
print_r($info);
$info = array('name' => 'frank', 12.6, array(3, 4));
var_dump($info);
$info = array('name' => 'frank', 12.6, array(3, 4));
var_export($info);

$user_1 = array('name' => 'Max Bialystock',
'username' => 'max');
$user_2 = array('name' => 'Leo Bloom',
'username' => 'leo');
// Max and Leo are friends
$user_2['friend'] = &$user_1;
$user_1['friend'] = &$user_2;
// Max and Leo have jobs
$user_1['job'] = 'Swindler';
$user_2['job'] = 'Accountant';


print_r($user_2);
var_dump($user_2);
var_export($user_2);

?>