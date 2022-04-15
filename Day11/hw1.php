<?php
    require_once('config.php');


    class Connection{
        var $conn;

        function __construct()
        {
            $this->conn = new mysqli(HOST, USER, PASSWORD, DBName);
            $this->conn->set_charset("utf8");

            if($this->conn->connect_error) {
                die("Connection failed: ". $this->conn->connect_error);
            } else if(isset($this->conn)) {
                echo 'Connection succeed';
            }
        }
    }

    $connection = new Connection();
?>