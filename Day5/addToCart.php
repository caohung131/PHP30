<?php

    session_start();
    $products = array();
    if(isset($_SESSION['products'])) {
        $products = $_SESSION['products']; 
    }

    echo '<pre>';
        print_r($products);
    echo '</pre>';

    $key = $_GET['id'];
    $products = $products[$key];

    $products['product_amount'] =1;

    $_SESSION['cart'][] = $products;

    header("Location:cart.php");
?>