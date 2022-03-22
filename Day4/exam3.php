<?php

    $info = array();

    $info[] = array(    
        'ID' => '2993',
        'Name' => 'Dinh Hoai Nam',
        'Phone' => '0397680201',
        'email' => 'Caohung131@gmail.com'
    );

    $info[] = array(    
        'ID' => '2993',
        'Name' => 'Dinh Hoai Nam2',
        'Phone' => '03976802012',
        'email' => 'Caohung1311@gmail.com'
    );

    echo "<pre>";
        print_r($info);
    echo "<pre>";

    //var_dump($info[1]['Phone']);

    foreach($info as $key => $value) {
        var_dump($value);
        echo $key;
        echo 'Sinh vien thu: ' . ($key+1)."<br/>";
        echo 'Ma SV: '. $value['ID']. '<br/>';
        echo 'Ho ten la: '. $value['Name']. '<br/>';
        echo 'So dien thoai la: '. $value['Phone']. '<br/>';
        echo 'Email la: '. $value['email']. '<br/>';
        echo '<br/>';
        
    }

    $info2 = array('hung', 'hoa', 'hieu', 'son', 'hung');

    //var_dump(in_array('hoa1', $info2));

    // if(array_key_exists('Name', $info)) {
    //     echo "Hello, ".$info['Name'];
    // } else {
    //     echo "K ton tai key";
    // }

    // $index = array_search('hung', $info2);
    // if($index !== false) {
    //     echo 'Vi tri cua phan tu la: '.$index;
    // } else {
    //     echo 'K tim thay phan tu';
    // }

    
    
    array_push($info2,'hai', 'nam');
    $pop = array_pop($info2);
    echo $pop;
    // $arrayResult = array_count_values($info2);
    // var_dump($info2);
    // echo "<pre>";
    //     print_r($arrayResult);
    // echo "</pre>";
?>