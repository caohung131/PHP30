<?php
    require_once('connection.php');

    isset($_GET['id']) ? $id = $_GET['id'] : 0;

    $query = "SELECT * FROM categorys WHERE id =".$id;
    $data = $conn->query($query);

    $category = $data->fetch_assoc();

    

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
            <input type="hidden" name = "id" value="<?=$category['id']?>" >
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$category['id']?>" disabled = "true">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$category['name']?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$category['description']?>">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?=$category['thumbnail']?>">
            </div>
            <div class="form-group">
                <label for="">parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?=$category['parent_id']?>">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="time" class="form-control" id="" placeholder="" name="created_at" value="<?=$category['created_at']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>