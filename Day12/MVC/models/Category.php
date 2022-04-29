<?php

    require_once("models/Query.php");

    class Category extends Query
    {
        protected $tableName = "categorys";

        //create
        public function create($data)
        {
            $query = "INSERT INTO categorys(name,slug,description,thumbnail,created_at) VALUES('" . $data['name'] . "','" . $data['slug'] . "','" . $data['description'] . "','" . $data['thumbnail'] .  "','" . $data['created_at'] . "')";
            return $this->conn->query($query);
        }
        
        //get id
        function getCatById($categoryId)
        {
            $query = "SELECT * FROM categorys WHERE id = " . $categoryId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        //update
        public function updateCate($data)
        {
            $query = "UPDATE categorys SET name = '" . $data['name'] . "',description = '" . $data['description'] .$data['thumbnail']. "' WHERE id = " . $data['id'];
            return $this->conn->query($query);
        }

        //delete
        function delete($categoryId)
        {
            $query = "DELETE FROM categorys WHERE id = " . $categoryId;
            return $this->conn->query($query);
        }
    }
?>  