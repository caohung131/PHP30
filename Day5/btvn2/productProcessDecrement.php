<?php
    session_start();
    $key = $_GET['id'];
    if( $_SESSION['cart'][$key]['productQuantity'] >0) {
        $_SESSION['cart'][$key]['productQuantity'] -= 1;
    }
    // var_dump( $_SESSION['cart'][$key]['productQuantity']);
    header('Location:cart.php');
?>