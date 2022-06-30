<?php
    require_once("./controllers/BaseController.php");
    require_once("./models/Post.php");
    require_once("./models/Comment.php");


    class IndexController extends BaseController {
      
       protected $model;

       public function index() {
           

            $modelPost = new Post();
            $modelComment = new Comment();
            $posts = array();
            $listPost = $modelPost->select();
            foreach($listPost as $post) {
                $idParentPost = $post['user_id'];

                $parentPost = $modelPost->detailUser($idParentPost);
            
                // $post['parentNameUser'] = $parentPost['name'];
                
                $posts[] = $post;
            }
            
            $coments = $modelComment->select();

            require_once("./views/fontend/index.php");
     }

     public function post() {
         
        $model = new Post();
        $id = $_GET['id'];
        $post = $model->detail($id);
        // $posts = $this->model->getById($id);
        require_once("./views/fontend/post.php");

     }
    }
?>