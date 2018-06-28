<?php
$tz = '9999999';
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
    'explanation' => $_POST['explanation']

    // 'tzfile' =>  json_decode($Form->tzfile),
    // 'isalonefile' =>  json_decode($Form->isalonefile),
    // 'islochemfile' =>  json_decode($Form->islochemfile),
    // 'is_army_ptor_file' =>  json_decode($Form->is_army_ptor_file),
    // 'is_miluim_file' =>  json_decode($Form->is_miluim_file),
    // 'self_employ_files' =>  json_decode($Form->self_employ_files),
    // 'self_salary_files' =>  json_decode($Form->self_salary_files),
    // 'lo_oved_files' =>  json_decode($Form->lo_oved_files),
    // 'mezonot_files' =>  json_decode($Form->mezonot_files),
    // 'mezonot_height_files' =>  json_decode($Form->mezonot_height_files),
    // 'is_siua_file' =>  json_decode($Form->is_siua_file),
    // 'lo_oved_av_files' =>  json_decode($Form->lo_oved_av_files),
    // 'self_av_salary_files' =>  json_decode($Form->self_av_salary_files),
    // 'self_av_employ_files' =>  json_decode($Form->self_av_employ_files),
    // 'lo_oved_em_files' =>  json_decode($Form->lo_oved_em_files),
    // 'self_em_salary_files' =>  json_decode($Form->self_em_salary_files),
    // 'self_em_employ_files' =>  json_decode($Form->self_em_employ_files),
    // 'lo_oved_zug_files' =>  json_decode($Form->lo_oved_zug_files),
    // 'self_zug_salary_files' =>  json_decode($Form->self_zug_salary_files),
    // 'self_zug_employ_files' =>  json_decode($Form->self_zug_employ_files),
    // 'self_children_files' =>  json_decode($Form->self_children_files),
    // 'self_soldier_files' =>  json_decode($Form->self_soldier_files),
    // 'self_student_files' =>  json_decode($Form->self_student_files),
    // 'social_harig_file' =>  json_decode($Form->social_harig_file),
    // 'medical_harig_file' =>  json_decode($Form->medical_harig_file),
    // 'family_harig_file' =>  json_decode($Form->family_harig_file),
    // 'explanation_file' =>  json_decode($Form->explanation_file),
    
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
    <!DOCTYPE html>
    <html>

    <head lang="he">

        <title>בקשה למלגת דיקן</title>

        <!-- <link rel="stylesheet" href="./vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="./vendors/parsleyjs/dist/parsley.css"> -->

        <?php include 'head.php'; ?>


    </head>



    <?php echo  $Form->id; ?>



    <!-- new page -->
    <!-- new page -->
    <!-- new page -->





    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">


<!-- side nav -->
<!-- side nav -->
<?php //$Dash  = new Dashboard(); ?>
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title">
            <img src="./assets/images/logow.png" class="dash-logo" alt="">
            <span>ניהול מלגות דיקן</span>
        </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
  
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="arial main_menu_side hidden-print main_menu">
        <div class="menu_section">
           

            <ul class="student-state">
                <li>
                    <label class="white glyphicon glyphicon-user" aria-hidden="true"> <span class="arial white">מצב משפחתי: </span><span class="arial" id="the-family-state"></span></label>
        
                </li>
                    <ul class="nav child_menu">
                        <li>
                            <a href="dashboard.php">חזרה לדף הראשי</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
     
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="התנתקי" href="logout.php">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>

