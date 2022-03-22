<?php
    function standardize($strName) {
        trim($strName);
        echo 'Chuoi ban dau la: ['.$strName."]<br/>";
        $newString = strtolower($strName);
        $output = ucwords($newString); 

        return $output;
    }

    echo "Chuoi sau chuan hoa: ". standardize(" cAo KhaNh HuNg ");
?>