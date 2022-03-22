<?php

    $name = "Cao Khanh Hung rat la dep trai !";
    $data = explode("dep", $name);


    var_dump($data);
    var_dump($name);
    echo '<pre>';
        print_r($data);
    echo '</pre>';

    $noiChuoi = implode(" ", $data);
    // var_dump($noiChuoi) ;

    // echo strlen($name);
    // echo str_word_count($name);

    echo str_replace("trai", "gai lam trai theo", $name);
    echo "<br/>".md5('123456');

    echo substr($name, 3, 8);
    echo strstr($name, "rat");

?>