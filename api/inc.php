<?php
session_start();
// error_reporting(E_ALL);

error_reporting(-1);
ini_set('display_errors', 'On');
// set_error_handler("var_dump");


    putenv("TZ=Asia/Jerusalem");
    include '../api/config/database.php';
    include '../api/inc/PHPMailer/PHPMailerAutoload.php';
    include '../api/class/Form.php';
    include '../api/class/Dashboard.php';
    
    $database = new Database();
    $db = $database->getConnection();

   $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
   $currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   $GLOBALS['siteURL'] = $currentURL;



?>