<?php
$_GET['username'] = 'animalito';
$string = 'hello world';
$start = 3;
$length = 5;
$substring = substr($string,$start,$length);
$username = substr($_GET['username'],0,8);
print "substring is '$substring'\n";
print "username is '$username'\n";
