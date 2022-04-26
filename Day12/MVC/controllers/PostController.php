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
    }
?>