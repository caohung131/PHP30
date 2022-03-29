<?php



session_start();
if(isset($_SESSION['products'])) {
    $products = $_SESSION['products'];
}



$_SESSION['products'] = $products;



header("Location:product_list.php");
