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
$obj = (object)array('message' => "Once upon\t a time\t there was \ta turtle.");
$spaced = tab_expand($obj->message);
print $spaced . "\n";
print $obj->message . "\n";
# it was to be nowdoc instead of heredoc to avoid variable interpolation.
$s = <<< 'END'
function tab_expand_helper($matches) {
  $tab_stop = 8;
  return $matches[1] .
    str_repeat(' ',strlen($matches[2]) *
    $tab_stop - (strlen($matches[1]) % $tab_stop));
}
END;

print tab_expand($s) . "\n";

?>