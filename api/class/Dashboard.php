<?php 


class Dashboard{

     // database connection and table name
     public $site_url = '127.0.0.1/deanm/';
     private $conn;
     private $table_name = "form";
     public $fname;
 
     public function __construct($db){
         $this->conn = $db;
         
     }
 
     public function get_student_data($student_id){
     $query = "SELECT * FROM form WHERE id = ${student_id}";
    
        $stmt = $this->conn->prepare($query);     
        $stmt->execute();
        

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $this->id = $row['id'];
        $this->tz = $row['tz'];
        $this->year = $row['year'];
        $this->submitted= $row['submitted'];
        $this->isalonefile = $row['isalonefile'];
        $this->tzfile = $row['tzfile'];
        $this->islochemfile = $row['islochemfile'];
        $this->lo_oved_files = $row['lo_oved_files'];
        $this->is_army_ptor_file = $row['is_army_ptor_file'];
        $this->is_miluim_file = $row['is_miluim_file'];
        $this->self_salary_files = $row['self_salary_files'];
        $this->self_employ_files = $row['self_employ_files'];
        $this->mezonot_files = $row['mezonot_files'];
        $this->mezonot_height_files = $row['mezonot_height_files'];
        $this->is_siua_file = $row['is_siua_file'];
        $this->lo_oved_av_files = $row['lo_oved_av_files'];
        $this->self_av_salary_files = $row['self_av_salary_files'];
        $this->self_av_employ_files = $row['self_av_employ_files'];
        $this->lo_oved_em_files = $row['lo_oved_em_files'];
        $this->self_em_salary_files = $row['self_em_salary_files'];
        $this->self_em_employ_files = $row['self_em_employ_files'];
        $this->lo_oved_zug_files = $row['lo_oved_zug_files'];
        $this->self_zug_salary_files = $row['self_zug_salary_files'];
        $this->self_zug_employ_files = $row['self_zug_employ_files'];
        $this->self_children_files = $row['self_children_files'];
        $this->self_soldier_files = $row['self_soldier_files'];
        $this->self_student_files = $row['self_student_files'];
        $this->social_harig_file = $row['social_harig_file'];
        $this->medical_harig_file = $row['medical_harig_file'];
        $this->family_harig_file = $row['family_harig_file'];
        $this->explanation_file = $row['explanation_file'];


        $this->datas = $row['datas'];
      
        $xcx = unserialize($row['datas']);
        if($xcx){
        $this->lname = $xcx['lname']; 
        $this->fname = $xcx['fname']; 
        $this->birth_country = $xcx['birth_country']; 
        $this->gender = $xcx['gender'];
        $this->city = $xcx['city']; 
        $this->cellular = $xcx['cellular'];
        $this->email = $xcx['email'];
        $this->family_state = $xcx['family_state'];
        $this->isalone = $xcx['isalone']; 
        $this->study_field = $xcx['study_field']; 
        $this->study_year = $xcx['study_year']; 
        $this->asked_schol = $xcx['asked_schol']; 
        $this->is_army = $xcx['is_army'];
        $this->length_army = $xcx['length_army']; 
        $this->is_lochem = $xcx['is_lochem'];
        $this->is_army_ptor = $xcx['is_army_ptor']; 
        $this->is_miluim = $xcx['is_miluim']; 
        $this->mimun_nosaf = $xcx['mimun_nosaf']; 
        $this->taasukati_state = $xcx['taasukati_state']; 
        $this->self_salary_avg = $xcx['self_salary_avg']; 
        $this->self_employ_avg = $xcx['self_employ_avg']; 
        $this->mezonot_state = $xcx['mezonot_state']; 
        $this->mezonot_height = $xcx['mezonot_height'];
        $this->is_siua = $xcx['is_siua']; 
        $this->taasukati_av_state = $xcx['taasukati_av_state'];
        $this->self_av_salary_avg = $xcx['self_av_salary_avg']; 
        $this->self_av_employ_avg = $xcx['self_av_employ_avg']; 
        $this->taasukati_em_state = $xcx['taasukati_em_state']; 
        $this->self_em_salary_avg = $xcx['self_em_salary_avg'];
        $this->self_em_employ_avg = $xcx['self_em_employ_avg']; 
        $this->taasukati_zug_state = $xcx['taasukati_zug_state']; 
        $this->self_zug_salary_avg = $xcx['self_zug_salary_avg']; 
        $this->self_zug_employ_avg = $xcx['self_zug_employ_avg']; 
        $this->self_children = $xcx['self_children']; 
        $this->self_soldier = $xcx['self_soldier'];
        $this->self_student = $xcx['self_student']; 
        $this->social_harig = $xcx['social_harig'];
        $this->medical_harig = $xcx['medical_harig'];
        $this->family_harig = $xcx['family_harig']; 
        $this->explanation = $xcx['explanation']; 
        };
        

     }


//update student data when admin clicks save or confirm
     public function update_user_data($id){
                //     $submitted == 0;
        // }
     $query = "UPDATE form SET datas=?, submitted=? WHERE id = ${id}";
        $stmt = $this->conn->prepare($query);
        

        $stmt->execute([$this->datas, $this->submitted]);
        

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
                    <th></th>  
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
                <td data-year="'.$row['year'].'" data-type="file" data-filetype="tzfile" data-id="'. $row['tz'].'">'. $row['tz'].'</td>  
                <td>'. date("d.m.Y", $row['created']).'</td>  
                <td>'. $this->get_study_field_by_id($data['study_field']).'</td>  
                <td>'. $this->get_family_state_by_id($data['family_state']).'</td>  
                <td>'. $data['study_year'].'</td>  
                <td>
                  <a href="studentdata.php?id='.$row['id'].'">צפייה בכל הנתונים</a>

                </td>  
                  

            </tr>';
           
       };
    //   echo json_encode($allusersarray);
        
    

       echo '</tbody>';

        
    }

    public function get_study_field_by_id($study_field_id){
        $query = "SELECT study_field FROM study_field WHERE study_field_id = ${study_field_id}";
        
        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       return $row['study_field'];
    }

    
    public function get_family_state_by_id($family_state_id){
        $query = "SELECT family_state_name FROM family_state WHERE family_state_id = ${family_state_id}";
        
        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       return $row['family_state_name'];
    }


    public function load_image($id, $type, $year){
 
        // echo '<br />tz is '.$tz;
        // echo '<br />year is '. $year;
        $query = "SELECT ${type} FROM " . $this->table_name . " WHERE year = ${year} AND tz = ${id}";
   
        $stmt = $this->conn->prepare($query);     
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $file = $row[$type];
        $decoded_file = json_decode($file);
        return '/dean/uploads/'.$id.'/'.$decoded_file[0];


    }

    public function load_clicked_image($file){

        switch($file){
            case 'tzfile':
                $file_array = $this->tzfile;
            break;
            case 'self_employ_files':
                $file_array = $this->self_employ_files;
            break;
        }
        $tzf = json_decode($file_array);
        foreach($tzf as $file){
            echo '<a href="#" class="open-file-near" data-url="/uploads/'.$this->tz.'/'.$file.'" ><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> '. $file.'</a><br />';
        }

    }
    
}

?>