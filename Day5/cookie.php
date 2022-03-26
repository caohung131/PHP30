<?php
    setcookie('msg', 'dang nhap thanh cong', time()- 5*60);
    setcookie('msg2', 'dang nhap thanh cong', time()- 5*60);

    if(isset($_COOKIE['msg'])) {
        echo $_COOKIE['msg'];
    }

    echo '<pre>';
        print_r($_COOKIE);
    echo '</pre>';
?>