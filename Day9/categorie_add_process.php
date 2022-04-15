<?php
    require_once('connection.php');
    if(isset($_POST)) {
        // var_dump($_POST);
        $data = $_POST;
    }
    session_start();

    $sql = "INSERT INTO users(name, avatar) VALUES('".$data['name']."' , '".$data['description']."')";
    // echo empty($_POST['name']);
    // die();
    if(empty($_POST['name']) || empty($_POST['description'])) {
        $_SESSION['Empty_Input'] = 1;
        header('Location: categorie_add.php');
    } else {
        $status = $conn->query($sql);
    }
    // var_dump($status);

    if($status) {
        echo 'Thêm mới thành công!';
        // setcookie($_COOKIE['add_false'],-60*5);  
    } else {
        echo 'Thêm mới thất bại!';
        setcookie('add_false',60*5);
    }

    header('Location: index.php');
?>