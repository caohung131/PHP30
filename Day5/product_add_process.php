<?php
    $product = $_POST;
 

    session_start();
    $_SESSION['products'][] = $product;

    header("Location:product_list.php");
?>