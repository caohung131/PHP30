<?php
    $user = '';
    $password = '';

    if(isset($_POST['user'])) {
        $user = $_POST['user'];
    }

    if(isset($_POST['pwd'])) {
        $password = $_POST['pwd'];
    }

    if($user == 'admin' && $password == '123456') {
        echo 'Dang nhap thanh cong!!!';
    } else {
        echo 'Ten hoac mat khau khong chinh xac >.<';
    }
?>