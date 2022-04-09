<?php
    require_once('connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $query = "DELETE FROM categorys WHERE id =".$id;
    $status = $conn->query($query);
    header('Location:index.php');
?>