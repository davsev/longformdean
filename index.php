<?php
$tz = '889990099';
echo $tz;
$year = 2018;
require './api/inc.php';

$Form =new Form($db,$tz, $year);
echo $Form->id;

//this session is used to show the user the submission id 
$_SESSION['id'] = $Form->id; 

//if form was submitted by the student he will be redirected to the thankyoupage
$Form->is_submitted();

//check if the user already is in the database
$thedata = $Form->dataExist($tz,$year);
// echo '<pre style="direction: ltr">'. print_r($thedata) .'</pre> ';
// echo 'data '. $thedata['fname'];
// //return true if data exits

if(empty($thedata)){
  //if the data is already in the database retrive and update on save 
 $Form->new_line($tz, $year);
  }


if(isset($_POST['save'])){


  
  $tz = $_POST['tz'];
  $year = $_POST['year'];
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
    'taasukati_em_state' => $_POST['taasukati_em_state'],
    'self_em_salary_avg' => $_POST['self_em_salary_avg'],
    'self_em_employ_avg' => $_POST['self_em_employ_avg'],
    'taasukati_zug_state' => $_POST['taasukati_zug_state'],
    'self_zug_salary_avg' => $_POST['self_zug_salary_avg'],
    'self_zug_employ_avg' => $_POST['self_zug_employ_avg'],
    'self_children' => $_POST['self_children'],
    'self_soldier' => $_POST['self_soldier'],
    'self_student' => $_POST['self_student'],
    'social_harig' => $_POST['social_harig'],
    'family_harig' => $_POST['family_harig'],
    'medical_harig' => $_POST['medical_harig'],
    'explanation' => $_POST['explanation'],

    'tzfile' =>  json_decode($Form->tzfile),
    'isalonefile' =>  json_decode($Form->isalonefile),
    'islochemfile' =>  json_decode($Form->islochemfile),
    'is_army_ptor_file' =>  json_decode($Form->is_army_ptor_file),
    'is_miluim_file' =>  json_decode($Form->is_miluim_file),
    'self_employ_files' =>  json_decode($Form->self_employ_files),
    'self_salary_files' =>  json_decode($Form->self_salary_files),
    'lo_oved_files' =>  json_decode($Form->lo_oved_files),
    'mezonot_files' =>  json_decode($Form->mezonot_files),
    'mezonot_height_files' =>  json_decode($Form->mezonot_height_files),
    'is_siua_file' =>  json_decode($Form->is_siua_file),
    'lo_oved_av_files' =>  json_decode($Form->lo_oved_av_files),
    'self_av_salary_files' =>  json_decode($Form->self_av_salary_files),
    'self_av_employ_files' =>  json_decode($Form->self_av_employ_files),
    'lo_oved_em_files' =>  json_decode($Form->lo_oved_em_files),
    'self_em_salary_files' =>  json_decode($Form->self_em_salary_files),
    'self_em_employ_files' =>  json_decode($Form->self_em_employ_files),
    'lo_oved_zug_files' =>  json_decode($Form->lo_oved_zug_files),
    'self_zug_salary_files' =>  json_decode($Form->self_zug_salary_files),
    'self_zug_employ_files' =>  json_decode($Form->self_zug_employ_files),
    'self_children_files' =>  json_decode($Form->self_children_files),
    'self_soldier_files' =>  json_decode($Form->self_soldier_files),
    'self_student_files' =>  json_decode($Form->self_student_files),
    'social_harig_file' =>  json_decode($Form->social_harig_file),
    'medical_harig_file' =>  json_decode($Form->medical_harig_file),
    'family_harig_file' =>  json_decode($Form->family_harig_file),
    'explanation_file' =>  json_decode($Form->explanation_file),
    
  );



  $meida = json_encode($datas);
  //$is_miluim = $_POST['is_miluim'];
  //properties retrived by consructor

  $Form->tz = $tz;
  $Form->year = $year;
  $Form->datas = serialize($datas);
  // echo '<pre>';
  // var_dump($_POST);
  // echo '</pre>';
  $Form->fname = $datas['fname'];
  $Form->lname = $datas['lname'];
  $Form->gender = $datas['gender'];
  $Form->birth_country = $datas['birth_country'];
  $Form->city = $datas['city'];
  $Form->cellular = $datas['cellular'];
  $Form->email = $datas['email']; 
  $Form->family_state = $datas['family_state']; 
  $Form->isalone = $datas['isalone'];
  $Form->study_field = $datas['study_field'];
  $Form->study_year = $datas['study_year'];
  $Form->asked_schol = $datas['asked_schol'];
  $Form->received_schol = $datas['received_schol'];
  $Form->is_army = $datas['is_army'];
  $Form->length_army = $datas['length_army'];
  $Form->is_lochem = $datas['is_lochem'];
  $Form->is_army_ptor = $datas['is_army_ptor'];
  $Form->is_miluim = $datas['is_miluim'];
  $Form->mimun_nosaf = $datas['mimun_nosaf'];
  $Form->taasukati_state = $datas['taasukati_state'];
  $Form->self_salary_avg = $datas['self_salary_avg'];
  $Form->self_employ_avg = $datas['self_employ_avg'];
  $Form->mezonot_state = $datas['mezonot_state'];
  $Form->mezonot_height = $datas['mezonot_height'];
  $Form->is_siua = $datas['is_siua'];
  $Form->taasukati_av_state = $datas['taasukati_av_state'];
  $Form->self_av_salary_avg = $datas['self_av_salary_avg'];
  $Form->self_av_employ_avg = $datas['self_av_employ_avg'];
  $Form->taasukati_em_state = $datas['taasukati_em_state'];
  $Form->self_em_salary_avg = $datas['self_em_salary_avg'];
  $Form->self_em_employ_avg = $datas['self_em_employ_avg'];
  $Form->taasukati_zug_state = $datas['taasukati_zug_state'];
  $Form->self_zug_salary_avg = $datas['self_zug_salary_avg'];
  $Form->self_zug_employ_avg = $datas['self_zug_employ_avg'];
  $Form->self_children = $datas['self_children'];
  $Form->self_soldier = $datas['self_soldier'];
  $Form->self_student = $datas['self_student'];
  $Form->social_harig = $datas['social_harig'];
  $Form->family_harig = $datas['family_harig'];
  $Form->medical_harig = $datas['medical_harig'];
  $Form->explanation = $datas['explanation'];
  

  if(!empty($thedata)){
       //if the data is already in the database retrive and update on save
      $Form->update();
   }else{
      $Form->create();
  };
};

