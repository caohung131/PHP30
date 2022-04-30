<?php

    class Query
    {
        private $severname = "localhost:9999";
        private $username = "root";
        private $password = "";
        private $dbname = "blogs";
        protected $conn;

       
        
        public function __construct()
        {
            $this->conn = new mysqli($this->severname, $this->username, $this->password, $this->dbname);

            if ($this->conn->connect_error) {
                die("Connection failed: <br/>" . mysqli_connect_error());
            }
            // echo "Connected successfully <br/>";

            return $this->conn;
        }

        function get() {
            return $this->select($this->tableName);
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
    }
?>