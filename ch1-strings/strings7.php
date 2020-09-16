<?php
$_POST['email'] = 'f@f.com';
if (strpos($_POST['email'], '@') === false) {
  print 'There was no @ in the e-mail address!';
} else {
  print 'Yes, there was @ in the e-mail address ' . $_POST['email'] . '\n';
  print "Yes, there was @ in the e-mail address {$_POST['email']}\n";
}
