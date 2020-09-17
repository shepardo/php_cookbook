<?php
$s = "Once upon a time there was a turtle.";
$reversed_s = implode(' ',array_reverse(explode(' ',$s)));
print($reversed_s . "\n");
