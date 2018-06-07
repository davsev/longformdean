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
    public $mimun_nosaf ;
    public $family_state;
    public $taasukati_state;
    public $self_salary_avg;
    public $self_employ_avg;
    public $self_employ_files;
    public $mezonot_state;
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


    public $datas;
 
    
  // constructor with $db as database connection
    public function __construct($db, $tz, $year){
        $this->conn = $db;

        // echo '<br />tz is '.$tz;
        // echo '<br />year is '. $year;
        $query = "SELECT * FROM " . $this->table_name ." WHERE `tz`=?  AND  `year`=?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $tz);
        $stmt->bindParam(2, $year);
    
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $row['id'];
        $this->tz = $row['tz'];
        $this->year = $row['year'];
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
       
        $xcx = json_decode($row['datas']);
        if($xcx){
        $this->lname = $xcx->lname; 
        $this->fname = $xcx->fname; 
        $this->birth_country = $xcx->birth_country; 
        $this->gender = $xcx->gender;
        $this->city = $xcx->city; 
        $this->cellular = $xcx->cellular; 
        $this->email = $xcx->email; 
        $this->family_state = $xcx->family_state; 
        $this->isalone = $xcx->isalone; 
        $this->study_field = $xcx->study_field; 
        $this->asked_schol = $xcx->asked_schol; 
        $this->is_army = $xcx->is_army; 
        $this->length_army = $xcx->length_army; 
        $this->is_lochem = $xcx->is_lochem; 
        $this->is_army_ptor = $xcx->is_army_ptor; 
        $this->is_miluim = $xcx->is_miluim; 
        $this->mimun_nosaf = $xcx->mimun_nosaf; 
        $this->taasukati_state = $xcx->taasukati_state; 
        $this->self_salary_avg = $xcx->self_salary_avg; 
        $this->self_employ_avg = $xcx->self_employ_avg; 
        $this->mezonot_state = $xcx->mezonot_state; 
        $this->mezonot_height = $xcx->mezonot_height; 
        $this->is_siua = $xcx->is_siua; 
        $this->taasukati_av_state = $xcx->taasukati_av_state; 
        $this->self_av_salary_avg = $xcx->self_av_salary_avg; 
        $this->self_av_employ_avg = $xcx->self_av_employ_avg; 
        $this->taasukati_em_state = $xcx->taasukati_em_state; 
        $this->self_em_salary_avg = $xcx->self_em_salary_avg; 
        $this->self_em_employ_avg = $xcx->self_em_employ_avg; 
        $this->taasukati_zug_state = $xcx->taasukati_zug_state; 
        $this->self_zug_salary_avg = $xcx->self_zug_salary_avg; 
        $this->self_zug_employ_avg = $xcx->self_zug_employ_avg; 
        $this->self_children = $xcx->self_children; 
        $this->self_soldier = $xcx->self_soldier; 
        $this->self_student = $xcx->self_student; 

        
        };
        
    }


    public function new_line($tz, $year){
                    // query to insert record
                    $query = "INSERT INTO " . $this->table_name . " (tz, year) VALUES (?, ?)";
        
                    // prepare query
                    $stmt = $this->conn->prepare($query);
                    
        
                    // bind values
                    $stmt->bindParam(1, $tz);
                    $stmt->bindParam(2, $year);

                
                    // var_dump($stmt);
                    // execute query
                    if($stmt->execute()){
                        return true;
                      
                    }
                    
                    return false;
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
        $query = "UPDATE form SET datas=? WHERE tz = ? AND year = ?";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(1, $this->datas);
        $stmt->bindParam(2, $this->tz);
        $stmt->bindParam(3, $this->year);
        
        
        // $stmt->bindParam(9, $this->email);
        
        $stmt->execute();
        

      
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
        echo $itemPos;
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




    
    /*This set of get feunctions set the*/
    public function getlname(){
        return $this->lname;
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
}



?>