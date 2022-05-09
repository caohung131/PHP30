<?php
if(!isset($_COOKIE['Success'])) {
     echo "Cookie chưa được tạo!";
} else {
     echo "Cookie '" . $_COOKIE['Success'] . "' đã được tạo!<br>";
     echo "Giá trị là: " . $_COOKIE['Success'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <title>Document</title>
</head>
<body>


        <form action="index.php?mod=auth&action=handleLogin" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-tt">
                <h2>Đăng nhập</h2>
                <form action="#" method="post" name="dang-ky">
                <input type="text" name="email" placeholder="Nhập tên đăng nhập" />
                <input type="password" name="password" placeholder="Nhập mật khẩu" />
                <input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Nhớ đăng nhập lần sau</label>
                <input type="submit" name="submit" value="Đăng nhập" />
                <button><a class="submitRegister" href="index.php?mod=auth&action=register">Đăng kí</a></button>
                
                <label class="psw-text">Quên mật khẩu</label>
                </form>

            </div>
        </form>

</body>
</html>