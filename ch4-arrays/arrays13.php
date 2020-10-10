<?php
/*
4.13 Finding Elements That Pass a Certain Test
Problem
You want to locate entries in an array that meet certain requirements.
*/
$movies = array(
    'Empire Strikes Back', 'Han Solo Story', 'The Phantom Menace', 
    'The Return of the Jedi', 'The Clone Wars', 'The Revenge of the Sith');
$flops = [];    
function search1($movies) {
  foreach ($movies as $movie) {
    if ($movie['box_office_gross'] < 5000000) { $flops[] = $movie; }
    }
}

function search2($movies) {
  $flops = array_filter($movies, function ($movie) {
    return ($movie['box_office_gross'] < 5000000) ? 1 : 0;
  });
}
print search1($movies) . "\n";
search2($movies2);
print_r($flops);

?>