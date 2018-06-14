<?php


include '../config/database.php';
include '../class/Dashboard.php';


$database = new Database();
$db = $database->getConnection();



//print_r(json_encode($_FILES);
// print_r($_POST);


$thedata = new Dashboard($db);

print_r($thedata->load_image($_POST['id'],$_POST['type'],$_POST['year']));

?>