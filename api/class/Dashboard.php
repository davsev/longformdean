<?php 


class Dashboard{

     // database connection and table name
     private $conn;
     private $table_name = "form";
 
 
     public function __construct($db){
         $this->conn = $db;
         
     }
 
     public function count_all_rows(){
        
 
         // echo '<br />tz is '.$tz;
         // echo '<br />year is '. $year;
         $query = "SELECT * FROM " . $this->table_name;
    
         $stmt = $this->conn->prepare($query);     
         $stmt->execute();
         $count = $stmt->rowCount();
         echo $count;


     }

     public function count_submitted_rows(){
        
 
        // echo '<br />tz is '.$tz;
        // echo '<br />year is '. $year;
        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 1";
   
        $stmt = $this->conn->prepare($query);     
        $stmt->execute();
        $count = $stmt->rowCount();
        echo $count;


    }


     public function last_submissions_table(){
        
 
        // echo '<br />tz is '.$tz;
        // echo '<br />year is '. $year;
        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 1";
        
        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();
        
        echo'<thead>
                <tr>
                    <th>שם פרטי</th>  
                    <th>שם משפחה</th> 
                    <th>ת.ז</th>  
                    <th>תאריך הגשה</th>  
                    <th>מסלול לימודים</th>  
                    <th>מצב משפחתי</th>  
                    <th>שנת לימודים</th>  
                </tr>
            </thead>
            <tbody>';
        // $all = $row['datas'];
     
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data =  unserialize($row['datas']);
         
            echo' 
            <tr>
                <td>'. $data['fname'].'</td>  
                <td>'. $data['lname'].'</td>  
                <td data-key="'. $row['tz'].'">'. $row['tz'].'</td>  
                <td>'. date("d.m.Y", $row['created']).'</td>  
                <td>'. $data['study_field'].'</td>  
                <td>'. $data['family_state'].'</td>  
                <td>'. $data['study_year'].'</td>  
                  

            </tr>';
           
       };
    //   echo json_encode($allusersarray);
        
    

       echo '</tbody>';

        
    }
}

?>