<?php

    echo time();
    echo "<br/>";

    echo date('d/m/Y - H:i:s');

    echo "<br/>";
    $dateInt = mktime(0,0,0,5 , (15+17), 2017);

    echo date('d/m/Y', $dateInt);
?>