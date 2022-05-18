<?php
    require_once("./controllers/BaseController.php");
    require_once("./models/Post.php");


    class IndexController extends BaseController {
      
       protected $model;

       public function index() {
            $model = new Post();
            $posts = array();
            $listPost = $model->get();
            foreach($listPost as $post) {
                $idParentPost = $post['user_id'];

                $parentPost = $model->detailUser($idParentPost);
            
                $post['parentNameUser'] = $parentPost['name'];
                
                $posts[] = $post;
            }
        
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