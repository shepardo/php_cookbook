<?php
function tab_expand($text) {
  while (strstr($text,"\t")) {
    $text = preg_replace_callback('/^([^\t\n]*)(\t+)/m',
      'tab_expand_helper', $text);
  }
  return $text;
}

function tab_expand_helper($matches) {
  $tab_stop = 8;
  print "$tab_stop - $strlen($matches[1])\n";
  return $matches[1] .
    str_repeat(' ',strlen($matches[2]) *
    $tab_stop - (strlen($matches[1]) % $tab_stop));
}

function tab_unexpand($text) {
  $tab_stop = 8;
  $lines = explode("\n",$text);
  foreach ($lines as $i => $line) {
    // Expand any tabs to spaces
    $line = tab_expand($line);
    $chunks = str_split($line, $tab_stop);
    $chunkCount = count($chunks);
    // Scan all but the last chunk
    for ($j = 0; $j < $chunkCount - 1; $j++) {
      $chunks[$j] = preg_replace('/ {2,}$/',"\t",$chunks[$j]);
    }
    // If the last chunk is a tab-stop's worth of spaces
    // convert it to a tab; Otherwise, leave it alone
    if ($chunks[$chunkCount-1] == str_repeat(' ', $tab_stop)) {
      $chunks[$chunkCount-1] = "\t";
    }
    // Recombine the chunks
    $lines[$i] = implode('',$chunks);
  }
  // Recombine the lines
  return implode("\n",$lines);
}
$obj = (object)array('message' => 'Once upon    a time  there was  a turtle.');
$tabbed = tab_unexpand($obj->message);
print $tabbed . "\n";
?>