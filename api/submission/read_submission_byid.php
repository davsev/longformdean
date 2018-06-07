<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/Submission.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$submission = new Submission($db);
 
// set ID property of product to be edited
$submission->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of product to be edited
$submission->readOne();
 
// create array
$submission_arr = array(
    "id" =>  $submission->id,
    "tz" => $submission->tz,
    "lname" => $submission->lname,
    "fname" => $submission->fname,
    "gender" => $submission->gender,
    "birth_country" => $submission->birth_country,
    "city" => $submission->city,
    "cellular" => $submission->cellular
 
);
 

// make it json format
print_r(json_encode($submission_arr));
?>