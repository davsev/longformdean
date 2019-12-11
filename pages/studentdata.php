<?php
    include '../api/inc.php';


    $id = $_GET['id'];
    $Dash = new Dashboard($db, $id);
    // $Dash->get_student_data($id);

  

    //confirm data is o.k and submit to next confirmation level
    if(isset($_POST['submit'])){
      
        $submitted = 2;
        //this will insert to date_returned column the date that the form wass approved
        $date_returned = time();
        $datas =  array(
          'fname' => $_POST['fname'],
          'lname' => $_POST['lname'],
          'cellular' => $_POST['cellular'],
          'gender' => $_POST['gender'],
          'birth_country' => $_POST['birth_country'],
          'city' => $_POST['city'],
          'email' => $_POST['email'],
          'family_state' => $_POST['family_state'],
          'isalone' => $_POST['isalone'],
          'study_field' => $_POST['study_field'],
          'study_year' => $_POST['study_year'],
          'asked_schol' => $_POST['asked_schol'],
          'received_schol' => $_POST['received_schol'],
          'is_lochem' => $_POST['is_lochem'],
          'is_army' => $_POST['is_army'],
          'length_army' => $_POST['length_army'],
          'is_army_ptor' => $_POST['is_army_ptor'],
          'is_miluim' => $_POST['is_miluim'],
          'mimun_nosaf' => $_POST['mimun_nosaf'],
          'taasukati_state' => $_POST['taasukati_state'],
          'self_salary_avg' => $_POST['self_salary_avg'],
          'self_employ_avg' => $_POST['self_employ_avg'],
          'mezonot_state' => $_POST['mezonot_state'],
          'mezonot_height' => $_POST['mezonot_height'],
          'is_siua' => $_POST['is_siua'],
          'taasukati_av_state' => $_POST['taasukati_av_state'],
          'self_av_salary_avg' => $_POST['self_av_salary_avg'],
          'self_av_employ_avg' => $_POST['self_av_employ_avg'],
          'taasukati_em_state' => (isset($_POST['taasukati_em_state']) ? $_POST['taasukati_em_state'] : ''),
          'self_em_salary_avg' => $_POST['self_em_salary_avg'],
          'self_em_employ_avg' => $_POST['self_em_employ_avg'],
          'taasukati_zug_state' => $_POST['taasukati_zug_state'],
          'self_zug_salary_avg' => $_POST['self_zug_salary_avg'],
          'self_zug_employ_avg' => $_POST['self_zug_employ_avg'],
          'lo_oved_self_avg' => (isset($_POST['lo_oved_self_avg']) ? $_POST['lo_oved_self_avg'] : ''),
          'self_av_lo_oved_avg' => (isset($_POST['self_av_lo_oved_avg']) ? $_POST['self_av_lo_oved_avg'] : ''),
          'self_em_lo_oved_avg' => (isset($_POST['self_em_lo_oved_avg']) ? $_POST['self_em_lo_oved_avg'] : ''),
          'self_zug_lo_oved_avg' => (isset($_POST['self_zug_lo_oved_avg']) ? $_POST['self_zug_lo_oved_avg'] : ''),

          'self_children' => $_POST['self_children'],
          'self_soldier' => $_POST['self_soldier'],
          'self_student' => $_POST['self_student'],
          'social_harig' => $_POST['social_harig'],
          'family_harig' => $_POST['family_harig'],
          'medical_harig' => $_POST['medical_harig'],
          'explanation' => (isset($_POST['explanation']) ? $_POST['explanation'] : ''),
          'reject_exp' => (isset($_POST['reject_exp']) ? $_POST['reject_exp'] : ''),
          'reject_files' => (isset($_POST['reject_files']) ? $_POST['reject_files'] : ''), 
          //calculation values
          'alone_input' => (isset($_POST['alone_input']) ? $_POST['alone_input'] : ''), 
          'isarmy_input' => (isset($_POST['isarmy_input']) ? $_POST['isarmy_input'] : ''), 
          'isLochemTomech_input' => (isset($_POST['isLochemTomech_input']) ? $_POST['isLochemTomech_input'] : ''), 
          'isMiluim_input' => (isset($_POST['isMiluim_input']) ? $_POST['isMiluim_input'] : ''), 
          'isArmyPtor_input' => (isset($_POST['isArmyPtor_input']) ? $_POST['isArmyPtor_input'] : ''), 
          'selfTaasukati_input' => (isset($_POST['selfTaasukati_input']) ? $_POST['selfTaasukati_input'] : ''), 
          'isMezonot_input' => (isset($_POST['isMezonot_input']) ? $_POST['isMezonot_input'] : ''), 
          'isSiua_input' => (isset($_POST['isSiua_input']) ? $_POST['isSiua_input'] : ''), 
          'selfSoldier_input' => (isset($_POST['selfSoldier_input']) ? $_POST['selfSoldier_input'] : ''), 
          'selfStudent_input' => (isset($_POST['selfStudent_input']) ? $_POST['selfStudent_input'] : ''), 
          'medicalHarig_input' => (isset($_POST['medicalHarig_input']) ? $_POST['medicalHarig_input'] : ''), 
          'familyHarig_input' => (isset($_POST['familyHarig_input']) ? $_POST['familyHarig_input'] : ''), 
          //חישוב הכנסה לנפש בש"ח
          'familyIncome_input' => (isset($_POST['familyIncome_input']) ? $_POST['familyIncome_input'] : ''), 
         //ניקוד עבור הכנסה לנפש
          'familyIncome_input_per_person' => (isset($_POST['familyIncome_input_per_person']) ? $_POST['familyIncome_input_per_person'] : ''), 
          'total_inc' => (isset($_POST['total_inc']) ? $_POST['total_inc'] : ''), 
          //checkboxes
          'tzfile_cb' => (isset($_POST['tzfile_cb']) ? $_POST['tzfile_cb'] : ''),
          'isalonefile_cb' => (isset($_POST['isalonefile_cb']) ? $_POST['isalonefile_cb'] : ''),
          'islochemfile_cb' => (isset($_POST['islochemfile_cb']) ? $_POST['islochemfile_cb'] : ''),
          'is_army_file_cb' => (isset($_POST['is_army_file_cb']) ? $_POST['is_army_file_cb'] : ''),
		  'is_army_ptor_file_cb' => (isset($_POST['is_army_ptor_file_cb']) ? $_POST['is_army_ptor_file_cb'] : ''),
          'is_miluim_file_cb' => (isset($_POST['is_miluim_file_cb']) ? $_POST['is_miluim_file_cb'] : ''),
          'lo_oved_files_cb' => (isset($_POST['lo_oved_files_cb']) ? $_POST['lo_oved_files_cb'] : ''),
          'self_salary_files_cb' => (isset($_POST['self_salary_files_cb']) ? $_POST['self_salary_files_cb'] : ''),
          'self_employ_files_cb' => (isset($_POST['self_employ_files_cb']) ? $_POST['self_employ_files_cb'] : ''),
          'mezonot_files_cb' => (isset($_POST['mezonot_files_cb']) ? $_POST['mezonot_files_cb'] : ''),
          'mezonot_height_files_cb' => (isset($_POST['mezonot_height_files_cb']) ? $_POST['mezonot_height_files_cb'] : ''),
          'is_siua_file_cb' => (isset($_POST['is_siua_file_cb']) ? $_POST['is_siua_file_cb'] : ''),
          'lo_oved_av_files_cb' => (isset($_POST['lo_oved_av_files_cb']) ? $_POST['lo_oved_av_files_cb'] : ''),
          'self_av_salary_files_cb' => (isset($_POST['self_av_salary_files_cb']) ? $_POST['self_av_salary_files_cb'] : ''),
          'self_av_employ_files_cb' => (isset($_POST['self_av_employ_files_cb']) ? $_POST['self_av_employ_files_cb'] : ''),
          'lo_oved_em_files_cb' => (isset($_POST['lo_oved_em_files_cb']) ? $_POST['lo_oved_em_files_cb'] : ''),
          'self_em_salary_files_cb' => (isset($_POST['self_em_salary_files_cb']) ? $_POST['self_em_salary_files_cb'] : ''),
          'self_em_employ_files_cb' => (isset($_POST['self_em_employ_files_cb']) ? $_POST['self_em_employ_files_cb'] : ''),
          'lo_oved_zug_files_cb' => (isset($_POST['lo_oved_zug_files_cb']) ? $_POST['lo_oved_zug_files_cb'] : ''),
          'self_zug_salary_files_cb' => (isset($_POST['self_zug_salary_files_cb']) ? $_POST['self_zug_salary_files_cb'] : ''),
          'self_zug_employ_files_cb' => (isset($_POST['self_zug_employ_files_cb']) ? $_POST['self_zug_employ_files_cb'] : ''),
          'self_children_files_cb' => (isset($_POST['self_children_files_cb']) ? $_POST['self_children_files_cb'] : ''),
          'self_soldier_files_cb' => (isset($_POST['self_soldier_files_cb']) ? $_POST['self_soldier_files_cb'] : ''),
          'self_student_files_cb' => (isset($_POST['self_student_files_cb']) ? $_POST['self_student_files_cb'] : ''),
          'social_harig_file_cb' => (isset($_POST['social_harig_file_cb']) ? $_POST['social_harig_file_cb'] : ''),
          'medical_harig_file_cb' => (isset($_POST['medical_harig_file_cb']) ? $_POST['medical_harig_file_cb'] : ''),
          'family_harig_file_cb' => (isset($_POST['family_harig_file_cb']) ? $_POST['family_harig_file_cb'] : '')
          
        );
    
        



  $Dash->fname = $datas['fname'];
  $Dash->lname = $datas['lname'];
  $Dash->gender = $datas['gender'];
  $Dash->birth_country = $datas['birth_country'];
  $Dash->city = $datas['city'];
  $Dash->cellular = $datas['cellular'];
  $Dash->email = $datas['email']; 
  $Dash->family_state = $datas['family_state']; 
  $Dash->isalone = $datas['isalone'];
  $Dash->study_field = $datas['study_field'];
  $Dash->study_year = $datas['study_year'];
  $Dash->asked_schol = $datas['asked_schol'];
  $Dash->received_schol = $datas['received_schol'];
  $Dash->is_army = $datas['is_army'];
  $Dash->length_army = $datas['length_army'];
  $Dash->is_lochem = $datas['is_lochem'];
  $Dash->is_army_ptor = $datas['is_army_ptor'];
  $Dash->is_miluim = $datas['is_miluim'];
  $Dash->mimun_nosaf = $datas['mimun_nosaf'];
  $Dash->taasukati_state = $datas['taasukati_state'];
  $Dash->self_salary_avg = $datas['self_salary_avg'];
  $Dash->self_employ_avg = $datas['self_employ_avg'];
  $Dash->mezonot_state = $datas['mezonot_state'];
  $Dash->mezonot_height = $datas['mezonot_height'];
  $Dash->is_siua = $datas['is_siua'];
  $Dash->taasukati_av_state = $datas['taasukati_av_state'];
  $Dash->self_av_salary_avg = $datas['self_av_salary_avg'];
  $Dash->self_av_employ_avg = $datas['self_av_employ_avg'];
  $Dash->taasukati_em_state = $datas['taasukati_em_state'];
  $Dash->self_em_salary_avg = $datas['self_em_salary_avg'];
  $Dash->self_em_employ_avg = $datas['self_em_employ_avg'];
  $Dash->taasukati_zug_state = $datas['taasukati_zug_state'];
  $Dash->self_zug_salary_avg = $datas['self_zug_salary_avg'];
  $Dash->self_zug_employ_avg = $datas['self_zug_employ_avg'];

  $Dash->lo_oved_self_avg = $datas['lo_oved_self_avg'];
  $Dash->self_av_lo_oved_avg = $datas['self_av_lo_oved_avg'];
  $Dash->self_em_lo_oved_avg = $datas['self_em_lo_oved_avg'];
  $Dash->self_zug_lo_oved_avg = $datas['self_zug_lo_oved_avg'];

  $Dash->self_children = $datas['self_children'];
  $Dash->self_soldier = $datas['self_soldier'];
  $Dash->self_student = $datas['self_student'];
  $Dash->social_harig = $datas['social_harig'];
  $Dash->family_harig = $datas['family_harig'];
  $Dash->medical_harig = $datas['medical_harig'];
  $Dash->explanation = $datas['explanation'];
  $Dash->tzfile_cb = $datas['tzfile_cb'];
  $Dash->isalonefile_cb = $datas['isalonefile_cb'];
  $Dash->islochemfile_cb = $datas['islochemfile_cb'];
  $Dash->is_army_file_cb = $datas['is_army_file_cb'];
  $Dash->is_army_ptor_file_cb = $datas['is_army_ptor_file_cb'];
  $Dash->is_miluim_file_cb = $datas['is_miluim_file_cb'];
  $Dash->lo_oved_files_cb = $datas['lo_oved_files_cb'];
  $Dash->self_salary_files_cb = $datas['self_salary_files_cb'];
  $Dash->self_employ_files_cb = $datas['self_employ_files_cb'];
  $Dash->mezonot_files_cb = $datas['mezonot_files_cb'];
  $Dash->mezonot_height_files_cb = $datas['mezonot_height_files_cb'];
  $Dash->is_siua_file_cb = $datas['is_siua_file_cb'];
  $Dash->lo_oved_av_files_cb = $datas['lo_oved_av_files_cb'];
  $Dash->self_av_salary_files_cb = $datas['self_av_salary_files_cb'];
  $Dash->self_av_employ_files_cb = $datas['self_av_employ_files_cb'];
  $Dash->lo_oved_em_files_cb = $datas['lo_oved_em_files_cb'];
  $Dash->self_em_salary_files_cb = $datas['self_em_salary_files_cb'];
  $Dash->self_em_employ_files_cb = $datas['self_em_employ_files_cb'];
  $Dash->lo_oved_zug_files_cb = $datas['lo_oved_zug_files_cb'];
  $Dash->self_zug_salary_files_cb = $datas['self_zug_salary_files_cb'];
  $Dash->self_zug_employ_files_cb = $datas['self_zug_employ_files_cb'];
  $Dash->self_children_files_cb = $datas['self_children_files_cb'];
  $Dash->self_soldier_files_cb = $datas['self_soldier_files_cb'];
  $Dash->self_student_files_cb = $datas['self_student_files_cb'];
  $Dash->social_harig_file_cb = $datas['social_harig_file_cb'];
  $Dash->medical_harig_file_cb = $datas['medical_harig_file_cb'];
  $Dash->family_harig_file_cb = $datas['family_harig_file_cb'];
  $Dash->reject_exp = $datas['reject_exp'];
  $Dash->reject_files = $datas['reject_files'];
  $Dash->alone_input = $datas['alone_input'];
  $Dash->isarmy_input = $datas['isarmy_input'];
  $Dash->isLochemTomech_input = $datas['isLochemTomech_input'];
  $Dash->isMiluim_input = $datas['isMiluim_input'];
  $Dash->isArmyPtor_input = $datas['isArmyPtor_input'];
  $Dash->selfTaasukati_input = $datas['selfTaasukati_input'];
  $Dash->isMezonot_input = $datas['isMezonot_input'];
  $Dash->isSiua_input = $datas['isSiua_input'];
  $Dash->selfSoldier_input = $datas['selfSoldier_input'];
  $Dash->selfStudent_input = $datas['selfStudent_input'];
  $Dash->medicalHarig_input = $datas['medicalHarig_input'];
  $Dash->familyHarig_input = $datas['familyHarig_input'];
  $Dash->familyIncome_input = $datas['familyIncome_input'];
  $Dash->familyIncome_input_per_person = $datas['familyIncome_input_per_person'];
  $Dash->total_inc = $datas['total_inc'];
    
        $meida = json_encode($datas);
        //properties retrived by consructor
        // $Dash->id = $id;
        // $Dash->tz = $tz;
        // $Dash->year = $year;
      
        
        // $Dash->datas = $meida;
    
        $Dash->datas = serialize($datas);
        $Dash->update_user_data($id, $submitted, $date_returned);
       
        header('Location: ./dashboard.php');
    };
  
    // var_dump($Dash->datas);
    //data is missing documents and send back to user edit

    if(isset($_POST['return'])){
        
        $submitted = 3;
        $date_returned = time();
        $id = $_GET['id'];
        $datas =  array(
          'fname' => $_POST['fname'],
          'lname' => $_POST['lname'],
          'cellular' => $_POST['cellular'],
          'gender' => $_POST['gender'],
          'birth_country' => $_POST['birth_country'],
          'city' => $_POST['city'],
          'email' => $_POST['email'],
          'family_state' => $_POST['family_state'],
          'isalone' => $_POST['isalone'],
          'study_field' => $_POST['study_field'],
          'study_year' => $_POST['study_year'],
          'asked_schol' => $_POST['asked_schol'],
          'received_schol' => $_POST['received_schol'],
          'is_lochem' => $_POST['is_lochem'],
          'is_army' => $_POST['is_army'],
          'length_army' => $_POST['length_army'],
          'is_army_ptor' => $_POST['is_army_ptor'],
          'is_miluim' => $_POST['is_miluim'],
          'mimun_nosaf' => $_POST['mimun_nosaf'],
          'taasukati_state' => $_POST['taasukati_state'],
          'self_salary_avg' => $_POST['self_salary_avg'],
          'self_employ_avg' => $_POST['self_employ_avg'],
          'mezonot_state' => $_POST['mezonot_state'],
          'mezonot_height' => $_POST['mezonot_height'],
          'is_siua' => $_POST['is_siua'],
          'taasukati_av_state' => $_POST['taasukati_av_state'],
          'self_av_salary_avg' => $_POST['self_av_salary_avg'],
          'self_av_employ_avg' => $_POST['self_av_employ_avg'],
          'taasukati_em_state' => (isset($_POST['taasukati_em_state']) ? $_POST['taasukati_em_state'] : ''),
          'self_em_salary_avg' => (isset($_POST['self_em_salary_avg']) ? $_POST['self_em_salary_avg'] : ''),
          'self_em_employ_avg' => (isset($_POST['self_em_employ_avg']) ? $_POST['self_em_employ_avg'] : ''),
          'taasukati_zug_state' => (isset($_POST['taasukati_zug_state']) ? $_POST['taasukati_zug_state'] : ''),
          'self_zug_salary_avg' => (isset($_POST['self_zug_salary_avg']) ? $_POST['self_zug_salary_avg'] : ''),
          'self_zug_employ_avg' => (isset($_POST['self_zug_employ_avg']) ? $_POST['self_zug_employ_avg'] : ''),
        
          'lo_oved_self_avg' => (isset($_POST['lo_oved_self_avg']) ? $_POST['lo_oved_self_avg'] : ''),
          'self_av_lo_oved_avg' => (isset($_POST['self_av_lo_oved_avg']) ? $_POST['self_av_lo_oved_avg'] : ''),
          'self_em_lo_oved_avg' => (isset($_POST['self_em_lo_oved_avg']) ? $_POST['self_em_lo_oved_avg'] : ''),
          'self_zug_lo_oved_avg' => (isset($_POST['self_zug_lo_oved_avg']) ? $_POST['self_zug_lo_oved_avg'] : ''),
 
       
          'self_children' => (isset($_POST['self_children']) ? $_POST['self_children'] : ''),
          'self_soldier' => (isset($_POST['self_soldier']) ? $_POST['self_soldier'] : ''),
          'self_student' => (isset($_POST['self_student']) ? $_POST['self_student'] : ''),
          'social_harig' => (isset($_POST['social_harig']) ? $_POST['social_harig'] : ''),
          'family_harig' => $_POST['family_harig'],
          'medical_harig' => $_POST['medical_harig'],
          'explanation' => (isset($_POST['explanation']) ? $_POST['explanation'] : ''),
          'reject_exp' => (isset($_POST['reject_exp']) ? $_POST['reject_exp'] : ''),
          'reject_files' => (isset($_POST['reject_files']) ? $_POST['reject_files'] : ''),
          //calculations
          'alone_input' => (isset($_POST['alone_input']) ? $_POST['alone_input'] : '0'),
          'isarmy_input' => (isset($_POST['isarmy_input']) ? $_POST['isarmy_input'] : '0'),
          'isLochemTomech_input' => (isset($_POST['isLochemTomech_input']) ? $_POST['isLochemTomech_input'] : '0'),
          'isMiluim_input' => (isset($_POST['isMiluim_input']) ? $_POST['isMiluim_input'] : '0'),
          'isArmyPtor_input' => (isset($_POST['isArmyPtor_input']) ? $_POST['isArmyPtor_input'] : '0'),
          'selfTaasukati_input' => (isset($_POST['selfTaasukati_input']) ? $_POST['selfTaasukati_input'] : '0'),
          'isMezonot_input' => (isset($_POST['isMezonot_input']) ? $_POST['isMezonot_input'] : '0'),
          'isSiua_input' => (isset($_POST['isSiua_input']) ? $_POST['isSiua_input'] : '0'),
          'selfSoldier_input' => (isset($_POST['selfSoldier_input']) ? $_POST['selfSoldier_input'] : '0'),
          'selfStudent_input' => (isset($_POST['selfStudent_input']) ? $_POST['selfStudent_input'] : '0'),
          'medicalHarig_input' => (isset($_POST['medicalHarig_input']) ? $_POST['medicalHarig_input'] : '0'),
          'familyHarig_input' => (isset($_POST['familyHarig_input']) ? $_POST['familyHarig_input'] : '0'),
          'familyIncome_input' => (isset($_POST['familyIncome_input']) ? $_POST['familyIncome_input'] : '0'),
          'familyIncome_input_per_person' => (isset($_POST['familyIncome_input_per_person']) ? $_POST['familyIncome_input_per_person'] : '0'), 
          'total_inc' => (isset($_POST['total_inc']) ? $_POST['total_inc'] : '0'), 

          'tzfile_cb' => (isset($_POST['tzfile_cb']) ? $_POST['tzfile_cb'] : ''),
          'isalonefile_cb' => (isset($_POST['isalonefile_cb']) ? $_POST['isalonefile_cb'] : ''),
          'islochemfile_cb' => (isset($_POST['islochemfile_cb']) ? $_POST['islochemfile_cb'] : ''),
		  'is_army_file_cb' => (isset($_POST['is_army_file_cb']) ? $_POST['is_army_file_cb'] : ''),
          'is_army_ptor_file_cb' => (isset($_POST['is_army_ptor_file_cb']) ? $_POST['is_army_ptor_file_cb'] : ''),
          'is_miluim_file_cb' => (isset($_POST['is_miluim_file_cb']) ? $_POST['is_miluim_file_cb'] : ''),
          'lo_oved_files_cb' => (isset($_POST['lo_oved_files_cb']) ? $_POST['lo_oved_files_cb'] : ''),
          'self_salary_files_cb' => (isset($_POST['self_salary_files_cb']) ? $_POST['self_salary_files_cb'] : ''),
          'self_employ_files_cb' => (isset($_POST['self_employ_files_cb']) ? $_POST['self_employ_files_cb'] : ''),
          'mezonot_files_cb' => (isset($_POST['mezonot_files_cb']) ? $_POST['mezonot_files_cb'] : ''),
          'mezonot_height_files_cb' => (isset($_POST['mezonot_height_files_cb']) ? $_POST['mezonot_height_files_cb'] : ''),
          'is_siua_file_cb' => (isset($_POST['is_siua_file_cb']) ? $_POST['is_siua_file_cb'] : ''),
          'lo_oved_av_files_cb' => (isset($_POST['lo_oved_av_files_cb']) ? $_POST['lo_oved_av_files_cb'] : ''),
          'self_av_salary_files_cb' => (isset($_POST['self_av_salary_files_cb']) ? $_POST['self_av_salary_files_cb'] : ''),
          'self_av_employ_files_cb' => (isset($_POST['self_av_employ_files_cb']) ? $_POST['self_av_employ_files_cb'] : ''),
          'lo_oved_em_files_cb' => (isset($_POST['lo_oved_em_files_cb']) ? $_POST['lo_oved_em_files_cb'] : ''),
          'self_em_salary_files_cb' => (isset($_POST['self_em_salary_files_cb']) ? $_POST['self_em_salary_files_cb'] : ''),
          'self_em_employ_files_cb' => (isset($_POST['self_em_employ_files_cb']) ? $_POST['self_em_employ_files_cb'] : ''),
          'lo_oved_zug_files_cb' => (isset($_POST['lo_oved_zug_files_cb']) ? $_POST['lo_oved_zug_files_cb'] : ''),
          'self_zug_salary_files_cb' => (isset($_POST['self_zug_salary_files_cb']) ? $_POST['self_zug_salary_files_cb'] : ''),
          'self_zug_employ_files_cb' => (isset($_POST['self_zug_employ_files_cb']) ? $_POST['self_zug_employ_files_cb'] : ''),
          'self_children_files_cb' => (isset($_POST['self_children_files_cb']) ? $_POST['self_children_files_cb'] : ''),
          'self_soldier_files_cb' => (isset($_POST['self_soldier_files_cb']) ? $_POST['self_soldier_files_cb'] : ''),
          'self_student_files_cb' => (isset($_POST['self_student_files_cb']) ? $_POST['self_student_files_cb'] : ''),
          'social_harig_file_cb' => (isset($_POST['social_harig_file_cb']) ? $_POST['social_harig_file_cb'] : ''),
          'medical_harig_file_cb' => (isset($_POST['medical_harig_file_cb']) ? $_POST['medical_harig_file_cb'] : ''),
          'family_harig_file_cb' => (isset($_POST['family_harig_file_cb']) ? $_POST['family_harig_file_cb'] : '')
         
          
        );
    
    
        $meida = json_encode($datas);
        //properties retrived by consructor
        // $Dash->id = $id;
        // $Dash->tz = $tz;
        // $Dash->year = $year;
      
        
        // $Dash->datas = $meida;
    
        $Dash->datas = serialize($datas);
      






  $Dash->fname = $datas['fname'];
  $Dash->lname = $datas['lname'];
  $Dash->gender = $datas['gender'];
  $Dash->birth_country = $datas['birth_country'];
  $Dash->city = $datas['city'];
  $Dash->cellular = $datas['cellular'];
  $Dash->email = $datas['email']; 
  $Dash->family_state = $datas['family_state']; 
  $Dash->isalone = $datas['isalone'];
  $Dash->study_field = $datas['study_field'];
  $Dash->study_year = $datas['study_year'];
  $Dash->asked_schol = $datas['asked_schol'];
  $Dash->received_schol = $datas['received_schol'];
  $Dash->is_army = $datas['is_army'];
  $Dash->length_army = $datas['length_army'];
  $Dash->is_lochem = $datas['is_lochem'];
  $Dash->is_army_ptor = $datas['is_army_ptor'];
  $Dash->is_miluim = $datas['is_miluim'];
  $Dash->mimun_nosaf = $datas['mimun_nosaf'];
  $Dash->taasukati_state = $datas['taasukati_state'];
  $Dash->self_salary_avg = $datas['self_salary_avg'];
  $Dash->self_employ_avg = $datas['self_employ_avg'];
  $Dash->mezonot_state = $datas['mezonot_state'];
  $Dash->mezonot_height = $datas['mezonot_height'];
  $Dash->is_siua = $datas['is_siua'];
  $Dash->taasukati_av_state = $datas['taasukati_av_state'];
  $Dash->self_av_salary_avg = $datas['self_av_salary_avg'];
  $Dash->self_av_employ_avg = $datas['self_av_employ_avg'];
  $Dash->taasukati_em_state = $datas['taasukati_em_state'];
  $Dash->self_em_salary_avg = $datas['self_em_salary_avg'];
  $Dash->self_em_employ_avg = $datas['self_em_employ_avg'];
  $Dash->taasukati_zug_state = $datas['taasukati_zug_state'];
  $Dash->self_zug_salary_avg = $datas['self_zug_salary_avg'];
  $Dash->self_zug_employ_avg = $datas['self_zug_employ_avg'];
  $Dash->lo_oved_self_avg = $datas['lo_oved_self_avg'];
  $Dash->self_av_lo_oved_avg = $datas['self_av_lo_oved_avg'];
  $Dash->self_em_lo_oved_avg = $datas['self_em_lo_oved_avg'];
  $Dash->self_zug_lo_oved_avg = $datas['self_zug_lo_oved_avg'];
  $Dash->self_children = $datas['self_children'];
  $Dash->self_soldier = $datas['self_soldier'];
  $Dash->self_student = $datas['self_student'];
  $Dash->social_harig = $datas['social_harig'];
  $Dash->family_harig = $datas['family_harig'];
  $Dash->medical_harig = $datas['medical_harig'];
  $Dash->explanation = $datas['explanation'];
  $Dash->tzfile_cb = $datas['tzfile_cb'];
  $Dash->isalonefile_cb = $datas['isalonefile_cb'];
  $Dash->islochemfile_cb = $datas['islochemfile_cb'];
  $Dash->is_army_file_cb = $datas['is_army_file_cb'];
  $Dash->is_army_ptor_file_cb = $datas['is_army_ptor_file_cb'];
  $Dash->is_miluim_file_cb = $datas['is_miluim_file_cb'];
  $Dash->lo_oved_files_cb = $datas['lo_oved_files_cb'];
  $Dash->self_salary_files_cb = $datas['self_salary_files_cb'];
  $Dash->self_employ_files_cb = $datas['self_employ_files_cb'];
  $Dash->mezonot_files_cb = $datas['mezonot_files_cb'];
  $Dash->mezonot_height_files_cb = $datas['mezonot_height_files_cb'];
  $Dash->is_siua_file_cb = $datas['is_siua_file_cb'];
  $Dash->lo_oved_av_files_cb = $datas['lo_oved_av_files_cb'];
  $Dash->self_av_salary_files_cb = $datas['self_av_salary_files_cb'];
  $Dash->self_av_employ_files_cb = $datas['self_av_employ_files_cb'];
  $Dash->lo_oved_em_files_cb = $datas['lo_oved_em_files_cb'];
  $Dash->self_em_salary_files_cb = $datas['self_em_salary_files_cb'];
  $Dash->self_em_employ_files_cb = $datas['self_em_employ_files_cb'];
  $Dash->lo_oved_zug_files_cb = $datas['lo_oved_zug_files_cb'];
  $Dash->self_zug_salary_files_cb = $datas['self_zug_salary_files_cb'];
  $Dash->self_zug_employ_files_cb = $datas['self_zug_employ_files_cb'];
  $Dash->self_children_files_cb = $datas['self_children_files_cb'];
  $Dash->self_soldier_files_cb = $datas['self_soldier_files_cb'];
  $Dash->self_student_files_cb = $datas['self_student_files_cb'];
  $Dash->social_harig_file_cb = $datas['social_harig_file_cb'];
  $Dash->medical_harig_file_cb = $datas['medical_harig_file_cb'];
  $Dash->family_harig_file_cb = $datas['family_harig_file_cb'];
  $Dash->reject_exp = $datas['reject_exp'];
  $Dash->reject_files = $datas['reject_files'];
  $Dash->alone_input = $datas['alone_input'];
  $Dash->isarmy_input = $datas['isarmy_input'];
  $Dash->isLochemTomech_input = $datas['isLochemTomech_input'];
  $Dash->isMiluim_input = $datas['isMiluim_input'];
  $Dash->isArmyPtor_input = $datas['isArmyPtor_input'];
  $Dash->selfTaasukati_input = $datas['selfTaasukati_input'];
  $Dash->isMezonot_input = $datas['isMezonot_input'];
  $Dash->isSiua_input = $datas['isSiua_input'];
  $Dash->selfSoldier_input = $datas['selfSoldier_input'];
  $Dash->selfStudent_input = $datas['selfStudent_input'];
  $Dash->medicalHarig_input = $datas['medicalHarig_input'];
  $Dash->familyHarig_input = $datas['familyHarig_input'];
  $Dash->familyIncome_input = $datas['familyIncome_input'];
  $Dash->familyIncome_input_per_person = $datas['familyIncome_input_per_person'];
  $Dash->total_inc = $datas['total_inc'];
  

  $Dash->returned_user_data($id, $submitted, $date_returned);
  


    };

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>דשבורד | מערכת ניהול מלגות דיקן</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <?php include 'head.php'; ?>

    </head>

    <body id="thebody" class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <?php include './inc/sidenav.php'; ?>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li>
                                            <a href="javascript:;"> Profile</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Help</a>
                                        </li>
                                        <li>
                                            <a href="login.html">
                                                <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="images/img.jpg" alt="Profile Image" />
                                                </span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                
                    <?php include('./inc/dash-top-titles.php')?>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph">

                                <div class="row x_title">
                                    <div class="col-md-12">
                                        <h1>פרטי הסטודנט
                                            <?php echo $Dash->fname . ' ' . $Dash->lname?>
                                        </h1>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12" id="side-datatable">
                                        <form name="studentdata" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                                            <h3>פרטים אישיים</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>שם פרטי</td>
                                                        <td>
                                                            <input type="text" name="fname" autocomplete='fname' value="<?php echo $Dash->fname; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>שם משפחה</td>
                                                        <td>
                                                            <input type="text" name="lname" autocomplete='lname' value="<?php echo $Dash->lname; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> מספר תעודת זהות</td>
                                                        <td>
                                                            <input type="text" name="tz" value="<?php echo $Dash->tz; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                          
                                                           <input type="checkbox" value="1" name="tzfile_cb"   
                                                                <?php 
                                                                echo($Dash->tzfile_cb ==  1 ? 'checked' : '');
                                                                    // if(!isset($_POST['tzfile_cb']))
                                                                    // {
                                                                    //     echo($Dash->tzfile_cb ==  1 ? 'checked' : '');
                                                                    // }else{
                                                                    //     echo($_POST['tzfile_cb'] ==  1 ? 'checked' : '');
                                                                    // }
                                                                ?> 


                                                            > קובץ ת.ז
                                                        </td>
                                                           <!-- <input type="checkbox" value="1" name="tzfile_cb"   <?php// echo($Dash->tzfile_cb ==  1 ? 'checked' : '') ?> > קובץ ת.ז</td> -->
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('tzfile');
                                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ארץ לידה</td>
                                                        <td>
                                                            <input type="text" name="birth_country" value="<?php echo $Dash->birth_country; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>מקום מגורים</td>
                                                        <td>
                                                            <input type="text" name="city" value="<?php echo $Dash->city; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>טלפון נייד</td>
                                                        <td>
                                                            <input type="text" name="cellular" value="<?php echo $Dash->cellular; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>דואר אלקטרוני</td>
                                                        <td>
                                                            <input type="text" name="email" value="<?php echo $Dash->email; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>מין</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="female" name="gender" value="0" type="radio" class="custom-control-input" <?php echo 'gender='.$Dash->gender; ?>
                                                                <?php echo($Dash->gender == '0' ?  'checked' : '' ); ?> required="">
                                                                <label class="custom-control-label" for="debit">נקבה</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="male" name="gender" value="1" type="radio" class="custom-control-input" <?php echo($Dash->gender == '1' ? 'checked' : '' ); ?> required="">
                                                                <label class="custom-control-label" for="credit">זכר</label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>מצב משפחתי</td>
                                                        <td>
                                                            <select name="family_state" id="family_state">
                                                                <option value="1" <?php echo($Dash->family_state == '1' ? 'selected' : '')?>>רווק</option>
                                                                <option value="2" <?php echo($Dash->family_state == '2' ? 'selected' : '')?>>נשוי</option>
                                                                <option value="3" <?php echo($Dash->family_state == '3' ? 'selected' : '')?>>גרוש</option>
                                                                <option value="4" <?php echo($Dash->family_state == '4' ? 'selected' : '')?>>אלמן</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>בודד בארץ</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="alone" value="בודד" name="isalone" type="radio" class="custom-control-input" required="" <?php echo($Dash->isalone == 'בודד' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="debit">בודד בארץ</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="notalone" value="לא בודד" name="isalone" type="radio" class="custom-control-input" required="" <?php echo($Dash->isalone == 'לא בודד' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="credit">לא בודד</label>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr id="is_alone_file" class="hidden">
                                                        <td>
                                                           <input type="checkbox" value="1" name="isalonefile_cb" class=""  <?php echo($Dash->isalonefile_cb == 1  ? 'checked' : '') ?>> קובץ המעיד כי בסטודנט בודד בארץ</td>
                                                        <td id="isalonefile">
                                                            <?php 
                                                            
                                                                $Dash->load_clicked_image('isalonefile');
                                                                    ?>
                                                        </td>
                                                    </tr>






                                                </tbody>


                                            </table>
                                            <h3>שרות צבאי</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>סוג השירות</td>
                                                        <td>
                                                            <select name="is_army" id="is_army" required>

                                                                <option value="צבאי" <?php echo($Dash->is_army == 'צבאי' ? 'selected' : '')?>>צבאי</option>
                                                                <option value="לאומי" <?php echo($Dash->is_army == 'לאומי' ? 'selected' : '')?>>לאומי</option>
                                                                <option value="ללא" <?php echo($Dash->is_army == 'ללא' ? 'selected' : '')?>>ללא</option>
                                                            </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="army">
                                                        <td>משך השירות בחודשים</td>
                                                        <td>
                                                            <input type="text" name="length_army" value="<?php echo $Dash->length_army; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr id="is_lochem">
                                                        <td>לוחם/ת או תומך/ת לחימה?</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="lochem" name="is_lochem" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_lochem == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="debit">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="lo_lochem" name="is_lochem" value="0" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_lochem == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="credit">לא</label>
                                                            </div>

                                                        </td>
                                                    </tr>
													
													
													 <tr id="is-army-file">
                                                        <td>
                                                           <input type="checkbox" value="1" name="is_army_file_cb" class="" <?php echo($Dash->is_army_file_cb == 1  ? 'checked' : '') ?>>קובץ המעיד על שירות בצהל</td>
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('is_army_file');
                                                            ?>
                                                        </td>
                                                    </tr>

                                                    <tr id="is-lochem-file">
                                                        <td>
                                                           <input type="checkbox" value="1" name="islochemfile_cb" class="" <?php echo($Dash->islochemfile_cb == 1  ? 'checked' : '') ?>> קובץ לוחם</td>
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('islochemfile');
                                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr id="army_ptor">
                                                        <td>פטור משירות מסיבה רפואית בלבד</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="is_army_ptor" name="is_army_ptor" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_army_ptor == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="debit">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="is_army_no_ptor" name="is_army_ptor" value="0" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_army_ptor == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="credit">לא</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr id="is_army_ptor_file_cont">
                                                        <td>
                                                           <input type="checkbox" value="1" name="is_army_ptor_file_cb" class="" <?php echo($Dash->is_army_ptor_file_cb == 1  ? 'checked' : '') ?>> מסמכי פטור משירות צבאי</td>
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('is_army_ptor_file');
                                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr id="miluim_pail">
                                                        <td>שירות מילואים פעיל</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="is_miluim" name="is_miluim" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_miluim == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="debit">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="lo_miluim" name="is_miluim" value="0" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_miluim == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="credit">לא</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr id="is-miluim-file">
                                                        <td>
                                                           <input type="checkbox" value="1" name="is_miluim_file_cb" class="" <?php echo($Dash->is_miluim_file_cb == 1  ? 'checked' : '') ?>> אישור המעיד על שירות מילואים פעיל</td>
                                                        <td id="is_miluim_file">
                                                            <?php 
                                                                $Dash->load_clicked_image('is_miluim_file');
                                                                    ?>
                                                        </td>
                                                    </tr>

                                                </tbody>


                                            </table>

                                            <h3>מימון נוסף</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="mimun_nosaf">

                                                        <td>בשנת הלימודים הנוכחית קיבל/ה השתתפות במימון לימודי על ידי גוף כלשהו</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="mimun_nosaf" name="mimun_nosaf" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->mimun_nosaf == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="debit">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="lo_mimun_nosaf" name="mimun_nosaf" value="0" type="radio" class="custom-control-input" checked required="" <?php
                                                                    echo($Dash->mimun_nosaf == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="credit">לא</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h3>לימודים אקדמיים בשנה"ל הנוכחית</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>תחום לימודים</td>
                                                        <td>
                                                        
                                                            <?php $Dash->get_study_field(); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>שנת לימודים</td>
                                                        <td>
                                                            <select class="custom-select" name="study_year" id="study_year" required="">
                                                                <option value="">נא לבחור ערך</option>
                                                                <option value="1" <?php echo($Dash->study_year == 1 ? 'selected' : '')?>>א</option>
                                                                <option value="2" <?php echo($Dash->study_year == 2 ? 'selected' : '')?>>ב</option>
                                                                <option value="3" <?php echo($Dash->study_year == 3 ? 'selected' : '')?>>ג</option>
                                                                <option value="4" <?php echo($Dash->study_year == 4 ? 'selected' : '')?>>ד</option>
                                                            </select>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>האם ביקשת בעבר מלגת דיקן</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="asked_schol" value="1" name="asked_schol" type="radio" class="custom-control-input" required="" <?php echo($Dash->asked_schol == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="asked_schol">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="not_asked_schol" value="0" name="asked_schol" type="radio" class="custom-control-input" required="" <?php echo($Dash->asked_schol == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="not_asked_schol">לא</label>
                                                            </div>

                                                        </td>
                                                    </tr>

                                                    <tr id="asked-schol-div">
                                                        <td>האם קיבלת בעבר מלגת דיקן?</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="received_schol" value="1" name="received_schol" type="radio" class="custom-control-input" <?php echo($Dash->received_schol == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="received_schol">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="not_received_schol" value="0" name="received_schol" type="radio" class="custom-control-input" <?php echo($Dash->received_schol == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="not_received_schol">לא</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>


                                            </table>

                                            
                                            <h3>הכנסה</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="taasuka">
                                                    <tr id="taasukati_state_cont">

                                                        <td>מצב תעסוקתי</td>
                                                        <td>
                                                        <select name="taasukati_state" class="taas" id="taasukati_state" required>
                                                            <option value="0">יש לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->taasukati_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                            <option value="2" <?php echo($Dash->taasukati_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                            <option value="3" <?php echo($Dash->taasukati_state == '3' ? 'selected' : '')?>>לא עובד / קצבה</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                
                                                    <tr class="starthidden lo-oved" id="lo_oved_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="lo_oved_files_cb" class="" <?php echo($Dash->lo_oved_files_cb == 1  ? 'checked' : '') ?>> 
                                                        אישור מעמד לא עובד מביטוח לאומי
                                                        </td>
                                                        <td>
                                                       
                                                        <?php  $Dash->load_clicked_image('lo_oved_files'); ?>

                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_self_avg_cont">

                                                        <td>
                                                        סכום קצבה, במידה ויש.
                                                        </td>
                                                        <td>
                                                       
                                                        <input type="text" name="lo_oved_self_avg" id="lo_oved_self_avg" value="<?php echo $Dash->lo_oved_self_avg; ?>">


                                                        </td>
                                                    </tr>


                                              
                                                    <tr class="starthidden salary" id="self_salary">

                                                        <td>ממוצע שלושה חודשי שכר אחרונים(ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_salary_avg" id="self_salary_avg" value="<?php echo $Dash->self_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_salary">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_salary_files_cb" class="" <?php echo($Dash->self_salary_files_cb == 1   ? 'checked' : ''); ?>> 
                                                        קבצי שלושה תלושי שכר אחרונים</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('self_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_employ_avg_cont">

                                                            <td>הכנסה שנתית</td>
                                                            <td>
                                                                <input type="text" name="self_employ_avg" id="self_employ_avg" value="<?php echo $Dash->self_employ_avg; ?>">

                                                            </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_employ_avg_cont">

                                                            <td>
                                                           <input type="checkbox" value="1" name="self_employ_files_cb" class="" <?php echo($Dash->self_employ_files_cb == 1  ? 'checked' : '') ?> > 
                                                            דו"ח שומה</td>
                                                            <td>
                                                            <?php  $Dash->load_clicked_image('self_employ_files'); ?>

                                                            </td>
                                                    </tr>
                                                    
                                                <!-- אם גרוש -->
                                                    <tr id="mezonot_state_row_cont">

                                                        <td>מזונות</td>
                                                        <td>
                                                            <select name="mezonot_state" id="mezonot_state">
                                                                <option value="0">יש לבחור ערך</option>
                                                                <option value="1" <?php echo($Dash->mezonot_state == '1' ? 'selected' : '')?>>ללא מזונות</option>
                                                                <option value="2" <?php echo($Dash->mezonot_state == '2' ? 'selected' : '')?>>מקבל מזונות</option>
                                                                <option value="3" <?php echo($Dash->mezonot_state == '3' ? 'selected' : '')?>>נותן מזונות</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr id="mezonot_files_div">

                                                        <td>
                                                       <input type="checkbox" value="1" name="mezonot_files_cb" class="" <?php echo($Dash->mezonot_files_cb == 1  ? 'checked' : '') ?>> 
                                                        אסמכתא על אי קבלת מזונות</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('mezonot_files'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="mezonot_height_cont">

                                                        <td>גובה מזונות</td>
                                                        <td>
                                                            <input type="text" name="mezonot_height" id="mezonot_height" value="<?php echo $Dash->mezonot_height; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="mezonot_height_cont">

                                                        <td>
                                                       <input type="checkbox" value="1" name="mezonot_height_files_cb" class="" <?php echo($Dash->mezonot_height_files_cb == 1  ? 'checked' : '') ?> >
                                                        אישור גובה מזונות</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('mezonot_height_files'); ?> 
                                                        </td>
                                                    </tr>
                                                    <!-- /אם גרוש -->
                                                </tbody>
                                            </table>

                                            <h3>פרטי משפחה</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="is_siua_cont">
                                                    <tr>
                                                        <td>מקבל סיוע</td>
                                                        <td>
                                                        <div class="custom-control custom-radio">
                                                            <input id="no_siua" value="0" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Dash->is_siua == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_siua">לא</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="yes_siua" value="1" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Dash->is_siua == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_siua">כן</label>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                    <tr id="is_siua_file_cont">

                                                        <td>
                                                       <input type="checkbox" value="1" name="is_siua_file_cb" class="" <?php echo($Dash->is_siua_file_cb == 1  ? 'checked' : '') ?>>

                                                        אישור מגורמי הרווחה</td>
                                                        <td>
                                                            <?php $Dash->load_clicked_image('is_siua_file'); ?> 
                                                        </td>
                                                    </tr>

                                               </tbody>
                                            </table>

                                            <table class="table table-striped table-bordered bulk_action taasuka-parents">
                                                <tbody class="taasuka">
                                                    <tr id="taasukati_state_cont">

                                                        <td class="col-xs-6"> מצב תעסוקתי אב</td>
                                                        <td class="col-xs-6">
                                                        <select name="taasukati_av_state" class="taas" id="taasukati_av_state" required>
                                                            <option value="0">יש לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->taasukati_av_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                            <option value="2" <?php echo($Dash->taasukati_av_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                            <option value="3" <?php echo($Dash->taasukati_av_state == '3' ? 'selected' : '')?>>לא עובד / קצבה</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_av_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="lo_oved_av_files_cb" class="" <?php echo($Dash->lo_oved_av_files_cb == 1  ? 'checked' : '') ?> >

                                                        אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_av_files'); ?>

                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_av_avg">
                                                        <td>
                                                            סכום קצבה, במידה ויש.
                                                        </td>
                                                        <td>
                                                            <input type="text" name="self_av_lo_oved_avg" id="self_av_lo_oved_avg" value="<?php echo $Dash->self_av_lo_oved_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_av_salary_files">

                                                        <td>
                                                        ממוצע שלושה חודשי שכר אחרונים אב(ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_av_salary_avg" id="self_av_salary_avg" value="<?php echo $Dash->self_av_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_av_salary_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_av_salary_files_cb" class="" <?php echo($Dash->self_av_salary_files_cb == 1  ? 'checked' : '') ?> >
                                                        קבצי שלושה תלושי שכר אחרונים</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_av_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_av_employ_avg">

                                                        <td>הכנסה שנתית</td>
                                                        <td>
                                                            <input type="text" name="self_av_employ_avg" id="self_av_employ_avgs" value="<?php echo $Dash->self_av_employ_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_av_employ_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_av_employ_files_cb" class="" <?php echo($Dash->self_av_employ_files_cb == 1  ? 'checked' : '') ?> >
                                                        דו"ח שומה</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_av_employ_files'); ?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-striped table-bordered bulk_action taasuka-parents">
                                                <tbody class="taasuka">
                                                    <tr id="taasukati_state_cont">

                                                        <td class="col-xs-6"> מצב תעסוקתי אם</td>
                                                        <td class="col-xs-6">
                                                        <select name="taasukati_em_state" class="taas" id="taasukati_em_state" required>
                                                            <option value="0">יש לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->taasukati_em_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                            <option value="2" <?php echo($Dash->taasukati_em_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                            <option value="3" <?php echo($Dash->taasukati_em_state == '3' ? 'selected' : '')?>>לא עובד / קצבה</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_em_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="lo_oved_em_files_cb" class="" <?php echo($Dash->lo_oved_em_files_cb == 1  ? 'checked' : '') ?>>
                                                        אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_em_files'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden lo-oved" id="lo_oved_em_avg">
                                                        <td>
                                                            סכום קצבה, במידה ויש.
                                                        </td>
                                                        <td>
                                                            <input type="text" name="self_em_lo_oved_avg" id="self_em_lo_oved_avg" value="<?php echo $Dash->self_em_lo_oved_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_em_salary">

                                                        <td>
                                                        ממוצע שלושה חודשי שכר אחרונים אם (ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_em_salary_avg" id="self_em_salary_avg" value="<?php echo $Dash->self_em_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_em_salary_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_em_salary_files_cb" class="" <?php echo($Dash->self_em_salary_files_cb == 1  ? 'checked' : '') ?>>
                                                        קבצי שלושה תלושי שכר אחרונים

                                                        </td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_em_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_em_employ_avg">

                                                        <td>הכנסה שנתית</td>
                                                        <td>
                                                            <input type="text" name="self_em_employ_avg" id="self_em_employ_avgs" value="<?php echo $Dash->self_em_employ_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_em_employ_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_em_employ_files_cb" class="" <?php echo($Dash->self_em_employ_files_cb == 1  ? 'checked' : '') ?> >
                                                        דו"ח שומה</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_em_employ_files'); ?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table class="table table-striped table-bordered bulk_action taasuka-zug">
                                                <tbody class="taasuka">
                                                    <tr id="taasukati_state_cont">

                                                        <td class="col-xs-6"> מצב תעסוקתי בן/בת זוג</td>
                                                        <td class="col-xs-6">
                                                        <select name="taasukati_zug_state" class="taas" id="taasukati_zug_state" required>
                                                            <option value="0">יש לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->taasukati_zug_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                            <option value="2" <?php echo($Dash->taasukati_zug_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                            <option value="3" <?php echo($Dash->taasukati_zug_state == '3' ? 'selected' : '')?>>לא לא עובד / קצבה</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_zug_files">
                                                  

                                                        <td>
                                                       <input type="checkbox" value="1" name="lo_oved_zug_files_cb" class="" <?php echo($Dash->lo_oved_zug_files_cb == 1  ? 'checked' : '') ?> >    
                                                        אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_zug_files'); ?>

                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_zug_avg">
                                                        <td>
                                                            סכום קצבה, במידה ויש.
                                                        </td>
                                                        <td>
                                                            <input type="text" name="self_zug_lo_oved_avg" id="self_zug_lo_oved_avg" value="<?php echo $Dash->self_zug_lo_oved_avg; ?>">
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden salary" id="self_zug_salary">

                                                        <td>ממוצע שלושה חודשי שכר אחרונים בן/בת זוג (ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_zug_salary_avg" id="self_zug_salary_avg" value="<?php echo $Dash->self_zug_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_zug_salary_files">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_zug_salary_files_cb" class="" <?php echo($Dash->self_zug_salary_files_cb == 1  ? 'checked' : '') ?> >
                                                        קבצי שלושה תלושי שכר אחרונים בן/בת זוג</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_zug_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_zug_employ_avg">

                                                        <td>הכנסה שנתית</td>
                                                        <td>
                                                            <input type="text" name="self_zug_employ_avg" id="self_zug_employ_avgs" value="<?php echo $Dash->self_zug_employ_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_zug_employ_files">
                                                 
                                                        <td>
                                                       <input type="checkbox" value="1" name="self_zug_employ_files_cb" class="" <?php echo($Dash->self_zug_employ_files_cb == 1  ? 'checked' : '') ?> >    
                                                        דו"ח שומה</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_zug_employ_files'); ?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table class="table table-striped table-bordered bulk_action">
                                                <tbody class="">
                                                    <tr class="starthidden children_cont" id="">

                                                        <td class="col-xs-6" id="self_children_cont_label"></td>
                                                        <td class="col-xs-6">
                                                        
                                                        <input type="text" name="self_children" id="self_children" value="<?php echo $Dash->self_children; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden children_cont" id="">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_children_files_cb" class=""  <?php echo($Dash->self_children_files_cb == 1  ? 'checked' : '') ?> >

                                                        חייב בהעלאת קובץ ספח תעודות זהות של האם</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_children_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden soldier_cont" id="">

                                                        <td id="self_soldier_cont_label"></td>
                                                        <td>

                                                        <div class="custom-control custom-radio">
                                                            <input id="no_self_soldier" value="0" name="self_soldier" type="radio" class="custom-control-input ff" <?php echo($Dash->self_soldier == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_self_soldier">לא</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                            <input id="yes_self_soldier" value="1" name="self_soldier" type="radio" class="custom-control-input ff" <?php echo($Dash->self_soldier == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_self_soldier">כן</label>
                                                            </div>
                                                        </div>

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden soldier_cont" id="">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_soldier_files_cb" class="" <?php echo($Dash->self_soldier_files_cb == 1  ? 'checked' : '') ?> >
                                                        חייב בהעלאת קובץ תעודת חוגר/קצין
                                                        </td>
                                                        <td>
                                                         <?php  $Dash->load_clicked_image('self_soldier_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden student_cont" id="">

                                                        <td id="self_student_cont_label"></td>
                                                        <td>

                                                        <div class="custom-control custom-radio">
                                                            <input id="no_self_student" value="0" name="self_student" type="radio" class="custom-control-input ff" <?php echo($Dash->self_student == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_self_soldier">לא</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                            <input id="yes_self_student" value="1" name="self_student" type="radio" class="custom-control-input ff" <?php echo($Dash->self_student == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_self_student">כן</label>
                                                            </div>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden student_cont" id="">

                                                        <td>
                                                       <input type="checkbox" value="1" name="self_student_files_cb" class=""  <?php echo($Dash->self_student_files_cb == 1  ? 'checked' : '') ?>  >

                                                        אם כן חייב בהעלאת אישור לימודים</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_student_files'); ?>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <h3>מסמכים נוספים</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                            <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    

                                                    <tr class="" id="">

                                                        <td>מצב סוציאלי חריג</td>
                                                        <td>
                                                        <div class="custom-control custom-radio">
                                                            <input id="no_social_harig" value="0" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->social_harig == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_social_harig">לא</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                            <input id="yes_social_harig" value="1" name="social_harig" type="radio"  class="custom-control-input ff" <?php echo($Dash->social_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_social_harig">כן</label>
                                                            </div>
                                                        </div>

                                                        </td>
                                                    </tr>
                                                    <tr class="" id="social_harig_file_cont">

                                                        <td>
                                                       <input type="checkbox" value="1" name="social_harig_file_cb" class=""  <?php echo($Dash->social_harig_file_cb == 1  ? 'checked' : '') ?> >

                                                        אישור מצב סוציאלי חריג</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('social_harig_file'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="" id="">

                                                        <td>מצב רפואי חריג סטודנט</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">
                                                                <input id="no_medical_harig" value="0" name="medical_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->medical_harig == '0' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="no_medical_harig">לא</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="yes_medical_harig" value="1" name="medical_harig" type="radio"  class="custom-control-input ff" <?php echo($Dash->medical_harig == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="yes_medical_harig">כן</label>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="" id="medical_harig_file_cont">

                                                        <td>
                                                       <input type="checkbox" value="1" name="medical_harig_file_cb" class=""  <?php echo($Dash->medical_harig_file_cb == 1  ? 'checked' : '') ?> >

                                                        אישור מצב רפואי חריג סטודנט</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('medical_harig_file'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="" id="">

                                                        <td> מצב רפואי חריג בן משפחה</td>
                                                        <td>
                                                            <div class="custom-control custom-radio">

                                                            <input id="no_family_harig" value="0" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->family_harig == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_family_harig">לא</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                            <input id="yes_family_harig" value="1" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->family_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_family_harig">כן</label>
                                                            </div>
                                                           

                                                        </td>
                                                        </tr>
                                                        <tr class="" id="family_harig_file_cont">

                                                        <td> 
                                                       <input type="checkbox" data-id="999" value="1" name="family_harig_file_cb" class="" <?php echo($Dash->family_harig_file_cb == 1  ? 'checked' : '') ?> >

                                                        אישור מצב רפואי חריג בן משפחה</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('family_harig_file'); ?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h3>נימוק בקשה לסיוע</h3>
                                             <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                
                                                    <tr class="" id="">

                                                        <td>נימוק הבקשה</td>
                                                        <td>
                                                            <?php echo($Dash->explanation ? $Dash->explanation : 'לא הוזן נימוק'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="" id="explanation_file_cont">

                                                        <td>

                                                        קובץ המכיל את נימוק הבקשה</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('explanation_file'); ?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                             <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th class="col-xs-6">שם</th>
                                                        <th class="col-xs-6">ערך</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                
                                                    <tr class="" id="">
                                                        <td>קבצים לא תקינים:</td>
                                                        <td>
                                                            <ol id="files-denay">

                                                            </ol>
                                                        </td>
                                                    </tr>
                                                    <tr class="" id="">
                                                        <td>הערות נוספות</td>
                                                        <td>
                                                            <textarea name="reject_exp" id="" cols="30" rows="10"><?php echo($Dash->reject_exp ? $Dash->reject_exp : '' ); ?></textarea>
                                                            <textarea class="hidden" name="reject_files" id="reject_files" cols="30" rows="10"><?php echo($Dash->reject_files ? $Dash->reject_files : '' ); ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                        <table id="all-calcs">
                                           <tr>
                                                <td class="item-name">
                                                    בודד בארץ       
                                                </td>
                                                <td class="item-value">
                                                    <input type="text" name="alone_input" class="calc" id="alone_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                    סוג השירות
                                                </td>
                                                <td class="item-value">
                                                    <input type="text" name="isarmy_input" class="calc" id="isarmy_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                לוחם / תומך לחימה
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="isLochemTomech_input" class="calc" id="isLochemTomech_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                 שרות מילואים פעיל
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="isMiluim_input" class="calc" id="isMiluim_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                פטור רפואי משרות צבאי

                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="isArmyPtor_input" class="calc" id="isArmyPtor_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                מצב תעסוקתי


                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="selfTaasukati_input" class="calc" id="selfTaasukati_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                מזונות
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="isMezonot_input" class="calc" id="isMezonot_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                מצב סוציאלי חריג 
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="isSiua_input" class="calc" id="isSiua_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                אח / ילד חייל סדיר
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="selfSoldier_input" class="calc" id="selfSoldier_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                אח / ילד חייל סטודנט במוסד להשכלה גבוהה

                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="selfStudent_input" class="calc" id="selfStudent_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                מצב בריאותי חריג סטודנט

                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="medicalHarig_input" class="calc" id="medicalHarig_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                מצב בריאותי חריג בן משפחה
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="familyHarig_input" class="calc" id="familyHarig_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                הכנסה לנפש
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="familyIncome_input" id="familyIncome_input" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                ניקוד עבור הכנסה לנפש
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="familyIncome_input_per_person" class="calc" id="familyIncome_input_per_person" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name">
                                                סכום ניקוד כולל                                               
                                                </td>
                                                <td class="item-value">
                                                <input type="text" name="total_inc" id="total_inc" />                                                
                                                </td>
                                            </tr>

                                    
                                
                                            
                                         
                                                                    </table>
                                            <input class="btn btn-success sd-submit" type="submit" name="submit" value="אשר בקשה">
                                            <input class="btn btn-danger sd-submit" type="submit" name="return" value="החזר לשולח">
                                            
                                        <div id="demo"></div>
                                       </form>

                                        <!-- form start -->
                                       
                                        <!-- form ends -->
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-xs-12 full-height">
                                        <div id="image-container" class="full-height">

                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                        <br />





                    </div>
                    <!-- /page content -->


                    <?php require 'footer.php'; ?>


               