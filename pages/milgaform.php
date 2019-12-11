<?php


     $headers = apache_request_headers();
        //Build the Session vars
        //$_SESSION['TITLE'] = $headers['X-TITLE'];	
        
//        $_SESSION['SSO-GIVENNAME'] = $headers['X-family-name'];		//The user's first name By the IDM
//        $_SESSION['SSO-SURNAME'] = $headers['X-first-name'];			//The user's last name By the IDM
//        $_SESSION['SSO-ID'] = $headers['X-tz'];



$_SESSION['SSO-GIVENNAME'] = 'sev';		//The user's first name By the IDM
$_SESSION['SSO-SURNAME'] = 'dav';			//The user's last name By the IDM
$_SESSION['SSO-ID'] = '123123123';

	$browser = get_browser(null, true);



    $tz = $_SESSION['SSO-ID'];

    if(isset( $_SESSION['SSO-SURNAME'])){
        $fname =  $_SESSION['SSO-SURNAME'] ;
    };

    if(isset($_SESSION['SSO-GIVENNAME'])){
        $lname = $_SESSION['SSO-GIVENNAME'];
    };

    // $tz = 321321321;

   
    //     $fname =  'dav' ;
    
    //     $lname = 'sev';
    

$year = 2018;
require '../api/inc.php';

$Form =new Form($db,$tz, $year);


//this session is used to show the user the submission id 
$_SESSION['id'] = $Form->id; 
// echo $Form->id;
//if form was submitted by the student he will be redirected to the thankyoupage
$Form->is_submitted();

//check if the user already is in the database
$thedata = $Form->dataExist($tz,$year);
// echo '<pre style="direction: ltr">s'. $thedata .'</pre> ';
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
    'gender' => (isset($_POST['gender']) ? $_POST['gender'] : ''),
    'birth_country' => $_POST['birth_country'],
    'city' => $_POST['city'],
    'email' => $_POST['email'],
    'family_state' => $_POST['family_state'],
    'isalone' => (isset($_POST['isalone']) ? $_POST['isalone'] : ''),
    'study_field' => $_POST['study_field'],
    'study_year' => $_POST['study_year'],
    'asked_schol' => (isset($_POST['asked_schol']) ? $_POST['asked_schol'] : ''),
    'received_schol' => (isset($_POST['received_schol']) ? $_POST['received_schol'] : ''),
    'is_lochem' => $_POST['is_lochem'],
    'is_army' => $_POST['is_army'],
    'length_army' => $_POST['length_army'],
    'is_army_ptor' => $_POST['is_army_ptor'],
    'is_miluim' => $_POST['is_miluim'],
    'mimun_nosaf' => (isset($_POST['mimun_nosaf']) ? $_POST['mimun_nosaf'] : ''),
    'taasukati_state' => $_POST['taasukati_state'],
    'self_salary_avg' => $_POST['self_salary_avg'],
    'self_employ_avg' => $_POST['self_employ_avg'],
    'lo_oved_self_avg' => (isset($_POST['lo_oved_self_avg']) ? $_POST['lo_oved_self_avg'] : ''),

    'self_av_lo_oved_avg' => (isset($_POST['self_av_lo_oved_avg']) ? $_POST['self_av_lo_oved_avg'] : ''),
    'self_em_lo_oved_avg' => (isset($_POST['self_em_lo_oved_avg']) ? $_POST['self_em_lo_oved_avg'] : ''),
    'self_zug_lo_oved_avg' => (isset($_POST['self_zug_lo_oved_avg']) ? $_POST['self_zug_lo_oved_avg'] : ''),
    'mezonot_state' => $_POST['mezonot_state'],
    'mezonot_height' => $_POST['mezonot_height'],
    'is_siua' => (isset($_POST['is_siua']) ? $_POST['is_siua'] : ''),
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
    'self_soldier' => (isset($_POST['self_soldier']) ? $_POST['self_soldier'] : ''),
    'self_student' => (isset($_POST['self_student']) ? $_POST['self_student'] : ''),
    'social_harig' => (isset($_POST['social_harig']) ? $_POST['social_harig'] : ''),
    'family_harig' => (isset($_POST['family_harig']) ? $_POST['family_harig'] : ''),
    'medical_harig' => (isset($_POST['medical_harig']) ? $_POST['medical_harig'] : ''),
    'explanation' => $_POST['explanation'],
    
    'tzfile_cb' => (isset($Form->tzfile_cb) ?  $Form->tzfile_cb : ''),
    'isalonefile_cb' => (isset($Form->isalonefile_cb) ?  $Form->isalonefile_cb : ''),
    'islochemfile_cb' => (isset($Form->islochemfile_cb) ?  $Form->islochemfile_cb : ''),
    'is_army_ptor_file_cb' => (isset($Form->is_army_ptor_file_cb) ?  $Form->is_army_ptor_file_cb : ''),
    'is_miluim_file_cb' => (isset($Form->is_miluim_file_cb) ?  $Form->is_miluim_file_cb : ''),
    'lo_oved_files_cb' => (isset($Form->lo_oved_files_cb) ?  $Form->lo_oved_files_cb : ''),
    'self_salary_files_cb' => (isset($Form->self_salary_files_cb) ?  $Form->self_salary_files_cb : ''),
    'self_employ_files_cb' => (isset($Form->self_employ_files_cb) ?  $Form->self_employ_files_cb : ''),
    'mezonot_files_cb' => (isset($Form->mezonot_files_cb) ?  $Form->mezonot_files_cb : ''),
    'mezonot_height_files_cb' => (isset($Form->mezonot_height_files_cb) ?  $Form->mezonot_height_files_cb : ''),
    'is_siua_file_cb' => (isset($Form->is_siua_file_cb) ?  $Form->is_siua_file_cb : ''),
    'lo_oved_av_files_cb' => (isset($Form->lo_oved_av_files_cb) ?  $Form->lo_oved_av_files_cb : ''),
    'self_av_salary_files_cb' => (isset($Form->self_av_salary_files_cb) ?  $Form->self_av_salary_files_cb : ''),
    'self_av_employ_files_cb' => (isset($Form->self_av_employ_files_cb) ?  $Form->self_av_employ_files_cb : ''),
    'lo_oved_em_files_cb' => (isset($Form->lo_oved_em_files_cb) ?  $Form->lo_oved_em_files_cb : ''),
    'self_em_salary_files_cb' => (isset($Form->self_em_salary_files_cb) ?  $Form->self_em_salary_files_cb : ''),
    'self_em_employ_files_cb' => (isset($Form->self_em_employ_files_cb) ?  $Form->self_em_employ_files_cb : ''),
    'lo_oved_zug_files_cb' => (isset($Form->lo_oved_zug_files_cb) ?  $Form->lo_oved_zug_files_cb : ''),
    'self_zug_employ_files_cb' => (isset($Form->self_zug_employ_files_cb) ?  $Form->self_zug_employ_files_cb : ''),
    'self_children_files_cb' => (isset($Form->self_children_files_cb) ?  $Form->self_children_files_cb : ''),
    'self_soldier_files_cb' => (isset($Form->self_soldier_files_cb) ?  $Form->self_soldier_files_cb : ''),
    'self_student_files_cb' => (isset($Form->self_student_files_cb) ?  $Form->self_student_files_cb : ''),
    'social_harig_file_cb' => (isset($Form->social_harig_file_cb) ?  $Form->social_harig_file_cb : ''),
    'medical_harig_file_cb' => (isset($Form->medical_harig_file_cb) ?  $Form->medical_harig_file_cb : ''),
    'family_harig_file_cb' => (isset($Form->family_harig_file_cb) ?  $Form->family_harig_file_cb : ''),
   
    'reject_exp' => (isset($Form->reject_exp) ?  $Form->reject_exp : '')

  );



  $meida = json_encode($datas);
  //properties retrived by consructor
  $Form->tz = $tz;
  $Form->year = $year;
  $Form->browser = $browser;
  $Form->datas = serialize($datas);
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
  $Form->lo_oved_self_avg = $datas['lo_oved_self_avg'];
  $Form->self_av_lo_oved_avg = $datas['self_av_lo_oved_avg'];
  $Form->self_em_lo_oved_avg = $datas['self_em_lo_oved_avg'];
  $Form->self_zug_lo_oved_avg = $datas['self_zug_lo_oved_avg'];
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
    $date_submitted = $_POST['date_submitted'];
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
      'received_schol' => (isset($_POST['received_schol']) ? $_POST['received_schol'] : '0'), 
      'is_lochem' => $_POST['is_lochem'],
      'is_army' => $_POST['is_army'],
      'length_army' => $_POST['length_army'],
      'is_army_ptor' => $_POST['is_army_ptor'],
      'is_miluim' => $_POST['is_miluim'],
      'mimun_nosaf' => $_POST['mimun_nosaf'],
      'taasukati_state' => $_POST['taasukati_state'],
      'self_salary_avg' => $_POST['self_salary_avg'],
      'self_employ_avg' => $_POST['self_employ_avg'],
      'lo_oved_self_avg' => $_POST['lo_oved_self_avg'],
      'self_av_lo_oved_avg' => (isset($_POST['self_av_lo_oved_avg']) ? $_POST['self_av_lo_oved_avg'] : ''),
        'self_em_lo_oved_avg' => (isset($_POST['self_em_lo_oved_avg']) ? $_POST['self_em_lo_oved_avg'] : ''),
        'self_zug_lo_oved_avg' => (isset($_POST['self_zug_lo_oved_avg']) ? $_POST['self_zug_lo_oved_avg'] : ''),
  
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
      
    
    );


    $meida = json_encode($datas);
    //properties retrived by consructor
    $Form->tz = $tz;
    $Form->year = $year;
    $Form->submitted = $submitted;
    $Form->date_submitted = $date_submitted;
    
    // $Form->datas = $meida;

    $Form->datas = serialize($datas);


    if(!empty($thedata)){
         //if the data is already in the database retrive and update on save
       
        $Form->update();
        
     }else{
       
        $Form->create();

    };

    $Form->is_submitted();

};

