<?php 


class Form{
  
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
    public $submitted;
    public $lname;
    public $fname;
    public $gender;
    public $birth_country;
    public $city;
    public $cellular;
    public $email;
    public $isalone;
    public $tzfile;
    public $study_field;
    public $study_year;
    public $asked_schol;
    public $received_schol;
    public $isalonefile;
    public $is_army;
    public $length_army;
    public $is_lochem;
    public $islochemfile;
    public $is_army_ptor;
    public $is_army_ptor_file;
    public $is_miluim;
    public $is_miluim_file;
	public $is_army_file;
    public $mimun_nosaf ;
    public $is_siua ;
    public $family_state;
    public $taasukati_state;
    public $self_salary_avg;
    public $self_employ_avg;
    public $lo_oved_self_avg;
    public $self_av_lo_oved_avg;
    public $self_em_lo_oved_avg;
    public $self_zug_lo_oved_avg;
    public $self_employ_files;
    public $mezonot_state;
    public $mezonot_height;
    public $taasukati_av_state;
    public $self_av_salary_avg;
    public $self_av_employ_avg;
    public $lo_oved_av_files;
    public $self_av_salary_files;
    public $self_av_employ_files;
    public $taasukati_em_state;
    public $self_em_salary_avg;
    public $self_em_employ_avg;
    public $lo_oved_em_files;
    public $self_em_salary_files;
    public $self_em_employ_files;
    public $taasukati_zug_state; 
    public $self_zug_salary_avg; 
    public $self_zug_employ_avg; 
    public $self_children; 
    public $self_soldier; 
    public $self_student; 
    public $lo_oved_zug_files;
    public $self_zug_salary_files;
    public $self_zug_employ_files;
    public $self_children_files;
    public $self_soldier_files;
    public $self_student_files;
    public $social_harig;
    public $social_harig_file;
    public $medical_harig;
    public $medical_harig_file;
    public $family_harig;
    public $family_harig_file;
    public $explanation;
    public $explanation_file;
    public $date_submitted;




