<?php
    function select($tableName, $columns = '*') 
    {   
        if($columns == '*') {
            $query = "SELECT * FROM". $tableName;
        } elseif(is_array($columns)) {
            $sub_string = '';
            foreach($columns as $i => $columns) {
                $sub_string .= $columns;

                if( $i+1 != count($columns)) {
                    $sub_string .= ",";
                }
            }

            $query = "SELECT" . $sub_string . "FROM". $tableName;
        }
        else {
            exit();
        }

        $connection = connect();
        $result = $connection->query($query);

        //b3 tao 1 mang de chua du lieu
        $data = array();

        while($row = $result->fetch_assoc())
        {
            $data[] = $row;
        }

        return $data;
    }

    function connect() 
    {
        $severname = "localhost:9999";
        $username = "root";
        $password = "";
        $dbname = "blogs";
        $conn = new mysqli($severname, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: <br/>" . mysqli_connect_error());
        }
        echo "Connected successfully <br/>";

        return $conn;
    }

    function insert($tableName, $data) {
        $query = "SELECT * FROM".$tableName;
        $string_1 = '';
        $string_2 = '';
        $i= 0;

        foreach($data as $column => $value) {
            $i++;
            $string_1 .= $column;
            if($i != count($data)) { // nếu không phải dòng cuối thì thêm dấu ,
                $string_1 .= ",";
            }

            $string_2 .= $value;
            if($i != count($data)) { // nếu không phải dòng cuối thì thêm dấu ,
                $string_1 .= ",";
            }

        }

        
        $string = ' ('. $string_1 . ' )' . ' VALUES ' . ' ('. $string_2 . ' )';

        $query = $query . $string;

        $conn = connect();
        $status = $conn->query($query);

        return $status;

    }

    function update($table, $data, $id){
        $query = "UPDATE $table SET ";
        $string = '';
        $i = 0;
        foreach ($data as $column => $value){
            $i++;
            $string .= $column . "=" . "'" . $value . "'";
    
            if ($i != count($data)){
                $string .= ',';
            }
        }
        $query = $query . $string . " WHERE  id = " . $id;
        $conn = connect();
        $status = $conn->query($query);
    
        return $status;
    }
?>