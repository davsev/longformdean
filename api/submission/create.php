<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../objects/Submission.php';
 
$database = new Database();
$db = $database->getConnection();
 
$submission = new Submission($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
$submission->tz = $data->tz;
$submission->lname = $data->lname;
$submission->fname = $data->fname;
$submission->gender = $data->gender;
$submission->city = $data->city;
$submission->birth_country = $data->birth_country;
$submission->cellular = $data->cellular;
$submission->created = date('Y-m-d H:i:s');
 

// create the product
if($submission->create()){
    echo '{';
        echo '"message": "Submission was created."';
    echo '}';
}
 
// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to create Submission."';
    echo '}';
}
?>