<?php
    require_once("./models/Post.php");
    require_once("./controllers/AdminController.php");

    class PostController extends AdminController {
      
       protected $model;
       public function __construct()
       {
            parent::__construct();
            $this->model = new Post();
       }
       public function index()
       {
            $posts = array();
            $listPost = $this->model->select();
            // var_dump($listPost); die();
            foreach($listPost as $post) {
                $idParentPost = $post['user_id'];
                // var_dump($idParentPost); die();

                $parentPost = $this->model->detailUser($idParentPost);
                
                // var_dump($parentPost); die();

                $post['parentNameUser'] = $parentPost['name'];
                 
                $posts[] = $post;
            }
            require_once("./views/posts/list.php");
       }

       public function create() 
       {

             require_once("./views/posts/create.php");

       }

       public function delete() 
       {
             $id = $_GET['id'];
             $this->model->delete($id);
            //  require_once("./views/posts/delete.php");
            header("Location: index.php?mod=post&action=index");
       }

       public function edit() 
       {
            $id = $_GET['id'];
            // $data['created_at'] = date('Y-m-d H:s:i');
            $posts = $this->model->select();
        

            $getUser = $this->model->getAllUser();
            

            foreach($posts as $key => $post) {
                $user = $this->model->detailUser($post['user_id']);
                $user['name'];

                echo '<pre>';
                    var_dump($user); die();
                echo '</pre>';
            }
            var_dump($user['id']); die();

            $category = $this->model->detail($id);
            // var_dump($category); die();
             require_once("./views/posts/edit.php");
           
       }

       public function detail() 
       {
            $id = $_GET['id'];
            $post = $this->model->detail($id);
            // var_dump($category); die();
            require_once("./views/fontend/post.php");
       }


       public function store(){
            $data = $_POST;
            $data['slug'] = $this->createSlug($data['name']);
            $data['created_at'] = date('Y-m-d H:s:i');
            $data['update_at'] = date('Y-m-d H:s:i');

            if ($_FILES["thumnail"]["name"] = "") { 
                $path = "";
            } else {
                $uploads = $this->fileUpload($_FILES["thumbnail"],500000, ['jpg', 'bmp', 'png', 'gif']);
                if ($uploads['status'] == FALSE) {
                    // header('Location: category_add_process.php');
                    echo"Upload thất bại";
                }
                $path = $uploads['file_path'];
            }
            
            $data['thumbnail'] = $path;

            $this->model->create($data);
            // var_dump($data); die();

            header('Location: index.php?mod=post&action=index');
        }

        //function update
        public function update()
        {
            $data = $_POST;
            //check avata has update
            $data['created_at'] = date('Y-m-d H:s:i');
            
            if ($_FILES["thumbnail"]['name'] == '') {
                $path = '';
            } else {
                $uploads = $this->fileUpload($_FILES["thumbnail"], 500000, ['jpg', 'bmp', 'png', 'gif']);
                //if has error upload file
                if ($uploads['status'] === false) {
                    setcookie('error', implode('<br>', $uploads['error']), time() + 5);
                    header('Location: index.php?controller=post&action=edit&id=' . $data['id']);
                }
                $path = "',thumbnail = '" . $uploads['file_path'];
            }
            // var_dump($path); die();
            
            if (!empty($path)){
                $data['thumbnail'] = $path;
            }
            $result = $this->model->updateCate($data);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=post&action=index");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=post&action=edit&id=' . $data['id']);
            }
        }




        //up load file
        function fileUpload($input_file, $max_size, $formats_allowed_array)
        {
            define("MAX_SIZE", 500000);
            define("MINES", ['jpg', 'bmp', 'png', 'gif']);
            $target_dir = 'upload';
            $target_file = $target_dir . "/" . basename($input_file["name"]);
            $uploadOk = true;
            $file_path = '';
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $error_arr = [];
    
            // Check if file already exists
            // if (file_exists($target_file)) {
            //     $error_arr[] = "File đã tồn tại!";
            //     $uploadOk = false;
            // }
    
            // Check max file size
            if ($input_file["size"] > $max_size) {
                $error_arr[] = "Nhập file nhỏ hơn " . $max_size . "B!";
                $uploadOk = false;
            }
            // Allow certain file formats
            if (!in_array($imageFileType, $formats_allowed_array)) {
                $error_arr[] = "Chỉ cho phép định dạng file " . implode(',', array_values($formats_allowed_array)) . "!";
                $uploadOk = false;
            }
    
            // Check if $uploadOk false
            if ($uploadOk === false) {
                $error_arr[] = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($input_file["tmp_name"], $target_file)) {
                    $file_path = basename($input_file["name"]);
                } else {
                    $uploadOk = false;
                    $error_arr[] = "Sorry, there was an error uploading your file.";
                }
            }
            return [
                'status' => $uploadOk,
                'error' => $error_arr,
                'file_path' => $file_path,
            ];
        }

        public function createSlug($str, $delimiter = '-'){

            $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
            return $slug;
        }
    }
?>