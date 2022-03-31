<?php
    session_start();

    // //khoi tao mang rong
    // $products = array();

    // include('addProduct.php');

    if(!isset($products)) {
        $products = array();
    }

    if(isset($_SESSION['products'])) {
        $products = $_SESSION['products']; 
       
    }
    
    $key = $_GET['id'];

    // $productQuatity =1;

    if(isset($products[$key])) {
        $cartProduct = $products[$key];
        $cartProduct["productQuantity"] =1;
    } 
   
    $_SESSION['cart'][] = $cartProduct;
   
    
    
    echo "<pre>";
        print_r($_SESSION);
    echo "</pre>";

    // session_destroy();
   header('Location: cart.php');

?>