<?php
/*
You want to replace a substring with a different string. For example, you want to obscure
all but the last four digits of a credit card number before printing it.
*/
// Everything from position $start to the end of $old_string
// becomes $new_substring
# $new_string = substr_replace($old_string,$new_substring,$start);
// $length characters, starting at position $start, become $new_substring
# $new_string = substr_replace($old_string,$new_substring,$start,$length);

print substr_replace('My pet is a blue dog.','fish.',12);
print substr_replace('My pet is a blue dog.','green',12,4);
$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card,'xxxx ',0,strlen($credit_card)-4);
print substr_replace('My pet is a blue dog.','fish.',-9);
print substr_replace('My pet is a blue dog.','green',-9,4);
print substr_replace('My pet is a blue dog.','Title: ',0,0);
$long_text = 'a text way to long to be displayed in a single line with it contains a hell of a lot of letters.';
print substr_replace($long_text,' ...',25) . '\n';
