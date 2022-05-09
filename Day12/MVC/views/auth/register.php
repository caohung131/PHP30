<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styleRegister.css">

    <?php
        setcookie('Success', 'Đăng kí thành công', time()+5000);
    ?>
</head>

<body>
    <div class="container">
  
        <form action="index.php?mod=user&action=store" method="POST" role="form" enctype="multipart/form-data">
            <h2>Register</h2>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" id="" placeholder="" name="mobile">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control" id="" placeholder="" name="status">
            </div>
            
           <br>
            <button type="submit" class="btn btn-primary" id="create">Create</button>
        </form>
    </div>
</body>
</html>

