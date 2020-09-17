
<?php
/*
1.12 Parsing Comma-Separated Data
Problem
You have data in comma-separated values (CSV) format—for example, a file exported
from Excel or a database—and you want to extract the records and fields into a format
you can manipulate in PHP.
*/
$filename = './sales.csv';
$fp = fopen($filename,'r') or die("can't open file");
print "<table>\n";
while($csv_line = fgetcsv($fp)) {
  print '<tr>';
  for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
    print '<td>'.htmlentities($csv_line[$i]).'</td>';
  }
  print "</tr>\n";
}
print "</table>\n";
fclose($fp) or die("can't close file");
?>