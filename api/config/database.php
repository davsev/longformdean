<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "melagot_dean";
    private $username = "achvaforms";
    private $password = "achvauserforms";
    public $conn;
 
    function __construt(){
        $this->getConnection;
    }

    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>