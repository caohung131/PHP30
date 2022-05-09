<?php
    class AdminController 
    {
        public function __construct()
        {
            if(!isset($_SESSION['auth'])) {
                header('Location: index.php?mod=auth&action=login');
            }
        }
    }
?>