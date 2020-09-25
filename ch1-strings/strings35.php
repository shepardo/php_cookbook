<?php

function fixed_width_substr($fields, $data) {
  $r = array();
  for ($i = 0, $j = count($data); $i < $j; $i++) {
    $line_pos = 0;
    foreach($fields as $field_name => $field_length) {
      $r[$i][$field_name] = rtrim(substr($data[$i], $line_pos, $field_length));
      #print $r[$i][$field_name]."\n";
      $line_pos += $field_length;
    }
  }
  return $r;
}

$booklist=<<<END
Elmer Gantry              Sinclair Lewis 1927
The Scarlatti Inheritance Robert Ludlum  1971
The Parsifal Mosaic       William Styron 1979
Sophie's Choice           William Styron 1979
END;

$book_fields = array('title' => 25,
'author' => 15,
'publication_year' => 4);
$book_array = fixed_width_substr($book_fields,$data = explode("\n", $booklist));
foreach ($book_array as $b) {
  foreach ($b as $f) {
    print $f."\n";
  }
}

?>