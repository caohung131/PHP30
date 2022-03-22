<?php
    $input = [1, 8, 56, 4, 7];
    $max = NULL;


    for ($i=0; $i < count($input) ; $i++) { 
       if($max == NULL) {
           $max = $input[0];
       } else if($input[$i] >= $max) {
            $max = $input[$i];
       }
    }

    echo "Gia tri max la: ".$max;
?>