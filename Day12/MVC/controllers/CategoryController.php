<?php
    require_once("models/Category.php");
    require_once("./controllers/AdminController.php");

    class CategoryController extends AdminController
    {
        protected $model;

        public function __construct()
        {
            parent::__construct();
            $this->model = new Category(); 
        }

        //chi uyen code cho category parent id
        public function index(){
            // $model = new Category();
            // var_dump($_SESSION['auth']); die();
            $categories = array(); // tao mang chong chua toan du lieu 
            $list_category = $this->model->get(); //query toan bo du lieu tu DB
            foreach($list_category as $key => $category){
                $id = $category['parent_id']; // Duyet mang lay toan bo id cha
                if($id){ // co id cha thi hien chi tiet id qua DB
                    $category_parent = $this->model->detail($id);
                    // var_dump($category_parent); die();
                    $category['parent_name'] = $category_parent['name']; // them thuoc tinh ParentName lay dc tu ten cua cai id cha vua Query
                }else{
                    $category['parent_name'] = ""; //neu chua co thi gan cho chuoi chong
                }
                $categories[]=$category; //gan tat ca category vao mang moi
            }
        
            require_once("./views/categories/list.php");
        }

        public function create() {
            require_once("./views/categories/create.php");
        }

        public function detail() {
            $id = $_GET['id'];
            $categorie = $this->model->detail($id);
          
            // print_r(var_dump($categorie));
            //  die();
            require_once("./views/categories/detail.php");
        }

        public function edit() {
            $id = $_GET['id'];
            $data = $this->model->detail($id);
            

            // echo '<pre>';
            //     var_dump($data); die();
            // echo '</pre>';
            $category = $this->model->getCatById($id);  
            // var_dump($category);
            
            require_once("./views/categories/edit.php");
        }

        //function update
        public function update()
        {
            $data = $_POST;
            $data['created_at'] = date('Y-m-d H:s:i');
            $data['update_at'] = date('Y-m-d H:s:i');
            $data['slug'] = $this->createSlug($data['name']);
            //check avata has update
            if ($_FILES["thumbnail"]['name'] == '') {
                $path = '';
            } else {
                $uploads = $this->fileUpload($_FILES["thumbnail"], 500000, ['jpg', 'bmp', 'png', 'gif']);
                //if has error upload file
                if ($uploads['status'] === false) {
                    setcookie('error', implode('<br>', $uploads['error']), time() + 5);
                    header('Location: index.php?controller=category&action=edit&id=' . $data['id']);
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
                header("Location: index.php?mod=category&action=index");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=category&action=edit&id=' . $data['id']);
            }
        }

        
        public function delete()
        {
            $id = $_GET['id'];
            $result = $this->model->delete($id);
            if ($result) {
                setcookie('msg', 'Deleted successful!', time() + 2);
            } else {
                setcookie('error', 'Something went wrong!', time() + 2);
            }
            header("Location: index.php?mod=category&action=index");
    
        }

        public function createSlug($str, $delimiter = '-'){

            $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
            return $slug;
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

            header('Location: index.php?mod=category&action=index');
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

        

            

        
    }
?>