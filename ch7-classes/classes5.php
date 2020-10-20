<?php
/*
7.5 Preventing Changes to Classes and Methods
Problem
You want to prevent another developer from redefining specific methods within a child
class, or even from subclassing the entire class itself.
*/

//final
 class MySQL {
  // Class definition here
  final public function connect($server, $username, $password) {
    // Method definition here
  }  
}

class Mariadb extends MySQL {

}

?>