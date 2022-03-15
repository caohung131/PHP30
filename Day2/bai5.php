<?php
    $input = 1234;
    $i = 0;
    $tong = 0;
   while($i<$input)
   {
        $capNhatBien =  $input; //1234
        $du = $input % 10; // lay du 4
        
        $input = round($capNhatBien/10); //giam 1 chuc lam tron. 123
        
        echo $du." + ";
        $tong +=$du;
   }
   echo "= ".$tong;
?>