if(isset($_POST['submit'])){
    $tz = $_POST['tz'];
    $year = $_POST['year'];
    $submitted = $_POST['submitted'];

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
      'taasukati_em_state' => $_POST['taasukati_em_state'],
      'self_em_salary_avg' => $_POST['self_em_salary_avg'],
      'self_em_employ_avg' => $_POST['self_em_employ_avg'],
      'taasukati_zug_state' => $_POST['taasukati_zug_state'],
      'self_zug_salary_avg' => $_POST['self_zug_salary_avg'],
      'self_zug_employ_avg' => $_POST['self_zug_employ_avg'],
      'self_children' => $_POST['self_children'],
      'self_soldier' => $_POST['self_soldier'],
      'self_student' => $_POST['self_student'],
      'social_harig' => $_POST['social_harig'],
      'family_harig' => $_POST['family_harig'],
      'medical_harig' => $_POST['medical_harig'],
      'explanation' => $_POST['explanation']
      
    );


    $meida = json_encode($datas);
    //properties retrived by consructor
    $Form->id = $id;
    $Form->tz = $tz;
    $Form->year = $year;
    $Form->submitted = $submitted;
    
    // $Form->datas = $meida;

    $Form->datas = serialize($datas);

    // $Form->fname = $datas['fname'];
    // $Form->lname = $datas['lname'];
    // $Form->gender = $datas['gender'];
    // $Form->birth_country = $datas['birth_country'];
    // $Form->city = $datas['city'];
    // $Form->cellular = $datas['cellular'];
    // $Form->email = $datas['email']; 
    // $Form->family_state = $datas['family_state']; 
    // $Form->isalone = $datas['isalone'];
    // $Form->study_field = $datas['study_field'];
    // $Form->study_year = $datas['study_year'];
    // $Form->asked_schol = $datas['asked_schol'];
    // $Form->received_schol = $datas['received_schol'];
    // $Form->is_army = $datas['is_army'];
    // $Form->length_army = $datas['length_army'];
    // $Form->is_lochem = $datas['is_lochem'];
    // $Form->is_army_ptor = $datas['is_army_ptor'];
    // $Form->is_miluim = $datas['is_miluim'];
    // $Form->mimun_nosaf = $datas['mimun_nosaf'];
    // $Form->taasukati_state = $datas['taasukati_state'];
    // $Form->self_salary_avg = $datas['self_salary_avg'];
    // $Form->self_employ_avg = $datas['self_employ_avg'];
    // $Form->mezonot_state = $datas['mezonot_state'];
    // $Form->mezonot_height = $datas['mezonot_height'];
    // $Form->is_siua = $datas['is_siua'];
    // $Form->taasukati_av_state = $datas['taasukati_av_state'];
    // $Form->self_av_salary_avg = $datas['self_av_salary_avg'];
    // $Form->self_av_employ_avg = $datas['self_av_employ_avg'];
    // $Form->taasukati_em_state = $datas['taasukati_em_state'];
    // $Form->self_em_salary_avg = $datas['self_em_salary_avg'];
    // $Form->self_em_employ_avg = $datas['self_em_employ_avg'];
    // $Form->taasukati_zug_state = $datas['taasukati_zug_state'];
    // $Form->self_zug_salary_avg = $datas['self_zug_salary_avg'];
    // $Form->self_zug_employ_avg = $datas['self_zug_employ_avg'];
    // $Form->self_children = $datas['self_children'];
    // $Form->self_soldier = $datas['self_soldier'];
    // $Form->self_student = $datas['self_student'];
    // $Form->social_harig = $datas['social_harig'];
    // $Form->family_harig = $datas['family_harig'];
    // $Form->medical_harig = $datas['medical_harig'];

    

        
        //$Form->tzfile = serialize($files);


    if(!empty($thedata)){
         //if the data is already in the database retrive and update on save
        echo 'empty';
        $Form->update();

     }else{
        echo 'comleted';
        $Form->create();

    };

    $Form->is_submitted();

};

