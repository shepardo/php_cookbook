<?php
/*
7.8 Creating Abstract Base Classes
Problem
You want to create an abstract class, or, in other words, one that is not directly instantiable,
but acts as a common base for children classes.
*/
abstract class Database {
  abstract public function connect($server, $username, $password, $database);
  abstract public function query($sql);
  abstract public function fetch();
  abstract public function close();
}

class MySQL extends Database {
  protected $dbh;
  protected $query;
  public function connect($server, $username, $password, $database) {
    print("connect\n");
    //$this->dbh = mysqli_connect($server, $username, $password, $database);
  }
  public function query($sql) {
    //$this->query = mysqli_query($this->dbh, $sql);
    print("query\n");
  }
  public function fetch() {
    //return mysqli_fetch_row($this->dbh, $this->query);
    print("fetch\n");
  }
  public function close() {
    //mysqli_close($this->dbh);
    print("close\n");
  }
}

$m = new MySQL();
$m->connect("myserver", "myuser", "mypass", "mydb");
$m->query("select ...");
$m->fetch();
$m->close();

?>