    public $datas;
 
    
  // constructor with $db as database connection
    public function __construct($db, $tz, $year){

        $this->conn = $db;

        // $this->login_idm_session();

        $query = "SELECT * FROM " . $this->table_name ." WHERE `tz`=?  AND  `year`=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $tz);
        $stmt->bindParam(2, $year);
    
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $this->id = $row['id'];
        $this->tz = $row['tz'];
        $this->year = $row['year'];
        $this->submitted= $row['submitted'];
        $this->date_submitted = $row['date_submitted'];
        $this->isalonefile = $row['isalonefile'];
        $this->tzfile = $row['tzfile'];
        $this->islochemfile = $row['islochemfile'];
        $this->lo_oved_files = $row['lo_oved_files'];
        $this->is_army_ptor_file = $row['is_army_ptor_file'];
        $this->is_miluim_file = $row['is_miluim_file'];
		$this->is_army_file = $row['is_army_file'];
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
        $this->received_schol = $xcx['received_schol'];  
        $this->is_army = $xcx['is_army'];
        $this->length_army = $xcx['length_army']; 
        $this->is_lochem = $xcx['is_lochem'];
        $this->is_army_ptor = $xcx['is_army_ptor']; 
        $this->is_miluim = $xcx['is_miluim']; 
        $this->mimun_nosaf = $xcx['mimun_nosaf']; 
        $this->taasukati_state = $xcx['taasukati_state']; 
        $this->self_salary_avg = $xcx['self_salary_avg']; 
        $this->self_employ_avg = $xcx['self_employ_avg']; 
        // $this->lo_oved_self_avg = $xcx['lo_oved_self_avg']; 
        // $this->self_av_lo_oved_avg = $xcx['self_av_lo_oved_avg']; 
        // $this->self_em_lo_oved_avg = $xcx['self_em_lo_oved_avg']; 
        // $this->self_zug_lo_oved_avg = $xcx['self_zug_lo_oved_avg']; 

        (isset($this->lo_oved_self_avg) ? $this->lo_oved_self_avg = $xcx['lo_oved_self_avg'] :  $this->lo_oved_self_avg = '0');
        (isset($this->self_av_lo_oved_avg) ? $this->self_av_lo_oved_avg = $xcx['self_av_lo_oved_avg'] :  $this->self_av_lo_oved_avg = '0');
        (isset($this->self_em_lo_oved_avg) ? $this->self_em_lo_oved_avg = $xcx['self_em_lo_oved_avg'] :  $this->self_em_lo_oved_avg = '0');
        (isset($this->self_zug_lo_oved_avg) ? $this->self_zug_lo_oved_avg = $xcx['self_zug_lo_oved_avg'] :  $this->self_zug_lo_oved_avg = '0');

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
        (isset($this->reject_exp) ? $this->reject_exp = $xcx['reject_exp'] :  $this->reject_exp = '');

        //checkboxes
        (isset($this->tzfile_cb) ? $this->tzfile_cb = $xcx['tzfile_cb'] :  $this->tzfile_cb = '');
        (isset($this->isalonefile_cb) ? $this->isalonefile_cb = $xcx['isalonefile_cb'] :  $this->isalonefile_cb = '');
        (isset($this->islochemfile_cb) ? $this->islochemfile_cb = $xcx['islochemfile_cb'] :  $this->islochemfile_cb = '');
        (isset($this->is_army_ptor_file_cb) ? $this->is_army_ptor_file_cb = $xcx['is_army_ptor_file_cb'] :  $this->is_army_ptor_file_cb = '');
        (isset($this->is_miluim_file_cb) ? $this->is_miluim_file_cb = $xcx['is_miluim_file_cb'] :  $this->is_miluim_file_cb = '');
        (isset($this->lo_oved_files_cb) ? $this->lo_oved_files_cb = $xcx['lo_oved_files_cb'] :  $this->lo_oved_files_cb = '');
        (isset($this->self_salary_files_cb) ? $this->self_salary_files_cb = $xcx['self_salary_files_cb'] :  $this->self_salary_files_cb = '');
        (isset($this->self_employ_files_cb) ? $this->self_employ_files_cb = $xcx['self_employ_files_cb'] :  $this->self_employ_files_cb = '');
        (isset($this->mezonot_files_cb) ? $this->mezonot_files_cb = $xcx['mezonot_files_cb'] :  $this->mezonot_files_cb = '');
        (isset($this->mezonot_height_files_cb) ? $this->mezonot_height_files_cb = $xcx['mezonot_height_files_cb'] :  $this->mezonot_height_files_cb = '');
        (isset($this->is_siua_file_cb) ? $this->is_siua_file_cb = $xcx['is_siua_file_cb'] :  $this->is_siua_file_cb = '');
        (isset($this->lo_oved_av_files_cb) ? $this->lo_oved_av_files_cb = $xcx['lo_oved_av_files_cb'] :  $this->lo_oved_av_files_cb = '');
        (isset($this->self_av_salary_files_cb) ? $this->self_av_salary_files_cb = $xcx['self_av_salary_files_cb'] :  $this->self_av_salary_files_cb = '');
        (isset($this->self_av_employ_files_cb) ? $this->self_av_employ_files_cb = $xcx['self_av_employ_files_cb'] :  $this->self_av_employ_files_cb = '');
        (isset($this->lo_oved_em_files_cb) ? $this->lo_oved_em_files_cb = $xcx['lo_oved_em_files_cb'] :  $this->lo_oved_em_files_cb = '');
        (isset($this->self_em_salary_files_cb) ? $this->self_em_salary_files_cb = $xcx['self_em_salary_files_cb'] :  $this->self_em_salary_files_cb = '');
        (isset($this->self_em_employ_files_cb) ? $this->self_em_employ_files_cb = $xcx['self_em_employ_files_cb'] :  $this->self_em_employ_files_cb = '');
        (isset($this->lo_oved_zug_files_cb) ? $this->lo_oved_zug_files_cb = $xcx['lo_oved_zug_files_cb'] :  $this->lo_oved_zug_files_cb = '');
        (isset($this->self_zug_salary_files_cb) ? $this->self_zug_salary_files_cb = $xcx['self_zug_salary_files_cb'] :  $this->self_zug_salary_files_cb = '');
        (isset($this->self_zug_employ_files_cb) ? $this->self_zug_employ_files_cb = $xcx['self_zug_employ_files_cb'] :  $this->self_zug_employ_files_cb = '');
        (isset($this->self_children_files_cb) ? $this->self_children_files_cb = $xcx['self_children_files_cb'] :  $this->self_children_files_cb = '');
        (isset($this->self_soldier_files_cb) ? $this->self_soldier_files_cb = $xcx['self_soldier_files_cb'] :  $this->self_soldier_files_cb = '');
        (isset($this->self_student_files_cb) ? $this->self_student_files_cb = $xcx['self_student_files_cb'] :  $this->self_student_files_cb = '');
        (isset($this->social_harig_file_cb) ? $this->social_harig_file_cb = $xcx['social_harig_file_cb'] :  $this->social_harig_file_cb = '');
        (isset($this->medical_harig_file_cb) ? $this->medical_harig_file_cb = $xcx['medical_harig_file_cb'] :  $this->medical_harig_file_cb = '');
        (isset($this->family_harig_file_cb) ? $this->family_harig_file_cb = $xcx['family_harig_file_cb'] :  $this->family_harig_file_cb = '');



       

        
        }
    }



    public function new_line($tz, $year){
        // query to insert record
        if($tz){
            $created = time();
            $query = "INSERT INTO " . $this->table_name . " (tz, year,created) VALUES (?, ?, ?)";

            // prepare query
            $stmt = $this->conn->prepare($query);
            

            // bind values
            $stmt->bindParam(1, $tz);
            $stmt->bindParam(2, $year);
            $stmt->bindParam(3, $created);

        
            // var_dump($stmt);
            // execute query
            if($stmt->execute()){
                return true;
                
            }
        
        return false;
        }
    }
    // read products
    public function read(){
        // select all query
        $query = "SELECT
                    * FROM
                    " . $this->table_name ." WHERE `tz`=?  AND  `year`=? 
                ORDER BY DESC";
    
        // prepare query statement

       

        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();

        return $stmt;
    }

    function create(){

            // query to insert record
            $query = "INSERT INTO " . $this->table_name . " (tz, year) VALUES (?, ?)";
        
            // prepare query
            $stmt = $this->conn->prepare($query);
            

            // bind values
            $stmt->bindParam(1, $this->tz);
            $stmt->bindParam(2, $this->year);
         

            // var_dump($stmt);
            // execute query
            if($stmt->execute()){
                return true;
              
            }
            
            return false;
       
    }


