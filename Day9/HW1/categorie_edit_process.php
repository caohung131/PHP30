<?php
    require_once('connection.php');
    $data = $_POST;

    // var_dump($data);

    $query = "UPDATE categorys SET name = '".$data['name']."', description = '".$data['description']."', thumbnail = '".$data['thumbnail']."', parent_id = '".$data['parent_id']."', created_at='".$data['created_at']."' 
    WHERE id = ".$data['id'].";";

    // var_dump($query);

    $status = $conn->query($query);

    header('Location:index.php');
?>