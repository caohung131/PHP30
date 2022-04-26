<?php
    require_once("./models/User.php");
    class UserController {
        public function index() {
            $model = new User();
            $users = $model->get();

            // var_dump($users);
            require_once("./views/users/list.php");
        }
    }
?>