//     function create(){

//         // query to insert record
//         $query = "INSERT INTO " . $this->table_name . " (tz, lname, fname, gender, birth_country, city, cellular, year, email, isalone, tzfile, study_field, study_year, asked_schol, received_schol, is_army, length_army) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
//         // prepare query
//         $stmt = $this->conn->prepare($query);
        

//         // bind values
//         $stmt->bindParam(1, $this->tz);
//         $stmt->bindParam(2, $this->lname);
//         $stmt->bindParam(3, $this->fname);
//         $stmt->bindParam(4, $this->gender);
//         $stmt->bindParam(5, $this->birth_country);
//         $stmt->bindParam(6, $this->city);
//         $stmt->bindParam(7, $this->cellular);
//         $stmt->bindParam(8, $this->year);
//         $stmt->bindParam(9, $this->email);
//         $stmt->bindParam(10, $this->isalone);
//         $stmt->bindParam(11, $this->tzfile);
//         $stmt->bindParam(12, $this->study_field);
//         $stmt->bindParam(12, $this->study_year);
//         $stmt->bindParam(13, $this->asked_schol);
//         $stmt->bindParam(14, $this->received_schol);
//         $stmt->bindParam(15, $this->is_army);
//         $stmt->bindParam(16, $this->length_army);

//         // var_dump($stmt);
//         // execute query
//         if($stmt->execute()){
//             return true;
          
