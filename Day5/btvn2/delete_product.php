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
    unset($_SESSION['cart'][$key]);

    header("Location:cart.php");

?>