<?php

    function giaiPTBac2($a, $b, $c) {
        if($a == 0) {
            if($b == 0) {
                echo "Phuong trinh vo nghiem!";
            } else {
                echo "Phuong trinh co mot nghiem: x = ".(-$c/$b); //c !=0
            }

            return; // ca 3 =0
        }

        //th ca 3 co nghiem
        $delta = $b*$b - 4*$a*$c;
        // $x1;
        // $x2;
        if($delta > 0)   {
            $x1 = (-$b + sqrt($delta))/ (2*$a); 
            $x2 = (-$b - sqrt($delta))/ (2*$a); 

            echo "Phuong trinh co 2 nghiem phan biet x1= ".$x1. " và x2= ".$x2;
        }else if ($delta == 0) {
            $x1 = (-$b / (2 * $a));
            echo "Phong trinh co nghiem kep: x1 = x2 = ", $x1;
        } else {
            echo "Phuong trinh vo nghiem!";
        }
    }

    //vd : a = 2, b= 4 , c=5
    giaiPTBac2(3,2,1);
?>