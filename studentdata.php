<?php
    include './api/incg.php';
    $Dash = new Dashboard($db);

    $id = $_GET['id'];

    $Dash->get_student_data($id);

    //confirm data is o.k and submit to next confirmation level
    if(isset($_POST['submit'])){
      

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
        // $Dash->id = $id;
        // $Dash->tz = $tz;
        // $Dash->year = $year;
      
        
        // $Dash->datas = $meida;
    
        $Dash->datas = serialize($datas);

        $Dash->update_user_data($id);
    };
  
    // var_dump($Dash->datas);
    //data is missing documents and send back to user edit

    if(isset($_POST['return'])){
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
        // $Dash->id = $id;
        // $Dash->tz = $tz;
        // $Dash->year = $year;
      
        
        // $Dash->datas = $meida;
    
        $Dash->datas = serialize($datas);
        $Dash->update_user_data($id);
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

    <body class="nav-md">
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
                    <!-- top tiles -->
                    <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> מספר הסטודנטים שהגישו בקשה למלגה</span>
                            <div class="count">
                                <?php  $Dash->count_submitted_rows(); ?>
                            </div>
                            <span class="count_bottom">
                                <i class="green">4% </i> From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-users"></i> מספר הסטודנטים שהחלו בתהליך</span>
                            <div class="count">
                                <?php  $Dash->count_all_rows(); ?>
                            </div>
                            <span class="count_bottom">
                                <i class="green">
                                    <i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Males</span>
                            <div class="count green">2,500</div>
                            <span class="count_bottom">
                                <i class="green">
                                    <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Females</span>
                            <div class="count">4,567</div>
                            <span class="count_bottom">
                                <i class="red">
                                    <i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Collections</span>
                            <div class="count">2,315</div>
                            <span class="count_bottom">
                                <i class="green">
                                    <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">
                                <i class="fa fa-user"></i> Total Connections</span>
                            <div class="count">7,325</div>
                            <span class="count_bottom">
                                <i class="green">
                                    <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <!-- /top tiles -->

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
                                                            <input type="text" name="fname" value="<?php echo $Dash->fname; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>שם משפחה</td>
                                                        <td>
                                                            <input type="text" name="lname" value="<?php echo $Dash->lname; ?>" />
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
                                                            <input type="checkbox" class="flat"> קובץ ת.ז</td>
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
                                                            <input type="checkbox" class="flat"> קובץ המעיד כי בסטודנט בודד בארץ</td>
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

                                                    <tr id="is-lochem-file">
                                                        <td>
                                                            <input type="checkbox" name="is_lochem_file_approved" class="flat"> קובץ לוחם</td>
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
                                                            <input type="checkbox" name="is_army_ptor_file_approved" class="flat"> מסמכי פטור משירות צבאי</td>
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
                                                            <input type="checkbox" name="is_miluim_file_approved" class="flat"> אישור המעיד על שירות מילואים פעיל</td>
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
                                                            <option value="3" <?php echo($Dash->taasukati_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                
                                                    <tr class="starthidden lo-oved" id="lo_oved_files">

                                                        <td>אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_files'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_salary">

                                                        <td>ממוצע שלושה חודשי שכר אחרונים(ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_salary_avg" value="<?php echo $Dash->self_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_salary">

                                                        <td>קבצי שלושה תלושי שכר אחרונים</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('self_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_employ_avg_cont">

                                                            <td>הכנסה שנתית</td>
                                                            <td>
                                                                <input type="text" name="self_employ_avg" value="<?php echo $Dash->self_employ_avg; ?>">

                                                            </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_employ_avg_cont">

                                                            <td>דו"ח שומה</td>
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

                                                        <td>אסמכתא על אי קבלת מזונות</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('mezonot_files'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="mezonot_height_cont">

                                                        <td>גובה מזונות</td>
                                                        <td>
                                                            <input type="text" name="mezonot_height" value="<?php echo $Dash->mezonot_height; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="mezonot_height_cont">

                                                        <td>אישור גובה מזונות</td>
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

                                                        <td>אישור מגורמי הרווחה</td>
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
                                                            <option value="3" <?php echo($Dash->taasukati_av_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_av_files">

                                                        <td>אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_av_files'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_av_salary_files">

                                                        <td>ממוצע שלושה חודשי שכר אחרונים אב(ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_av_salary_avg" value="<?php echo $Dash->self_av_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_av_salary_files">

                                                        <td>קבצי שלושה תלושי שכר אחרונים</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_av_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_av_employ_avg">

                                                        <td>הכנסה שנתית</td>
                                                        <td>
                                                            <input type="text" name="self_av_employ_avg" value="<?php echo $Dash->self_av_employ_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_av_employ_files">

                                                        <td>דו"ח שומה</td>
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
                                                        <select name="taasukati_av_state" class="taas" id="taasukati_av_state" required>
                                                            <option value="0">יש לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->taasukati_em_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                            <option value="2" <?php echo($Dash->taasukati_em_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                            <option value="3" <?php echo($Dash->taasukati_em_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_em_files">

                                                        <td>אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_em_files'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_em_salary">

                                                        <td>ממוצע שלושה חודשי שכר אחרונים אם (ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_em_salary_avg" value="<?php echo $Dash->self_em_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_em_salary_files">

                                                        <td>קבצי שלושה תלושי שכר אחרונים</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_em_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_em_employ_avg">

                                                        <td>הכנסה שנתית</td>
                                                        <td>
                                                            <input type="text" name="self_em_employ_avg" value="<?php echo $Dash->self_em_employ_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_em_employ_files">

                                                        <td>דו"ח שומה</td>
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
                                                            <option value="3" <?php echo($Dash->taasukati_zug_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                        </select>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden lo-oved" id="lo_oved_zug_files">

                                                        <td>אישור מעמד לא עובד מביטוח לאומי</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('lo_oved_zug_files'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_zug_salary">

                                                        <td>ממוצע שלושה חודשי שכר אחרונים בן/בת זוג (ברוטו)</td>
                                                        <td>
                                                        <input type="text" name="self_zug_salary_avg" value="<?php echo $Dash->self_zug_salary_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden salary" id="self_zug_salary_files">

                                                        <td>קבצי שלושה תלושי שכר אחרונים בן/בת זוג</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_zug_salary_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden employ" id="self_zug_employ_avg">

                                                        <td>הכנסה שנתית</td>
                                                        <td>
                                                            <input type="text" name="self_zug_employ_avg" value="<?php echo $Dash->self_zug_employ_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden employ" id="self_zug_employ_files">

                                                        <td>דו"ח שומה</td>
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
                                                        <input type="text" name="self_children" value="<?php echo $Dash->self_children; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden children_cont" id="">

                                                        <td>חייב בהעלאת קובץ ספח תעודות זהות</td>
                                                        <td>
                                                            <?php  $Dash->load_clicked_image('self_children_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden soldier_cont" id="">

                                                        <td id="self_soldier_cont_label"></td>
                                                        <td>
                                                         <input type="text" name="self_soldier" value="<?php echo $Dash->self_soldier; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden soldier_cont" id="">

                                                        <td>חייב בהעלאת קובץ תעודת חוגר/קצין</td>
                                                        <td>
                                                         <?php  $Dash->load_clicked_image('self_soldier_files'); ?>
                                                        </td>
                                                    </tr>

                                                    <tr class="starthidden student_cont" id="">

                                                        <td id="self_student_cont_label"></td>
                                                        <td>
                                                            <input type="text" name="self_student" value="<?php echo $Dash->self_student; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="starthidden student_cont" id="">

                                                        <td>אם כן חייב בהעלאת אישור לימודים</td>
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
                                                            <input id="yes_social_harig" value="1" name="social_harig" type="radio" checked class="custom-control-input ff" <?php echo($Dash->social_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_social_harig">כן</label>
                                                            </div>
                                                        </div>

                                                        </td>
                                                    </tr>
                                                    <tr class="" id="social_harig_file_cont">

                                                        <td>אישור מצב סוציאלי חריג</td>
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
                                                                <input id="yes_medical_harig" value="1" name="medical_harig" type="radio" checked class="custom-control-input ff" <?php echo($Dash->medical_harig == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="yes_medical_harig">כן</label>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="" id="medical_harig_file_cont">

                                                        <td>אישור מצב רפואי חריג סטודנט</td>
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
                                                            <input id="yes_family_harig" value="1" name="family_harig" type="radio" checked class="custom-control-input ff" <?php echo($Dash->family_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_family_harig">כן</label>
                                                            </div>
                                                           

                                                        </td>
                                                        </tr>
                                                        <tr class="" id="family_harig_file_cont">

                                                        <td> אישור מצב סוציאלי חריג בן משפחה</td>
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
                                                            <p><?php echo $Dash->explanation; ?></p>

                                                        </td>
                                                    </tr>
                                                    <tr class="" id="social_harig_file_cont">

                                                        <td>אישור מצב סוציאלי חריג</td>
                                                        <td>
                                                        <?php  $Dash->load_clicked_image('explanation_file'); ?>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <input type="submit" name="submit" value="אשר בקשה">
                                            <input type="submit" name="return" value="החזר לשולח">
                                            
<!-- <div class="custom-file">
    <label class="custom-file-label">קובץ לוחם (לחצו כאן)</label>

    <ul class="file-list">
        <li><a href="./uploads/9999999/4.pdf" target="_blank"> 4.pdf </a>
        <span class="item-file" id="2018-9999999-21314-0">הסר קובץ</span></li>
    </ul>
<input type="file" class="custom-file-input alwaysRequired">
</div> -->
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