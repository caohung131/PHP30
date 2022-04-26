<?php
    class Query
    {

        private $conn;
        function __construct() {
            $severname = "localhost:9999";
            $username = "root";
            $password = "";
            $dbname = "blogs";
            $this->conn = new mysqli($severname, $username, $password, $dbname);
            if($this->conn->connect_error) {
                echo 'loi';
                die();
            } 
            if (!$this->conn) {
                die("Connection failed: <br/>" . mysqli_connect_error());
            }
        
        }

        function select($tableName, $columns = '*') 
        {   
            if($columns == '*') {
                $query = "SELECT * FROM ". $tableName;
            } elseif(is_array($columns)) {
                $sub_string = '';
                foreach($columns as $i => $columns) {
                    $sub_string .= $columns;

                    if( $i+1 != count($columns)) {
                        $sub_string .= ",";
                    }
                }

                $query = "SELECT" . $sub_string . " FROM ". $tableName;
            }
            else {
                exit();
            }

            $result = $this->conn->query($query);

            //b3 tao 1 mang de chua du lieu
            $data = array();

            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            return $data;
        }
    

    
        function get() {
            return $this->select($this->tableName);
        }
    }
?>