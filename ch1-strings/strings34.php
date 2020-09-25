<?php
function fixed_width_unpack($format_string,$data) {
  $r = array();
  for ($i = 0, $j = count($data); $i < $j; $i++) {
    $r[$i] = unpack($format_string,$data[$i]);
  }
  return $r;
}

$booklist=<<<END
Elmer Gantry              Sinclair Lewis  1927
The Scarlatti Inheritance Robert Ludlum  1971
The Parsifal Mosaic       William Styron 1979
END;

/*
$packed = pack("A25A15A4", "Elmer Gantry", "Sinclair Lewis", "1927");
var_dump($packed);
$unpacked = unpack("A25A15A4", $packed);
var_dump($unpacked);
die();
*/
$books = explode("\n",$booklist);

$book_array = fixed_width_unpack('A25title/A15author/A4publication_year',$books);

print "<table>\n";
// print a header row
print '<tr><td>';
print join('</td><td>',array_keys($book_array[0]));
print "</td></tr>\n";
// print each data row
foreach ($book_array as $row) {
print '<tr><td>';
print join('</td><td>',array_values($row));
print "</td></tr>\n";
}
print "</table>\n";
/*
foreach ($book_array as $b) {
  foreach ($b as $f) {
    print $f."\n";
  }
}
*/
?>