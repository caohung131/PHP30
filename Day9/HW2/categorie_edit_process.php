<?php
    require_once('connection.php');
    $data = $_POST;
    $id = $data['id'];

    echo '<pre>';
        var_dump($data);
    echo '</pre>';
 

    $query = "UPDATE posts SET title = '".$data['title']."', description = '".$data['description']."', category_id = '".$data['category_id']."', content = '".$data['content']."', created_at = '".$data['created_at']."' 
    WHERE id =".$id."";
    $status = $conn->query($query);
    // var_dump($status);
    header('Location:index.php');
?>