<?php
/*
Companion script for arrays24.php, generates the input file used by the other script.
*/
$myfile = fopen("log.txt", "w");
for ($i = 0; $i < 100; $i++) {
  $txt = '';
  if (rand(1, 10) == 2) {
    $txt = "Rasmus: Lerdof\n";
  } else {
    $txt = "John Doe\n";
  }
  fwrite($myfile, $txt);
}
fclose($myfile);
?>