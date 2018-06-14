<?php
session_start();
// error_reporting(E_ALL);
    putenv("TZ=Asia/Jerusalem");
    require './api/config/database.php';
    require './api/class/Form.php';
    require './api/class/User.php';
    require './api/class/read.php';
    require './api/class/Dashboard.php';
   


    $database = new Database();
    $db = $database->getConnection();

?>