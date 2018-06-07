<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/Submission.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$submission = new Submission($db);
 
// query products
$stmt = $submission->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $submission_arr=array();
    $submission_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 



        $product_item=array(
            "id" => $id,
            "tz" => $tz,
            "lname" => $lname,
            "fname" => $fname,
            "gender" => $gender,
            "birth_country" => $birth_country,
            "city" => $city,
            "cellular" =>$cellular
        );
        array_push($submission_arr["records"], $product_item);
    }
 
    echo json_encode($submission_arr);
}
 
else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>