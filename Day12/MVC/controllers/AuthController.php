<?php
    require_once("./models/User.php");
    class AuthController 
    {
        public function login() {
            require_once "views/auth/login.php";
        }

        public function handleLogin() {
            $userModel = new User();
            $user = $userModel->checkLogin($_POST['email'], $_POST['password']);
            // var_dump($user); die();
            if(empty($user)) {
                echo 'Login false';
                header("Location: index.php?mod=auth&action=login");
            } else {
                echo 'Login success';
                $_SESSION['auth'] = [
                    'id' => $user['id'],
                    'name' => $user['name']
                ];

                header("Location: index.php?mod=category&action=index");
            }
        }

        public function logOut() {
            unset($_SESSION['auth']);
            setcookie('Success', 'Đăng kí thành công', time()-5000);
            header("Location: index.php?mod=index&action=index");
        }

        public function register() {
            require_once "views/auth/register.php";
        }
    }

    
?>