<?php
    session_start();
    if(isset($_SESSION['cart'])) {
        $cartProducts = $_SESSION['cart'];
    }
    

    // echo "<pre>";
    //     print_r($_SESSION['cart']);
    // echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sản phẩm trong giỏ hàng</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Ảnh sản phẩm</th>
        <th>Xóa khỏi giỏ hàng</th>
      </tr>
    </thead>
    <tbody>

        <?php foreach($cartProducts as $key => $product) {  if(isset($product)) {?>
           
        <tr>
          <td> <?php echo $product['product_code']; ?>   </td>
          <td><?php echo $product['product_name']; ?> </td>
          <td>
              <div style="display: flex;"><a href="productProcessDecrement.php?id=<?= $key ?>" class="btn btn-info">-</a>
              <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="<?php echo $product['productQuantity']; ?>"> 
               <a href="productProcessIcrement.php?id=<?= $key ?>" class="btn btn-info">+</a>
              </td>
          <td>
              <?php echo ($product['product_price'] * $product['productQuantity']); ?>
              
          </div> 
         
        </td>    
            
         <td> <img width="100px" height="100px" src="<?php echo $product['product_images']; ?>" alt=""> <?php echo $product['product_images']; ?></td>
         <td><a href="deleteToCart.php?id=<?= $key ?>" class="btn btn-warning">Xóa khỏi giỏ hàng</a></td>    
          
      </tr>

       <?php } ?>
       <?php } ?>
      
    </tbody>
    
  </table>
  <a href="index.php" class="btn btn-primary">Quay lại trang chủ</a>
 
</div>

</body>
</html>