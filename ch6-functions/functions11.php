<?php
/*
6.11 Calling Variable Functions
Problem
You want to call different functions depending on a variable’s value.
*/
function get_file($filename) { return print("File contents obtained for $filename!\n"); }
$function = 'get_file';
$filename = 'graphic.png';
// calls get_file('graphic.png')
call_user_func($function, $filename);

function put_file($filename, $d) {
  //return file_put_contents($filename, $d); 
  print ("writing contents for $filename\n");
}

$graphic = 'pic.jpg';
//if ($action == 'get') {
  $function = 'get_file';
  $args = array('graphic.png');
//} elseif ($action == 'put') {
  $function = 'put_file';
  $args = array('graphic.png', $graphic);
//}
// calls get_file('graphic.png')
// calls put_file('graphic.png', $graphic)
call_user_func_array($function, $args);

?>