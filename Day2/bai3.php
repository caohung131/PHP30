<?php

/*
    số nguyên tố là số lớn hơn 1 và chỉ chia hết cho 1 và chính nó.
    Chỉ có số 2 là số nguyên tố chẵn, 
    tất cả các số chẵn khác không phải là số nguyên tố vì chúng chia hết cho 2.

*/
    //tim so nguyen to <100
    $n; // so được chuyền từ 1 -> 100

    function laSoNguyenTo($n) {
        if($n < 2) { // lon hơn 1
            return false; 
        }

        if($n == 2) { 
            return true;
        }

        //kiem tra xem no con chia cho duoc so khac k. 2 so k the bang nhau 
        //dieu kien nay la ngoai 2 so bang nhau. con so nao chia het cho so nt cua ta k. có trả f
        for ($i = 2; $i < ($n - 1) ; $i++) { 
            if($n % $i == 0) { // vi no chia het cho 1 va chinh no nen con chia duoc can n la loai
                return false;
            }
        }

        return true;
    };

    $n = 100;
    echo  "Số nguyên tố là: ";
    for ($i = 0; $i < $n ; $i++) { 
        if(laSoNguyenTo($i))  {
            echo " $i, ";
        }
    }
?>