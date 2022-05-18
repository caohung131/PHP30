<?php
    require_once("controllers/BaseController.php");
    class AdminController extends BaseController
    {
        public function __construct()
        {
            if(!isset($_SESSION['auth'])) {
                header('Location: index.php?mod=auth&action=login');
            }
        }
    }
?>