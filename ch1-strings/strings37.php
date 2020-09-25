<?php
$s = "Four score and seven years ago our fathers brought forth on this continent ↵
a new nation, conceived in liberty and dedicated to the proposition ↵
that all men are created equal.";
#print "<pre>\n".wordwrap($s, 50)."\n</pre>";
#print wordwrap($s, 50);
print wordwrap($s,50,"\n\n")."\n";
print wordwrap('jabberwocky',5) . "\n";
print wordwrap('jabberwocky',5,"\n",1);
?>