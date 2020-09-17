<?php
/*
1.13 Generating Fixed-Width Field Data Records
Problem
You need to format data records such that each field takes up a set amount of characters.
*/
$books = array( array('Elmer Gantry', 'Sinclair Lewis', 1927),
array('The Scarlatti Inheritance','Robert Ludlum', 1971),
array('The Parsifal Mosaic','William Styron', 1979) );
foreach ($books as $book) {
  /* The format string A25A14A4 tells pack() to transform its subsequent arguments into a
  25-character space-padded string, a 14-character space-padded string, and a 4-
  character space-padded string.
  */
  print pack('A25A15A4', $book[0], $book[1], $book[2]) . "\n";
}
?>