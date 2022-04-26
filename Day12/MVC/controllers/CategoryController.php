<?php
    require_once("models/Category.php");

    class CategoryController
    {
        public function index(){
            
            $model = new Category(); 
            $categories = $model->get();
            // var_dump($categories); die();
            
            require_once("./views/categories/list.php");
        }

        public function add() {
            echo 'add';
        }

        public function edit() {
            echo 'edit';
        }

        public function remote() {
            echo 'delete';
        }
    }
?>