<?php
    require_once('./models/Query.php');

    class User extends Query
    {
        protected $tableName = "users";
    }
?>