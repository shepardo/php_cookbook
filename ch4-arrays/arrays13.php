<?php
/*
4.13 Finding Elements That Pass a Certain Test
Problem
You want to locate entries in an array that meet certain requirements.
*/
$movies = array(
    ['title' => 'Empire Strikes Back', 'box_office_gross' => 10000000 ], 
    ['title' => 'Han Solo Story', 'box_office_gross' => 2000000 ], 
    ['title' => 'The Phantom Menace', 'box_office_gross' => 35000000], 
    ['title' => 'The Return of the Jedi', 'box_office_gross' => 50000000], 
    ['title' => 'The Clone Wars', 'box_office_gross' => 40000000],
    ['title' => 'The Revenge of the Sith', 'box_office_gross' => 3500000]);
$flops = [];    
function search1($movies, $flops) {
  foreach ($movies as $movie) {
    if ($movie['box_office_gross'] > 5000000) { $flops[] = $movie; }
  }
  $GLOBALS['flops'] = $flops;
}

function search2($movies, &$flops) {
  $flops = array_filter($movies, function ($movie) {
    return ($movie['box_office_gross'] > 5000000) ? 1 : 0;
  });
}
search1($movies, $flops);
print_r($flops);
$flops = [];
search2($movies, $flops);
print_r($flops);

?>