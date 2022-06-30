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
            $list_category = $this->model->select(); //query toan bo du lieu tu DB
            
            foreach($list_category as $key => $category){
                $id = $category['parent_id']; // Duyet mang lay toan bo id cha
                if($id){ // co id cha thi hien chi tiet id qua DB
                    $category_parent = $this->model->getById($id);
                    if(empty($category_parent)) {
                        $category_parent = "";
                    }
                    else
                        {
                            $category['parent_name'] = $category_parent['name']; // them thuoc tinh ParentName lay dc tu ten cua cai id cha vua Query
                        }
                    // var_dump($category_parent); 
                   
                }
                else{
                    $category['parent_name'] = ""; //neu chua co thi gan cho chuoi chong
                }
                $categories[]=$category; //gan tat ca category vao mang moi
            }
        
            $this->view("categories/list.php", [
                'categories' => $categories
            ]);
            // require_once("./views/categories/list.php");
        }

        public function create() {
            $categories = $this->model->select();

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
            $categories = $this->model->select();
            $data = $this->model->detail($id);
            

            // echo '<pre>';
            //     var_dump($data); die();
            // echo '</pre>';
            $category = $this->model->getById($id);  
            // var_dump($category);
            
            require_once("./views/categories/edit.php");
        }

        //function update
        public function update()
        {
            $data = $_POST;

            // var_dump($data); die();
            $id = $_POST['id'];
            // var_dump($data) ; die();
            unset($data['id']);
            unset($data['created_at']);

            $data['created_at'] = date('Y-m-d H:s:i');
            // $data['update_at'] = date('Y-m-d H:s:i');
            $data['slug'] = $this->createSlug($data['name']);
            //check avata has update
            if ($_FILES["thumbnail"]['name'] == '') {
                $path = '';
            } else {
                $uploads = $this->fileUpload($_FILES["thumbnail"], 500000, ['jpg', 'bmp', 'png', 'gif']);
                //if has error upload file
                if ($uploads['status'] === false) {
                    setcookie('error', implode('<br>', $uploads['error']), time() + 5);
                    header('Location: index.php?controller=category&action=edit&id=' . $id);
                }
                $path = "',thumbnail = '" . $uploads['file_path'];
            }
            // var_dump($path); die();
            
            if (!empty($path)){
                $data['thumbnail'] = $path;
            }
            $result = $this->model->update($data, ['id'=>$id]);

            if ($result) {
                setcookie('msg', 'Updated successful!', time() + 5);
                header("Location: index.php?mod=category&action=index&id=$id");
            } else {
                setcookie('error', 'Something went wrong!', time() + 5);
                header('Location: index.php?mod=category&action=edit&id=' . $id);
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
            // header("Location: index.php?mod=category&action=index");
            $this->redirect("index.php?mod=category&action=index");
    
        }

        public function createSlug($str, $delimiter = '-'){

            $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
            return $slug;
        }

       

        public function store(){
            // echo '1'; die();
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
            // var_dump($data);
            $this->model->create($data); 

            // die();

            header('Location: index.php?mod=category&action=index');
        }

       
        

            

        
    }
?>