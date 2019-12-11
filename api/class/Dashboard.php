<?php 

class Dashboard{

     // database connection and table name
     private $conn;
     private $table_name = "form";
     public $id;
     public $tz;
     public $fname;
     public $lname;
     public $submitted;
     public $date_returned;
     public $tzfile_cb;
     public $student_id;


 
     public function __construct($db, $id){
         $this->conn = $db;
         
         $this::get_student_data($id);
     }
 
    public function get_student_data($id){
        
        $query = "SELECT * FROM form WHERE `id`=?";
    
        $stmt = $this->conn->prepare($query);     
        $stmt->bindParam(1, $id);
        $stmt->execute();
        
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $this->id = $row['id'];
        $this->tz = $row['tz'];
        $this->year = $row['year'];
        $this->date_returned= $row['date_returned'];
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
        (isset($xcx['lo_oved_self_avg']) ? $this->lo_oved_self_avg = $xcx['lo_oved_self_avg'] : $this->lo_oved_self_avg = ''); 
        (isset($xcx['self_av_lo_oved_avg']) ? $this->self_av_lo_oved_avg = $xcx['self_av_lo_oved_avg'] : $this->self_av_lo_oved_avg = ''); 
        (isset($xcx['self_em_lo_oved_avg']) ? $this->self_em_lo_oved_avg = $xcx['self_em_lo_oved_avg'] : $this->self_em_lo_oved_avg = ''); 
        (isset($xcx['self_zug_lo_oved_avg']) ? $this->self_zug_lo_oved_avg = $xcx['self_zug_lo_oved_avg'] : $this->self_zug_lo_oved_avg = ''); 
        (isset($xcx['reject_exp']) ? $this->reject_exp = $xcx['reject_exp'] : $this->reject_exp = ''); 
        (isset($xcx['reject_files']) ? $this->reject_files = $xcx['reject_files'] : $this->reject_files = ''); 
        (isset($xcx['alone_input']) ? $this->alone_input = $xcx['alone_input'] : $this->alone_input = ''); 
        (isset($xcx['isarmy_input']) ? $this->isarmy_input = $xcx['isarmy_input'] : $this->isarmy_input = ''); 
        (isset($xcx['isLochemTomech_input']) ? $this->isLochemTomech_input = $xcx['isLochemTomech_input'] : $this->isLochemTomech_input = ''); 
        (isset($xcx['isMiluim_input']) ? $this->isMiluim_input = $xcx['isMiluim_input'] : $this->isMiluim_input = ''); 
        (isset($xcx['isArmyPtor_input']) ? $this->isArmyPtor_input = $xcx['isArmyPtor_input'] : $this->isArmyPtor_input = ''); 
        (isset($xcx['selfTaasukati_input']) ? $this->selfTaasukati_input = $xcx['isArmyPtor_input'] : $this->selfTaasukati_input = ''); 
        (isset($xcx['isMezonot_input']) ? $this->isMezonot_input = $xcx['isMezonot_input'] : $this->isMezonot_input = ''); 
        (isset($xcx['isSiua_input']) ? $this->isSiua_input = $xcx['isSiua_input'] : $this->isSiua_input = ''); 
        (isset($xcx['selfSoldier_input']) ? $this->selfSoldier_input = $xcx['selfSoldier_input'] : $this->selfSoldier_input = ''); 
        (isset($xcx['selfStudent_input']) ? $this->selfStudent_input = $xcx['selfStudent_input'] : $this->selfStudent_input = ''); 
        (isset($xcx['medicalHarig_input']) ? $this->medicalHarig_input = $xcx['medicalHarig_input'] : $this->medicalHarig_input = ''); 
        (isset($xcx['familyHarig_input']) ? $this->familyHarig_input = $xcx['familyHarig_input'] : $this->familyHarig_input = ''); 
        (isset($xcx['familyIncome_input']) ? $this->familyIncome_input = $xcx['familyIncome_input'] : $this->familyIncome_input = ''); 
        (isset($xcx['familyIncome_input_per_person']) ? $this->familyIncome_input_per_person = $xcx['familyIncome_input_per_person'] : $this->familyIncome_input_per_person = ''); 
        (isset($xcx['total_inc']) ? $this->total_inc = $xcx['total_inc'] : $this->total_inc = ''); 

       //checkboxes
       
        (isset($xcx['tzfile_cb']) ? $this->tzfile_cb = $xcx['tzfile_cb'] : $this->tzfile_cb = ''); 
        (isset($xcx['isalonefile_cb']) ? $this->isalonefile_cb = $xcx['isalonefile_cb'] : $this->isalonefile_cb = ''); 
        (isset($xcx['islochemfile_cb']) ? $this->islochemfile_cb = $xcx['islochemfile_cb'] : $this->islochemfile_cb = ''); 
        (isset($xcx['is_army_ptor_file_cb']) ? $this->is_army_ptor_file_cb = $xcx['is_army_ptor_file_cb'] : $this->is_army_ptor_file_cb = ''); 
        (isset($xcx['is_miluim_file_cb']) ? $this->is_miluim_file_cb = $xcx['is_miluim_file_cb'] : $this->is_miluim_file_cb = ''); 
		(isset($xcx['is_army_file_cb']) ? $this->is_army_file_cb = $xcx['is_army_file_cb'] : $this->is_army_file_cb = ''); 
        (isset($xcx['lo_oved_files_cb']) ? $this->lo_oved_files_cb = $xcx['lo_oved_files_cb'] : $this->lo_oved_files_cb = ''); 
        (isset($xcx['self_salary_files_cb']) ? $this->self_salary_files_cb = $xcx['self_salary_files_cb'] : $this->self_salary_files_cb = ''); 
        (isset($xcx['self_employ_files_cb']) ? $this->self_employ_files_cb = $xcx['self_employ_files_cb'] : $this->self_employ_files_cb = ''); 
        (isset($xcx['mezonot_files_cb']) ? $this->mezonot_files_cb = $xcx['mezonot_files_cb'] : $this->mezonot_files_cb = ''); 
        (isset($xcx['mezonot_height_files_cb']) ? $this->mezonot_height_files_cb = $xcx['mezonot_height_files_cb'] : $this->mezonot_height_files_cb = ''); 
        (isset($xcx['is_siua_file_cb']) ? $this->is_siua_file_cb = $xcx['is_siua_file_cb'] : $this->is_siua_file_cb = ''); 
        (isset($xcx['lo_oved_av_files_cb']) ? $this->lo_oved_av_files_cb = $xcx['lo_oved_av_files_cb'] : $this->lo_oved_av_files_cb = ''); 
        (isset($xcx['self_av_salary_files_cb']) ? $this->self_av_salary_files_cb = $xcx['self_av_salary_files_cb'] : $this->self_av_salary_files_cb = ''); 
        (isset($xcx['self_av_employ_files_cb']) ? $this->self_av_employ_files_cb = $xcx['self_av_employ_files_cb'] : $this->self_av_employ_files_cb = ''); 
        (isset($xcx['lo_oved_em_files_cb']) ? $this->lo_oved_em_files_cb = $xcx['lo_oved_em_files_cb'] : $this->lo_oved_em_files_cb = ''); 
        (isset($xcx['self_em_salary_files_cb']) ? $this->self_em_salary_files_cb = $xcx['self_em_salary_files_cb'] : $this->self_em_salary_files_cb = ''); 
        (isset($xcx['self_em_employ_files_cb']) ? $this->self_em_employ_files_cb = $xcx['self_em_employ_files_cb'] : $this->self_em_employ_files_cb = ''); 
        (isset($xcx['lo_oved_zug_files_cb']) ? $this->lo_oved_zug_files_cb = $xcx['lo_oved_zug_files_cb'] : $this->lo_oved_zug_files_cb = ''); 
        (isset($xcx['self_zug_salary_files_cb']) ? $this->self_zug_salary_files_cb = $xcx['self_zug_salary_files_cb'] : $this->self_zug_salary_files_cb = ''); 
        (isset($xcx['self_zug_employ_files_cb']) ? $this->self_zug_employ_files_cb = $xcx['self_zug_employ_files_cb'] : $this->self_zug_employ_files_cb = ''); 
        (isset($xcx['self_children_files_cb']) ? $this->self_children_files_cb = $xcx['self_children_files_cb'] : $this->self_children_files_cb = ''); 
        (isset($xcx['self_soldier_files_cb']) ? $this->self_soldier_files_cb = $xcx['self_soldier_files_cb'] : $this->self_soldier_files_cb = ''); 
        (isset($xcx['self_student_files_cb']) ? $this->self_student_files_cb = $xcx['self_student_files_cb'] : $this->self_student_files_cb = ''); 
        (isset($xcx['social_harig_file_cb']) ? $this->social_harig_file_cb = $xcx['social_harig_file_cb'] : $this->social_harig_file_cb = ''); 
        (isset($xcx['medical_harig_file_cb']) ? $this->medical_harig_file_cb = $xcx['medical_harig_file_cb'] : $this->medical_harig_file_cb = ''); 
        (isset($xcx['family_harig_file_cb']) ? $this->family_harig_file_cb = $xcx['family_harig_file_cb'] : $this->family_harig_file_cb = ''); 
       

        };
     }


