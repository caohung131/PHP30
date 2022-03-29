<?php
session_start();
    var_dump($_FILES);  

    //khai bao bien
    $target_file = "";
    $fileSize = "";
    $upload = "";

    $target_dir = "image/";
    if(isset($_FILES["avatar"])) {
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
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

    if(isset($_FILES['avatar'])) {
    $fileSize = $_FILES['avatar']['size'];
    $upload = move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file);
    }
    echo $fileSize;


    

    var_dump($upload);
    
    
echo 'PHP version: ' . phpversion();

    // $check = getimagesize($_FILES['avatar']['tmp_name']);
    // echo '<pre>';
    //     print_r($check);
    // echo '<pre>';
    // if($check !== false) {
    //     echo "Day la 1 file anh ".$check['mime'];
    // }else {
    //     echo "Day khong phai la file anh";
    // }


    // if(file_exists($target_file)) 
    // {
    //     echo "</br>".'File da ton tai tren sever k duoc ghi de';
    // } 
    // else {
    //     echo "</br>".'file chua ton tai';
    // }
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
    <form enctype="multipart/form-data" action="uploadFile.php" method="POST">
        <input type="file" name="avatar" id="">
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
        if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == false ) { ?>
            <div class="alert alert-danger role= alert" style="color: red">
                <?php
                    foreach( $_SESSION['upload_status'][1] as $error ) {
                        echo "<p> - ".$error."</p>";
                    }
                    unset($_SESSION['upload_status']); // lay het r thi xoa
                ?>
            </div>
    <?php } ?>
        
        <?php  if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == true) { ?>
                <div class="alert alert-success" role="alert">
                    Đường dẫn sau khi upload <?php  $_SESSION['upload_status'][1];   ?>
                </div>                
                <?php 
                    unset($_SESSION['upload_file']);
                ?>
        <?php } ?>
</body>
</html>