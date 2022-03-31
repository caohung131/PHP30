<?php
    session_start();
    if(isset($_SESSION['products'])) {
        $products = $_SESSION['products'];
    }

  
    $key = $_GET['id'];

    unset($_SESSION['cart'][$key]);
    // echo "<pre>";
    //     print_r($_SESSION);
    // echo "</pre>";

    header('Location:cart.php')

    


    
?>