//         }
        
//         return false;
   
// }


    //this Method check if there is already a row with tz and yead combination in the db
    public function dataExist($tz, $year){
     
      
        $query = "SELECT * FROM ". $this->table_name ." WHERE tz = ? AND year = ?";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(1, $tz);
        $stmt->bindParam(2, $year);
        // $stmt->bindParam(3, $fieldName);
    
        // execute query
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($row);

        if( ! $row)
            {
            $res = false;
            }
        else{
             $res = true;
        }
        return $row;

    }


    
    public static function field_values($tz, $year, $fieldName){
     
        //var_dump($test);
          $query = "SELECT `fieldVal` FROM ". $this->table_name ." WHERE tz = ? AND year = ?  AND fieldName = ?";
          $stmt = $this->conn->prepare($query);
          
          $stmt->bindParam(1, $tz);
          $stmt->bindParam(2, $year);
          $stmt->bindParam(3, $fieldName);
      
          // execute query
          $stmt->execute();
          return($stmt);
    }


    public function update(){
        // $this->submitted = $submitted;
        // if(!$submitted){
        //     $submitted == 0;
        // }
        $query = "UPDATE form SET datas=?, submitted=?, date_submitted=? WHERE tz = ? AND year = ?";
        $stmt = $this->conn->prepare($query);
    
    
        $stmt->execute([$this->datas, $this->submitted,  $this->date_submitted, $this->tz, $this->year]);
        
        if($stmt->rowCount() > 0){
            echo '
                <div class="row">
                <div class="col-xs-6 col-xs-pull-3"> 
                <div class="alert alert-success datasaved animated fadeOut" id="datasaved" role="alert"><h4>המידע נשמר בהצלחה</h4><a class="closex" style=" float: left;
                border: 2px solid #fff;
                width: 24px;
                height: 24px;
                text-align: center;
                border-radius: 50%;
                padding: 0px;
                color: #fff;
                margin: 0;">x</a></div>
                </div>
                </div>
                ';

        }

        if($stmt->rowCount() > 0 && $this->submitted == 1){
            $this->send_mail_on_submit();
        }
    }
   
    public function file_update($files_arr, $fieldname){
        
        $file = $files_arr[$fieldname]["name"];
        //count how many vars in the json oblect
        switch($fieldname){
            case 'tzfile': 
            $fieldvalue = $this->tzfile;
            break;

            case 'isalonefile': 
            $fieldvalue = $this->isalonefile;
            break;
           
            case 'islochemfile': 
            $fieldvalue = $this->islochemfile;
            break;

            case 'is_army_ptor_file': 
            $fieldvalue = $this->is_army_ptor_file;
            break;

            case 'is_miluim_file': 
            $fieldvalue = $this->is_miluim_file;
            break;

			case 'is_army_file': 
            $fieldvalue = $this->is_army_file;
            break;
			
            case 'lo_oved_files': 
            $fieldvalue = $this->lo_oved_files;
            break;
           
            case 'self_salary_files': 
            $fieldvalue = $this->self_salary_files;
            break;

            case 'self_employ_files': 
            $fieldvalue = $this->self_employ_files;
            break;

            case 'mezonot_files': 
            $fieldvalue = $this->mezonot_files;
            break;

            case 'mezonot_height_files': 
            $fieldvalue = $this->mezonot_height_files;
            break;

            case 'is_siua_file': 
            $fieldvalue = $this->is_siua_file;
            break;
           
            case 'lo_oved_av_files': 
            $fieldvalue = $this->lo_oved_av_files;
            break;
           
            case 'self_av_salary_files': 
            $fieldvalue = $this->self_av_salary_files;
            break;
           
            case 'self_av_employ_files': 
            $fieldvalue = $this->self_av_employ_files;
            break;

            case 'lo_oved_em_files': 
            $fieldvalue = $this->lo_oved_em_files;
            break;
           
            case 'self_em_salary_files': 
            $fieldvalue = $this->self_em_salary_files;
            break;
           
            case 'self_em_employ_files': 
            $fieldvalue = $this->self_em_employ_files;
            break;

            case 'lo_oved_zug_files': 
            $fieldvalue = $this->lo_oved_zug_files;
            break;
           
            case 'self_zug_salary_files': 
            $fieldvalue = $this->self_zug_salary_files;
            break;
           
            case 'self_zug_employ_files': 
            $fieldvalue = $this->self_zug_employ_files;
            break;
           
            case 'self_children_files': 
            $fieldvalue = $this->self_children_files;
            break;
           
            case 'self_soldier_files': 
            $fieldvalue = $this->self_soldier_files;
            break;
           
            case 'self_student_files': 
            $fieldvalue = $this->self_student_files;
            break;
           
            case 'social_harig_file': 
            $fieldvalue = $this->social_harig_file;
            break;
           
            case 'medical_harig_file': 
            $fieldvalue = $this->medical_harig_file;
            break;
           
            case 'family_harig_file': 
            $fieldvalue = $this->family_harig_file;
            break;
           
            case 'explanation_file': 
            $fieldvalue = $this->explanation_file;
            break;



        }
        $array_count = count(json_decode($fieldvalue));
        
      
        //if cell in column is empty than create new array if not retrieve the existing one
        if($fieldvalue == NULL){
            $files = array(); 
        }else{
            $files = array(); 
            $files = json_decode($fieldvalue);
        }
        //print_r($files);
        
        array_push($files, $file);
        $filess = json_encode($files);

        
        $query = "UPDATE form SET ${fieldname}=? WHERE tz = ? AND year = ?";
        $stmt = $this->conn->prepare($query);
        
        //var_dump($query);
        $stmt->bindParam(1, $filess);
        $stmt->bindParam(2, $this->tz);
        $stmt->bindParam(3, $this->year);
        

        
        //move file to destination folder
        $target_dir = "../../uploads/".$this->tz;
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        move_uploaded_file($files_arr[$fieldname]["tmp_name"], $target_dir.'/'.$files_arr[$fieldname]["name"]);
        
        $stmt->execute();
        //var_dump($files_arr["isalonefile"]);
        //return $stmt;
        $files_arr[$fieldname]['tz'] = $this->tz;
        $files_arr[$fieldname]['place'] = $array_count;
        $files_arr[$fieldname]['id'] = $this->id;
        $files_arr[$fieldname]['year'] = $this->year;
        $files_arr[$fieldname]['fieldname'] = $fieldname;
        $files_arr[$fieldname]['name'];

       
      
        return json_encode($files_arr[$fieldname]);
       
    }


    public function file_remove($tz, $year, $id, $itemPos, $fieldName){
        
        //decode file list array from db
        $files_array = json_decode($this->$fieldName);
        
        //create new array and convert
        $file_arr = array();
        foreach($files_array as $v){
            array_push($file_arr, $v);
        }
        // echo $itemPos;
        //print_r($file_arr);
        unset($file_arr[$itemPos]);

        $files_array = json_encode($file_arr);

        //print_r($files_array);
        $query = "UPDATE form SET {$fieldName}=? WHERE tz = ? AND year = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $files_array);
        $stmt->bindParam(2, $this->tz);
        $stmt->bindParam(3, $this->year);

        $stmt->execute();

        // return $stmt;
    }


    public function get_study_field(){
        $query = "SELECT * FROM study_field";
        $stmt = $this->conn->prepare($query);
        
        // execute query
        $stmt->execute();
        //print_r($stmt);
        foreach($stmt as $k){
            if($k['study_field_id'] == $this->study_field){
                echo '<option value="'.$k['study_field_id'].'" selected>'.$k['study_field'].'</option>';

            } 
            echo '<option value="'.$k['study_field_id'].'">'.$k['study_field'].'</option>';

        }
        //return($stmt);
    }

    public function is_submitted(){
        if($this->submitted == 1 || $this->submitted == 2 ){
            header('Location: was-submitted.php?id='. $this->id);
        }
    }

    
    /*This set of get feunctions set the*/
    public function getlname(){
        return $this->lname;
    }
    
    public function getid(){
        return $this->id;
    }
    
    
    public function getfname(){
        return $this->fname;
    }

    public function getgender(){
        return $this->gender;
    }

    public function getbirth_country(){
        return $this->birth_country;
    }

    public function getcity(){
        return $this->city;
    }

    public function getcellular(){
        return $this->cellular;
    }

    
    public function getemail(){
        return $this->email;
    }



