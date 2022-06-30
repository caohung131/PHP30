<?php
if(!isset($_COOKIE['Success'])) {
     echo "Vui lòng đăng nhập";
} else {
     echo "Tài khoản bạn '" . $_COOKIE['Success'] . "' đã được tạo!<br>";
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

        <br>
        <form action="index.php?mod=auth&action=handleLogin" method="POST" role="form" enctype="multipart/form-data" id="form2"> 
            <div class="form-tt">
                <h2>Đăng nhập</h2>
                <form action="#" method="post" name="dang-ky">
                <input type="text" name="email" placeholder="Nhập tên đăng nhập" />
                <input type="password" name="password" placeholder="Nhập mật khẩu" />
                <input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Nhớ đăng nhập lần sau</label>
                <input type="submit" name="submit" value="Đăng nhập" />
                <a class="submitRegister" href="index.php?mod=auth&action=register">Đăng kí</a>
                <a class="submitRegister" href="index.php?mod=index&action=index">Quay lại</a>
                
                
                </form>

            </div>
        </form>

</body>
</html>