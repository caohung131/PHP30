<?php
    $input = [1, 8, 56, 4, 7];

    
    //Cach 1:
    // echo 'So sau khi chuyen: [';
    // for ($i= count($input)-1; 0 <= $i ; $i--) { 
    //     echo $input[$i].",\t";
    // }
    // echo ']'    

    
    //cach 2: dung pop lay phan tu cuoi dung giong stack trong c++
    $arrCount = count($input);
    echo "Mang ban dau la (Input): [ ";
    for ($i = 0; $i < $arrCount; $i++) {
        echo $input[$i].", ";
    }
    echo " ]<br/>";

    echo "Mang dao nguoc la (Output): [";
    while($input) {
        $nodeEnd = array_pop($input); //ham lay pt cuoi
        echo "&nbsp".$nodeEnd.", ";
    }
    echo ' ]';
   
?>