?>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>בקשה למלגת דיקן</title>

    <link rel="stylesheet" href="./vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="./vendors/parsleyjs/dist/parsley.css">


    <link rel="stylesheet" href="./assets/style/style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <?php echo  $Form->id; ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-left">
          <img src="./assets/images/logo.png" alt="לוגו המכללה האקדמית אחוה">
        </div>
      </div>
      <div class="py-5 text-right">
        <h2>בקשה למלגות דיקן- טופס מקוון</h2>
        <p class="lead"> תאריך אחרון להגשה: 31.10.2018
          <br /> תשובה תשלח בדואר כחודשיים לאחר תחילת שנת הלימודים
        </p>
        <p class="lead">
          לנוחיותך, מצורפת רשימת מסמכים נדרשים.
          <br /> לתשומת ליבך: סטודנט רווק יצרף מסמכי הורים ואחים, סטודנט נשוי יצרף מסמכי בת זוג וילדים.
          <br /> מומלץ לוודא שיש ברשותך מסמכים נדרשים לפני תחילת התהליך.
          <br /> טופס בקשה אשר יוגש ללא כל המסמכים הנדרשים לא יקלט במערכת ולא יטופל.
        </p>




      </div>


      <!-- <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>


        </div> -->
      <div class="col-md-12 order-md-1">

        <form action="" id="studentForm" method="POST" class="needs-validation" enctype="multipart/form-data" data-parsley-validate=""
          ovalidate="" action="<?php $_SERVER['PHP_SELF'];?>">

          <div>
            <!-- section1 -->
            <h3>פרטים אישיים</h3>
            <div class="row">
              <div class="col-md-12 mb-3">
                <?php echo $Form->fname; ?>
                <label for="fname">שם פרטי</label>
                <input type="text" name="fname" class="form-control" id="fname" autocomplete='given-name' placeholder="" required="" value="<?php echo $Form->fname; ?>">


              </div>
              <div class="col-md-12 mb-3">
                <label for="lname">שם משפחה</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="" required="" value="<?php echo $Form->lname; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="tz">תעודת זהות</label>
                <input type="text" name="tz" class="form-control" id="tz" autocomplete='given-name' placeholder="" required="" value="<?php echo $tz; ?>"
                  readonly>

              </div>
              <div class="col-md-12 mb-3">

                <div class="custom-file" id="tz-file">
                  <label class="custom-file-label" for="tzfile">צילום ת.ז (לחצו כאן)</label>

                  <ul class="file-list">
                    <?php  if($Form->tzfile != '' || $Form->tzfile != NULL){
                        //var_dump(unserialize($Form->tzfile));
                        $thefile = json_decode($Form->tzfile);
                        $i = 0;
                        foreach($thefile as $filename){
                         
                          echo '
                            <li>
                              <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                              <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                            </li>';
                          $i++;
                        }
                    }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="tzfile" name="tzfile" required="" />

                  <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">

                <label for="birth_country">ארץ לידה</label>
                <input type="text" name="birth_country" class="form-control" id="birth_country" placeholder="" required="" value="<?php echo $Form->birth_country; ?>">

              </div>
              <div class="col-md-12 mb-3">
                <label for="city">מקום מגורים</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="" required="" value="<?php echo $Form->city; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">

                <label for="cellular">טלפון נייד</label>
                <input type="text" name="cellular" class="form-control" id="cellular" placeholder="" required="" value="<?php echo $Form->cellular; ?>">
              </div>
              <div class="col-md-12 mb-3">
                <label for="email">דואר אלקטרוני</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required="" value="<?php echo $Form->email; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label>מין</label>
                <div class="custom-control custom-radio">
                  <input id="female" name="gender" value="נקבה" type="radio" class="custom-control-input" <?php echo 'gender='.$Form->gender; ?>
                  <?php echo($Form->gender == 'נקבה' ?  'checked' : '' ); ?> required="">
                  <label class="custom-control-label" for="debit">נקבה</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="male" name="gender" value="זכר" type="radio" class="custom-control-input" <?php echo($Form->gender == 'זכר' ? 'checked' : '' ); ?> required="">
                  <label class="custom-control-label" for="credit">זכר</label>
                </div>
              </div>
              <div class="col-md-12 mb-3" id="family_state_cont">
                <label for="family_state">מצב משפחתי</label>

                <select name="family_state" class="ff" id="family_state" required="">
                  <option value="">יש לבחור ערך</option>
                  <option value="1" <?php echo($Form->family_state == '1' ? 'selected' : '')?>>רווק</option>
                  <option value="2" <?php echo($Form->family_state == '2' ? 'selected' : '')?>>נשוי</option>
                  <option value="3" <?php echo($Form->family_state == '3' ? 'selected' : '')?>>גרוש</option>
                  <option value="4" <?php echo($Form->family_state == '4' ? 'selected' : '')?>>אלמן</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label>בודד בארץ</label>
                <div class="custom-control custom-radio">
                  <input id="alone" value="בודד" name="isalone" type="radio" class="custom-control-input" required="" <?php echo($Form->isalone == 'בודד' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="debit">בודד בארץ</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="notalone" value="לא בודד" name="isalone" type="radio" class="custom-control-input" required="" <?php echo($Form->isalone == 'לא בודד' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="credit">לא בודד</label>
                </div>
              </div>
            </div>

            <div class="row" id="is_alone_file" style="display: none">
              <div class="col-md-12 mb-3">
                <div class="custom-file" id="iisalonefile">
                  <label class="custom-file-label" for="isalonefile">סטודנט בודד בארץ (לחצו כאן)</label>
                  <p>סטודנט בודד בארץ, או מי שהוכר כחייל בודד, יש להביא אישורים המעידים על כך</p>
                  <ul class="file-list">
                    <?php  if($Form->isalonefile != '' || $Form->isalonefile != NULL){
                        //var_dump(unserialize($Form->tzfile));
                        $thefile = json_decode($Form->isalonefile);
                        $i = 0;
                        foreach($thefile as $filename){
                         
                          echo '
                            <li>
                              <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                              <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                            </li>';
                          $i++;
                        }
                    }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="isalonefile" name="isalonefile" />

                  <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                </div>
              </div>
            </div>

          </div>
          <!-- section1 -->

          <div>
            <!-- section2 -->
            <h3>לימודים אקדמיים בשנה"ל הנוכחית</h3>
            <div class="row">

              <!-- <label for="study-field">תחום לימודים</label>
          <select class="custom-select" name="study_field" id="study-field"> -->
              <div class="col-md-12 mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="study-field">תחום לימודים</label>
                </div>
                <select class="custom-select" name="study_field" id="study-field" required>

                  <option value="">נא לבחור ערך</option>
                  <?php $Form->get_study_field(); ?>
                </select>
              </div>
              <div class="col-md-12 mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="study_year">שנת לימודים</label>
                </div>
                <?php echo $Form->study_year;?>

                <select class="custom-select" name="study_year" id="study_year" required="">
                  <option value="">נא לבחור ערך</option>
                  <option value="1" <?php echo($Form->study_year == 1 ? 'selected' : '')?>>א</option>
                  <option value="2" <?php echo($Form->study_year == 2 ? 'selected' : '')?>>ב</option>
                  <option value="3" <?php echo($Form->study_year == 3 ? 'selected' : '')?>>ג</option>
                  <option value="4" <?php echo($Form->study_year == 4 ? 'selected' : '')?>>ד</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label>האם בקשת בעבר מלגת דיקאן</label>
                <div class="custom-control custom-radio">
                  <input id="asked_schol" value="1" name="asked_schol" type="radio" class="custom-control-input" required="" <?php echo($Form->asked_schol == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="debit">כן</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="not_asked_schol" value="0" name="asked_schol" type="radio" class="custom-control-input" required="" <?php echo($Form->asked_schol == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="credit">לא</label>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div id="asked-schol-div">
                  <label>האם קיבלת בעבר מלגת דיקאן</label>
                  <div class="custom-control custom-radio">
                    <input id="received_schol" value="1" name="received_schol" type="radio" class="custom-control-input" <?php echo($Form->received_schol == '1' ? 'checked' : '' ); ?>>
                    <label class="custom-control-label" for="debit">כן</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="not_received_schol" value="0" name="received_schol" type="radio" class="custom-control-input" <?php echo($Form->received_schol == '0' ? 'checked' : '' ); ?>>
                    <label class="custom-control-label" for="credit">לא</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- section2 -->
          <div>
            <!-- section3 -->
            <div class="row">
              <h3>שרות צבאי</h3>
              <div class="col-md-12 mb-3">
                <label for="is_army">סוג השירות</label>
                <select name="is_army" id="is_army" required>
                  <option value="">יש לבחור ערך</option>
                  <option value="צבאי" <?php echo($Form->is_army == 'צבאי' ? 'selected' : '')?>>צבאי</option>
                  <option value="לאומי" <?php echo($Form->is_army == 'לאומי' ? 'selected' : '')?>>לאומי</option>
                  <option value="ללא" <?php echo($Form->is_army == 'ללא' ? 'selected' : '')?>>ללא</option>
                </select>
              </div>

              <div class="col-md-12 mb-3 army" id="length_army">
                <label for="length_army">משך השירות בחודשים</label>
                <input type="text" name="length_army" class="form-control" value="<?php echo $Form->length_army; ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3 hidden" id="is_lochem">
                <label>לוחם/ת או תומך/ת לחימה</label>
                <div class="custom-control custom-radio">
                  <input id="lochem" name="is_lochem" value="1" type="radio" class="custom-control-input" required="" <?php echo($Form->is_lochem == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="debit">כן</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="lo_lochem" name="is_lochem" value="0" type="radio" class="custom-control-input" required="" <?php echo($Form->is_lochem == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="credit">לא</label>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="custom-file" id="is-lochem-file">
                  <label class="custom-file-label" for="islochemfile">קובץ לוחם (לחצו כאן)</label>

                  <ul class="file-list">
                    <?php  if($Form->islochemfile != '' || $Form->islochemfile != NULL){
                $thefile = json_decode($Form->islochemfile);
                $i = 0;
                foreach($thefile as $filename){
                  echo '
                    <li>
                      <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                    </li>';
                  $i++;
                }
              }; ?>
                  </ul>
                  <input type="file" class="custom-file-input" id="islochemfile" name="islochemfile" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3" id="army_ptor">
                <label>פטור משירות מסיבה רפואית בלבד</label>
                <div class="custom-control custom-radio">
                  <input id="is_army_ptor" name="is_army_ptor" value="1" type="radio" class="custom-control-input" required="" <?php echo($Form->is_army_ptor == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="debit">כן</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="is_army_no_ptor" name="is_army_ptor" value="0" type="radio" class="custom-control-input" required="" <?php echo($Form->is_army_ptor == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="credit">לא</label>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="custom-file" id="is_army_ptor_file">
                  <label class="custom-file-label" for="is_army_ptor_file">נא לצרף מסמכי פטור</label>
                  <p>במידה וקיבלת פטור משירות מסיבה רפואית, צרף מסמכים</p>
                  <ul class="file-list">
                    <?php  if($Form->is_army_ptor_file != '' || $Form->is_army_ptor_file != NULL){
                $thefile = json_decode($Form->is_army_ptor_file);
                $i = 0;
                foreach($thefile as $filename){
                  echo '
                    <li>
                      <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                    </li>';
                  $i++;
                }
              }; ?>
                  </ul>
                  <input type="file" class="custom-file-input" id="is_army_ptor_file" name="is_army_ptor_file" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3" id="miluim_pail">
                <label>שירות מילואים פעיל</label>
                <div class="custom-control custom-radio">
                  <input id="is_miluim" name="is_miluim" value="1" type="radio" class="custom-control-input" required="" <?php echo($Form->is_miluim == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="debit">כן</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="lo_miluim" name="is_miluim" value="0" type="radio" class="custom-control-input" required="" <?php echo($Form->is_miluim == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="credit">לא</label>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="custom-file" id="is-miluim-file">
                  <label class="custom-file-label" for="is_miluim_file">במידה והנך משרת שרות מילואים פעיל צרף אישורים (לחצו כאן)</label>
                  <ul class="file-list">
                    <?php  if($Form->is_miluim_file != '' || $Form->is_miluim_file != NULL){
                $thefile = json_decode($Form->is_miluim_file);
                $i = 0;
                foreach($thefile as $filename){
                  echo '
                    <li>
                      <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                    </li>';
                  $i++;
                }
              }; ?>
                  </ul>
                  <input type="file" class="custom-file-input" id="is_miluim_file" name="is_miluim_file" />
                </div>
              </div>
            </div>
          </div>
          <!-- section3 -->
          <h3>לימודים אקדמיים בשנה"ל הנוכחית</h3>
          <!-- section4 -->
          <div class="row">
            <div class="col-md-12 mb-3" id="mimun_nosaf">
              <label>בשנת הלימודים הנוכחית אקבל השתתפות במימון לימודי על ידי גוף כלשהו</label>
              <div class="custom-control custom-radio">
                <input id="mimun_nosaf" name="mimun_nosaf" value="1" type="radio" class="custom-control-input" required="" <?php echo($Form->mimun_nosaf == '1' ? 'checked' : '' ); ?>>
                <label class="custom-control-label" for="debit">כן</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="lo_mimun_nosaf" name="mimun_nosaf" value="0" type="radio" class="custom-control-input" checked required="" <?php
                  echo($Form->mimun_nosaf == '0' ? 'checked' : '' ); ?>>
                <label class="custom-control-label" for="credit">לא</label>
              </div>
            </div>

          </div>
          <!-- section4 -->
          <div>
            <!-- section5 -->
            <h3>הכנסה</h3>
            <div class="taasuka">
              <div class="row">
                <!-- taasukati -->

                <div class="col-md-12 mb-3" id="taasukati_state_cont">
                  <label for="taasukati_state">מצב תעסוקתי</label>
                  <select name="taasukati_state" class="taas" id="taasukati_state" required>
                    <option value="">יש לבחור ערך</option>
                    <option value="1" <?php echo($Form->taasukati_state == '1' ? 'selected' : '')?>>שכיר</option>
                    <option value="2" <?php echo($Form->taasukati_state == '2' ? 'selected' : '')?>>עצמאי</option>
                    <option value="3" <?php echo($Form->taasukati_state == '3' ? 'selected' : '')?>>לא עובד</option>
                  </select>
                </div>
                <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_files_cont">
                  <div class="custom-file" id="lo_oved_files">
                    <label class="custom-file-label" for="lo_oved_files">במידה ולא עובד</label>
                    <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                    <ul class="file-list">
                      <?php  if($Form->lo_oved_files != '' || $Form->lo_oved_files != NULL){
                  $thefile = json_decode($Form->lo_oved_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="lo_oved_files" name="lo_oved_files" />
                  </div>
                </div>
              </div>

              <div class="row salary starthidden" id="self_salary">
                <div class="col-md-12 mb-3" id="self_salary_avg_cont">
                  <label for="self_salary_avg">שכר ברוטו</label>
                  <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                  <input type="text" class="form-control" name="self_salary_avg" id="self_salary_avg" value="<?php echo $Form->self_salary_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_salary_files_cont">
                  <div class="custom-file" id="self_salary_files">
                    <label class="custom-file-label" for="self_salary_files">שלושה תלושי שכר אחרונים</label>
                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                    <ul class="file-list">
                      <?php  if($Form->self_salary_files != '' || $Form->self_salary_files != NULL){
                  $thefile = json_decode($Form->self_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_salary_files" name="self_salary_files" />
                  </div>
                </div>
              </div>

              <div class="row hidden starthidden employ" id="self_employ_cont">
                <div class="col-md-12 mb-3" id="self_employ_avg_cont">
                  <label for="self_employ_avg">הכנסה שנתית</label>

                  <input type="text" class="form-control" name="self_employ_avg" id="self_employ_avg" value="<?php echo $Form->self_employ_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_employ_files_cont">
                  <div class="custom-file" id="self_employ_files">
                    <label class="custom-file-label" for="self_employ_files">דוח שומה</label>

                    <ul class="file-list">
                      <?php  if($Form->self_employ_files != '' || $Form->self_employ_files != NULL){
                  $thefile = json_decode($Form->self_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_employ_files" name="self_employ_files" />
                  </div>
                </div>
              </div>
              <!-- /taasukati -->
            </div>

            <div class="row hidden" id="mezonot_state_row_cont">
              <div class="col-md-12 mb-3" id="mezonot_state_cont">
                <label for="mezonot">מזונות</label>

                <select name="mezonot_state" id="mezonot_state">
                  <option value="0">יש לבחור ערך</option>
                  <option value="1" <?php echo($Form->mezonot_state == '1' ? 'selected' : '')?>>ללא מזונות</option>
                  <option value="2" <?php echo($Form->mezonot_state == '2' ? 'selected' : '')?>>מקבל מזונות</option>
                  <option value="3" <?php echo($Form->mezonot_state == '3' ? 'selected' : '')?>>נותן מזונות</option>
                </select>
              </div>
              <div class="col-md-12 mb-3" id="mezonot_files_cont">
                <div class="custom-file hidden" id="mezonot_files_div">
                  <label class="custom-file-label" for="mezonot_files">אסמכתא על אי קבלת מזונות</label>

                  <ul class="file-list">
                    <?php  if($Form->mezonot_files != '' || $Form->mezonot_files != NULL){
                  $thefile = json_decode($Form->mezonot_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                  </ul>
                  <input type="file" class="custom-file-input" id="mezonot_files" name="mezonot_files" />
                </div>
              </div>
            </div>


            <div class="row hidden" id="mezonot_height_cont">
              <div class="col-md-12 mb-3" id="mezonot_height_div">
                <label for="mezonot_height">גובה מזונות (חודשי? שנתי?)</label>

                <input type="text" class="form-control" name="mezonot_height" id="mezonot_height" value="<?php echo $Form->mezonot_height; ?>">
              </div>
              <div class="col-md-12 mb-3" id="mezonot_height_files_cont">
                <div class="custom-file" id="mezonot_height_files_div">
                  <label class="custom-file-label" for="mezonot_height_files">אישור גובה מזונות</label>

                  <ul class="file-list">
                    <?php  if($Form->mezonot_height_files != '' || $Form->mezonot_height_files != NULL){
                  $thefile = json_decode($Form->mezonot_height_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                  </ul>
                  <input type="file" class="custom-file-input" id="mezonot_height_files" name="mezonot_height_files" />
                </div>
              </div>
            </div>
          </div>
          <!-- section5 -->
          <div>
            <!-- section6 -->
            <h3>פרטי משפחה</h3>
            <div class="row hidden" id="is_siua_cont">
              <div class="col-md-12 mb-3">
                <label>מקבל סיוע</label>
                <p>סטודנט אשר אינו נתמך על ידי הוריו, עליו לצרף אישור מגורמי רווחה או עו"ד בלבד</p>
                <div class="custom-control custom-radio">
                  <input id="no_siua" value="0" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Form->is_siua == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="no_siua">לא</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="yes_siua" value="1" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Form->is_siua == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="yes_siua">כן</label>
                </div>
              </div>


              <div class="col-md-12 mb-3">
                <div class="custom-file" id="is_siua_file_cont">
                  <label class="custom-file-label" for="is_siua_file">אישור מגורמי הרווחה</label>
                  <p>סטודנט אשר אינו נתמך על ידי הוריו, עליו לצרף אישור מגורמי הרווחה או עו"ד בלבד</p>
                  <ul class="file-list">
                    <?php  if($Form->is_siua_file != '' || $Form->is_siua_file != NULL){
                    //var_dump(unserialize($Form->tzfile));
                    $thefile = json_decode($Form->is_siua_file);
                    $i = 0;
                    foreach($thefile as $filename){
                      
                      echo '
                        <li>
                          <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                        </li>';
                      $i++;
                    }
                }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="is_siua_file" name="is_siua_file" />

                  <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                </div>
              </div>
            </div>

            <div class="taasuka hidden taasuka-parents" id="the-taasuka-cont">
              <div class="row">
                <!-- taasukati  av-->
                <div class="col-md-12 mb-3" id="taasukati_av_state_cont">
                  <label for="taasukati_av_state">מצב תעסוקתי אב</label>
                  <select name="taasukati_av_state" class="taas" id="taasukati_av_state">
                    <option value="0">יש לבחור ערך</option>
                    <option value="1" <?php echo($Form->taasukati_av_state == '1' ? 'selected' : '')?>>שכיר</option>
                    <option value="2" <?php echo($Form->taasukati_av_state == '2' ? 'selected' : '')?>>עצמאי</option>
                    <option value="3" <?php echo($Form->taasukati_av_state == '3' ? 'selected' : '')?>>לא עובד</option>
                  </select>
                </div>
                <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_av_files_cont">
                  <div class="custom-file" id="lo_oved_av_files_div">
                    <label class="custom-file-label" for="lo_oved_av_files">במידה ולא עובד</label>
                    <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                    <ul class="file-list">
                      <?php  if($Form->lo_oved_av_files != '' || $Form->lo_oved_av_files != NULL){
                  $thefile = json_decode($Form->lo_oved_av_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="lo_oved_av_files" name="lo_oved_av_files" />
                  </div>
                </div>
              </div>

              <div class="row salary starthidden" id="self_av_salary">
                <div class="col-md-12 mb-3" id="self_av_salary_avg_cont">
                  <label for="self_av_salary_avg">שכר ברוטו</label>
                  <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                  <input type="text" class="form-control" name="self_av_salary_avg" id="self_av_salary_avg" value="<?php echo $Form->self_av_salary_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_av_salary_files_cont">
                  <div class="custom-file" id="self_av_salary_files_div">
                    <label class="custom-file-label" for="self_av_salary_files">שלושה תלושי שכר אחרונים</label>
                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                    <ul class="file-list">
                      <?php  if($Form->self_av_salary_files != '' || $Form->self_av_salary_files != NULL){
                  $thefile = json_decode($Form->self_av_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_av_salary_files" name="self_av_salary_files" />
                  </div>
                </div>
              </div>

              <div class="row hidden starthidden employ" id="self_av_employ_cont">
                <div class="col-md-12 mb-3" id="self_av_employ_avg_cont">
                  <label for="self_av_employ_avg">הכנסה שנתית</label>

                  <input type="text" class="form-control" name="self_av_employ_avg" id="self_av_employ_avg" value="<?php echo $Form->self_av_employ_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_av_employ_avg_files_cont">
                  <div class="custom-file" id="self_av_employ_avg_files_div">
                    <label class="custom-file-label" for="self_av_employ_files">דוח שומה</label>

                    <ul class="file-list">
                      <?php  if($Form->self_av_employ_files != '' || $Form->self_av_employ_files != NULL){
                  $thefile = json_decode($Form->self_av_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_av_employ_files" name="self_av_employ_files" />
                  </div>
                </div>
              </div>
              <!-- /taasukati av-->
            </div>

            <div class="taasuka hidden taasuka-parents" id="the-taasuka-cont">
              <div class="row">
                <!-- taasukati  em-->
                <div class="col-md-12 mb-3" id="taasukati_em_state_cont">
                  <label for="taasukati_em_state">מצב תעסוקתי אם</label>
                  <select name="taasukati_em_state" class="taas" id="taasukati_em_state">
                    <option value="0">יש לבחור ערך</option>
                    <option value="1" <?php echo($Form->taasukati_em_state == '1' ? 'selected' : '')?>>שכירה</option>
                    <option value="2" <?php echo($Form->taasukati_em_state == '2' ? 'selected' : '')?>>עצמאית</option>
                    <option value="3" <?php echo($Form->taasukati_em_state == '3' ? 'selected' : '')?>>לא עובדת</option>
                  </select>
                </div>
                <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_em_files_cont">
                  <div class="custom-file" id="lo_oved_em_files_div">
                    <label class="custom-file-label" for="lo_oved_em_files">במידה ולא עובד</label>
                    <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                    <ul class="file-list">
                      <?php  if($Form->lo_oved_em_files != '' || $Form->lo_oved_em_files != NULL){
                  $thefile = json_decode($Form->lo_oved_em_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="lo_oved_em_files" name="lo_oved_em_files" />
                  </div>
                </div>
              </div>

              <div class="row salary starthidden" id="self_em_salary">
                <div class="col-md-12 mb-3" id="self_em_salary_avg_cont">
                  <label for="self_em_salary_avg">שכר ברוטו</label>
                  <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                  <input type="text" class="form-control" name="self_em_salary_avg" id="self_em_salary_avg" value="<?php echo $Form->self_em_salary_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_em_salary_files_cont">
                  <div class="custom-file" id="self_em_salary_files_div">
                    <label class="custom-file-label" for="self_em_salary_files">שלושה תלושי שכר אחרונים</label>
                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                    <ul class="file-list">
                      <?php  if($Form->self_em_salary_files != '' || $Form->self_em_salary_files != NULL){
                  $thefile = json_decode($Form->self_em_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_em_salary_files" name="self_em_salary_files" />
                  </div>
                </div>
              </div>

              <div class="row hidden starthidden employ" id="self_em_employ_cont">
                <div class="col-md-12 mb-3" id="self_em_employ_avg_cont">
                  <label for="self_em_employ_avg">הכנסה שנתית</label>

                  <input type="text" class="form-control" name="self_em_employ_avg" id="self_av_employ_avg" value="<?php echo $Form->self_em_employ_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_em_employ_avg_files_cont">
                  <div class="custom-file" id="self_em_employ_avg_files_div">
                    <label class="custom-file-label" for="self_em_employ_files">דוח שומה</label>

                    <ul class="file-list">
                      <?php  if($Form->self_em_employ_files != '' || $Form->self_em_employ_files != NULL){
                  $thefile = json_decode($Form->self_em_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_em_employ_files" name="self_em_employ_files" />
                  </div>
                </div>
              </div>
              <!-- /taasukati em -->
            </div>

            <div class="taasuka hidden taasuka-zug" id="the-taasuka-zug">
              <div class="row">
                <!-- taasukati  bat/benzug-->
                <div class="col-md-12 mb-3" id="taasukati_zug_state_cont">
                  <label for="taasukati_zug_state">מצב תעסוקתי בן/בת זוג</label>
                  <select name="taasukati_zug_state" class="taas" id="taasukati_zug_state">
                    <option value="0">יש לבחור ערך</option>
                    <option value="1" <?php echo($Form->taasukati_zug_state == '1' ? 'selected' : '')?>>שכירה</option>
                    <option value="2" <?php echo($Form->taasukati_zug_state == '2' ? 'selected' : '')?>>עצמאית</option>
                    <option value="3" <?php echo($Form->taasukati_zug_state == '3' ? 'selected' : '')?>>לא עובדת</option>
                  </select>
                </div>
                <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_zug_files_cont">
                  <div class="custom-file" id="lo_oved_zug_files_div">
                    <label class="custom-file-label" for="lo_oved_zug_files">במידה ולא עובד</label>
                    <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                    <ul class="file-list">
                      <?php  if($Form->lo_oved_zug_files != '' || $Form->lo_oved_zug_files != NULL){
                  $thefile = json_decode($Form->lo_oved_zug_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="lo_oved_zug_files" name="lo_oved_zug_files" />
                  </div>
                </div>
              </div>

              <div class="row salary starthidden" id="self_zug_salary">
                <div class="col-md-12 mb-3" id="self_zug_salary_avg_cont">
                  <label for="self_zug_salary_avg">שכר ברוטו</label>
                  <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                  <input type="text" class="form-control" name="self_zug_salary_avg" id="self_zug_salary_avg" value="<?php echo $Form->self_zug_salary_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_zug_salary_files_cont">
                  <div class="custom-file" id="self_zug_salary_files_div">
                    <label class="custom-file-label" for="self_zug_salary_files">שלושה תלושי שכר אחרונים</label>
                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                    <ul class="file-list">
                      <?php  if($Form->self_zug_salary_files != '' || $Form->self_zug_salary_files != NULL){
                  $thefile = json_decode($Form->self_zug_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_zug_salary_files" name="self_zug_salary_files" />
                  </div>
                </div>
              </div>

              <div class="row hidden starthidden employ" id="self_zug_employ_cont">
                <div class="col-md-12 mb-3" id="self_zug_employ_avg_cont">
                  <label for="self_zug_employ_avg">הכנסה שנתית</label>

                  <input type="text" class="form-control" name="self_zug_employ_avg" id="self_zug_employ_avg" value="<?php echo $Form->self_zug_employ_avg; ?>">
                </div>
                <div class="col-md-12 mb-3" id="self_zug_employ_avg_files_cont">
                  <div class="custom-file" id="self_zug_employ_avg_files_div">
                    <label class="custom-file-label" for="self_zug_employ_files">דוח שומה</label>

                    <ul class="file-list">
                      <?php  if($Form->self_zug_employ_files != '' || $Form->self_zug_employ_files != NULL){
                  $thefile = json_decode($Form->self_zug_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                    </ul>
                    <input type="file" class="custom-file-input" id="self_zug_employ_files" name="self_zug_employ_files" />
                  </div>
                </div>
              </div>
              <!-- /taasukati bat zug-->
            </div>
          </div>
          <!-- section6 -->
          <div class="row starthidden" id="children_cont">
            <!-- section7 -->
            <div class="col-md-12 mb-3" id="self_children_cont">
              <label for="self_children" id="self_children_cont_label">

              </label>

              <input type="text" class="form-control" name="self_children" id="self_children" value="<?php echo $Form->self_children; ?>">
            </div>
            <div class="col-md-12 mb-3" id="self_children_files_cont">
              <div class="custom-file" id="self_children_files_div">
                <label class="custom-file-label" for="self_children_files">חייב בהעלאת קובץ ספח תעודות זהות</label>

                <ul class="file-list">
                  <?php  if($Form->self_children_files != '' || $Form->self_children_files != NULL){
                  $thefile = json_decode($Form->self_children_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                      </li>';
                    $i++;
                  }
                }; ?>
                </ul>
                <input type="file" class="custom-file-input" id="self_children_files" name="self_children_files" />
              </div>
            </div>
          </div>
          <!-- section7 -->
          <div class="row starthidden" id="soldier_cont">
            <!-- section8 -->
            <div class="col-md-12 mb-3" id="self_soldier_cont">
              <label for="self_soldier" id="self_soldier_cont_label">

              </label>
              <p>במידה ואין להשאיר ריק</p>
              <input type="text" class="form-control" name="self_soldier" id="self_soldier" value="<?php echo $Form->self_soldier; ?>">
            </div>
            <div class="col-md-12 mb-3" id="self_soldier_files_cont">
              <div class="custom-file" id="self_soldier_files_div">
                <label class="custom-file-label" for="self_soldier_files">
                  חייב בהעלאת קובץ תעודת חוגר/קצין
                </label>

                <ul class="file-list">
                  <?php  if($Form->self_soldier_files != '' || $Form->self_soldier_files != NULL){
                        $thefile = json_decode($Form->self_soldier_files);
                        $i = 0;
                        foreach($thefile as $filename){
                        echo '
                            <li>
                            <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                            <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                            </li>';
                        $i++;
                        }
                    }; ?>
                </ul>
                <input type="file" class="custom-file-input" id="self_soldier_files" name="self_soldier_files" />
              </div>
            </div>
          </div>
          <!-- section8 -->
          <div class="row starthidden" id="student_cont">
            <!-- section9 -->
            <div class="col-md-12 mb-3" id="self_student_cont">
              <label for="self_student" id="self_student_cont_label">

              </label>

              <input type="text" class="form-control" name="self_student" id="self_student" value="<?php echo $Form->self_student; ?>">
            </div>
            <div class="col-md-12 mb-3" id="self_student_files_cont">
              <div class="custom-file" id="self_student_files_div">
                <label class="custom-file-label" for="self_student_files">
                  אם כן חייב בהעלאת אישור לימודים
                </label>

                <ul class="file-list">
                  <?php  if($Form->self_student_files != '' || $Form->self_student_files != NULL){
                $thefile = json_decode($Form->self_student_files);
                $i = 0;
                foreach($thefile as $filename){
                echo '
                    <li>
                    <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                    <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                    </li>';
                $i++;
                }
            }; ?>
                </ul>
                <input type="file" class="custom-file-input" id="self_student_files" name="self_student_files" />
              </div>
            </div>
          </div>
          <!-- section9 -->

          <div>
            <!--section 10 -->
            <div class="row" id="is_social_harig">
              <div class="col-md-12 mb-3">
                <label>מצב סוציאלי חריג</label>
                <div class="custom-control custom-radio">


                  <input id="no_social_harig" value="0" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Form->social_harig == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="no_social_harig">לא</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="yes_social_harig" value="1" name="social_harig" type="radio" checked class="custom-control-input ff" <?php echo($Form->social_harig == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="yes_social_harig">כן</label>
                </div>
              </div>


              <div class="col-md-12 mb-3">
                <div class="custom-file" id="social_harig_file_cont">
                  <label class="custom-file-label" for="social_harig_file">אישור מצב סוציאלי חריג</label>
                  <p>למצבים סוציאלים חריגים עליך לצרף אישור רלוונטי- דו"ח סוציאלי או מסמך של רשויות הרווחה</p>
                  <ul class="file-list">
                    <?php  if($Form->social_harig_file != '' || $Form->social_harig_file != NULL){
                    //var_dump(unserialize($Form->tzfile));
                    $thefile = json_decode($Form->social_harig_file);
                    $i = 0;
                    foreach($thefile as $filename){
                      
                      echo '
                        <li>
                          <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                        </li>';
                      $i++;
                    }
                }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="social_harig_file" name="social_harig_file" />

                  <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                </div>
              </div>
            </div>

            <div class="row" id="is_medical_harig">
              <div class="col-md-12 mb-3">
                <label>מצב רפואי חריג סטודנט</label>
                <div class="custom-control custom-radio">


                  <input id="no_medical_harig" value="0" name="medical_harig" type="radio" class="custom-control-input ff" <?php echo($Form->medical_harig == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="no_medical_harig">לא</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="yes_medical_harig" value="1" name="medical_harig" type="radio" checked class="custom-control-input ff" <?php echo($Form->medical_harig == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="yes_medical_harig">כן</label>
                </div>
              </div>


              <div class="col-md-12 mb-3">
                <div class="custom-file" id="medical_harig_file_cont">
                  <label class="custom-file-label" for="medical_harig_file">אישור מצב רפואי חריג</label>
                  <p>למצבים רפואיים חריגים עליך לצרף מסמך מרופא מומחה</p>
                  <ul class="file-list">
                    <?php  if($Form->medical_harig_file != '' || $Form->medical_harig_file != NULL){
                    //var_dump(unserialize($Form->tzfile));
                    $thefile = json_decode($Form->medical_harig_file);
                    $i = 0;
                    foreach($thefile as $filename){
                      
                      echo '
                        <li>
                          <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                        </li>';
                      $i++;
                    }
                }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="medical_harig_file" name="medical_harig_file" />

                  <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                </div>
              </div>
            </div>

            <div class="row" id="is_family_harig">
              <div class="col-md-12 mb-3">
                <label>
                  מצב רפואי חריג בן משפחה
                </label>
                <div class="custom-control custom-radio">


                  <input id="no_family_harig" value="0" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Form->family_harig == '0' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="no_family_harig">לא</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="yes_family_harig" value="1" name="family_harig" type="radio" checked class="custom-control-input ff" <?php echo($Form->family_harig == '1' ? 'checked' : '' ); ?>>
                  <label class="custom-control-label" for="yes_family_harig">כן</label>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="custom-file" id="family_harig_file_cont">
                  <label class="custom-file-label" for="family_harig_file">אישור מצב רפואי חריג בן משפחה</label>
                  <p>במידה ומי מבני משפחתך הקרובה בעל מצב רפואי חריג יש לצרף מסמכים מרופא מומחה</p>
                  <ul class="file-list">
                    <?php  if($Form->family_harig_file != '' || $Form->family_harig_file != NULL){
                      //var_dump(unserialize($Form->tzfile));
                      $thefile = json_decode($Form->family_harig_file);
                      $i = 0;
                      foreach($thefile as $filename){
                        
                        echo '
                          <li>
                            <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                            <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                          </li>';
                        $i++;
                      }
                  }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="family_harig_file" name="family_harig_file" />

                  <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                </div>
              </div>
            </div>

            <div class="row" id="explanation">
              <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="explanation"> נימוק בקשה לסיוע:</label>
                    <textarea class="form-control" name="explanation" rows="5" id="explanation" ><?php echo $Form->explanation; ?></textarea>
                  </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="custom-file" id="explanation_file_cont">
                  <label class="custom-file-label" for="explanation_file">ניתן לצרף מכתב נלווה</label>
                  <ul class="file-list">
                    <?php  if($Form->explanation_file != '' || $Form->explanation_file != NULL){
                      //var_dump(unserialize($Form->tzfile));
                      $thefile = json_decode($Form->explanation_file);
                      $i = 0;
                      foreach($thefile as $filename){
                        
                        echo '
                          <li>
                            <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                            <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                          </li>';
                        $i++;
                      }
                  }; ?>

                  </ul>


                  <input type="file" class="custom-file-input" id="explanation_file" name="explanation_file" />


                </div>
              </div>
            </div>
          </div>
          <!--/section 10 -->
          <div>
            <input type="hidden" name="year" class="form-control" id="year" autocomplete='given-year' placeholder="" required="" value="<?php echo $year; ?>"
              readonly>
            <input type="hidden" name="submitted" class="form-control" id="submitted" placeholder="" required="" value="1" readonly>
          </div>
          <input type="submit" name="submit" class="btn-lg btn-success" value="הגשת טופס" id="submitbtn">
          <input type="submit" name="save" class="btn-lg btn-info" value="שמירת נתונים" id="savebtn">
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">המכללה האקדמית אחוה</p>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="./vendors/parsleyjs/dist/parsley.js"></script>
    <script src="./vendors/parsleyjs/dist/i18n/he.js"></script>
    <script src="./vendors/parsleyjs/dist/i18n/he.extra.js"></script>


    <script src="./api/js/js.js"></script>
    <script src="./api/js/fileupload.js"></script>
    <script src="./api/js/removefile.js"></script>


    <script>
      $('#studentForm').parsley();
    </script>


  </body>

  </html>