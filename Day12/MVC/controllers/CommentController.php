<?php 
    require_once("models/Comment.php");
    class CommentController {
       


        public function index() {
            $model = new Comment();
            $data = $_POST;
            // var_dump($data['content']);
            $content = $data['content'];

            $result = $model->create($data);
            // var_dump($result);
           
            

            // var_dump($comment); die();
            // require_once("./views/fontend/index.php");

            header("Location: index.php?mod=index&action=index");

        }
    }
?>