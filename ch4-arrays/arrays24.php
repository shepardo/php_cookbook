<?php
/*
4.24 Iterating Efficiently over Large or Expensive Datasets
Problem
You want to iterate through a list of items, but the entire list takes up a lot of memory
or is very slow to generate.
*/
function FileLineGenerator($file) {
  if (!$fh = fopen($file, 'r')) {
    return;
  }
  while (false !== ($line = fgets($fh))) {
    yield $line;
  }
  fclose($fh);
}  
$file = FileLineGenerator('log.txt');
foreach ($file as $line) {
  if (preg_match('/^Rasmus: /', $line)) { print $line; }
}


?>