<!-- side nav -->
<!-- side nav -->

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


                    <div class="row" id="main-cont">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>

                                <div class="row x_title">
                                    <div class="col-md-12">
                                        <h2>בקשה למלגות דיקן- טופס מקוון</h2>
                                    </div>
                                </div>
                                <blockquote class="message">
                                    <p> תאריך אחרון להגשה: 31.10.2018
                                        <br /> תשובה תשלח בדואר כחודשיים לאחר תחילת שנת הלימודים
                                    </p>
                                    <p>
                                        לנוחיותך, מצורפת רשימת מסמכים נדרשים.
                                        <br /> לתשומת ליבך: סטודנט רווק יצרף מסמכי הורים ואחים, סטודנט נשוי יצרף מסמכי בת זוג וילדים.
                                        <br /> מומלץ לוודא שיש ברשותך מסמכים נדרשים לפני תחילת התהליך.
                                        <br /> טופס בקשה אשר יוגש ללא כל המסמכים הנדרשים לא יקלט במערכת ולא יטופל.
                                    </p>
                                </blockquote>
                            </div>

                        </div>

                        <div class="col-sm-12 col-xs-12">
                            <form action="" id="studentForm" method="POST" class="needs-validation" enctype="multipart/form-data" data-parsley-validate=""
                                ovalidate="" action="<?php $_SERVER['PHP_SELF'];?>">

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>פרטים אישיים</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label for="fname">שם פרטי</label>
                                                <input type="text" name="fname" class="form-control" id="fname" autocomplete='given-name' placeholder="" required="" value="<?php echo $Form->fname; ?>">


                                            </div>
                                            <div class="col-md-4 col-md-pull-2  col-sm-12 mb-3">
                                                <label for="lname">שם משפחה</label>
                                                <input type="text" name="lname" class="form-control" id="lname" placeholder="" required="" value="<?php echo $Form->lname; ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">
                                                <label for="tz">תעודת זהות</label>
                                                <input type="text" name="tz" class="form-control" id="tz" autocomplete='given-name' placeholder="" required="" value="<?php echo $tz; ?>"
                                                    readonly>

                                            </div>
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <div class="custom-file" id="tz-file">
                                                    <label class="custom-file-label" for="tzfile">צילום ת.ז (לחצו כאן)</label>

                                                    <ul class="file-list">
                                                        <?php  if($Form->tzfile != '' || $Form->tzfile != NULL){
                            
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


                                                    <input type="file" class="custom-file-input alwaysRequired reqOnLoad" id="tzfile" name="tzfile" required="" />

                                                    <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label for="birth_country">ארץ לידה</label>
                                                <input type="text" name="birth_country" class="form-control" id="birth_country" placeholder="" required="" value="<?php echo $Form->birth_country; ?>">

                                            </div>
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">
                                                <label for="city">מקום מגורים</label>
                                                <input type="text" name="city" class="form-control" id="city" placeholder="" required="" value="<?php echo $Form->city; ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">


                                                <label for="cellular">טלפון נייד</label>
                                                <input type="text" name="cellular" class="form-control" id="cellular" placeholder="" required="" value="<?php echo $Form->cellular; ?>">
                                            </div>
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label for="email">דואר אלקטרוני</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="" required="" value="<?php echo $Form->email; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">

                                                <label>מין</label>
                                                <p>
                                                    <input id="female" name="gender" value="0" type="radio" class="xxx" <?php echo 'gender='.$Form->gender; ?>
                                                    <?php echo($Form->gender == '0' ?  'checked' : '' ); ?> required="">
                                                    <label class="custom-control-label" for="debit">נקבה</label>


                                                    <input id="male" name="gender" value="1" type="radio" class="xxx" <?php echo($Form->gender == '1' ? 'checked' : '' ); ?> required="">
                                                    <label class="custom-control-label" for="credit">זכר</label>
                                                </p>


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
                                                <label>בודד בארץ</label>
                                                <p>
                                                    <input id="alone" value="בודד" name="isalone" type="radio" class="xxx" required="" <?php echo($Form->isalone == 'בודד' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">בודד בארץ</label>

                                                    <input id="notalone" value="לא בודד" name="isalone" type="radio" class="xxx" required="" <?php echo($Form->isalone == 'לא בודד' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא בודד</label>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="row" id="is_alone_file" class="hidden">
                                            <div class="col-md-4 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="custom-file" id="iisalonefile">
                                                    <label class="custom-file-label" for="iisalonefile">סטודנט בודד בארץ (לחצו כאן)</label>
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
                              <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                              <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                            </li>';
                          $i++;
                        }
                    }; ?>

                                                    </ul>


                                                    <input type="file" class="custom-file-input alwaysRequired" id="isalonefile" name="isalonefile" />

                                                    <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel">
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
                                                    <label class="input-group-text" for="study-field">תחום לימודים</label>
                                                </div>
                                                <select class=" form-control" name="study_field" id="study-field" required>

                                                    <option value="">נא לבחור ערך</option>
                                                    <?php $Form->get_study_field(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="study_year">שנת לימודים</label>
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
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <label>האם בקשת בעבר מלגת דיקן</label>
                                                <p>
                                                    <input id="asked_schol" value="1" name="asked_schol" type="radio" class="" required="" <?php echo($Form->asked_schol == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">כן</label>


                                                    <input id="not_asked_schol" value="0" name="asked_schol" type="radio" class="" required="" <?php echo($Form->asked_schol == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא</label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" id="asked-schol-div">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div>
                                                    <label>האם קיבלת בעבר מלגת דיקן</label>
                                                    <p>
                                                        <input id="received_schol" value="1" name="received_schol" type="radio" class="xxx" <?php echo($Form->received_schol == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="debit">כן</label>

                                                        <input id="not_received_schol" value="0" name="received_schol" type="radio" class="xxx" <?php echo($Form->received_schol == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="credit">לא</label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>שרות צבאי</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <label for="is_army">סוג השירות</label>
                                                <select class="form-control" name="is_army" id="is_army" required>
                                                    <option value="">יש לבחור ערך</option>
                                                    <option value="צבאי" <?php echo($Form->is_army == 'צבאי' ? 'selected' : '')?>>צבאי</option>
                                                    <option value="לאומי" <?php echo($Form->is_army == 'לאומי' ? 'selected' : '')?>>לאומי</option>
                                                    <option value="ללא" <?php echo($Form->is_army == 'ללא' ? 'selected' : '')?>>ללא</option>
                                                </select>
                                            </div>

                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 army" id="length_army">
                                                <label for="length_army">משך השירות בחודשים</label>
                                                <input type="text" name="length_army" class="form-control" value="<?php echo $Form->length_army; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden" id="is_lochem">
                                                <label>לוחם/ת או תומך/ת לחימה</label>
                                                <p>
                                                    <input id="lochem" name="is_lochem" value="1" type="radio" class="xxx" required="" <?php echo($Form->is_lochem == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">כן</label>

                                                    <input id="lo_lochem" name="is_lochem" value="0" type="radio" class="xxx" required="" <?php echo($Form->is_lochem == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא</label>
                                                </p>
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="custom-file hidden" id="is-lochem-file">
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
                                                    <input type="file" class="custom-file-input alwaysRequired" id="islochemfile" name="islochemfile" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="miluim_pail">
                                                <label>שירות מילואים פעיל</label>
                                                <p>
                                                    <input id="is_miluim" name="is_miluim" value="1" type="radio" class="xxx" required="" <?php echo($Form->is_miluim == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">כן</label>

                                                    <input id="lo_miluim" name="is_miluim" value="0" type="radio" class="xxx" required="" <?php echo($Form->is_miluim == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא</label>
                                                </p>
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="custom-file" id="is-miluim-file">
                                                    <label class="custom-file-label" for="is-miluim-file">במידה והנך משרת שרות מילואים פעיל צרף אישורים (לחצו כאן)</label>
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
                                                    <input type="file" class="custom-file-input alwaysRequired" id="is_miluim_file" name="is_miluim_file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden" id="army_ptor">
                                                <label>פטור משירות מסיבה רפואית בלבד</label>
<p>                                                   <input id="is_army_ptor" name="is_army_ptor" value="1" type="radio" class="xxx" required="" <?php echo($Form->is_army_ptor == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">כן</label>
                                              
                                                    <input id="is_army_no_ptor" name="is_army_ptor" value="0" type="radio" class="xxx" required="" <?php echo($Form->is_army_ptor == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא</label>
                                                </p> 
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="custom-file" id="is_army_ptor_file_cont">
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
                                                    <input type="file" class="custom-file-input alwaysRequired" id="is_army_ptor_file" name="is_army_ptor_file" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>מימון נוסף</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mimun_nosaf">
                                                <label>בשנת הלימודים הנוכחית אקבל השתתפות במימון לימודי על ידי גוף כלשהו</label>
                                                <p>
                                                    <input id="mimun_nosaf" name="mimun_nosaf" value="1" type="radio" class="custom-control-input" required="" <?php echo($Form->mimun_nosaf == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="debit">כן</label>

                                                    <input id="lo_mimun_nosaf" name="mimun_nosaf" value="0" type="radio" class="custom-control-input" checked required="" <?php
                                                        echo($Form->mimun_nosaf == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="credit">לא</label>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>הכנסה</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="taasuka">
                                            <div class="row">
                                                <!-- taasukati -->

                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_state_cont">
                                                    <label for="taasukati_state">מצב תעסוקתי</label>
                                                    <select name="taasukati_state" class="taas form-control" id="taasukati_state" required>
                                                        <option value="0">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                        <option value="2" <?php echo($Form->taasukati_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                        <option value="3" <?php echo($Form->taasukati_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved" id="lo_oved_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="lo_oved_files" name="lo_oved_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden" id="self_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_salary_avg_cont">
                                                    <label for="self_salary_avg">שכר ברוטו</label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_salary_avg" id="self_salary_avg" value="<?php echo $Form->self_salary_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_salary_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_salary_files" name="self_salary_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden employ" id="self_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_employ_avg_cont">
                                                    <label for="self_employ_avg">הכנסה שנתית</label>

                                                    <input type="text" class="form-control" name="self_employ_avg" id="self_employ_avg" value="<?php echo $Form->self_employ_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_employ_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_employ_files" name="self_employ_files" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /taasukati -->
                                        </div>

                                        <div class="row hidden" id="mezonot_state_row_cont">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mezonot_state_cont">
                                                <label for="mezonot">מזונות</label>

                                                <select class="form-control" name="mezonot_state" id="mezonot_state">
                                                    <option value="0">יש לבחור ערך</option>
                                                    <option value="1" <?php echo($Form->mezonot_state == '1' ? 'selected' : '')?>>ללא מזונות</option>
                                                    <option value="2" <?php echo($Form->mezonot_state == '2' ? 'selected' : '')?>>מקבל מזונות</option>
                                                    <option value="3" <?php echo($Form->mezonot_state == '3' ? 'selected' : '')?>>נותן מזונות</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mezonot_files_cont">
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
                                                    <input type="file" class="custom-file-input alwaysRequired" id="mezonot_files" name="mezonot_files" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row hidden mezonot_height_cont" id="">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mezonot_height_div">
                                                <label for="mezonot_height">גובה מזונות (חודשי? שנתי?)</label>

                                                <input type="text" class="form-control" name="mezonot_height" id="mezonot_height" value="<?php echo $Form->mezonot_height; ?>">
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="mezonot_height_files_cont">
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
                                                    <input type="file" class="custom-file-input alwaysRequired" id="mezonot_height_files" name="mezonot_height_files" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /x_content -->
                                </div>

                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>פרטי משפחה</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row hidden" id="is_siua_cont">
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <label>מקבל סיוע</label>
                                                <p>סטודנט אשר אינו נתמך על ידי הוריו, עליו לצרף אישור מגורמי רווחה או עו"ד בלבד</p>
                                                <p>
                                                    <input id="no_siua" value="0" name="is_siua" type="radio" class="custom-control-input ff" required="" <?php echo($Form->is_siua == '0' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="no_siua">לא</label>

                                                    <input id="yes_siua" value="1" name="is_siua" type="radio" class="custom-control-input ff" required="" <?php echo($Form->is_siua == '1' ? 'checked' : '' ); ?>>
                                                    <label class="custom-control-label" for="yes_siua">כן</label>
                                                </p>
                                            </div>


                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                <div class="custom-file" id="is_siua_file_cont">
                                                    <label class="custom-file-label" for="is_siua_file">אישור מגורמי הרווחה</label>
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
                          <a href="./uploads/'.$Form->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Form->year.'-'.$Form->tz.'-'.$Form->id.'-'.$i.'" href="'.$Form->id.'/'.$i.'">הסר קובץ</span>
                        </li>';
                      $i++;
                    }
                }; ?>

                                                    </ul>


                                                    <input type="file" class="custom-file-input alwaysRequired" id="is_siua_file" name="is_siua_file" />

                                                    <!-- <button type="button" onClick="addfile('tz-file','tzfile')">העלאת קובץ נוסף</button> -->

                                                </div>
                                            </div>
                                        </div>

                                        <div class="taasuka hidden taasuka-parents" id="the-taasuka-cont">
                                            <div class="row">
                                                <!-- taasukati  av-->
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_av_state_cont">
                                                    <label for="taasukati_av_state">מצב תעסוקתי אב</label>
                                                    <select name="taasukati_av_state" class="taas form-control" id="taasukati_av_state">
                                                        <option value="0">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_av_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                        <option value="2" <?php echo($Form->taasukati_av_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                        <option value="3" <?php echo($Form->taasukati_av_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved" id="lo_oved_av_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="lo_oved_av_files" name="lo_oved_av_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden" id="self_av_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_av_salary_avg_cont">
                                                    <label for="self_av_salary_avg">שכר ברוטו</label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_av_salary_avg" id="self_av_salary_avg" value="<?php echo $Form->self_av_salary_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_av_salary_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_av_salary_files" name="self_av_salary_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden employ" id="self_av_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_av_employ_avg_cont">
                                                    <label for="self_av_employ_avg">הכנסה שנתית</label>

                                                    <input type="text" class="form-control" name="self_av_employ_avg" id="self_av_employ_avg" value="<?php echo $Form->self_av_employ_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_av_employ_avg_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_av_employ_files" name="self_av_employ_files" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /taasukati av-->
                                        </div>

                                        <div class="taasuka hidden taasuka-parents" id="the-taasuka-cont">
                                            <div class="row">
                                                <!-- taasukati  em-->
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_em_state_cont">
                                                    <label for="taasukati_em_state">מצב תעסוקתי אם</label>
                                                    <select name="taasukati_em_state" class="taas form-control" id="taasukati_em_state">
                                                        <option value="0">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_em_state == '1' ? 'selected' : '')?>>שכירה</option>
                                                        <option value="2" <?php echo($Form->taasukati_em_state == '2' ? 'selected' : '')?>>עצמאית</option>
                                                        <option value="3" <?php echo($Form->taasukati_em_state == '3' ? 'selected' : '')?>>לא עובדת</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved" id="lo_oved_em_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="lo_oved_em_files" name="lo_oved_em_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden" id="self_em_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_em_salary_avg_cont">
                                                    <label for="self_em_salary_avg">שכר ברוטו</label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_em_salary_avg" id="self_em_salary_avg" value="<?php echo $Form->self_em_salary_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_em_salary_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_em_salary_files" name="self_em_salary_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden employ" id="self_em_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_em_employ_avg_cont">
                                                    <label for="self_em_employ_avg">הכנסה שנתית</label>

                                                    <input type="text" class="form-control" name="self_em_employ_avg" id="self_av_employ_avg" value="<?php echo $Form->self_em_employ_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_em_employ_avg_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_em_employ_files" name="self_em_employ_files" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /taasukati em -->
                                        </div>

                                        <div class="taasuka hidden taasuka-zug" id="the-taasuka-zug">
                                            <div class="row">
                                                <!-- taasukati  bat/benzug-->
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="taasukati_zug_state_cont">
                                                    <label for="taasukati_zug_state">מצב תעסוקתי בן/בת זוג</label>
                                                    <select name="taasukati_zug_state" class="taas form-control" id="taasukati_zug_state">
                                                        <option value="0">יש לבחור ערך</option>
                                                        <option value="1" <?php echo($Form->taasukati_zug_state == '1' ? 'selected' : '')?>>שכירה</option>
                                                        <option value="2" <?php echo($Form->taasukati_zug_state == '2' ? 'selected' : '')?>>עצמאית</option>
                                                        <option value="3" <?php echo($Form->taasukati_zug_state == '3' ? 'selected' : '')?>>לא עובדת</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3 hidden starthidden lo-oved" id="lo_oved_zug_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="lo_oved_zug_files" name="lo_oved_zug_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row salary starthidden" id="self_zug_salary">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_zug_salary_avg_cont">
                                                    <label for="self_zug_salary_avg">שכר ברוטו</label>
                                                    <p>יש להזין ממוצע שלושה חודשי שכר אחרונים</p>
                                                    <input type="text" class="form-control" name="self_zug_salary_avg" id="self_zug_salary_avg" value="<?php echo $Form->self_zug_salary_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_zug_salary_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_zug_salary_files" name="self_zug_salary_files" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row hidden starthidden employ" id="self_zug_employ_cont">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_zug_employ_avg_cont">
                                                    <label for="self_zug_employ_avg">הכנסה שנתית</label>

                                                    <input type="text" class="form-control" name="self_zug_employ_avg" id="self_zug_employ_avg" value="<?php echo $Form->self_zug_employ_avg; ?>">
                                                </div>
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_zug_employ_avg_files_cont">
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
                                                        <input type="file" class="custom-file-input alwaysRequired" id="self_zug_employ_files" name="self_zug_employ_files" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /taasukati bat zug-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel">
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

                                                <input type="text" class="form-control" name="self_children" id="self_children" value="<?php echo $Form->self_children; ?>">
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_children_files_cont">
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
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_soldier_cont">
                                                <label for="self_soldier" id="self_soldier_cont_label">

                                                </label>
                                                <p>במידה ואין להשאיר ריק</p>
                                                <input type="text" class="form-control" name="self_soldier" id="self_soldier" value="<?php echo $Form->self_soldier; ?>">
                                            </div>
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
                                            <!-- section9 -->
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_student_cont">
                                                <label for="self_student" id="self_student_cont_label">

                                                </label>

                                                <input type="text" class="form-control" name="self_student" id="self_student" value="<?php echo $Form->self_student; ?>">
                                            </div>
                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3" id="self_student_files_cont">
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
                                    </div>
                                    <!-- /.x_content -->
                                </div>
                                <!-- /xpanel -->

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>מסמכים נוספים</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div>
                                            <!--section 10 -->
                                           
                                            <div class="row" id="is_social_harig">
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label>מצב סוציאלי חריג</label>
                                                   <?php echo $Form->social_harig; ?>
<p>

                                                        <input id="no_social_harig" value="0" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Form->social_harig == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_social_harig">לא</label>

                                                        <input id="yes_social_harig" value="1" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Form->social_harig == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_social_harig">כן</label>
                                                    </p>
                                                </div>


                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <div class="custom-file" id="social_harig_file_cont">
                                                        <label class="custom-file-label" for="social_harig_file">אישור מצב סוציאלי חריג</label>
                                                        <p>למצבים סוציאלים חריגים עליך לצרף אישור רלוונטי- דו"ח סוציאלי או מסמך
                                                            של רשויות הרווחה</p>
                                                        <ul class="file-list">
                                                            <?php  if($Form->social_harig_file != '' || $Form->social_harig_file != NULL){
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
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label>מצב רפואי חריג סטודנט</label>
<p>

                                                        <input id="no_medical_harig" value="0" name="medical_harig" type="radio" class="custom-control-input ff" <?php echo($Form->medical_harig == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_medical_harig">לא</label>
                                                   
                                                        <input id="yes_medical_harig" value="1" name="medical_harig" type="radio" checked class="custom-control-input ff" <?php echo($Form->medical_harig == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_medical_harig">כן</label>
                                                    </p>
                                                </div>


                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
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
                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <label>
                                                        מצב רפואי חריג בן משפחה
                                                    </label>
<p>

                                                        <input id="no_family_harig" value="0" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Form->family_harig == '0' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="no_family_harig">לא</label>
                                                   
                                                        <input id="yes_family_harig" value="1" name="family_harig" type="radio" checked class="custom-control-input ff" <?php echo($Form->family_harig == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="yes_family_harig">כן</label>
                                                    </p>
                                                </div>

                                                <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
                                                    <div class="custom-file" id="family_harig_file_cont">
                                                        <label class="custom-file-label" for="family_harig_file">אישור מצב רפואי חריג בן משפחה</label>
                                                        <p>במידה ומי מבני משפחתך הקרובה בעל מצב רפואי חריג יש לצרף מסמכים מרופא
                                                            מומחה</p>
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
                                                    <textarea class="form-control" name="explanation" rows="5" id="explanation">
                                                        <?php echo $Form->explanation; ?>
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-md-pull-2 col-sm-12 mb-3">
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
                                    <!-- /.x_content -->
                                </div>

                                <input type="hidden" name="year" class="form-control" id="year" autocomplete='given-year' placeholder="" required="" value="<?php echo $year; ?>"
                                    readonly>
                                <input type="hidden" name="submitted" class="form-control" id="submitted" placeholder="" required="" value="1" readonly>
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



 <img src="./assets/images/logo.png" alt="לוגו המכללה האקדמית אחוה">

                       
    



            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
            <!-- <script src="./vendors/parsleyjs/dist/parsley.js"></script> -->
            <!-- <script src="./vendors/parsleyjs/dist/i18n/he.js"></script>
            <script src="./vendors/parsleyjs/dist/i18n/he.extra.js"></script> -->

            <!-- iCheck -->
            <script src="./gentela/vendors/iCheck/icheck.min.js"></script>
            <!-- <script src="./gentela/build/js/custom.js"></script> -->


            <script src="./api/js/js.js"></script>
            <script src="./api/js/fileupload.js"></script>
            <script src="./api/js/removefile.js"></script>


            <!-- <script>
                $('#studentForm').parsley();
            </script> -->



    </body>

    </html>