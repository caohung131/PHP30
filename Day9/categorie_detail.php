<?php
    require_once('connection.php');
    $id = (isset($_GET['id'])?$_GET['id']:0);

    $query = "SELECT * FROM users WHERE id=".$id;
    echo $query;

    $result = $conn->query($query);

    $categorie = $result->fetch_assoc();

    var_dump($categorie);
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
        <a href="#" class="btn btn-primary">Add New Category</a>
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
            

            <tr>
                <td><?= $categorie['id']?></td>
                <td><?= $categorie['mobile']?></td>
                <td><?= $categorie['email']?></td>
                <td><?= $categorie['name']?></td>
                <td><?= $categorie['password']?></td>
                <td><img width="450px" height="450px" src="<?= $categorie['avatar']?>" alt="" ></td>
                <td><?= $categorie['created_at']?></td>
                <td><?= $categorie['update_at']?></td>

                <td>
                    <a href="categorie_detail.php?id=<?=$categorie['id']?>" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
           
        </table>
    </div>
</body>
</html>