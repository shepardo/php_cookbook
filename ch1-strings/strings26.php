<?php
/*
1.9 Interpolating Functions and Expressions Within
Strings
Problem
You want to include the results of executing a function or expression within a string.
*/

$_POST['boys'] = "3";
$_POST['girls'] = "2";
$word = "scheveningen";
$amounts = array('payment' => '100,000 USD');

class Circle {

	public function getDiameter() {
		return 10;
	}
}

#$circle = (object)array('getDiameter' => function() { return 10; });
$circle = new Circle();

print 'You have '.($_POST['boys'] + $_POST['girls']).' children.' . "\n";
print "The word '$word' is ".strlen($word).' characters long.' . "\n";
print 'You owe '.$amounts['payment'].' immediately.' . "\n";
print "My circle's diameter is ".$circle->getDiameter().' inches.' . "\n";
print "\n";

print "I have $children children." . "\n";
print "You owe $amounts[payment] immediately." . "\n";
print "My circle's diameter is $circle->diameter inches." . "\n";
print "\n";

print "I have {$children} children." . "\n";
print "You owe {$amounts['payment']} immediately." . "\n";
print "My circle's diameter is {$circle->getDiameter()} inches." . "\n";
print "\n";

print "{within braces}\n";

print <<< END
Right now, the time is
END
. strftime('%c') . <<< END
but tomorrow it will be
END
. strftime('%c',time() + 86400);

print "\n";
?>