?>
    <!DOCTYPE html>
    <html>

    <head lang="he">

        <title>טופס בקשה למלגת דיקן – מלגה סוציו אקונומית לתואר ראשון</title>

        <link rel="stylesheet" href="../vendors/parsleyjs/dist/parsley.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <?php include 'head.php'; ?>


    </head>







    <!-- new page -->
    <!-- new page -->
    <!-- new page -->


<?php
 //     $headers = apache_request_headers();
    //     //Build the Session vars
    //     //$_SESSION['TITLE'] = $headers['X-TITLE'];	
        
    //     $_SESSION['SSO-GIVENNAME'] = $headers['X-first-name'];		//The user's first name By the IDM
    //     $_SESSION['SSO-SURNAME'] = $headers['X-family-name'];			//The user's last name By the IDM
    //     $_SESSION['SSO-ID'] = $headers['X-tz'];	

    ?>
    <body class="nav-md">

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">

                    <!-- side nav -->
                    <!-- side nav -->
                   
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title">
                                <img src="../assets/images/logow.png" class="dash-logo" alt="">
                                <span>מערכת טפסים אחוה</span>
                            </a>
                        </div>
                        <br />
                        <br />
                        <br />
                        <h2 class="achva-sub-title">טופס בקשה למלגות דיקן</h2>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->

                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="arial main_menu_side hidden-print main_menu">
                            <div class="menu_section">

                                <ul id="anchor-menu">
                                    <li>
                                        <a href="#explanation"  class="glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">הסבר </span>
                                           
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#personal-details" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">פרטים אישיים </span>
                                           
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#current-academic-year" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">לימודים אקדמיים בשנה"ל הנוכחית </span>
                              
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#army-panel" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">שרות צבאי </span>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#additional-funds" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">מימון נוסף </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#income" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">הכנסה </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#family-income" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">הכנסה- פרטי משפחה </span>
                                          
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#kids-bros" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">ילדים / אחים מתחת לגיל 18 </span>
                                          
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#add-info" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">מידע נוסף </span>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#req-files" class="white glyphicon glyphicon-menu-left" aria-hidden="true">
                                                <span class="">צרוף קבצים </span>
                                          
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                    </div>

                    <!-- side nav -->
                    <!-- side nav -->

                </div>



                <!-- page content -->
                <div class="right_col" role="main">


                    <div class="row" id="main-cont">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>

                                <div class="row x_title">
                                    <div class="col-md-12">
                                        <h2>טופס בקשה למלגת דיקן – מלגה סוציו אקונומית לתואר ראשון</h2>
                                    </div>
                                </div>
                                <blockquote class="message">
                                    <p> תאריך אחרון להגשה: 31.10.2018
                                        <br /> תשובה תשלח בדואר כחודשיים לאחר תחילת שנת הלימודים
                                    </p>
<p>
סטודנטים יקרים , <br />
מלגת הדיקן ניתנת כסיוע לסטודנטים עם קושי כלכלי<br />
המלגה תיבחן על ידי ועדת מלגות שתתכנס במהלך חודש ינואר <br />
שנת לימודים פוריה ומוצלחת<br />
דיקן הסטודנטים

