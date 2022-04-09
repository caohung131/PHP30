<?php
    require_once('connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $query = "SELECT * FROM categorys WHERE id =".$id;
    $result = $conn->query($query);

    $category = $result->fetch_assoc();
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
        <h2>Số thứ tự bài viết : <?=$category['id']?></h2>
        <h2>Tên bài viết:  <?=$category['name']?>
        <h2>Miêu tả bài viết : <?=$category['description']?></h2>
        <h2>Hình bài viết :<br/> <img src="<?=$category['thumbnail']?>" alt="" width="500px" height="500px"></h2>
        <h2>Id cha bài viết : <?=$category['parent_id']?></h2>
        <h2>Thời gian tạo bài viết : <?=$category['created_at']?></h2>
        <a href="index.php" class="btn  -primary">Quay lại trang chủ</a>
    </div>
    
</body>
</html>