//update student data when admin clicks confirm
     public function update_user_data($id, $submitted, $date_returned){

        $query = "UPDATE form SET datas=?, submitted=?, date_returned=?  WHERE id = ${id}";
        $stmt = $this->conn->prepare($query);        
        $stmt->execute([$this->datas, $submitted, $date_returned]);
        if($stmt->rowCount() > 0){
            $this->send_mail_on_approve();
            header('Location: ./dashboard.php');
        }
       

     } 


//update student data when admin clicks return
    public function returned_user_data($id, $submitted, $date_returned){

        $query = "UPDATE form SET datas=?, submitted=?, date_returned=?  WHERE id = ${id}";
        $stmt = $this->conn->prepare($query);        
        $stmt->execute([$this->datas, $submitted, $date_returned]);
        if($stmt->rowCount() > 0){
            $this->send_mail_on_return();
            header('Location: ./dashboard.php');
        }
        

     } 

     public function count_all_rows(){
        
         $query = "SELECT * FROM " . $this->table_name;
    
         $stmt = $this->conn->prepare($query);     
         $stmt->execute();
         $count = $stmt->rowCount();
         echo $count;

        
     }

     public function count_submitted_rows(){

        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 1";
   
        $stmt = $this->conn->prepare($query);     
        $stmt->execute();
        $count = $stmt->rowCount();
        echo $count;


    }


    public function count_approved_rows(){
        
        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 2";
   
        $stmt = $this->conn->prepare($query);     
        $stmt->execute();
        $count = $stmt->rowCount();
        echo $count;


    }


    public function count_returned_rows(){
        
        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 3";
   
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
                    <th>ת.ז</th>
                    <th>שם משפחה</th> 
                    <th>שם פרטי</th>  
                    <th>תאריך הגשה</th>    
                    <th>סטטוס טיפול בבקשה</th>
                    <th></th>  
                </tr>
            </thead>
            <tbody>';
     
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data =  unserialize($row['datas']);
         
            echo' 
            <tr>
                <td data-year="'.$row['year'].'" data-type="file" data-filetype="tzfile" data-id="'. $row['tz'].'">'. $row['tz'].'</td>  
                <td>'. $data['lname'].'</td>  
                <td>'. $data['fname'].'</td>  
                <td>'. date("d.m.Y", $row['date_submitted']).'</td>  
                <td>'.($row['submitted'] == 1 ? 'חדש' : 'בטיפול').'</td>  
                <td>
                <a class="btn btn-primary" href="studentdata.php?id='.$row['id'].'">צפייה בכל הנתונים</a>

                </td>  
                  

            </tr>';
           
       };
       echo '</tbody>';
    }


    public function last_approved_table(){

        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 2";
        
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
        
        echo'<thead>
                <tr>
                    <th>תאריך אישור</th>
                    <th>ת.ז</th>
                    <th>שם משפחה</th> 
                    <th>שם פרטי</th>  
                    <th>ניקוד בודד בארץ</th>    
                    <th>ניקוד סוג שירות</th>    
                    <th>ניקוד לוחם / תומך לחימה </th>    
                    <th>ניקוד פטור רפואי משרות צבאי</th>    
                    <th>ניקוד שרות מילואים פעיל</th>    
                    <th class="light-pur">ניקוד מצב תעסוקתי</th>    
                    <th class="light-pur">ניקוד מזונות</th>    
                    <th class="light-pur">ניקוד סיוע רווחה </th>    
                    <th class="light-pur">ניקוד הכנסה לנפש </th>    
                    <th class="light-yellow">ניקוד אח / ילד חייל סדיר </th>    
                    <th class="light-yellow">ניקוד אח / ילד סטודנט במוסד להשכלה גבוהה </th>    
                    <th class="light-green">ניקוד מצב בריאותי חריג סטודנט  </th>    
                    <th class="light-green">ניקוד מצב בריאותי חריג בן משפחה  </th>    
                    <th>סה"כ ניקוד</th>    
                    <th>מגזר ערבי</th>    
                    <th>ישוב</th>    
                    <th>הזדמנות שנייה</th>    
                    <th>גובה מלגה</th>    
                    <th>החלטת ועדת מלגות</th>    
                    <th>הערות</th>    
                       
                    
                    <th>תאריך הגשה</th>    
                    <th>סטטוס טיפול בבקשה</th>
                    <th></th>  
                </tr>
            </thead>
            <tbody>';
     
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data =  unserialize($row['datas']);
         
            echo' 
            <tr class="edit_tr">
                <td>'. date("d.m.Y", $row['date_returned']).'</td>  
                <td data-year="'.$row['year'].'" data-type="file" data-filetype="tzfile" data-id="'. $row['tz'].'">'. $row['tz'].'</td>  
                <td>'. $data['lname'].'</td>  
                <td>'. $data['fname'].'</td>  
                <td><a href="#" data-toggle="tooltip" title="'. $data['isalone'].'">'. $data['alone_input'].'</a></td>  
                <td><a href="#" data-toggle="tooltip" title="'. $data['is_army'].'">'. $data['isarmy_input'].'</a></td>  
                <td><a href="#" data-toggle="tooltip" title="'. ($data['is_lochem'] ? 'תומך /לוחם' : 'לא תומך לוחם').'">'. $data['isLochemTomech_input'].'</a></td>  
                <td><a href="#" data-toggle="tooltip" title="'. ($data['is_army_ptor'] ? 'פטור משירות' : 'לא פטור משירות').'">'. $data['isArmyPtor_input'].'</a></td>  
                <td><a href="#" data-toggle="tooltip" title="'. ($data['is_miluim'] ? 'שירות מילואים פעיל' : 'לא בשירות מילואים פעיל').'">'. $data['isMiluim_input'].'</a></td>  
                <td class="light-pur"><a href="#" data-toggle="tooltip" title="'. $this->get_taasukati_state_by_id($data['taasukati_state']) .'">'. $data['selfTaasukati_input'].'</a></td>  
                <td class="light-pur"><a href="#" data-toggle="tooltip" title="'. $this->get_mezonot_state_by_id($data['mezonot_state']) .'">'. $data['isMezonot_input'].'</a></td>  
                <td class="light-pur"><a href="#" data-toggle="tooltip" title="'. ($data['is_siua'] ? 'מקבל סיוע' : 'לא מקבל סיוע').'">'. $data['isSiua_input'].'</a></td>  
                <td class="light-pur"><a href="#" data-toggle="tooltip" title="'. $data[''].' שקל לנפש">'. $data['familyIncome_input_per_person'].'</a></td>  
                <td class="light-yellow"><a href="#" data-toggle="tooltip" title="יש ילדים/אחים בשירות סדיר: '. ($data['self_soldier'] ? 'כן' : 'לא').'">'. $data['selfSoldier_input'].'</a></td>  
                <td class="light-yellow"><a href="#" data-toggle="tooltip" title="יש אחים/ילדים במוסד להשכלה גבוהה : '.($data['self_student'] ? 'כן' : 'לא').'">'. $data['selfStudent_input'].'</a></td>  
                <td class="light-green"><a href="#" data-toggle="tooltip" title="מצב בריאותי חריג סטודנט : '.($data['medical_harig'] ? 'חריג' : 'תקין').'">'. $data['medicalHarig_input'].'</a></td>  
                <td class="light-green"><a href="#" data-toggle="tooltip" title="מצב בריאותי בן משפחה : '.($data['family_harig'] ? 'לא תקין' : 'תקין').'">'. $data['familyHarig_input'].'</a></td>  
                <td><a href="#" >'. $data['total_inc'].'</a></td>  
                <td contenteditable class="edit-td" data-name="is_migzar-'.$row['id'].'">
                    <span id="is_migzar_span_'.$row['id'].'">'.$row['is_migzar'].'</span>
                </td>
                <td>'. $data['city'].'</td>
                <td contenteditable class="edit-td" data-name="second_chance-'.$row['id'].'">
                    <span>'.$row['second_chance'].'</span>
                </td>
                <td contenteditable class="edit-td" data-name="milga_height-'.$row['id'].'">
                    <span>'.$row['milga_height'].'</span>
                </td>
                <td contenteditable class="edit-td" data-name="decision-'.$row['id'].'">
                    <span>'.$row['decision'].'</span>
                </td>
                <td contenteditable class="edit-td" data-name="comments-'.$row['id'].'">
                    <span>'.$row['comments'].'</span>
                </td>
               
               
                <td>'. date("d.m.Y", $row['date_submitted']).'</td>  
                <td>'.($row['submitted'] == 2 ? 'אושר' : 'בטיפול').'</td>  
                <td>
                
                  <a class="btn btn-primary" href="studentdata.php?id='.$row['id'].'">צפייה בכל הנתונים</a>

                </td>  
                  

            </tr>';
           
       };
    //   echo json_encode($allusersarray);
        
    

       echo '</tbody>';

        
    }
