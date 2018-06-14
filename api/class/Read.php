<?php 


class Read{
  
     // database connection and table name
    private $conn;
    private $table_name = "form";


    public function __construct($db){
        $this->conn = $db;
        
    }

    public function show_all_rows(){
       

        // echo '<br />tz is '.$tz;
        // echo '<br />year is '. $year;
        $query = "SELECT * FROM " . $this->table_name;
        
        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();
     
        // $all = $row['datas'];
      $allusersarray = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data =  unserialize($row['datas']);
         
            array_push($allusersarray, $data);
           
       };
    //   echo json_encode($allusersarray);
        
        echo json_encode($allusersarray);
    }

}