</p>
                                </blockquote>
                            </div>

                        </div>




                   
                        <div class="col-sm-8 col-xs-12">
                            <form action="" id="studentForm" method="POST" class="needs-validation" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'];?>">


                                <div class="x_panel" id="explanation">
                                    <div class="x_title">
                                        <h2>הסבר <label class="glyphicon glyphicon-menu-down" aria-hidden="true"></label> </h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" style="display: none;" id="explanation-content">
                                        <div class="row">
                                      
                                        <p class="bluetext">
                                            לנוחיותך, מצורפת רשימת מסמכים נדרשים.
                                            <br /> לתשומת ליבך: סטודנט רווק יצרף מסמכי הורים ואחים, סטודנט נשוי יצרף מסמכי בת זוג וילדים.
                                            <br /> מומלץ לוודא שיש ברשותך מסמכים נדרשים לפני תחילת התהליך.
                                            <br /> טופס בקשה אשר יוגש ללא כל המסמכים הנדרשים לא יקלט במערכת ולא יטופל.
                                        </p>
                                        <table class="table table-bordered" id="doctable">
                                        <tr>
                                            <td>1</td>
                                            <td>ת.ז</td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>אישור הכרה כחייל בודד</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>פטור משירות צבאי מסיבה רפואית </td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>אישור שרות מילואים פעיל </td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                תעודת לוחם / תומך לחימה
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                            במידה ואינך מקבל סיוע מהוריך, עליך לצרף אישור על כך: תצהיר עם חתימה גורם רווחה / עו"ד המעיד שאינך מקבל סיוע.

                                        </tr>
                                        <td>7</td>
                                        <td>
                                            שלושה תלושי שכר אחרונים
                                        </td>

                                        </tr>
                                        </tr>
                                        <td>8</td>
                                        <td>
                                            דוח שומה לשנת מס נוכחית
                                        </td>


                                        </tr>
                                        </tr>
                                        <td>9</td>
                                        <td>
                                            אישור מעמד לא עובד – ביטוח לאומי
                                        </td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>
                                                <ul>
                                                    <li>אישור גובה מזונות</li>
                                                    <li>אסמכתא על אי קבלת מזונות</li>
                                                </ul>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>ספח ת.ז
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>תעודת חוגר / קצין
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>אישור לימודים במוסד להשכלה גבוהה
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>למצבים סוציאליים חריגים עליך לצרף אישור רלוונטי - דו"ח סוציאלי או מסמך של רשויות
                                                הרווחה
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>
                                                במידה ואתה או בני משפחתך הינם בעלי מצב רפואי חריג, יש להביא מסמכים מרופא מומחה
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>
                                                נימוק בקשה לסיוע - ניתן לצרף מכתב נלווה </td>

                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" id="personal-details">
                                    <div class="x_title">
                                        <h2>פרטים אישיים</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label for="fname">שם פרטי
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="text" name="fname" class="form-control" id="fname" autocomplete='first-name' readonly placeholder="" required="" value="<?php echo $fname ; ?>">


                                            </div>
                                            <div class="col-md-4 col-md-pull-2  col-sm-12 mb-3">
                                                <label for="lname">שם משפחה
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="text" name="lname" class="form-control" id="lname" readonly placeholder="" required="" value="<?php echo $lname; ?>"
                                                    autocomplete='family-name'>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">
                                                <label for="tz">תעודת זהות
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="text" name="tz" class="form-control" id="tz" autocomplete='tz' placeholder="" required="" value="<?php echo $tz; ?>"
                                                    readonly>

                                            </div>
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3" id="family_state_cont">
                                                <label for="family_state">מצב משפחתי</label>

                                                <select name="family_state" class="ff form-control" id="family_state" required="">
                                                    <option value="">יש לבחור ערך</option>
                                                    <option value="1" <?php echo($Form->family_state == '1' ? 'selected' : '')?>>רווק</option>
                                                    <option value="2" <?php echo($Form->family_state == '2' ? 'selected' : '')?>>נשוי</option>
                                                    <option value="3" <?php echo($Form->family_state == '3' ? 'selected' : '')?>>גרוש</option>
                                                    <option value="4" <?php echo($Form->family_state == '4' ? 'selected' : '')?>>אלמן</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label for="birth_country">ארץ לידה
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="text" name="birth_country" class="form-control" id="birth_country" placeholder="" required="" value="<?php echo $Form->birth_country; ?>"
                                                    autocomplete="birth_country">

                                            </div>
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">
                                                <label for="city">ישוב מגורים
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="text" name="city" class="form-control" id="city" placeholder="" required="" value="<?php echo $Form->city; ?>"
                                                    autocomplete="city">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">


                                                <label for="cellular">טלפון נייד
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="text" name="cellular" class="form-control" id="cellular" placeholder="" required="" value="<?php echo $Form->cellular; ?>"
                                                    autocomplete="cellular">
                                            </div>
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label for="email">דואר אלקטרוני</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="" value="<?php echo $Form->email; ?>" autocomplete="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12">

                                                <label>מין<span class="red">*</span></label>
                                                <p>
                                                    <input id="female" name="gender" value="0" type="radio" class="xxx" <?php echo 'gender='.$Form->gender; ?>
                                                    <?php echo($Form->gender == '0' ?  'checked' : '' ); ?> required="">
                                                    <label class="custom-control-label" for="female">נקבה</label>


                                                    <input id="male" name="gender" value="1" type="radio" class="xxx" <?php echo($Form->gender == '1' ? 'checked' : '' ); ?> required="">
                                                    <label class="custom-control-label" for="male">זכר</label>
                                                </p>


                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">
                                                <label>בודד בארץ<span class="red">*</span></label>

                                                <p>
                                                    <input id="alone" value="בודד" name="isalone" type="radio" class="xxx" required="" <?php echo($Form->isalone == 'בודד' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">בודד בארץ</label>

                                                    <input id="notalone" value="לא בודד" name="isalone" type="radio" class="xxx" required="" <?php echo($Form->isalone == 'לא בודד' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא בודד</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel" id="current-academic-year">
                                    <div class="x_title">
                                        <h2>לימודים אקדמיים בשנה"ל הנוכחית</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">

                                            <!-- <label for="study-field">תחום לימודים</label>
                                                <select class="custom-select" name="study_field" id="study-field"> -->
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="study-field">תחום לימודים<span class="red">*</span></label>
                                                </div>
                                                <select class=" form-control" name="study_field" id="study-field" required>

                                                    <option value="">נא לבחור ערך</option>
                                                    <?php $Form->get_study_field(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="study_year">שנת לימודים<span class="red">*</span></label>
                                                </div>


                                                <select class=" form-control" name="study_year" id="study_year" required="">
                                                    <option value="">נא לבחור ערך</option>
                                                    <option value="1" <?php echo($Form->study_year == 1 ? 'selected' : '')?>>א</option>
                                                    <option value="2" <?php echo($Form->study_year == 2 ? 'selected' : '')?>>ב</option>
                                                    <option value="3" <?php echo($Form->study_year == 3 ? 'selected' : '')?>>ג</option>
                                                    <option value="4" <?php echo($Form->study_year == 4 ? 'selected' : '')?>>ד</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12">
                                                <label>האם בקשת בעבר מלגת דיקן<span class="red">*</span></label>
                                                <p>
                                                <input id="not_asked_schol" value="0" name="asked_schol" type="radio" class="" required="" <?php echo($Form->asked_schol == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="not_asked_schol">לא</label>
                                               

                                                    <input id="asked_schol" value="1" name="asked_schol" type="radio" class="" required="" <?php echo($Form->asked_schol == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="asked_schol">כן</label>


 </p>
                                            </div>
                                        </div>
                                        <div class="row" id="asked-schol-div">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12">
                                                <div>
                                                    <label>האם קיבלת בעבר מלגת דיקן<span class="red">*</span></label>
                                                    <p>
                                                    <input id="not_received_schol" value="0" name="received_schol" type="radio" class="xxx" <?php echo($Form->received_schol == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="not_received_schol">לא</label>

                                                        <input id="received_schol" value="1" name="received_schol" type="radio" class="xxx" <?php echo($Form->received_schol == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="received_schol">כן</label>


                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel" id="army-panel">
                                    <div class="x_title">
                                        <h2>שרות צבאי</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <label for="is_army">סוג השירות<span class="red">*</span></label>
                                                <select class="form-control" name="is_army" id="is_army" required>
                                                    <option value="">יש לבחור ערך</option>
                                                    <option value="צבאי" <?php echo($Form->is_army == 'צבאי' ? 'selected' : '')?>>צבאי</option>
                                                    <option value="לאומי" <?php echo($Form->is_army == 'לאומי' ? 'selected' : '')?>>לאומי</option>
                                                    <option value="ללא" <?php echo($Form->is_army == 'ללא' ? 'selected' : '')?>>ללא</option>
                                                </select>
                                            </div>

                                            <div class="col-md-8 col-md-pull-2 col-sm-12 army" id="length_army">
                                                <label for="length_army">משך השירות בחודשים<span class="red">*</span></label>
                                                <input type="text" name="length_army" class="form-control" value="<?php echo $Form->length_army; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 hidden" id="is_lochem">
                                                <label>לוחם/ת או תומך/ת לחימה<span class="red">*</span></label>

                                                <p>
                                                <input id="lo_lochem" name="is_lochem" value="0" type="radio" class="xxx" required="" <?php echo($Form->is_lochem == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="lo_lochem">לא</label>

                                                    <input id="lochem" name="is_lochem" value="1" type="radio" class="xxx" required="" <?php echo($Form->is_lochem == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="lochem">כן</label>


                                                </p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12" id="miluim_pail">
                                                <label>שירות מילואים פעיל<span class="red">*</span></label>

                                                <p>
                                                <input id="lo_miluim" name="is_miluim" value="0" type="radio" class="xxx" required="" <?php echo($Form->is_miluim == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="lo_miluim">לא</label>

                                                    <input id="is_miluim" name="is_miluim" value="1" type="radio" class="xxx" required="" <?php echo($Form->is_miluim == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="is_miluim">כן</label>


                                                </p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden" id="army_ptor">
                                                <label>פטור משירות מסיבה רפואית בלבד<span class="red">*</span></label>

                                                <p>
                                                <input id="is_army_no_ptor" name="is_army_ptor" value="0" type="radio" class="xxx" required="" <?php echo($Form->is_army_ptor == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="is_army_no_ptor">לא</label>

                                                    <input id="is_army_ptor" name="is_army_ptor" value="1" type="radio" class="xxx" required="" <?php echo($Form->is_army_ptor == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="is_army_ptor">כן</label>


                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- /xpanel -->

                                <div class="x_panel" id="additional-funds">
                                    <div class="x_title">
                                        <h2>מימון נוסף</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mimun_nosaf">
                                                <label>בשנת הלימודים הנוכחית אקבל השתתפות במימון לימודי על ידי גוף כלשהו<span class="red">*</span></label>
                                                <p>
                                                <input id="lo_mimun_nosaf" name="mimun_nosaf" value="0" type="radio" class="custom-control-input" required="" <?php echo($Form->mimun_nosaf == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="lo_mimun_nosaf">לא</label>

                                                    <input id="mimun_nosaf" name="mimun_nosaf" value="1" type="radio" class="custom-control-input" required="" <?php echo($Form->mimun_nosaf == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="mimun_nosaf">כן</label>


                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel" id="income">
                                    <div class="x_title">
                                        <h2>הכנסה</h2>
                                        <div class="clearfix"></div>

                                    </div>
                                    <p>יש לציין כי המכללה האקדמית אחוה מעודדת סטודנט לעבודה והשתכרות אישית ואינה מונעת קבלת
                                        מלגה מסטודנט עובד.</p>

                                    <div class="x_content">

                                        <div class="taasuka">
                                            <div class="row">
                                                <!-- taasukati -->

                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_state_cont">
                                                    <label for="taasukati_state">מצב תעסוקתי<span class="red">*</span></label>
                                                    <select name="taasukati_state" class="taas form-control" id="taasukati_state" required>
                                                        <option value="">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                        <option value="2" <?php echo($Form->taasukati_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                        <option value="3" <?php echo($Form->taasukati_state == '3' ? 'selected' : '')?>>לא עובד/קצבה</option>
                                                    </select>
                                                </div>

                                                
                                            </div>

                                            <div class="row salary starthidden salary-taasukati_state" id="self_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 " id="self_salary_avg_cont">
                                                    <label for="self_salary_avg">שכר ברוטו<span class="red">*</span></label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_salary_avg" id="salary_avg-taasukati_state" value="<?php echo $Form->self_salary_avg; ?>">
                                                </div>

                                            </div>

                                            <div class="row starthidden employ-taasukati_state" id="self_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_employ_avg_cont">
                                                    <label for="self_employ_avg">הכנסה שנתית<span class="red">*</span></label>

                                                    <input type="text" class="form-control" name="self_employ_avg" id="employ_avg-taasukati_state" value="<?php echo $Form->self_employ_avg; ?>">
                                                </div>

                                            </div>

                                            <div class="row starthidden lo-oved-taasukati_state" id="lo-oved-self_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="lo-oved-self_avg_cont">
                                                    <label for="lo-oved-self_avg">קצבה<span class="red">*</span></label>
                                                    <p>במידה ואינך מקבל קצבה אנא הכנס סכום 0 לשדה זה</p>
                                                    <input type="text" class="form-control" name="lo_oved_self_avg" id="lo-oved-self-taasukati_state" value="<?php echo $Form->lo_oved_self_avg; ?>">
                                                </div>

                                            </div>
                                            
                                            <!-- /taasukati -->
                                        </div>

                                        <div class="row hidden" id="mezonot_state_row_cont">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mezonot_state_cont">
                                                <label for="mezonot">מזונות<span class="red">*</span></label>

                                                <select class="form-control" name="mezonot_state" id="mezonot_state">
                                                    <option value="0">יש לבחור ערך<span class="red">*</span></option>
                                                    <option value="1" <?php echo($Form->mezonot_state == '1' ? 'selected' : '')?>>ללא מזונות</option>
                                                    <option value="2" <?php echo($Form->mezonot_state == '2' ? 'selected' : '')?>>מקבל מזונות</option>
                                                    <option value="3" <?php echo($Form->mezonot_state == '3' ? 'selected' : '')?>>נותן מזונות</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row hidden mezonot_height_cont mezonot_files_req" id="">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mezonot_height_div">
                                                <label for="mezonot_height">גובה מזונות<span class="red">*</span></label>

                                                <input type="text" class="form-control" name="mezonot_height" id="mezonot_height" value="<?php echo $Form->mezonot_height; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /x_content -->
                                </div>

                                <!-- /xpanel -->

                                <div class="x_panel" id="family-income">
                                    <div class="x_title">
                                        <h2>פרטי משפחה</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row hidden" id="is_siua_cont">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <label>מקבל סיוע מההורים<span class="red">*</span></label>
                                                <p>
                                                במידה ואינך מקבל סיוע מהוריך, עליך לצרף אישור על כך: תצהיר עם חתימה גורם רווחה / עו"ד המעיד שאינך מקבל סיוע.                                                </p>
                                                <p>
                                                    <input id="no_siua" value="0" name="is_siua" type="radio" class="custom-control-input ff" <?php echo ($Form->is_siua == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="no_siua">לא</label>

                                                    <input id="yes_siua" value="1" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Form->is_siua == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="yes_siua">כן</label>
                                                </p>
                                            </div>



                                        </div>

                                        <div class="taasuka hidden taasuka-parents" id="the-taasuka-cont">
                                            <div class="row">
                                                <!-- taasukati  av-->
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_av_state_cont">
                                                    <label for="taasukati_av_state">מצב תעסוקתי אב<span class="red">*</span></label>
                                                    <select name="taasukati_av_state" class="taas form-control" id="taasukati_av_state">
                                                        <option value="">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_av_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                        <option value="2" <?php echo($Form->taasukati_av_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                        <option value="3" <?php echo($Form->taasukati_av_state == '3' ? 'selected' : '')?>>לא עובד/קצבה</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden salary-taasukati_av_state" id="self_av_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_av_salary_avg_cont">
                                                    <label for="self_av_salary_avg">שכר ברוטו<span class="red">*</span></label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_av_salary_avg" id="salary_avg-taasukati_av_state" value="<?php echo $Form->self_av_salary_avg; ?>">
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden employ-taasukati_av_state" id="self_av_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_av_employ_avg_cont">
                                                    <label for="self_av_employ_avg">הכנסה שנתית<span class="red">*</span></label>

                                                    <input type="text" class="form-control" name="self_av_employ_avg" id="employ_avg-taasukati_av_state" value="<?php echo $Form->self_av_employ_avg; ?>">
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden lo-oved-taasukati_av_state" id="self_av_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="lo-oved-self_av_employ_avg_cont">
                                                    <label for="lo-oved-self-av_employ_avg">קצבה<span class="red">*</span></label>
                                                    <p>במידה ואינך מקבל קצבה אנא הכנס סכום 0 לשדה זה</p>

                                                    <input type="text" class="form-control" name="self_av_lo_oved_avg" id="lo-oved-self-taasukati_av_state" value="<?php echo $Form->self_av_lo_oved_avg; ?>">
                                                </div>
                                            </div>
                                            <!-- /taasukati av-->
                                        </div>

                                        <div class="taasuka hidden taasuka-parents" id="the-taasuka-cont">
                                            <div class="row">
                                                <!-- taasukati  em-->
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_em_state_cont">
                                                    <label for="taasukati_em_state">מצב תעסוקתי אם<span class="red">*</span></label>
                                                    <select name="taasukati_em_state" class="taas form-control" id="taasukati_em_state">
                                                        <option value="">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_em_state == '1' ? 'selected' : '')?>>שכירה</option>
                                                        <option value="2" <?php echo($Form->taasukati_em_state == '2' ? 'selected' : '')?>>עצמאית</option>
                                                        <option value="3" <?php echo($Form->taasukati_em_state == '3' ? 'selected' : '')?>>לא עובדת/קצבה</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden salary-taasukati_em_state" id="self_em_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_em_salary_avg_cont">
                                                    <label for="self_em_salary_avg">שכר ברוטו<span class="red">*</span></label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_em_salary_avg" id="salary_avg-taasukati_em_state" value="<?php echo $Form->self_em_salary_avg; ?>">
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden employ-taasukati_em_state" id="self_em_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_em_employ_avg_cont">
                                                    <label for="self_em_employ_avg">הכנסה שנתית<span class="red">*</span></label>

                                                    <input type="text" class="form-control" name="self_em_employ_avg" id="employ_avg-taasukati_em_state" value="<?php echo $Form->self_em_employ_avg; ?>">
                                                </div>

                                            </div>

                                            <div class="row hidden starthidden lo-oved-taasukati_em_state" id="self_em_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="lo-oved-self_em_employ_avg_cont">
                                                    <label for="lo-oved-self-em_employ_avg">קצבה<span class="red">*</span></label>
                                                    <p>במידה ואינך מקבל קצבה אנא הכנס סכום 0 לשדה זה</p>

                                                    <input type="text" class="form-control" name="self_em_lo_oved_avg" id="lo-oved-self-taasukati_em_state" value="<?php echo $Form->self_em_lo_oved_avg; ?>">
                                                </div>
                                            </div>
                                            <!-- /taasukati em -->
                                        </div>

                                        <div class="taasuka hidden taasuka-zug-select" id="the-taasuka-zug">
                                            <div class="row">
                                                <!-- taasukati  bat/benzug-->
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_zug_state_cont">
                                                    <label for="taasukati_zug_state">מצב תעסוקתי בן/בת זוג<span class="red">*</span></label>
                                                    <select name="taasukati_zug_state" class="taas form-control" id="taasukati_zug_state">
                                                        <option value="">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_zug_state == '1' ? 'selected' : '')?>>שכיר/ה</option>
                                                        <option value="2" <?php echo($Form->taasukati_zug_state == '2' ? 'selected' : '')?>>עצמאי/ת</option>
                                                        <option value="3" <?php echo($Form->taasukati_zug_state == '3' ? 'selected' : '')?>>לא עובד/ת / קצבה</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden taasuka-zug salary-taasukati_zug_state" id="self_zug_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_zug_salary_avg_cont">
                                                    <label for="self_zug_salary_avg">שכר ברוטו<span class="red">*</span></label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_zug_salary_avg" id="salary_avg-taasukati_zug_state" value="<?php echo $Form->self_zug_salary_avg; ?>">
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden taasuka-zug employ-taasukati_zug_state" id="self_zug_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_zug_employ_avg_cont">
                                                    <label for="self_zug_employ_avg">הכנסה שנתית<span class="red">*</span></label>

                                                    <input type="text" class="form-control" name="self_zug_employ_avg" id="employ_avg-taasukati_zug_state" value="<?php echo $Form->self_zug_employ_avg; ?>">
                                                </div>

                                            </div>

                                            <div class="row hidden starthidden lo-oved-taasukati_zug_state" id="self_zug_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="lo-oved-self_zug_employ_avg_cont">
                                                    <label for="lo-oved-self-zug_employ_avg">קצבה<span class="red">*</span></label>
                                                    <p>במידה ואינך מקבל קצבה אנא הכנס סכום 0 לשדה זה</p>

                                                    <input type="text" class="form-control" name="self_zug_lo_oved_avg" id="lo-oved-self-taasukati_zug_state" value="<?php echo $Form->self_zug_lo_oved_avg; ?>">
                                                </div>
                                            </div>
                                            <!-- /taasukati bat zug-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel" id="kids-bros">
                                    <div class="x_title">
                                        <h2 id="children"></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row starthidden children_cont" id="">
                                            <!-- section7 -->
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_children_cont">
                                                <label for="self_children" id="self_children_cont_label">

                                                </label>
                                                <p>במידה ואין להשאיר ריק</p>
                                                <input type="text" class="form-control" name="self_children" id="self_children" value="<?php echo $Form->self_children; ?>">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.x_content -->
                                </div>

                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2 id="soldier"></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row starthidden" id="soldier_cont">
                                            <!-- section8 -->


                                            <!-- soldier -->


                                            <div class="row" id="self_soldier_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label for="self_soldier" id="self_soldier_cont_label"></label>
                                                    <?php echo $Form->self_soldier; ?>
                                                    <p>

                                                        <input id="no_self_soldier" value="0" name="self_soldier" type="radio" class="custom-control-input ff" <?php echo($Form->self_soldier == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_self_soldier">לא</label>

                                                        <input id="yes_self_soldier" value="1" name="self_soldier" type="radio" class="custom-control-input ff" <?php echo($Form->self_soldier == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_self_soldier">כן</label>
                                                    </p>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <!-- /.x_content -->
                                </div>

                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2 id="student"></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row starthidden" id="student_cont">
                                            <!-- student -->
                                            <div class="row" id="self_student_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label for="self_student" id="self_student_cont_label"></label>
                                                    <?php echo $Form->self_student; ?>
                                                    <p>

                                                        <input id="no_self_student" value="0" name="self_student" type="radio" class="custom-control-input ff" <?php echo($Form->self_student == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_self_student">לא</label>

                                                        <input id="yes_self_student" value="1" name="self_student" type="radio" class="custom-control-input ff" <?php echo($Form->self_student == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_self_student">כן</label>
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- section9 -->


                                        </div>
                                    </div>
                                    <!-- /.x_content -->
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel" id="add-info">
                                    <div class="x_title">
                                        <h2>מידע נוסף</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div>
                                            <!--section 10 -->

                                            <div class="row" id="is_social_harig">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label>מצב סוציאלי חריג</label>
                                                    
                                                    <p>

                                                        <input id="no_social_harig" value="0" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Form->social_harig == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_social_harig">לא</label>

                                                        <input id="yes_social_harig" value="1" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Form->social_harig == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_social_harig">כן</label>
                                                    </p>
                                                </div>


                                               
                                            </div>

                                            <div class="row" id="is_medical_harig">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label>מצב רפואי חריג סטודנט</label>
                                                    <p>

                                                        <input id="no_medical_harig" value="0" name="medical_harig" type="radio" class="custom-control-input ff" <?php echo($Form->medical_harig == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_medical_harig">לא</label>

                                                        <input id="yes_medical_harig" value="1" name="medical_harig" type="radio" class="custom-control-input ff" <?php echo($Form->medical_harig == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_medical_harig">כן</label>
                                                    </p>
                                                </div>



                                            </div>

                                            <div class="row" id="is_family_harig">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label>
                                                        מצב רפואי חריג בן משפחה
                                                    </label>
                                                    <p>

                                                        <input id="no_family_harig" value="0" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Form->family_harig == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_family_harig">לא</label>

                                                        <input id="yes_family_harig" value="1" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Form->family_harig == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_family_harig">כן</label>
                                                    </p>
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                    <!-- /.x_content -->
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>נימוק הבקשה</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row" id="explanation">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="form-group">
                                                    <label for="explanation"> נימוק בקשה לסיוע:</label>
                                                    <textarea class="form-control" name="explanation" rows="5" id="explanation"><?php echo $Form->explanation; ?></textarea>
                                                </div>
                                            </div>

                            
                                        </div>
                                    </div>
                                    <!-- /.x_content -->
                                </div>
                                <!-- /.x_panel -->
                              
<!-- files -->

                   

                        
<!-- files start -->
<div class="x_panel" id="req-files">
                <div class="x_title">
                    <h2>קבצים</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                    <div class="col-md-10 col-md-pull-2 col-sm-12 mb-3">
                    <div class="alert alert-success green-btn" role="alert">
                        <h4><b> שימו לב! אין להעלות שני קבצים בעלי שם זהה</b></h4>
                        <h4><b> ניתן להעלות קבצים בעלי הסיומות הבאות בלבד: png, jpeg, jpg, pdf</b></h4>
                    </div>
<div class="custom-file" id="tz-file">
<label class="custom-file-label" for="tzfile">צילום ת.ז
<span class="red">*</span>
</label>


<ul class="file-list">
<?php  if($Form->tzfile != '' || $Form->tzfile != NULL){

$thefile = json_decode($Form->tzfile);
$i = 0;
foreach($thefile as $filename){

echo '
<li>
<a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
<span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
</li>';
$i++;
}
}; ?>

</ul>


<input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired reqOnLoad" id="tzfile" name="tzfile" required="" />


</div>
</div>

<!-- end tz file -->

<!-- is alone file -->
<div class="col-md-10 col-md-pull-2 col-sm-12 mb-3" id="is_alone_file" class="hidden">
                       
                            <div class="custom-file" id="iisalonefile">
                                <label class="custom-file-label" for="iisalonefile">סטודנט בודד בארץ<span class="red">*</span></label>
                                <p>סטודנט בודד בארץ, או מי שהוכר כחייל בודד, יש להביא אישורים המעידים על
                                    כך
                                </p>
                                <ul class="file-list">
                                    <?php  if($Form->isalonefile != '' || $Form->isalonefile != NULL){
    //var_dump(unserialize($Form->tzfile));
    $thefile = json_decode($Form->isalonefile);
    $i = 0;
    foreach($thefile as $filename){
     
      echo '
        <li>
          <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
        </li>';
      $i++;
    }
}; ?>

                                </ul>


                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="isalonefile" name="isalonefile" />


                            </div>
                        
                    </div>
<!-- End is alone file -->

<!--  is army ptor file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="is_army_ptor_file_cont">
                            <div class="custom-file" >
                                <label class="custom-file-label" for="is_army_ptor_file">נא לצרף מסמכי פטור מצה"ל<span class="red">*</span></label>
                                <p>במידה וקיבלת פטור משירות מסיבה רפואית, צרף מסמכים.</p>
                                <ul class="file-list">
                                    <?php  if($Form->is_army_ptor_file != '' || $Form->is_army_ptor_file != NULL){
$thefile = json_decode($Form->is_army_ptor_file);
$i = 0;
foreach($thefile as $filename){
echo '
<li>
  <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
  <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
</li>';
$i++;
}
}; ?>
                                </ul>
                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="is_army_ptor_file" name="is_army_ptor_file" />
                            </div>
                        </div>
<!--  End is army ptor file -->


<!--  is lochem file -->
<div class="col-md-10 col-md-pull-2 col-sm-12 mb-3 hidden" id="is-lochem-file">
                            <div class="custom-file" >
                                <label class="custom-file-label" for="islochemfile">קובץ לוחם/תומך לחימה<span class="red">*</span></label>

                                <ul class="file-list">
                                    <?php  if($Form->islochemfile != '' || $Form->islochemfile != NULL){
$thefile = json_decode($Form->islochemfile);
$i = 0;
foreach($thefile as $filename){
echo '
<li>
  <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
  <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
</li>';
$i++;
}
}; ?>
                                </ul>
                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="islochemfile" name="islochemfile" />
                            </div>
                        </div>
<!-- End is lochem file -->

<!--  is army miluim file -->
                        <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3"  id="is-miluim-file">
                            <div class="custom-file">
                                <label class="custom-file-label" for="is-miluim-file">במידה והנך משרת שרות מילואים פעיל צרף אישורים<span class="red">*</span></label>
                                <ul class="file-list">
                                    <?php  if($Form->is_miluim_file != '' || $Form->is_miluim_file != NULL){
$thefile = json_decode($Form->is_miluim_file);
$i = 0;
foreach($thefile as $filename){
  echo '
    <li>
      <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
    </li>';
  $i++;
}
}; ?>
                                </ul>
                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="is_miluim_file" name="is_miluim_file" />
                            </div>
                        </div>
<!--  End is army miluim file -->


<!--  is army file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3"  id="is-army-file">
                            <div class="custom-file">
                                <label class="custom-file-label" for="is-army-file">נא לצרף אישור שירות צבאי/לאומי<span class="red">*</span></label>
                                <ul class="file-list">
                                    <?php  if($Form->is_army_file != '' || $Form->is_army_file != NULL){
                                        $thefile = json_decode($Form->is_army_file);
                                        $i = 0;
                                        foreach($thefile as $filename){
                                        echo '
                                            <li>
                                            <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                            <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                            </li>';
                                        $i++;
                                        }
                                    }; ?>
                                </ul>
                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="is_army_file" name="is_army_file" />
                            </div>
                        </div>
<!--  End is army file -->


<!--  is salary-taasukati_state file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 starthidden salary-taasukati_state" id="self_salary_files_cont">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="self_salary_files">שלושה תלושי שכר אחרונים<span class="red">*</label>
                                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                    <ul class="file-list">
                                        <?php  if($Form->self_salary_files != '' || $Form->self_salary_files != NULL){
$thefile = json_decode($Form->self_salary_files);
$i = 0;
foreach($thefile as $filename){
echo '
  <li>
    <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
    <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
  </li>';
$i++;
}
}; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_salary_files" name="self_salary_files" />
                                </div>
                            </div>
<!--  End is salary-taasukati_state file -->
<!--  is lo-oved-taasukati_state file -->
                        <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved-taasukati_state" id="lo_oved_files_cont">
                            <div class="custom-file">
                                <label class="custom-file-label" for="lo_oved_files">נא לצרף אישור מעמד לא עובד מביטוח לאומי. <span class="red">*</span></label>

                                <ul class="file-list">
                                    <?php  if($Form->lo_oved_files != '' || $Form->lo_oved_files != NULL){
$thefile = json_decode($Form->lo_oved_files);
$i = 0;
foreach($thefile as $filename){
echo '
<li>
<a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
<span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
</li>';
$i++;
}
}; ?>
                                </ul>
                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="lo_oved_files" name="lo_oved_files" />
                            </div>
                        </div>
<!--  End lo-oved-taasukati_state file -->

<!--  is employ-taasukati_state file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 employ-taasukati_state" id="self_employ_files_cont">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="self_employ_files">דוח שומה<span class="red">*</span></label>

                                    <ul class="file-list">
                                        <?php  if($Form->self_employ_files != '' || $Form->self_employ_files != NULL){
$thefile = json_decode($Form->self_employ_files);
$i = 0;
foreach($thefile as $filename){
echo '
  <li>
    <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
    <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
  </li>';
$i++;
}
}; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_employ_files" name="self_employ_files" />
                                </div>
                            </div>
<!--  End employ-taasukati_state file -->

<!--  is  is_siua_file file -->

                        <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="is_siua_file_cont">
                            <div class="custom-file">
                                <label class="custom-file-label" for="is_siua_file">אישור מגורמי הרווחה<span class="red">*</span></label>
                                <p>סטודנט אשר אינו נתמך על ידי הוריו, עליו לצרף אישור מגורמי הרווחה או עו"ד
                                    בלבד
                                </p>
                                <ul class="file-list">
                                    <?php  if($Form->is_siua_file != '' || $Form->is_siua_file != NULL){
//var_dump(unserialize($Form->tzfile));
$thefile = json_decode($Form->is_siua_file);
$i = 0;
foreach($thefile as $filename){
  
  echo '
    <li>
      <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
    </li>';
  $i++;
}
}; ?>
                                </ul>
                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="is_siua_file" name="is_siua_file" />
                            </div>
                        </div>

<!--  End  is_siua_file file -->

<!--  is  lo-oved-taasukati_av_state file -->

                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved-taasukati_av_state taasuka-parents-files" id="lo_oved_av_files_cont">
                                <div class="custom-file" id="lo_oved_av_files_div">
                                    <label class="custom-file-label" for="lo_oved_av_files">נא לצרף אישור מעמד לא עובד מביטוח לאומי של האב<span class="red">*</span></label>

                                    <ul class="file-list">
                                        <?php  if($Form->lo_oved_av_files != '' || $Form->lo_oved_av_files != NULL){
                                $thefile = json_decode($Form->lo_oved_av_files);
                                $i = 0;
                                foreach($thefile as $filename){
                                  echo '
                                    <li>
                                      <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                    </li>';
                                  $i++;
                                }
                              }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="lo_oved_av_files" name="lo_oved_av_files" />
                                </div>
                            </div>

<!--  End  lo-oved-taasukati_av_state file -->

<!--  is salary-taasukati_av_state  file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 salary-taasukati_av_state taasuka-parents-files" id="self_av_salary_files_cont">
                                <div class="custom-file" id="self_av_salary_files_div">
                                    <label class="custom-file-label" for="self_av_salary_files">שלושה תלושי שכר אחרונים של האב<span class="red">*</span></label>
                                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                    <ul class="file-list">
                                        <?php  if($Form->self_av_salary_files != '' || $Form->self_av_salary_files != NULL){
                                $thefile = json_decode($Form->self_av_salary_files);
                                $i = 0;
                                foreach($thefile as $filename){
                                  echo '
                                    <li>
                                      <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                    </li>';
                                  $i++;
                                }
                              }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_av_salary_files" name="self_av_salary_files" />
                                </div>
                            </div>
<!--  End  salary-taasukati_av_state file -->

<!--  is  employ-taasukati_av_state file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 employ-taasukati_av_state taasuka-parents-files" id="self_av_employ_avg_files_cont">
                                <div class="custom-file" id="self_av_employ_avg_files_div">
                                    <label class="custom-file-label" for="self_av_employ_files">דוח שומה של האב<span class="red">*</span></label>

                                    <ul class="file-list">
                                        <?php  if($Form->self_av_employ_files != '' || $Form->self_av_employ_files != NULL){
                                $thefile = json_decode($Form->self_av_employ_files);
                                $i = 0;
                                foreach($thefile as $filename){
                                  echo '
                                    <li>
                                      <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                      <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                    </li>';
                                  $i++;
                                }
                              }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_av_employ_files" name="self_av_employ_files" />
                                </div>
                            </div>
<!--  End  employ-taasukati_av_state file -->

<!--  is lo-oved-taasukati_em_state  file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved-taasukati_em_state taasuka-parents-files" id="lo_oved_em_files_cont">
                                <div class="custom-file" id="lo_oved_em_files_div">
                                    <label class="custom-file-label" for="lo_oved_em_files">נא לצרף אישור מעמד לא עובדת מביטוח לאומי של האם<span class="red">*</span></label>

                                    <ul class="file-list">
                                        <?php  if($Form->lo_oved_em_files != '' || $Form->lo_oved_em_files != NULL){
                                    $thefile = json_decode($Form->lo_oved_em_files);
                                    $i = 0;
                                    foreach($thefile as $filename){
                                      echo '
                                        <li>
                                          <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                        </li>';
                                      $i++;
                                    }
                                  }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="lo_oved_em_files" name="lo_oved_em_files" />
                                </div>
                            </div>

<!--  End lo-oved-taasukati_em_state  file -->

<!--  is salary-taasukati_em_state  file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 salary-taasukati_em_state taasuka-parents-files" id="self_em_salary_files_cont">
                                <div class="custom-file" id="self_em_salary_files_div">
                                    <label class="custom-file-label" for="self_em_salary_files">שלושה תלושי שכר אחרונים של האם<span class="red">*</span></label>
                                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                    <ul class="file-list">
                                        <?php  if($Form->self_em_salary_files != '' || $Form->self_em_salary_files != NULL){
                                    $thefile = json_decode($Form->self_em_salary_files);
                                    $i = 0;
                                    foreach($thefile as $filename){
                                      echo '
                                        <li>
                                          <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                        </li>';
                                      $i++;
                                    }
                                  }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_em_salary_files" name="self_em_salary_files" />
                                </div>
                            </div>
<!--  End salary-taasukati_em_state  file -->

<!--  is  employ-taasukati_em_state file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 employ-taasukati_em_state taasuka-parents-files" id="self_em_employ_avg_files_cont">
                                <div class="custom-file" id="self_em_employ_avg_files_div">
                                    <label class="custom-file-label" for="self_em_employ_files">דוח שומה של האם<span class="red">*</span></label>

                                    <ul class="file-list">
                                        <?php  if($Form->self_em_employ_files != '' || $Form->self_em_employ_files != NULL){
                                    $thefile = json_decode($Form->self_em_employ_files);
                                    $i = 0;
                                    foreach($thefile as $filename){
                                      echo '
                                        <li>
                                          <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                        </li>';
                                      $i++;
                                    }
                                  }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_em_employ_files" name="self_em_employ_files" />
                                </div>
                            </div>
<!--  End  employ-taasukati_em_state file -->

<!--  is lo-oved-taasukati_zug_state  file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved-taasukati_zug_state taasuka-zug" id="lo_oved_zug_files_cont">
                                <div class="custom-file" id="lo_oved_zug_files_div">
                                    <label class="custom-file-label" for="lo_oved_zug_files">נא לצרף אישור מעמד לא עובד מביטוח לאומי של בן/בת הזוג
                                    <span class="red">*</span>
                                    </label>

                                    <ul class="file-list">
                                        <?php  if($Form->lo_oved_zug_files != '' || $Form->lo_oved_zug_files != NULL){
                                        $thefile = json_decode($Form->lo_oved_zug_files);
                                        $i = 0;
                                        foreach($thefile as $filename){
                                          echo '
                                            <li>
                                              <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                              <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                            </li>';
                                          $i++;
                                        }
                                      }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="lo_oved_zug_files" name="lo_oved_zug_files" />
                                </div>
                            </div>
<!--  End  lo-oved-taasukati_zug_state file -->

<!--  is  salary-taasukati_zug_state file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 salary-taasukati_zug_state taasuka-zug" id="self_zug_salary_files_cont">
                                <div class="custom-file" id="self_zug_salary_files_div">
                                    <label class="custom-file-label" for="self_zug_salary_files">שלושה תלושי שכר אחרונים של בן/בת הזוג<span class="red">*</span></label>
                                    <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                    <ul class="file-list">
                                        <?php  if($Form->self_zug_salary_files != '' || $Form->self_zug_salary_files != NULL){
                                        $thefile = json_decode($Form->self_zug_salary_files);
                                        $i = 0;
                                        foreach($thefile as $filename){
                                          echo '
                                            <li>
                                              <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                              <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                            </li>';
                                          $i++;
                                        }
                                      }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_zug_salary_files" name="self_zug_salary_files" />
                                </div>
                            </div>
<!--  End  salary-taasukati_zug_state file file -->

<!--  is  employ-taasukati_zug_state file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 employ-taasukati_zug_state taasuka-zug" id="self_zug_employ_avg_files_cont">
                                <div class="custom-file" id="self_zug_employ_avg_files_div">
                                    <label class="custom-file-label" for="self_zug_employ_files">דוח שומה של בן/בת הזוג<span class="red">*</span></label>

                                    <ul class="file-list">
                                        <?php  if($Form->self_zug_employ_files != '' || $Form->self_zug_employ_files != NULL){
                                        $thefile = json_decode($Form->self_zug_employ_files);
                                        $i = 0;
                                        foreach($thefile as $filename){
                                          echo '
                                            <li>
                                              <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                              <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                            </li>';
                                          $i++;
                                        }
                                      }; ?>
                                    </ul>
                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_zug_employ_files" name="self_zug_employ_files" />
                                </div>
                            </div>
<!--  End  employ-taasukati_zug_state file -->

<!--  is self child file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden" id="self_children_files_cont">
                        <div class="custom-file" id="self_children_files_div">
                            <label class="custom-file-label" for="self_children_files">נא לצרף ספח תעודת זהות אם<span class="red">*</span></label>

                            <ul class="file-list">
                                <?php  if($Form->self_children_files != '' || $Form->self_children_files != NULL){
                                  $thefile = json_decode($Form->self_children_files);
                                  $i = 0;
                                  foreach($thefile as $filename){
                                    echo '
                                      <li>
                                        <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                        <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                      </li>';
                                    $i++;
                                  }
                                }; ?>
                            </ul>
                            <p>מספיקה אסמכתא לילד / אח אחד בלבד</p>

                            <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_children_files" name="self_children_files" />

                        </div>
                    </div>
<!--  End self child file -->

<!--  is self soldier  file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_soldier_files_cont">
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
                                            <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                            <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                            </li>';
                                        $i++;
                                        }
                                    }; ?>
                            </ul>
                            <p>מספיקה אסמכתא לילד / אח אחד בלבד</p>

                            <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_soldier_files" name="self_soldier_files" />

                        </div>
                    </div>
<!--  End  self soldier file -->

<!--  is self student file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_student_files_cont">
                        <div class="custom-file" id="self_student_files_div">
                            <label class="custom-file-label" for="self_student_files">
                                אם כן חייב בהעלאת אישור לימודים של אח/אחות/ילד<span class="red">*</span>
                            </label>

                            <ul class="file-list">
                                <?php  if($Form->self_student_files != '' || $Form->self_student_files != NULL){
                                $thefile = json_decode($Form->self_student_files);
                                $i = 0;
                                foreach($thefile as $filename){
                                echo '
                                    <li>
                                    <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                    <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                    </li>';
                                $i++;
                                }
                            }; ?>
                            </ul>
                            <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="self_student_files" name="self_student_files" />
                        </div>
                    </div>
<!--  End self student file -->

<!--  is  social harig file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="social_harig_file_cont">
                            <div class="custom-file" >
                                <label class="custom-file-label" for="social_harig_file">אישור מצב סוציאלי חריג<span class="red">*</span></label>
                                <p>למצבים סוציאלים חריגים עליך לצרף אישור רלוונטי- דו"ח סוציאלי או מסמך
                                    של רשויות הרווחה</p>
                                <ul class="file-list">
                                    <?php  if($Form->social_harig_file != '' || $Form->social_harig_file != NULL){
                                    $thefile = json_decode($Form->social_harig_file);
                                    $i = 0;
                                    foreach($thefile as $filename){
                                      
                                      echo '
                                        <li>
                                          <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                        </li>';
                                      $i++;
                                    }
                                }; ?>

                                </ul>


                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="social_harig_file" name="social_harig_file" />


                            </div>
                        </div>
<!--  End social harig file -->

<!--  is medical harig file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3"  id="medical_harig_file_cont">
                            <div class="custom-file">
                                <label class="custom-file-label" for="medical_harig_file">אישור מצב רפואי חריג<span class="red">*</span></label>
                                <p>למצבים רפואיים חריגים עליך לצרף מסמך מרופא מומחה</p>
                                <ul class="file-list">
                                    <?php  if($Form->medical_harig_file != '' || $Form->medical_harig_file != NULL){
                                    $thefile = json_decode($Form->medical_harig_file);
                                    $i = 0;
                                    foreach($thefile as $filename){
                                      
                                      echo '
                                        <li>
                                          <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                        </li>';
                                      $i++;
                                    }
                                }; ?>

                                </ul>


                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="medical_harig_file" name="medical_harig_file" />


                            </div>
                        </div>
<!--  End  medical harig file -->

<!--  is family_harig_file file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3"  id="family_harig_file_cont">
                            <div class="custom-file">
                                <label class="custom-file-label" for="family_harig_file">אישור מצב רפואי חריג בן משפחה<span class="red">*</span></label>
                                <p>במידה ומי מבני משפחתך הקרובה בעל מצב רפואי חריג יש לצרף מסמכים מרופא
                                    מומחה
                                </p>
                                <ul class="file-list">
                                    <?php  if($Form->family_harig_file != '' || $Form->family_harig_file != NULL){
                                      $thefile = json_decode($Form->family_harig_file);
                                      $i = 0;
                                      foreach($thefile as $filename){
                                        
                                        echo '
                                          <li>
                                            <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                            <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                          </li>';
                                        $i++;
                                      }
                                  }; ?>

                                </ul>


                                <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="family_harig_file" name="family_harig_file" />


                            </div>
                        </div>
<!--  End family_harig_file file -->

<!--  is mezonot_files_cont  file -->

                        <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden mezonot_files_req" id="mezonot_files_div">
                        <div class="custom-file" >
                            <label class="custom-file-label" for="mezonot_files">אסמכתא על אי קבלת מזונות<span class="red">*</span></label>

                            <ul class="file-list">
                                <?php  if($Form->mezonot_files != '' || $Form->mezonot_files != NULL){
$thefile = json_decode($Form->mezonot_files);
$i = 0;
foreach($thefile as $filename){
echo '
<li>
<a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
<span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
</li>';
$i++;
}
}; ?>
                            </ul>
                            <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="mezonot_files" name="mezonot_files" />
                        </div>
                    </div>

<!--  End  mezonot_files_cont file -->

<!--  is meonot height file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 mezonot_files_req"  id="mezonot_height_files_cont">
                        <div class="custom-file" id="mezonot_height_files_div">
                            <label class="custom-file-label" id="mezonot-file-text" for="mezonot_height_files">
                            אישור גובה מזונות<span class="red">*</span>
                            </label>

                            <ul class="file-list">
                                <?php  if($Form->mezonot_height_files != '' || $Form->mezonot_height_files != NULL){
$thefile = json_decode($Form->mezonot_height_files);
$i = 0;
foreach($thefile as $filename){
echo '
<li>
<a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
<span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
</li>';
$i++;
}
}; ?>
                            </ul>
                            <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input alwaysRequired" id="mezonot_height_files" name="mezonot_height_files" />
                        </div>
                    </div>    
<!--  End mezonot height file -->

<!--  is  explanation  file -->
<div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" >
<div class="custom-file" id="explanation_file_cont">
                                                    <label class="custom-file-label" for="explanation_file">ניתן לצרף מכתב נלווה</label>
                                                    <ul class="file-list">
                                                        <?php  if($Form->explanation_file != '' || $Form->explanation_file != NULL){
                                                            $thefile = json_decode($Form->explanation_file);
                                                            $i = 0;
                                                            foreach($thefile as $filename){
                                                              
                                                              echo '
                                                                <li>
                                                                  <a href="./../uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                                                                  <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                                                                </li>';
                                                              $i++;
                                                            }
                                                        }; ?>

                                                    </ul>


                                                    <input type="file" accept="image/gif, image/png, image/jpeg, image/jpg, application/pdf" class="custom-file-input" id="explanation_file" name="explanation_file" />


                                                </div>
                                                </div>
<!--  End  explanation  file -->

<!--  is   file -->
<!--  End   file -->

                    </div>
                </div>
            </div>
<!-- files end -->



<!-- files -->

                                <!--section 10 -->

                                <div class="row">
                                    <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">

                                        <input type="hidden" name="year" class="form-control" id="year" autocomplete='given-year' placeholder="" required="" value="<?php echo $year; ?>"
                                            readonly>
                                        <input type="hidden" name="submitted" class="form-control" id="submitted" placeholder="" required="" value="1" readonly>
                                        <input type="hidden" name="date_submitted" class="form-control" id="date_submitted" placeholder="" required="" value="<?php echo time(); ?>"
                                            readonly>
                                    </div>
                                    <input type="submit" name="submit" class="btn-lg btn-success" value="הגשת טופס" id="submitbtn">
                                    <input type="submit" name="save" class="btn-lg btn-info" value="שמירת נתונים" id="savebtn">
                            </form>
                            <div>
                                <!-- section1 -->








                            </div>


                            <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>




                    <!-- /page content -->




                    <!-- /new page -->
                    <!-- /new page -->
                    <!-- /new page -->



                    <img src="../assets/images/logo.png" alt="לוגו המכללה האקדמית אחוה">






                    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                    <script src="../vendors/parsleyjs/dist/parsley.js"></script>
                    <script src="../vendors/parsleyjs/dist/i18n/he.js"></script>
                    <script src="../vendors/parsleyjs/dist/i18n/he.extra.js"></script>
                    <script src="../vendors/bootstrap/js/modal.js"></script>
                    <script src="../vendors/bootstrap/js/scrollspy.js"></script>

                    <!-- iCheck -->
                    <!-- <script src="./gentela/vendors/iCheck/icheck.min.js"></script> -->
                    <!-- <script src="./gentela/build/js/custom.js"></script> -->


                    <script src="../api/js/validations.js"></script>
                    <script src="../api/js/milgaform.js"></script>
                    <script src="../api/js/search.js"></script>
                    <script src="../api/js/fileupload.js"></script>
                    <script src="../api/js/removefile.js"></script>
                




    <a href="http://www.achva.ac.il/AGLogout" class="btn-lg green-btn" id="disconnect"> התנתקות</a>



    </body>

    </html>