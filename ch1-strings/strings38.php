<?php
$packed = pack('S4',1974,106,28225,32725);
$nums = unpack('S4num',$packed);
//print $packed;
print "\n";
print_r( $nums);
/*
foreach($num as $n) {
  print $n . "\n";
}*/
#print $nums . "\n";

$s = 'platypus';
$ascii = unpack('c*',$s);
print_r($ascii);

?>