<?php
if(isset($_GET['dangNhap'])) {
    echo '<pre>';
        print_r($_GET);
    echo '</pre>';
}

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
    <div class="container">
        <form action="process.php" method="POST">
            <legend>Login</legend>

            <div class="form-group">
                <label for="">Tên đăng nhập</label>
                <input type="text" name="user">
            </div>

            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" name="pwd">
            </div>

            <button type="submit" name="dangNhap">Đăng nhập</button>
        </form>
    </div>
</body>
</html>