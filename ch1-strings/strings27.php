<?php
/*
1.11 Generating Comma-Separated Data
Problem
You want to format data as comma-separated values (CSV) so that it can be imported
by a spreadsheet or database.
*/

$sales = array( array('Northeast','2005-01-01','2005-02-01',12.54),
  array('Northwest','2005-01-01','2005-02-01',546.33),
  array('Southeast','2005-01-01','2005-02-01',93.26),
  array('Southwest','2005-01-01','2005-02-01',945.21),
  array('All Regions','--','--',1597.34) );
//$filename = './sales.csv';
$filename = 'php://output';
// ob_start, ob_end_client & ob_get_contents are used for capturing output from php://output
ob_start();
$fh = fopen($filename,'w') or die("Can't open $filename");
foreach ($sales as $sales_line) {
  if (fputcsv($fh, $sales_line) === false) {
    die("Can't write CSV line");
  }
}
fclose($fh) or die("Can't close $filename");
$output = ob_get_contents();
ob_end_clean();
print "output is $output\n";
?>