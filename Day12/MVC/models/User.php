<?php
    require_once('./models/Query.php');

    class User extends Query
    {
        protected $tableName = "users";

        public function create($data)
        {
            $query = "INSERT INTO users(name,slug,mobile,email,password,avatar,status,created_at, update_at) VALUES('" . $data['name'] . "','" . $data['slug'] . "','" . $data['mobile'] . "','" . $data['email'] .  "','" . md5($data['password']) ."','" . $data['thumbnail'] .  "','" .$data['status'] .  "','" . $data['created_at'] .  "','" . $data['update_at'] . "')";
            // var_dump($query);die();
            
            return $this->conn->query($query);
        }

        public function detail($id) {
            $query = "SELECT * FROM users WHERE id=".$id;

            $result =   $this->conn->query($query)->fetch_assoc();

            // var_dump($result); die();
            return $result;

            // $categorie = $result->fetch_assoc();
        }

        //delete
        function delete($categoryId)
        {
            $query = "DELETE FROM users WHERE id = " . $categoryId;
            return $this->conn->query($query);
        }

        // edit
        function getCatById($categoryId)
        {
            $query = "SELECT * FROM users WHERE id = " . $categoryId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        public function updateCate($data)
        {
            $id = $_GET['id'];
            // var_dump($data);die();
            $query = "UPDATE users SET name = '" . $data['name'] . "',mobile = '" . $data['mobile'] .$data['thumbnail']. "' WHERE id = " . $id;
            // var_dump($query); die();
            return $this->conn->query($query);
        }


    }
?>