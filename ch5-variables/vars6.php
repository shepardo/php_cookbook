<?php
/*
5.6 Sharing Variables Between Processes
Problem
You want a way to share information between processes that provides fast access to the
shared data.


ERROR: This returns 'apc_fetch function undefined' with no easy workaround in progress.
*/
// retrieve the old value
$population = apc_fetch('population');
// manipulate the data
$population += ($births + $immigrants - $deaths - $emigrants);
// write the new value back
apc_store('population', $population);
?>