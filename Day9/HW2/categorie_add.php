<!-- <?php
session_start();
    var_dump($_FILES);  

    //khai bao bien
    $target_file = "";
    $fileSize = "";
    $upload = "";

    $target_dir = "image/";
    if(isset($_FILES["thumbnail"])) {
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    }
   
    echo "<br>$target_file";

    //lay phan mo rong 
    // $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // echo $imageFileType;


    // $filename = '/path/to/foo.txt';
    if(file_exists($target_file)) {
        echo "</br>".'File da ton tai tren sever k duoc ghi de';
    } 
    else {
        echo "</br>".'file chua ton tai';
    }
    

    echo '<pre>';
        print_r($_SESSION);
    echo '<pre>';

    if(isset($_FILES['thumbnail'])) {
    $fileSize = $_FILES['thumbnail']['size'];
    $upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"],$target_file);
    }
    echo $fileSize;

    

    var_dump($upload);
    

?> -->


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
        <form action="categorie_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">category_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="time" class="form-control" id="" placeholder="" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>