public function last_returned_table(){
        
 
        // echo '<br />tz is '.$tz;
        // echo '<br />year is '. $year;
        $query = "SELECT * FROM " . $this->table_name . " WHERE submitted = 3";
        
        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();
        
        echo'<thead>
                <tr>
                    <th>ת.ז</th>
                    <th>שם משפחה</th> 
                    <th>שם פרטי</th>  
                    <th>תאריך הגשה</th>    
                    <th>סטטוס טיפול בבקשה</th>
                    <th></th>  
                </tr>
            </thead>
            <tbody>';
     
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data =  unserialize($row['datas']);
         
            echo' 
            <tr>
                <td data-year="'.$row['year'].'" data-type="file" data-filetype="tzfile" data-id="'. $row['tz'].'">'. $row['tz'].'</td>  
                <td>'. $data['lname'].'</td>  
                <td>'. $data['fname'].'</td>  
                <td>'. date("d.m.Y", $row['date_submitted']).'</td>  
                <td>'.($row['submitted'] == 1 ? 'חדש' : 'בטיפול').'</td>  
                <td>
                <a class="btn btn-primary" href="studentdata.php?id='.$row['id'].'">צפייה בכל הנתונים</a>

                </td>  
                  

            </tr>';
           
       };
       echo '</tbody>';
    }

    public function get_taasukati_state_by_id($taasukati_state){
        $tas_value =  '';
   
        switch($taasukati_state){
            case 1:
                $tas_value = 'שכיר';
                break;
            case 2:
                $tas_value = 'עצמאי';
                break;
            case 3:
                $tas_value = 'לא עובד/מקבל קצבה';
                break;
            default:
                $tas_value = 'לא נבחר ערך, נא לבדוק שוב';
                break;

        }
        return $tas_value;
    }


    public function get_mezonot_state_by_id($mezonot_state){
        $tas_value =  '';
   
        switch($mezonot_state){
            case 1:
                $tas_value = 'ללא מזונות';
                break;
            case 2:
                $tas_value = 'מקבל/ת מזונות';
                break;
            case 3:
                $tas_value = 'נותן/ת מזונות';
                break;
            default:
                $tas_value = 'לא נבחר ערך/לא רלוונטי';
                break;

        }
        return $tas_value;
    }
    public function get_study_field_by_id($study_field_id){
        $query = "SELECT study_field FROM study_field WHERE study_field_id = ${study_field_id}";
        
        $stmt = $this->conn->prepare($query);

    
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       return $row['study_field'];
    }

    public function get_study_field(){
        $query = "SELECT * FROM study_field";
        $stmt = $this->conn->prepare($query);
        
        // execute query
        $stmt->execute();
        //print_r($stmt);
        echo '<select class="custom-select" name="study_field" id="study-field">';
        foreach($stmt as $k){
            if($k['study_field_id'] == $this->study_field){
                echo '<option value="'.$k['study_field_id'].'" selected>'.$k['study_field'].'</option>';

            } 
            echo '<option value="'.$k['study_field_id'].'">'.$k['study_field'].'</option>';

        }
        echo '</select>';
        //return($stmt);
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
            case 'isalonefile':
                $file_array = $this->isalonefile;
            break;
            case 'islochemfile':
                $file_array = $this->islochemfile;
            break;
            case 'is_army_ptor_file':
                $file_array = $this->is_army_ptor_file;
            break;
            case 'is_miluim_file':
                $file_array = $this->is_miluim_file;
            break;
			case 'is_army_file':
                $file_array = $this->is_army_file;
            break;
            case 'mezonot_files':
                $file_array = $this->mezonot_files;
            break;
            case 'mezonot_height_files':
                $file_array = $this->mezonot_height_files;
            break;
            case 'lo_oved_files':
                $file_array = $this->lo_oved_files;
            break;
            case 'self_salary_files':
                $file_array = $this->self_salary_files;
            break;
            case 'self_employ_files':
                $file_array = $this->self_employ_files;
            break;
            case 'is_siua_file':
                $file_array = $this->is_siua_file;
            break;
            case 'lo_oved_av_files':
                $file_array = $this->lo_oved_av_files;
            break;
            case 'self_av_salary_files':
                $file_array = $this->self_av_salary_files;
            break;
            case 'self_av_employ_files':
                $file_array = $this->self_av_employ_files;
            break;
            case 'lo_oved_em_files':
                $file_array = $this->lo_oved_em_files;
            break;
            case 'self_em_salary_files':
                $file_array = $this->self_em_salary_files;
            break;
            case 'self_em_employ_files':
                $file_array = $this->self_em_employ_files;
            break;
            case 'lo_oved_zug_files':
                $file_array = $this->lo_oved_zug_files;
            break;
            case 'self_zug_salary_files':
                $file_array = $this->self_zug_salary_files;
            break;
            case 'self_zug_employ_files':
                $file_array = $this->self_zug_employ_files;
            break;
            case 'self_children_files':
                $file_array = $this->self_children_files;
            break;
            case 'self_soldier_files':
                $file_array = $this->self_soldier_files;
            break;
            case 'self_student_files':
                $file_array = $this->self_student_files;
            break;
            case 'social_harig_file':
                $file_array = $this->social_harig_file;
            break;
            case 'medical_harig_file':
                $file_array = $this->medical_harig_file;
            break;
            case 'family_harig_file':
                $file_array = $this->family_harig_file;
            break;
            case 'explanation_file':
                $file_array = $this->explanation_file;
            break;
        }
        $tzf = json_decode($file_array);
        // var_dump($tzf);
        if(!empty($tzf) ){
            foreach($tzf as $file){
                echo '<a href="#" class="open-file-near" data-url="../uploads/'.$this->tz.'/'.$file.'" ><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> '. $file.'</a><br />';
            }
        }else{
            echo 'לא צורף קובץ';
        }


    }




    //update student data when admin clicks save or confirm
    public function update_table_dasboard_data($id, $col_name, $col_val){
        // $col_name = $data['name'];
        // $col_val = $data['val'];

        $query = "UPDATE form SET ${col_name}=? WHERE id = ${id}";
        $stmt = $this->conn->prepare($query);        
        $stmt->execute([$col_val]);
        if($stmt->rowCount() > 0){
            if($submitted == 1){
               echo 'updated';
            }else{
                echo 'not updated';
            }
        }
        

     } 


    public function send_mail_on_approve(){
        $title = 'בקשתך למלגה הועברה להמשך תהליך';
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
        
                    <div class="content" style="direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px; max-width: 600px; margin: 0 auto; display: block;">
                    <table style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%;" width="100%">
                        <tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                            <td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
                                <h3 style="margin: 0; padding: 0; direction: rtl; font-family: \'HelveticaNeue-Light\', \'Helvetica Neue Light\', \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif; line-height: 1.1; margin-bottom: 15px; color: #000; font-weight: 500; font-size: 27px;"> '. $this->lname .' '. $this->fname .' </h3>
                                <p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;"> בקשת המלגה שהגשת נמצאה תקינה והועברה להמשך תהליך. </p>
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



//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= "From: melagot@achva.ac.il" . "\r\n" .
//"CC: david_s@achva.ac.il";

//        mail($this->email,"הקבצים שהגשת בבקשת המלגה לדיקן נמצאו תקינים",$msg, $headers);
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

        $mail -> SetFrom('do-not-reply@achva.ac.il', 'הקבצים שהגשת בבקשת המלגה לדיקן נמצאו תקינים');

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "הקבצים שהגשת בבקשת המלגה לדיקן נמצאו תקינים";
        $mail->Body = $msg;




        $mail->send();

    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }


    }

    public function send_mail_on_return(){

       $all_cb = ($this->tzfile_cb == 1 ? '<li>קובץ תעודת זהות</li>' : '');
       $all_cb .= ($this->isalonefile_cb == 1 ? '<li>קובץ המאשר כי הינך בודד בארץ</li>' : '');
       $all_cb .= ($this->islochemfile_cb == 1 ? '<li>קובץ המאשר את שירותך הצבאי בתפקיד לוחם / תומך לחימה</li>' : '');
       $all_cb .= ($this->is_miluim_file_cb == 1 ? '<li>קובץ המאשר כי הנך חייל בשירות מילואים פעיל</li>' : '');
       $all_cb .= ($this->is_army_file_cb == 1 ? '<li>קובץ המאשר כי בוצע שירות צבאי או לאומי</li>' : '');      
	   $all_cb .= ($this->is_army_ptor_file_cb == 1 ? '<li>קובץ המאשר כי קיבלת פטור משירות צבאי</li>' : '');
       $all_cb .= ($this->lo_oved_files_cb == 1 ? '<li>קובץ המאשר שאינך עובד/ת / מקבל קצבה</li>' : '');
       $all_cb .= ($this->self_salary_files_cb == 1 ? '<li>קובץ תלושי שכר אחרונים </li>' : '');
       $all_cb .= ($this->self_employ_files_cb == 1 ? '<li>קובץ דו"ח שומה בגין היותך עצמאי </li>' : '');
       $all_cb .= ($this->mezonot_files_cb == 1 ? '<li>קובץ אסמכתא על אי קבלת מזונות </li>' : '');
       $all_cb .= ($this->mezonot_height_files_cb == 1 ? '<li>קובץ אסמכתא על גובה מזונות </li>' : '');
       $all_cb .= ($this->is_siua_file_cb == 1 ? '<li>קובץ אסמכתא על קבלת סיוע </li>' : '');
       $all_cb .= ($this->lo_oved_av_files_cb == 1 ? '<li>קובץ אסמכתא על כך שאביך אינו עובד או מקבל קצבה </li>' : '');
       $all_cb .= ($this->self_av_salary_files_cb == 1 ? '<li>קובץ תלושי שכר אחרונים של אביך </li>' : '');
       $all_cb .= ($this->self_av_employ_files_cb == 1 ? '<li>קובץ דו"ח שומה של אביך </li>' : '');
       $all_cb .= ($this->lo_oved_em_files_cb == 1 ? '<li>קובץ אסמכתא על כך שאימך אינה עובדת או מקבלת קצבה </li>' : '');
       $all_cb .= ($this->self_em_salary_files_cb == 1 ? '<li>קובץ תלושי שכר אחרונים של אימך </li>' : '');
       $all_cb .= ($this->self_em_employ_files_cb == 1 ? '<li>קובץ דו"ח שומה של אימך </li>' : '');
       $all_cb .= ($this->lo_oved_zug_files_cb == 1 ? '<li>קובץ אסמכתא על כך שבן זוגך אינו עובד או מקבלת קצבה </li>' : '');
       $all_cb .= ($this->self_zug_salary_files_cb == 1 ? '<li>קובץ תלושי שכר אחרונים של בן זוגך  </li>' : '');
       $all_cb .= ($this->self_zug_employ_files_cb == 1 ? '<li>קובץ דו"ח שומה של בן זוגך  </li>' : '');
       $all_cb .= ($this->self_soldier_files_cb == 1 ? '<li>קובץ אסמכתא על אח או בן בשירות צבאי סדיר  </li>' : '');
       $all_cb .= ($this->self_student_files_cb == 1 ? '<li>קובץ אסמכתא על אח או בן הלומד במוסד להשכלה גבוהה  </li>' : '');
       $all_cb .= ($this->social_harig_file_cb == 1 ? '<li>קובץ אסמכתא על מצב סוציאלי חריג  </li>' : '');
       $all_cb .= ($this->medical_harig_file_cb == 1 ? '<li>קובץ אסמכתא על מצב רפואי חריג של הסטודנט  </li>' : '');
       $all_cb .= ($this->family_harig_file_cb == 1 ? '<li>קובץ אסמכתא על מצב רפואי חריג של בן משפחה  </li>' : '');
       $all_cb .= ($this->self_children_files_cb == 1 ? '<li>קובץ ספח תעודת זהות של האם לצורך אימות מספר הילדים מתחת לגיל 18</li>' : '');
        // echo $all_cb;

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

			<div class="content" style="direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; padding: 15px; max-width: 600px; margin: 0 auto; display: block;">
			<table style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; width: 100%;" width="100%">
				<tr style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
					<td style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;">
						<h3 style="margin: 0; padding: 0; direction: rtl; font-family: \'HelveticaNeue-Light\', \'Helvetica Neue Light\', \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif; line-height: 1.1; margin-bottom: 15px; color: #000; font-weight: 500; font-size: 27px;"> '. $this->lname .' '. $this->fname .' </h3>
						<p class="lead" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin-bottom: 10px; font-weight: normal; line-height: 1.6; font-size: 17px;">הקבצים שהגשת נמצאו לא תקינים </p>
						<!-- Callout Panel -->

                            <!-- /Callout Panel -->	
                           '.($all_cb ? ' <h3>הקבצים שנמצאו לא תקינים הם:</h3>
                            <div class="callout" style="margin: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-weight: normal; font-size: 14px; line-height: 1.6; padding: 15px; background-color: #ECF8FF; margin-bottom: 15px;">
                            <ol>'. $all_cb .'</ol>
                            </div>' : '').'
                               
                            '.($this->reject_exp ? '
                            <h3>הסבר</h3>
                            <div class="callout" style="margin: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-weight: normal; font-size: 14px; line-height: 1.6; padding: 15px; background-color: #ECF8FF; margin-bottom: 15px;"> '.  $this->reject_exp .'</div>					
                        <!-- social & contact -->
                            ': '' ).'                        <p class="callout" style="margin: 0; direction: rtl;  font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-weight: normal; font-size: 14px; line-height: 1.6; padding: 15px; background-color: #ECF8FF; margin-bottom: 15px;">
                        נא הכנס שוב לטופס בקישור הבא 
                        <a target="_blank" href="https://forms.achva.ac.il/melagot/pages/milgaform.php" style="margin: 0; padding: 0; direction: rtl; font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; color: #2BA6CB;">כניסה לטופס</a>
                        </p>
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
// echo $this->tzfile_cb;
// echo $msg;

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= "From: melagot@achva.ac.il" . "\r\n" .
// "CC: david_s@achva.ac.il";

// mail($this->email,"הקבצים שהגשת בבקשת המלגה לדיקן נמצאו לא תקינים",$msg, $headers);

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

            $mail -> SetFrom('do-not-reply@achva.ac.il', 'הקבצים שהגשת בבקשת המלגה לדיקן נמצאו לא תקינים');

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "הקבצים שהגשת בבקשת המלגה לדיקן נמצאו לא תקינים";
            $mail->Body = $msg;




            $mail->send();

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    
        // }
    }

}


?>