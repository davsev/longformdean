<?php
class Submission{
 
    // database connection and table name
    private $conn;
    private $table_name = "form";
 
    // object properties
    public $id;
    public $tz;
    public $lname;
    public $fname;
    public $gender;
    public $birth_country;
    public $city;
    public $cellular;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){
    
        // select all query
        $query = "SELECT * FROM " . $this->table_name;
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // used when filling up the update product form
    function readOne(){
    
        // query to read single record
        $query = "SELECT
                   *
                FROM
                    " . $this->table_name . " 
                WHERE
                    id = ?
                LIMIT
                    0,1";
    
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
    
        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);
    
        // execute query
        $stmt->execute();
    
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // set values to object properties
        $this->tz = $row['tz'];
        $this->lname = $row['lname'];
        $this->fname = $row['fname'];
        $this->gender = $row['gender'];
        $this->birth_country = $row['birth_country'];
        $this->city = $row['city'];
        $this->cellular = $row['cellular'];
    }

    // create product
    function create(){
    
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name, lname=:lname, fname=:fname, gender=:gender, birth_country=:birth_country, city=:city, cellular=:cellular, created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->tz=htmlspecialchars(strip_tags($this->tz));
        $this->lname=htmlspecialchars(strip_tags($this->lname));
        $this->fname=htmlspecialchars(strip_tags($this->fname));
        $this->gender=htmlspecialchars(strip_tags($this->gender));
        $this->birth_country=htmlspecialchars(strip_tags($this->birth_country));
        $this->city=htmlspecialchars(strip_tags($this->city));
        $this->cellular=htmlspecialchars(strip_tags($this->cellular));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":tz", $this->tz);
        $stmt->bindParam(":lname", $this->lname);
        $stmt->bindParam(":fname", $this->fname);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":birth_country", $this->birth_country);
        $stmt->bindParam(":city", $this->city);
        $stmt->bindParam(":cellular", $this->cellular);
        $stmt->bindParam(":created", $this->created);
    
        // execute query
        if($stmt->execute()){
            return true;
        }
    
        return false;
        
    }
}

