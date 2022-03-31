<?php
    session_start();
    if(isset( $_SESSION['products']['error'])) {
        echo 'Bạn đã nhập thiếu trường thông tin'."<br/>";
        echo  "Vui lòng nhập lại";
        unset($_SESSION['products']['error']);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <form action="add_process_product.php" method="POST" role="form">
          <br>
            <legend>Thêm sản phẩm vào kho hàng</legend>
           
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" name="product_code">
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" name="product_amount">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" name="product_price">
            </div>
            <div class="form-group">
                <label for="">Link ảnh sản phẩm</label>
                <input type="text" class="form-control" name="product_images">
            </div>
            <div style="display:flex">
                <div style="width: 50%;">
                    <button type="submit" class="btn btn-primary" >Thêm sản phẩm</button>
                </div>
                <div style="width: 50%; display: flex; justify-content: end;">
                    <a href="index.php"  class="btn btn-primary" >Xem sản phẩm đã có</a>
                </div>
            </div>
        </form>
     
    </div>
</body>
</html>