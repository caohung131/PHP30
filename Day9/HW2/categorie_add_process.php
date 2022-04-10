<?php
    require_once('connection.php');
    $data = $_POST;
    
    $query = "INSERT INTO posts(title, description, category_id, content, created_at) 
    VALUES('".$data['title']."', '".$data['description']."',".$data['category_id'].",  '".$data['content']."', '".$data['created_at']."')";

    $result = $conn->query($query);

    header('Location:index.php');
?>