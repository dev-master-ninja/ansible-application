<?php 

class userlist {

    private $connection;

    public function __construct($conn) {
        $this->connection = $conn;
    }

    public function getPhonebook() {
        $return = [];
        $sql = "select * from phonebook";
        $result = mysqli_query($this->connection, $sql) or die(mysqli_error());
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $return[] = $row;
        }
        return($return);
    }


}