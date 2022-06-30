<?php
     require_once("./models/BaseModel.php");
     class Comment extends BaseModel {
        protected $tableName = "comment";
        public function create($data)
        {
            // var_dump($data); die();
            $query = "INSERT INTO comment( content) VALUES('"  . $data['content'] . "')";
            return $this->conn->query($query);

        }

     }
?>