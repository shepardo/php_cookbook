<?php
/*
6.4 Using Named Parameters
Problem
You want to specify your arguments to a function by name, instead of simply their
position in the function invocation.
*/
function image($img) {
  $tag = '<img src="' . $img['src'] . '" ';
  $tag .= 'alt="' . (isset($img['alt']) ? $img['alt'] : '') .'"/>';
  return $tag;
}
// $image1 is '<img src="cow.png" alt="cows say moo"/>'
$image1 = image(array('src' => 'cow.png', 'alt' => 'cows say moo'));
print $image1 . "\n";
// $image2 is '<img src="pig.jpeg" alt=""/>'
$image2 = image(array('src' => 'pig.jpeg'));
print $image2 . "\n";
?>