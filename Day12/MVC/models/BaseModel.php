<?php
    class BaseModel
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

        

        function select($columns = '*') 
        {   
            if($columns == '*') {
                $query = "SELECT * FROM ". $this->tableName;
            } elseif(is_array($columns)) {
                $sub_string = '';
                foreach($columns as $i => $columns) {
                    $sub_string .= $columns;

                    if( $i+1 != count($columns)) {
                        $sub_string .= ",";
                    }
                }

                $query = "SELECT" . $sub_string . " FROM ". $this->tableName;
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

        //Phan quyen dieu
        // public function select($columns = '*', $page='1', $limit=null){
        //     if ($columns == '*') {
        //         $query = "SELECT * FROM " . $this->tableName;
        //         if($limit != null){
        //             $offset = ($page-1)*$limit + 1;
        //             $query .=" LIMIT ".$limit." OFFSET ".$offset;
        //         }
        //     }elseif (is_array($columns)) {
        //         $sub_string = '';
        //         foreach ($columns as $i =>$column) {
        //             $sub_string .= $column;
        
        //             if ($i + 1 != count($columns)) {
        //                 $sub_string .= ',';
        //             }
        //         }
        //         // SELECT id,name,description,thumbnail FROM users;
        //         $query = "SELECT " . $sub_string . " FROM " . $this->tableName;
        //         if($limit != null){
        //             $offset = ($page-1)*$limit + 1;
        //             $query .=" LIMIT ".$limit." OFFSET ".$offset;
        //         }
        //     }else{
        //         exit();
        //     }
        //     $result = $this->conn->query($query);
        
        //     // Buoc 3
        //     // Tạo 1 mảng để chứa dữ liệu
        //     $data = array();
        //     while($row = $result->fetch_assoc()) { 
        //         $data[] = $row;
        //     }
        //     return $data;
        // }
        //het

        public function getById($id){
            $query = "SELECT * from $this->tableName WHERE id = ". $id;
                    // Thực thi câu lệnh
            $result =  $this->conn->query($query);
    
            // Trả về 1 bản ghi
            $row = $result->fetch_assoc();
    
            return $row;
        }


        public function insert($data){
            $query = "INSERT INTO $this->tableName";
            $string_1 = '';
            $string_2 = '';
    
            $i = 0;
    
            foreach ($data as $column => $value){
                $i++;
    
                $string_1 .= $column;
                if ($i != count($data)){ // Nếu không phải là cột cuối cùng thì mới thêm dấu ,
                    $string_1 .= ',';
                }
    
                $string_2 .= "'" . $value . "'";
                if ($i != count($data)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
                    $string_2 .= ',';
                }
            }
            $string = ' (' . $string_1 . ')' . ' VALUES ' . '(' . $string_2 . ')';
            $query = $query . $string;
           
            var_dump($data); die();
    
            $status = $this->conn->query($query);
    
            return $status;
        }

        public function update($data, $where = [])
            {
                $query = "UPDATE $this->tableName SET ";
                $string1 = '';
                $j = 0;
                foreach ($data as $key => $value)
                {
                    $j++;
                    $string1 .= $key . '=' . "'" . $value . "'";
                    if ($j != count($data)){
                        $string1 .= ", ";
                    }
                }
                $query .= $string1;

                if (!empty($where)){
                    $query .= " WHERE ";
                    $i = 0;
                    $string2 = '';
                    foreach ($where as $column => $value) {
                        $i++;
                        $string2 .= "$column=" . "'" . $value . "'";

                        if ($i != count($where)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
                            $string2 .= " AND ";
                        }
                    }

                    $query .= $string2;
                }

                // var_dump($query); die();
                return $this->conn->query($query);
            }

            public function delete($id)
            {
                $query = "DELETE FROM " . $this->tableName. " WHERE id = " . $id;
                return $this->conn->query($query);
            }
    }
?>