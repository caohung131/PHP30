<?php
    session_start();

    // $key2 = $_GET('id');

    echo "<pre>";
        print_r($_SESSION['cart']);
    echo "</pre>";
     
    

    $key = $_GET['id'];
    unset($_SESSION['cart'][$key]);

    header("Location:cart.php");
?>
