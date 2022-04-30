<?php
    require_once("./models/Post.php");

    class PostController {
       public function index()
       {
            $post = new Post();
            $posts = $post->get();
            // var_dump($posts);
            require_once("./views/posts/list.php");
       }

       public function create() 
       {
             require_once("./views/posts/create.php");

       }

       public function delete() 
       {
             require_once("./views/posts/delete.php");
           
       }

       public function edit() 
       {
             require_once("./views/posts/edit.php");
           
       }
    }
?>