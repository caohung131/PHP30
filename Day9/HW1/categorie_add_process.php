<?php
   require_once('connection.php');
    $data = $_POST;
   
   $query = "INSERT INTO categorys(name, description, thumbnail, parent_id, created_at) VALUES ('".$data['name']."', '".$data['description']."' ,'".$data['thumbnail']."', '".$data['parent_id']."', '".$data['created_at']."')";
//    var_dump($query); 

   $result = $conn->query($query);

   if($result) {
       echo 'Thanh cong';
   }

   header('Location: index.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

    </h1>
</body>
</html>