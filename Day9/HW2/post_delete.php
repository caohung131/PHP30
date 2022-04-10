<?php
    require_once('connection.php');
    isset($_GET['id']) ? $id = $_GET['id'] : 0;

    $query = "DELETE FROM posts WHERE id =".$id;
    $status = $conn->query($query);
    
    header('Location: index.php');
?>