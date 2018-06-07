<?php 
class User{

    // database connection and table name
    private $conn;
    private $table_name = "users";

    public $id;
    public $password;
    public $username;
    public $fname;
    public $lname;


    public function __construct($db){
        $this->conn = $db;
    }

    public function all_users(){
        $query = "SELECT
        * FROM
        " . $this->table_name ."  
            ORDER BY DESC";

        // prepare query statement



        $stmt = $this->conn->prepare($query);


        $stmt->execute();

        return $stmt;

    }

}
?>