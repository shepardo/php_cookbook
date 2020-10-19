<?php
/*
7.3 Defining Object Destructors
Problem
You want to define a method that is called when an object is destroyed. For example,
you want to automatically save information from a database into an object when it’s
deleted.
*/
$car = new car; // buy new car
// ...
unset($car); // car wreck

class car {
  function __destruct() {
  // head to car dealer
    print("destructing the car...\n");
  }
}



?>