<?php
    $arrName = array();

    $arrName[0][0] = "Zent";
    $arrName[0][1] = "Be all you can be";
    $arrName[0][2] = "Start learn PHP";

    $arrName[1][0] = "10";
    $arrName[1][1] = "200";
    $arrName[1][2] = "Laravel";

    $subArray = array("a", 1.5);

    $arrName[1][1] = $subArray;

    echo "<pre>";
        print_r($arrName);
    echo "</pre>";

    echo $arrName[1][1][0];
?>