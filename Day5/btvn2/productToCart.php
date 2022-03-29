<?php

    session_start();
    $products = array();
    if(isset($_SESSION['products'])) {
        $products = $_SESSION['products']; 
    }

    $products = array();

    include('./data.php');

    if(isset($products)) {
        $_SESSION['products'] = $products;
    }


    if(isset($_SESSION['products'])) {
    $product = $_SESSION['products']; 
    }


    $key = $_GET['id'];
    $productCart = $product[$key];
    
    $productCart['product_amount'] =1;


    $_SESSION['cart'][] = $productCart;



    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    
    header("Location:cart.php");
?>