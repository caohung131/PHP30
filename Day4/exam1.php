<?php
    //Khoi tao mang 1 chieu
    $arrName = array();

    //Chuyen gia tri vao cho mang
    //cach 1: Gan gia tri truc tiep
    $arrName2 = array('Zent', 'Be all you can be');

    //cach 2: Gan gia tri qua chi muc
    $arrName3 = array(
        1 => "Zent",
        2 => "Be all you can be",
        3 => 6.5
    );

    //Cach 3: Khoi tao mang rong sau do gan gia tri 
    $arrName4 = array();

    $arrName4[] = 'Zent Group';
    $arrName4[] = 'Be all you can be';
    $arrName4[] = 3.2;

    echo '<br/>'.$arrName4[0].'<br/>';

    $arrName5 = array();

    $arrName5['name'] = 'Zent Group';
    $arrName5['slogan'] = 'Be all you can be';
    $arrName5['year'] = 2; 

    echo '<br/>'.'Ten thuong hieu cua toi la: '.$arrName5['name'].'<br>';
    echo 'Slogan cua chung toi la:'.$arrName5['slogan'].'<br/>';
    echo 'Nam chung toi thanh lap: '.$arrName5['year'].'<br/>';

    echo '<pre>';
    print_r($arrName4);
   

    //unset($arrName4[0]);

    //array_splice($arrName4, 0);

    // $newArray = array_diff($arrName4, [3.2]);

    // print_r($newArray);

    // echo '</pre>';

    

    //var_dump($arrName4);
    // for ($i=0; $i <  count($arrName4); $i++) { 
    //     echo "$arrName4[$i]"."<br/>";
    // }


    foreach($arrName4 as $key => $value) {
        echo "key:$key  , value:$value<br/>";
    }

    foreach($arrName4 as $value) {
        echo $value."<br/>";
    }
?>