<?php
    require_once('connection.php');

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id=".$id;
    $status = $conn->query($query);

    ($status == true) ? setcookie('delete_msg', true, time()+10): setcookie('delete_msg', FALSE, time()+10);
    header('Location: categories.php');


?>