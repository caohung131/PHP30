<?php

    require_once("models/BaseModel.php");

    class Category extends BaseModel
    {
        protected $tableName = "categorys";

        //create
        public function create($data)
        {
            $query = "INSERT INTO categorys(name,slug,description,thumbnail,created_at, parent_id) VALUES('" . $data['name'] . "','" . $data['slug'] . "','" . $data['description'] . "','" . $data['thumbnail'] .  "','" . $data['created_at'] . "','" . $data['parent_id'] .  "')";
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
            $query = "UPDATE categorys SET name = '" . $data['name'] . "',description = '" . $data['description'] .$data['thumbnail']. "',slug = '" . $data['slug'].  "',parent_id = '" . $data['parent_id'] . "',created_at = '" . $data['created_at'] . "' WHERE id = " . $data['id'];
            // var_dump($query); die();
            return $this->conn->query($query);
        }

        //delete
        // function delete($categoryId)
        // {
        //     $query = "DELETE FROM categorys WHERE id = " . $categoryId;
        //     return $this->conn->query($query);
        // }

        //detail
        public function detail($id) {
            $query = "SELECT * FROM categorys WHERE id=".$id;
            
            $result =   $this->conn->query($query)->fetch_assoc();

            return $result;

            // $categorie = $result->fetch_assoc();
        }
    }
?>  