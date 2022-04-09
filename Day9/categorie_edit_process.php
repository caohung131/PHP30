<?php
    require_once('connection.php');
    if(isset($_POST)) {
        // var_dump($_POST);
        $data = $_POST;
    }
    session_start();
    $id = $_GET['id'];

    $sql = "UPDATE users SET name = '".$data['name']."',avatar ='".$data['avatar']."' WHERE id=".$id;
    var_dump($sql);
    $status = $conn->query($sql);
    

    if($status) {
        echo 'Thêm mới thành công!'; header('Location: categories.php');
    } else {
        echo 'Thêm mới thất bại!'; header('Location: categories_edit.php?id='.$id);
    }

   
?>