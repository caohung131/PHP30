<?php
    session_start();

    //khoi tao mang rong
    $products = array();
    if(isset($_SESSION['products'])) {
        $products = $_SESSION['products']; 
    }


    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

   
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
  <h2>Danh sách sản phẩm trong kho</h2>
  <a href="cart.php">xem giỏ hàng</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Ảnh sản phẩm</th>
        <th>Giỏ hàng</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($products as $key => $product) { ?>
           
        <tr>
          <td> <?php echo $product['product_code']; ?>   </td>
          <td><?php echo $product['product_name']; ?> </td>
          <td><?php echo $product['product_amount']; ?> </td>
          <td><?php echo $product['product_price']; ?> </td>    
       <td> <img width="100px" height="100px" src="<?php echo $product['product_images']; ?>" alt=""> <?php echo $product['product_images']; ?></td>
       <td><a href="productToCart.php?id=<?= $key ?>" class="btn btn-primary">Thêm vào giỏ hàng</a></td>    
          
      </tr>

       <?php } ?>

    </tbody>
  </table>

  <a href="add_product.php">add more</a>
</div>

</body>
</html>