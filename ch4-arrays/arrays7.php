<?php
/*
4.7 Appending One Array to Another
Problem
You want to combine two arrays into one.
*/
//$garden = array_merge($fruits, $vegetables);

$p_languages = array('Perl', 'PHP');
$p_languages = array_merge($p_languages, array('Python'));
print_r($p_languages);

$lc = array('a', 'b' => 'b'); // lowercase letters as values
$uc = array('A', 'b' => 'B'); // uppercase letters as values
$ac = array_merge($lc, $uc); // all-cases?
print_r($ac);

print_r($uc + $lc);
print_r($lc + $uc);

?>