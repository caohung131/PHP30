<?php
   require_once('User.php');
   $user = new User();
   $results = $user->get();
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

            <?php foreach($results as $key => $user) {  ?>
            

            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['mobile']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['password']?></td>
                <td><img width="250px" height="250px" src="<?= $user['avatar']?>" alt="" ></td>
                <td><?= $user['created_at']?></td>
                <td><?= $user['update_at']?></td>

                <td>
                    <a href="categorie_detail.php?id=<?=$user['id']?>" class="btn btn-primary">Detail</a>
                    <a href="categorie_edit.php?id=<?=$user['id']?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?=$user['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
           
           <?php }?>
        </table>
    </div>
</body>
</html>s