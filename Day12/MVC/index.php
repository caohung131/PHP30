<?php   
    echo 'index';

    $mod = $_GET['mod'];
    $action = $_GET['action'];
    $nameController = ucfirst($mod) . "Controller";
    $path = "controllers/".$nameController.".php";
    require_once $path;

    // echo $path;

    echo $mod. ' - '. $action;

    echo "<br/>";

    // var_dump($nameController);
    // die();

    $controller = new $nameController();

    $controller->$action();
?>