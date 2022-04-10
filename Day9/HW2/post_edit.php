<?php
    require_once('connection.php');

    isset($_GET['id']) ? $id=$_GET['id']: 0;
    
    $query = "SELECT * FROM posts WHERE id=".$id;
    $data = $conn->query($query);

    $post = $data->fetch_assoc();


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="categorie_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name= 'id' value="<?=$post['id']?>">
                <label for="">id</label>
                <input type="text" class="form-control" id="" placeholder="" name="id" value="<?=$post['id']?>" disabled=true>
            </div>
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$post['title']?>">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$post['description']?>">
            </div>
            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id" value="<?=$post['category_id']?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?=$post['content']?>">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?=$post['created_at']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>