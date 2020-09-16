<?php
$string = "This weekend, I'm going shopping for a pet chicken.";
$vowels = 0;
for ($i = 0, $j = strlen($string); $i < $j; $i++) {
//for ($i = 0; $i < strlen($string); $i++) {
  if (strstr('aeiouAEIOU',$string[$i])) {
    $vowels++;
  }
}
print "there are $vowels vowels.\n";