public function send_mail_on_submit(){
    $msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
    <head>
    <!-- If you delete this meta tag, Half Life 3 will never be released. -->
    <meta name="viewport" content="width=device-width">
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ZURBemails</title>
        
    <style>
    @media only screen and (max-width: 600px) {
      a[class="btn"] {
        display: block!important;
        margin-bottom: 10px!important;
        background-image: none!important;
        margin-right: 0!important;
      }
    
      div[class="column"] {
        width: auto!important;
        float: none!important;
      }
    
      table.social div[class="column"] {
        width: auto!important;
      }
    }
    </style>
    </head>
     
    <body bgcolor="#FFFFFF" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; height: 100%; width: 100%; background-image: url(\'http://www.achva.ac.il/sites/default/files/achvafiles/achvabg.jpg\')">
    
    <!-- HEADER -->
    <table class="head-wrap" bgcolor="#999999" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%;" width="100%">
        <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"></td>
            <td class="header container" style="padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; display: block; max-width: 600px; margin: 0 auto; clear: both;">
                    
                    <div class="content" style="direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px; max-width: 600px; margin: 0 auto; display: block;">
                    <table bgcolor="#999999" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%;" width="100%">
                        <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"><img src="http://www.achva.ac.il/sites/all/themes/ninesixty/logo.png" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; max-width: 100%;"></td>
                            <td align="right" style="margin: 0; padding: 0; direction: rtl; font-family:\'HelveticaNeue-Light\',\'Helvetica Neue Light\',\'Helvetica Neue\',Helvetica,Arial,\'Lucida Grande\',sans-serif; line-height: 1.1; margin-bottom: 15px; font-weight: 900; font-size: 30px; text-transform: uppercase; color: #444; padding: 0; margin: 0;"><h3>המכללה האקדמית אחוה</h3></td>
                        </tr>
                    </table>
                    </div>
                    
            </td>
            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"></td>
        </tr>
    </table><!-- /HEADER -->
    
    
    <!-- BODY -->
    <table class="body-wrap" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%;" width="100%">
        <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"></td>
            <td class="container" bgcolor="#FFFFFF" style="padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; display: block; max-width: 600px; margin: 0 auto; clear: both;">
                 '. time() .'
                <div class="content" style="direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px; max-width: 600px; margin: 0 auto; display: block;">
                <table style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%;" width="100%">
                    <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                        <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                            <h3 style="margin: 0; padding: 0; direction: rtl; font-family: \'HelveticaNeue-Light\', \'Helvetica Neue Light\', \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif; line-height: 1.1; margin-bottom: 15px; color: #000; font-weight: 500; font-size: 27px;"> '. $this->lname .' '. $this->fname .'</h3>
                            <p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;"> טופס בקשה למלגת דיקן – מלגה סוציו אקונומית לתואר ראשון
                            <p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;"> הטופס הוגש בהצלחה</p>
                            <p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;"> מספר האישור הינו  '. $this->id .'</p>
                            <p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;"> נעדכן אותך ברגע שיהיו פרטים חדשים. </p>
                            <p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;"> דיקן הסטודנטים. </p>
                            <!-- Callout Panel -->
    
                             
                    
                            <table class="social" width="100%" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; background-color: #ebebeb; width: 100%;" bgcolor="#ebebeb">
                                <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                                    <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                                        
                                        <!-- column 1 -->
                                        <table align="left" class="column" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 280px; min-width: 279px; float: left;" width="280">
                                            <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                                                <td style="margin: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px;">				
                                                    
                                                <h4><b>עקבו אחרינו</b></h4>
                                                    <p class="" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; font-size: 14px; line-height: 1.6;"><a href="https://www.facebook.com/achvacampus/" class="soc-btn fb" style="margin: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 3px 7px; font-size: 12px; margin-bottom: 10px; text-decoration: none; color: #FFF; font-weight: bold; display: block; text-align: center; background-color: #3B5998;">Facebook</a> 
                            
                                                    
                                                </p></td>
                                            </tr>
                                        </table><!-- /column 1 -->	
                                        
                                        <!-- column 2 -->
                                        <table align="left" class="column" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 280px; min-width: 279px; float: left;" width="280">
                                            <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                                                <td style="margin: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px;">				
                                                                                
                                                    <h4><b>צרו איתנו קשר</b></h4>												
                    דוא"ל: <strong style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"><a href="emailto:melagot@achva.ac.il" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; color: #2BA6CB;">melagot@achva.ac.il</a></strong></p>
                    
                                                </td>
                                            </tr>
                                        </table><!-- /column 2 -->
                                        
                                        <span class="clear" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; display: block; clear: both;"></span>	
                                        
                                    </td>
                                </tr>
                            </table><!-- /social & contact -->
                            
                        </td>
                    </tr>
                </table>
                </div><!-- /content -->
                                        
            </td>
            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"></td>
        </tr>
    </table><!-- /BODY -->
    
    <!-- FOOTER -->
    <table class="footer-wrap" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%; clear: both;" width="100%">
        <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"></td>
            <td class="container" style="padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; display: block; max-width: 600px; margin: 0 auto; clear: both;">
                
                    <!-- content -->
                    <div class="content" style="direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px; max-width: 600px; margin: 0 auto; display: block;">
                    
                    </div><!-- /content -->
                    
            </td>
            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;"></td>
        </tr>
    </table><!-- /FOOTER -->
    
    </body>
    </html>';

    // echo $msg;
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= "From: melagot@achva.ac.il" . "\r\n" .
    // "CC: david_s@achva.ac.il";
    

    // mail($this->email,"טופס מלגת דיקן הוגש בהצלחה",$msg, $headers);
   
// if($this->email) {
	
	
	
	
	
        $mail = new PHPMailer(true);
        try {
             $mail->SMTPDebug = 2;
            //$mail->isSMTP();
            $mail->Host = '10.1.0.61';
            $mail->Port = 25;
            $mail->SMTPAuth = flase;
            $mail->CharSet = 'UTF-8';
            $mail -> AddAddress('deanmelagot@gmail.com');
			$mail -> AddAddress($this->email);

            $mail -> SetFrom('do-not-reply@achva.ac.il', 'טופס מלגת דיקן הוגש בהצלחה');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "טופס מלגת דיקן הוגש בהצלחה";
            $mail->Body = $msg;
            $mail->send();

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
       

    }

}
?>