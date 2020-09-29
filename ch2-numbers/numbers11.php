<?php
/*
2.12 Printing Correct Plurals
Problem
You want to correctly pluralize words based on the value of a variable. For instance, you
are returning text that depends on the number of matches found by a search.
*/

$number = 4;
print "Your search returned $number " . ($number == 1 ? 'hit' : 'hits') . '.';

function may_pluralize($singular_word, $amount_of) {
  // array of special plurals
  $plurals = array(
    'fish' => 'fish',
    'person' => 'people',
  );
  // only one
  if (1 == $amount_of) {
    return $singular_word;
  }
  // more than one, special plural
  if (isset($plurals[$singular_word])) {
    return $plurals[$singular_word];
  }
  // more than one, standard plural: add 's' to end of word
  return $singular_word . 's';
}

$number_of_fish = 1;
// $out1 is "I ate 1 fish."
$out1 = "I ate $number_of_fish " . may_pluralize('fish', $number_of_fish) . '.';
$number_of_people = 4;
// $out2 is "Soylent Green is people!"
$out2 = 'Soylent Green is ' . may_pluralize('person', $number_of_people) . '!';

print $out1 . "\n";
print $out2 . "\n";
?>