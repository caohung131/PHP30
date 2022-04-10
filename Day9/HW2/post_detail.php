<?php
    require_once('connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = 0;
    }

    $query = "SELECT * FROM posts WHERE id=".$id;
    $data = $conn->query($query);

    $post = $data->fetch_assoc();

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
    <div class="container" style="width: 100%; text-align: center;">
        <h2>Số thứ tự bài viết : <?=$post['id']?></h2>
        <h2>Tên bài viết:  <?=$post['title']?>
        <h2>Miêu tả bài viết : <?=$post['description']?></h2>
        <h2>Id cha bài viết : <?=$post['category_id']?></h2>
        <h2>Thời gian tạo bài viết : <?=$post['content']?></h2>
        <h2>Thời gian tạo bài viết : <?=$post['created_at']?></h2>
        <a href="index.php" class="btn  -primary">Quay lại trang chủ</a>
    </div>
    
</body>
</html>
