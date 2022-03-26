<?php
    session_start();

    $_SESSION['isLogin'] = 1;
    $_SESSION['statusLogin'] = "thanh cong";

    $info = [];
    $info['id'] = '001';
    $info['name'] = 'Zent Group';
    $info['email'] = 'Caohung1311@gmail.com';

    $info2 = [];
    $info2['id'] = '0012';
    $info2['name'] = 'Zent Group1w';
    $info2['email'] = 'Caohung1311@gmail.com';


    $_SESSION['info'] = $info;
    $_SESSION['info2'] = $info2;

    session_destroy();

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

?>