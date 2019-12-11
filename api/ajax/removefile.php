<?php


include '../config/database.php';
include '../class/Form.php';


$database = new Database();
$db = $database->getConnection();



//print_r(json_encode($_FILES);
//print_r($_POST);


$thedata = new Form($db, $_POST['tz'], $_POST['year']);

print_r($thedata->file_remove($_POST['tz'],$_POST['year'],$_POST['id'],$_POST['itemPos'],$_POST['fieldName']));

?>