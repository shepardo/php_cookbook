<?php
/*
2.7 Generating Biased Random Numbers
Problem
You want to generate random numbers, but you want these numbers to be somewhat
biased, so that numbers in certain ranges appear more frequently than others. For example,
you want to spread out a series of banner ad impressions in proportion to the
number of impressions remaining for each ad campaign.
*/

function rand_weighted($numbers) {
  $total = 0;
  foreach ($numbers as $number => $weight) {
    $total += $weight;
    $distribution[$number] = $total;
  }
  $rand = mt_rand(0, $total - 1);
  foreach ($distribution as $number => $weights) {
    if ($rand < $weights) { return $number; }
  }
}

$ads = array('ford' => 12234, // advertiser, remaining impressions
  'att' => 33424,
  'ibm' => 16823);
$ad = rand_weighted($ads);

function incremental_total($numbers) {
  $total = 0;
  foreach ($numbers as $number => $weight) {
    $total += $weight;
    yield $number => $total;
  }
}

// returns the weighted randomly selected key
function rand_weighted_generator($numbers) {
  $total = array_sum($numbers);
  $rand = mt_rand(0, $total - 1);
  foreach (incremental_total($numbers) as $number => $weight) {
    if ($rand < $weight) { return $number; }
  }
}


?>