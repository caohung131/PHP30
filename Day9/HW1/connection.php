<?php
    $severname = "localhost:9999";
    $username = "root";
    $password = "";
    $dbname = "blogs";
    $conn = new mysqli($severname, $username, $password, $dbname);

    // var_dump($conn);

    if (!$conn) {
        die("Connection failed: <br/>" . mysqli_connect_error());
    }
    echo "Connected successfully <br/>";
    // mysqli_close($conn);

?>