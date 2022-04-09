<?php
    include('connection.php');
    session_start();
    
    $query = "SELECT * FROM users";
    $results = $conn->query($query);

    // var_dump ($result);

    $categories = array();
    while($row = $results-> fetch_assoc())
    {
        $categories[] = $row;
    }

    // if(isset($_COOKIE('add_false'))) {
    //     echo 'Lỗi khi thêm mới';
    // } 

    if(isset($_SESSION['Empty_Input'])) {
        echo "Bạn đã điền thiếu thông tin vui lòng nhập lại";
        unset($_SESSION['Empty_Input']);
    }


    if(isset($_COOKIE['delete_msg'] )=== true) {
        echo "xóa thành công";
    } else if(isset($_COOKIE['delete_msg'] )=== false) {
       echo "Xóa thất bại";
    }

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="categorie_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Name</th>
                <th>Password</th>
                <th>Avatar</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </thead>

            <?php foreach($categories as $key => $categorie) {  ?>
            

            <tr>
                <td><?= $categorie['id']?></td>
                <td><?= $categorie['mobile']?></td>
                <td><?= $categorie['email']?></td>
                <td><?= $categorie['name']?></td>
                <td><?= $categorie['password']?></td>
                <td><img width="250px" height="250px" src="<?= $categorie['avatar']?>" alt="" ></td>
                <td><?= $categorie['created_at']?></td>
                <td><?= $categorie['update_at']?></td>

                <td>
                    <a href="categorie_detail.php?id=<?=$categorie['id']?>" class="btn btn-primary">Detail</a>
                    <a href="categorie_edit.php?id=<?=$categorie['id']?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?=$categorie['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
           
           <?php }?>
        </table>
    </div>
</body>
</html>