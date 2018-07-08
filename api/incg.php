<?php
session_start();

error_reporting(E_ALL);
    putenv("TZ=Asia/Jerusalem");
    include './api/config/database.php';
    include './api/class/Form.php';
    include './api/class/User.php';
    include './api/class/read.php';
    include './api/class/Dashboard.php';
   

//include database connection
    $database = new Database();
    $db = $database->getConnection();

// //disconect user by session destroy, The redirect is in each file header
// if(isset($_POST['destroy'])){
//     session_destroy();
// }

?>

