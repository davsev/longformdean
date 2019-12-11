<?php 


class Form_update{
  
     // database connection and table name
    private $conn;
    private $table_name = "form";
    
    // object properties
    // public $id;
    // public $tz;
    // public $fieldName;
    // public $fieldVal;
    // public $year;

    public $id;
    public $tz;
    public $year;
    public $lname;
    public $fname;
    public $gender;
    public $birth_country;
    public $city;
    public $cellular;
 
    
  // constructor with $db as database connection
    public function __construct($db, $tz, $year){
        $this->conn = $db;

        $query = "SELECT * FROM " . $this->table_name ." WHERE `tz`=?  AND  `year`=?";

        $stmt = $this->conn->prepare($query); 

        $stmt->bindParam(1, $tz);
        $stmt->bindParam(2, $year);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

 

        $this->lname = $row['lname'];
        $this->fname = $row['fname'];
        $this->gender = $row['gender'];
        $this->birth_country = $row['birth_country'];
        $this->city = $row['city'];
        $this->cellular = $row['cellular'];
        $this->year = $row['year'];

        
    }

    public function update($lname, $fname, $gender, $birth_country, $city, $cellular){
        $query = "UPDATE form SET lname=?, fname=?,gender=?, birth_country=?, city=?, cellular=?  WHERE tz = ? AND year = ?";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(1, $lname);
        $stmt->bindParam(2, $fname);
        $stmt->bindParam(3, $gender);
        $stmt->bindParam(4, $birth_country);
        $stmt->bindParam(5, $city);
        $stmt->bindParam(6, $cellular);
        $stmt->bindParam(7, $this->tz);
        $stmt->bindParam(8, $this->year);
        
        $stmt->execute();

    }

    public function getfname(){
        return $this->fname;
    }
    
    public function setfname($fname){
        $this->fname = $fname;
    }	 
}


?>