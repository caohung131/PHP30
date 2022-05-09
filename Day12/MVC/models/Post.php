<?php
    require_once("./models/Query.php");
    class Post extends Query
    {
        protected $tableName = 'posts';

        public function delete($postId) 
        {
            $query = "DELETE FROM posts WHERE id = " . $postId;
            return $this->conn->query($query);
        }

        public function create($data)
        {
            $query = "INSERT INTO posts(slug,title,description,thumbnail,user_id,content,created_at) VALUES('" .$data['slug'] . "','" . $data['title'] . "','" .$data['description'] . "','" . $data['thumbnail'] . "','" . $data['user_id'] . "','" . $data['content'] ."','" . $data['created_at']."')";
            // var_dump($query);die();
            
            return $this->conn->query($query);
        }

        //get id
        function detail($categoryId)
        {
            $query = "SELECT * FROM posts WHERE id = " . $categoryId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        function detailUser($userId)
        {
            $query = "SELECT * FROM users WHERE id = " . $userId;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        public function updateCate($data)
        {
            $query = "UPDATE posts SET slug = '" . $data['slug'] . "',title = '" . $data['title'] . "',description = '" . $data['description'] .$data['thumbnail']. "',user_id = '" . $data['user_id']  . "',content = '" . $data['content'] . "',created_at = '" . $data['created_at'] . "' WHERE id = " . $_GET['id'];
            // var_dump($query); die();
            return $this->conn->query($query);
        }
    }

?>