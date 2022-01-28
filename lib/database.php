<?php

class database {

    private $connection;

    public function getConnection() {
        return($this->connection);
    }

    public function __construct() {
      $ini = parse_ini_file("config.ini");
      $this->connection = mysqli_connect($ini["server"], 
                                         $ini["user"], 
                                         $ini["password"],
                                         $ini["database"])
                                         or die(mysqli_error());
    }

}