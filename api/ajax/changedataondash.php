<?php


include '../config/database.php';
include '../class/Dashboard.php';


$database = new Database();
$db = $database->getConnection();



//print_r(json_encode($_FILES);
print_r($_POST);


$thedata = new Dashboard($db, $_POST['rowId']);

print_r($thedata->update_table_dasboard_data($_POST['rowId'], $_POST['col_name'], $_POST['col_val']));

?>