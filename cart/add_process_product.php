<?php
    session_start();
    $product = $_POST;
    var_dump($_POST);


    if(empty($_POST['product_code']) || empty($_POST['product_name']) || empty($_POST['product_amount']) || empty($_POST['product_price']) || empty($_POST['product_images'])) {
        
        $_SESSION['products']['error'] = true;
        header('Location:addProduct.php');
        

    } else {
        $_SESSION['products'][] = $product; 
        header('Location: index.php');
    }

    
  


    // echo "<pre>";
    //     print_r($_SESSION['products']);
    // echo "</pre>";
    
    // session_destroy();
    

//    foreach($products as $key => $product) {
//        var_dump($product[$key]);
//    }


?>