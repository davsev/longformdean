<?php
session_start();
// error_reporting(E_ALL);
    putenv("TZ=Asia/Jerusalem");
    include './api/config/database.php';
    include './api/class/Form.php';
    include './api/class/Dashboard.php';
   


    $database = new Database();
    $db = $database->getConnection();

?>