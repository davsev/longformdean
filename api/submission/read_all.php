<?php
include '../config/database.php';
include '../class/Read.php';


$database = new Database();
$db = $database->getConnection();
// require '../inc.php';

$readAll = new Read($db);
echo '<pre>';
$readAll->show_all_rows();
echo '</pre>';
?>