<?php
/*
1.7 Expanding and Compressing Tabs
Problem
You want to change spaces to tabs (or tabs to spaces) in a string while keeping text
aligned with tab stops. For example, you want to display formatted text to users in a
standardized way.

see also https://www.php.net/manual/en/language.types.object.php
*/
//$rows = $db->query('SELECT message FROM messages WHERE id = 1');
//$obj = $rows->fetch(PDO::FETCH_OBJ);
$obj = (object)array('message' => 'tok tok');
$tabbed = str_replace(' ' , "\t", $obj->message);
$spaced = str_replace("\t", ' ' , $obj->message);
print "With Tabs: <pre>$tabbed</pre>" . "\n";
print "With Spaces: <pre>$spaced</pre>" . "\n";
