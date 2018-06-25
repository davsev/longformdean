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
                <div class="col-md-3 left_col">
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
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <form name="studentdata" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                                            <h3>פרטים אישיים</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>

                                                        <th>שם</th>
                                                        <th>ערך</th>
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
                                                            <input type="text" name="lname" value="<?php echo $Dash->tz; ?>" />
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
                                                            <select name="family_state" id="">
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
                                                        <td>
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
                                                        <th>שם</th>
                                                        <th>ערך</th>
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

                                                    <tr>
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
                                                    <tr id="is_army_ptor_file">
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
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('is_miluim_file');
                                                                    ?>
                                                        </td>
                                                    </tr>

                                                </tbody>


                                            </table>

                                            <h3>לימודים אקדמיים בשנה"ל הנוכחית</h3>
                                            <table class="table table-striped table-bordered bulk_action">
                                                <thead>
                                                    <tr>
                                                        <th>שם</th>
                                                        <th>ערך</th>
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
                                            <input type="submit" name="submit" value="אשר בקשה">
                                            <input type="submit" name="return" value="החזר לשולח">
                                        </form>

                                        <!-- form start -->
                                        <form action="" id="studentForm" method="POST" class="needs-validation" enctype="multipart/form-data" data-parsley-validate=""
                                            ovalidate="" action="<?php $_SERVER['PHP_SELF'];?>">

                                            <div>
                                                <!-- section1 -->
                                                <h3>פרטים אישיים</h3>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <?php echo $Dash->fname; ?>
                                                        <label for="fname">שם פרטי</label>
                                                        <input type="text" name="fname" class="form-control" id="fname" autocomplete='given-name' placeholder="" required="" value="<?php echo $Dash->fname; ?>">


                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="lname">שם משפחה</label>
                                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="" required="" value="<?php echo $Dash->lname; ?>">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="tz">תעודת זהות</label>
                                                        <input type="text" name="tz" class="form-control" id="tz" autocomplete='given-name' placeholder="" required="" value="<?php echo $Dash->tz; ?>"
                                                            readonly>

                                                    </div>
                                                    <div class="col-md-12 mb-3">

                                                        <div class="custom-file" id="tz-file">
                                                            <label class="custom-file-label" for="tzfile">צילום ת.ז</label>

                                                            <?php  $Dash->load_clicked_image('tzfile'); ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 mb-3">

                                                        <label for="birth_country">ארץ לידה</label>
                                                        <input type="text" name="birth_country" class="form-control" id="birth_country" placeholder="" required="" value="<?php echo $Dash->birth_country; ?>">

                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="city">מקום מגורים</label>
                                                        <input type="text" name="city" class="form-control" id="city" placeholder="" required="" value="<?php echo $Dash->city; ?>">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 mb-3">

                                                        <label for="cellular">טלפון נייד</label>
                                                        <input type="text" name="cellular" class="form-control" id="cellular" placeholder="" required="" value="<?php echo $Dash->cellular; ?>">
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label for="email">דואר אלקטרוני</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="" required="" value="<?php echo $Dash->email; ?>">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label>מין</label>
                                                        <div class="custom-control custom-radio">
                                                            <input id="female" name="gender" value="0" type="radio" class="custom-control-input" <?php echo 'gender='.$Dash->gender; ?>
                                                            <?php echo($Dash->gender == '0' ?  'checked' : '' ); ?> required="">
                                                            <label class="custom-control-label" for="debit">נקבה</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="male" name="gender" value="1" type="radio" class="custom-control-input" <?php echo($Dash->gender == '1' ? 'checked' : '' ); ?> required="">
                                                            <label class="custom-control-label" for="credit">זכר</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3" id="family_state_cont">
                                                        <label for="family_state">מצב משפחתי</label>

                                                        <select name="family_state" class="ff" id="family_state" required="">
                                                            <option value="">יש לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->family_state == '1' ? 'selected' : '')?>>רווק</option>
                                                            <option value="2" <?php echo($Dash->family_state == '2' ? 'selected' : '')?>>נשוי</option>
                                                            <option value="3" <?php echo($Dash->family_state == '3' ? 'selected' : '')?>>גרוש</option>
                                                            <option value="4" <?php echo($Dash->family_state == '4' ? 'selected' : '')?>>אלמן</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label>בודד בארץ</label>
                                                        <div class="custom-control custom-radio">
                                                            <input id="alone" value="בודד" name="isalone" type="radio" class="custom-control-input" required="" <?php echo($Dash->isalone == 'בודד' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="debit">בודד בארץ</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="notalone" value="לא בודד" name="isalone" type="radio" class="custom-control-input" required="" <?php echo($Dash->isalone == 'לא בודד' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="credit">לא בודד</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" id="is_alone_file" style="display: none">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="isalonefile">
                                                            <label class="custom-file-label" for="isalonefile">סטודנט בודד בארץ (לחצו כאן)</label>
                                                            <?php  $Dash->load_clicked_image('isalonefile'); ?>
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

                                                        <?php $Dash->get_study_field(); ?>


                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="study_year">שנת לימודים</label>
                                                        </div>
                                                        <?php echo $Dash->study_year;?>

                                                        <select class="custom-select" name="study_year" id="study_year" required="">
                                                            <option value="">נא לבחור ערך</option>
                                                            <option value="1" <?php echo($Dash->study_year == 1 ? 'selected' : '')?>>א</option>
                                                            <option value="2" <?php echo($Dash->study_year == 2 ? 'selected' : '')?>>ב</option>
                                                            <option value="3" <?php echo($Dash->study_year == 3 ? 'selected' : '')?>>ג</option>
                                                            <option value="4" <?php echo($Dash->study_year == 4 ? 'selected' : '')?>>ד</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label>האם בקשת בעבר מלגת דיקאן</label>
                                                        <div class="custom-control custom-radio">
                                                            <input id="asked_schol" value="1" name="asked_schol" type="radio" class="custom-control-input" required="" <?php echo($Dash->asked_schol == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="debit">כן</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="not_asked_schol" value="0" name="asked_schol" type="radio" class="custom-control-input" required="" <?php echo($Dash->asked_schol == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="credit">לא</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div id="asked-schol-div">
                                                            <label>האם קיבלת בעבר מלגת דיקאן</label>
                                                            <div class="custom-control custom-radio">
                                                                <input id="received_schol" value="1" name="received_schol" type="radio" class="custom-control-input" <?php echo($Dash->received_schol == '1' ? 'checked' : '' ); ?>>
                                                                <label class="custom-control-label" for="debit">כן</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input id="not_received_schol" value="0" name="received_schol" type="radio" class="custom-control-input" <?php echo($Dash->received_schol == '0' ? 'checked' : '' ); ?>>
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
                                                            <option value="צבאי" <?php echo($Dash->is_army == 'צבאי' ? 'selected' : '')?>>צבאי</option>
                                                            <option value="לאומי" <?php echo($Dash->is_army == 'לאומי' ? 'selected' : '')?>>לאומי</option>
                                                            <option value="ללא" <?php echo($Dash->is_army == 'ללא' ? 'selected' : '')?>>ללא</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-12 mb-3 army" id="length_army">
                                                        <label for="length_army">משך השירות בחודשים</label>
                                                        <input type="text" name="length_army" class="form-control" value="<?php echo $Dash->length_army; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3 hidden" id="is_lochem">
                                                        <label>לוחם/ת או תומך/ת לחימה</label>
                                                        <div class="custom-control custom-radio">
                                                            <input id="lochem" name="is_lochem" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_lochem == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="debit">כן</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="lo_lochem" name="is_lochem" value="0" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_lochem == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="credit">לא</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="is-lochem-file">
                                                            <label class="custom-file-label" for="islochemfile">קובץ לוחם (לחצו כאן)</label>

                                                            <ul class="file-list">
                                                                <?php  if($Dash->islochemfile != '' || $Dash->islochemfile != NULL){
                $thefile = json_decode($Dash->islochemfile);
                $i = 0;
                foreach($thefile as $filename){
                  echo '
                    <li>
                      <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                      <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <input id="is_army_ptor" name="is_army_ptor" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_army_ptor == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="debit">כן</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="is_army_no_ptor" name="is_army_ptor" value="0" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_army_ptor == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="credit">לא</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="is_army_ptor_file">
                                                            <label class="custom-file-label" for="is_army_ptor_file">נא לצרף מסמכי פטור</label>
                                                            <p>במידה וקיבלת פטור משירות מסיבה רפואית, צרף מסמכים</p>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->is_army_ptor_file != '' || $Dash->is_army_ptor_file != NULL){
                $thefile = json_decode($Dash->is_army_ptor_file);
                $i = 0;
                foreach($thefile as $filename){
                  echo '
                    <li>
                      <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                      <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <input id="is_miluim" name="is_miluim" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_miluim == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="debit">כן</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="lo_miluim" name="is_miluim" value="0" type="radio" class="custom-control-input" required="" <?php echo($Dash->is_miluim == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="credit">לא</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="is-miluim-file">
                                                            <label class="custom-file-label" for="is_miluim_file">במידה והנך משרת שרות מילואים פעיל צרף אישורים (לחצו כאן)</label>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->is_miluim_file != '' || $Dash->is_miluim_file != NULL){
                $thefile = json_decode($Dash->is_miluim_file);
                $i = 0;
                foreach($thefile as $filename){
                  echo '
                    <li>
                      <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                      <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                        <input id="mimun_nosaf" name="mimun_nosaf" value="1" type="radio" class="custom-control-input" required="" <?php echo($Dash->mimun_nosaf == '1' ? 'checked' : '' ); ?>>
                                                        <label class="custom-control-label" for="debit">כן</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input id="lo_mimun_nosaf" name="mimun_nosaf" value="0" type="radio" class="custom-control-input" checked required="" <?php
                                                            echo($Dash->mimun_nosaf == '0' ? 'checked' : '' ); ?>>
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
                                                                <option value="1" <?php echo($Dash->taasukati_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                                <option value="2" <?php echo($Dash->taasukati_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                                <option value="3" <?php echo($Dash->taasukati_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_files_cont">
                                                            <div class="custom-file" id="lo_oved_files">
                                                                <label class="custom-file-label" for="lo_oved_files">במידה ולא עובד</label>
                                                                <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->lo_oved_files != '' || $Dash->lo_oved_files != NULL){
                  $thefile = json_decode($Dash->lo_oved_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <input type="text" class="form-control" name="self_salary_avg" id="self_salary_avg" value="<?php echo $Dash->self_salary_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_salary_files_cont">
                                                            <div class="custom-file" id="self_salary_files">
                                                                <label class="custom-file-label" for="self_salary_files">שלושה תלושי שכר אחרונים</label>
                                                                <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_salary_files != '' || $Dash->self_salary_files != NULL){
                  $thefile = json_decode($Dash->self_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                            <input type="text" class="form-control" name="self_employ_avg" id="self_employ_avg" value="<?php echo $Dash->self_employ_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_employ_files_cont">
                                                            <div class="custom-file" id="self_employ_files">
                                                                <label class="custom-file-label" for="self_employ_files">דוח שומה</label>

                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_employ_files != '' || $Dash->self_employ_files != NULL){
                  $thefile = json_decode($Dash->self_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <option value="1" <?php echo($Dash->mezonot_state == '1' ? 'selected' : '')?>>ללא מזונות</option>
                                                            <option value="2" <?php echo($Dash->mezonot_state == '2' ? 'selected' : '')?>>מקבל מזונות</option>
                                                            <option value="3" <?php echo($Dash->mezonot_state == '3' ? 'selected' : '')?>>נותן מזונות</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-3" id="mezonot_files_cont">
                                                        <div class="custom-file hidden" id="mezonot_files_div">
                                                            <label class="custom-file-label" for="mezonot_files">אסמכתא על אי קבלת מזונות</label>

                                                            <ul class="file-list">
                                                                <?php  if($Dash->mezonot_files != '' || $Dash->mezonot_files != NULL){
                  $thefile = json_decode($Dash->mezonot_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                        <input type="text" class="form-control" name="mezonot_height" id="mezonot_height" value="<?php echo $Dash->mezonot_height; ?>">
                                                    </div>
                                                    <div class="col-md-12 mb-3" id="mezonot_height_files_cont">
                                                        <div class="custom-file" id="mezonot_height_files_div">
                                                            <label class="custom-file-label" for="mezonot_height_files">אישור גובה מזונות</label>

                                                            <ul class="file-list">
                                                                <?php  if($Dash->mezonot_height_files != '' || $Dash->mezonot_height_files != NULL){
                  $thefile = json_decode($Dash->mezonot_height_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                        <p>סטודנט אשר אינו נתמך על ידי הוריו, עליו לצרף אישור מגורמי רווחה או
                                                            עו"ד בלבד</p>
                                                        <div class="custom-control custom-radio">
                                                            <input id="no_siua" value="0" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Dash->is_siua == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_siua">לא</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="yes_siua" value="1" name="is_siua" type="radio" class="custom-control-input ff" <?php echo($Dash->is_siua == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_siua">כן</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="is_siua_file_cont">
                                                            <label class="custom-file-label" for="is_siua_file">אישור מגורמי הרווחה</label>
                                                            <p>סטודנט אשר אינו נתמך על ידי הוריו, עליו לצרף אישור מגורמי הרווחה
                                                                או עו"ד בלבד</p>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->is_siua_file != '' || $Dash->is_siua_file != NULL){
                    //var_dump(unserialize($Dash->tzfile));
                    $thefile = json_decode($Dash->is_siua_file);
                    $i = 0;
                    foreach($thefile as $filename){
                      
                      echo '
                        <li>
                          <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                                <option value="1" <?php echo($Dash->taasukati_av_state == '1' ? 'selected' : '')?>>שכיר</option>
                                                                <option value="2" <?php echo($Dash->taasukati_av_state == '2' ? 'selected' : '')?>>עצמאי</option>
                                                                <option value="3" <?php echo($Dash->taasukati_av_state == '3' ? 'selected' : '')?>>לא עובד</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_av_files_cont">
                                                            <div class="custom-file" id="lo_oved_av_files_div">
                                                                <label class="custom-file-label" for="lo_oved_av_files">במידה ולא עובד</label>
                                                                <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->lo_oved_av_files != '' || $Dash->lo_oved_av_files != NULL){
                  $thefile = json_decode($Dash->lo_oved_av_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <input type="text" class="form-control" name="self_av_salary_avg" id="self_av_salary_avg" value="<?php echo $Dash->self_av_salary_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_av_salary_files_cont">
                                                            <div class="custom-file" id="self_av_salary_files_div">
                                                                <label class="custom-file-label" for="self_av_salary_files">שלושה תלושי שכר אחרונים</label>
                                                                <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_av_salary_files != '' || $Dash->self_av_salary_files != NULL){
                  $thefile = json_decode($Dash->self_av_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                            <input type="text" class="form-control" name="self_av_employ_avg" id="self_av_employ_avg" value="<?php echo $Dash->self_av_employ_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_av_employ_avg_files_cont">
                                                            <div class="custom-file" id="self_av_employ_avg_files_div">
                                                                <label class="custom-file-label" for="self_av_employ_files">דוח שומה</label>

                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_av_employ_files != '' || $Dash->self_av_employ_files != NULL){
                  $thefile = json_decode($Dash->self_av_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                                <option value="1" <?php echo($Dash->taasukati_em_state == '1' ? 'selected' : '')?>>שכירה</option>
                                                                <option value="2" <?php echo($Dash->taasukati_em_state == '2' ? 'selected' : '')?>>עצמאית</option>
                                                                <option value="3" <?php echo($Dash->taasukati_em_state == '3' ? 'selected' : '')?>>לא עובדת</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_em_files_cont">
                                                            <div class="custom-file" id="lo_oved_em_files_div">
                                                                <label class="custom-file-label" for="lo_oved_em_files">במידה ולא עובד</label>
                                                                <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->lo_oved_em_files != '' || $Dash->lo_oved_em_files != NULL){
                  $thefile = json_decode($Dash->lo_oved_em_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <input type="text" class="form-control" name="self_em_salary_avg" id="self_em_salary_avg" value="<?php echo $Dash->self_em_salary_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_em_salary_files_cont">
                                                            <div class="custom-file" id="self_em_salary_files_div">
                                                                <label class="custom-file-label" for="self_em_salary_files">שלושה תלושי שכר אחרונים</label>
                                                                <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_em_salary_files != '' || $Dash->self_em_salary_files != NULL){
                  $thefile = json_decode($Dash->self_em_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                            <input type="text" class="form-control" name="self_em_employ_avg" id="self_av_employ_avg" value="<?php echo $Dash->self_em_employ_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_em_employ_avg_files_cont">
                                                            <div class="custom-file" id="self_em_employ_avg_files_div">
                                                                <label class="custom-file-label" for="self_em_employ_files">דוח שומה</label>

                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_em_employ_files != '' || $Dash->self_em_employ_files != NULL){
                  $thefile = json_decode($Dash->self_em_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                                <option value="1" <?php echo($Dash->taasukati_zug_state == '1' ? 'selected' : '')?>>שכירה</option>
                                                                <option value="2" <?php echo($Dash->taasukati_zug_state == '2' ? 'selected' : '')?>>עצמאית</option>
                                                                <option value="3" <?php echo($Dash->taasukati_zug_state == '3' ? 'selected' : '')?>>לא עובדת</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3 hidden starthidden lo-oved" id="lo_oved_zug_files_cont">
                                                            <div class="custom-file" id="lo_oved_zug_files_div">
                                                                <label class="custom-file-label" for="lo_oved_zug_files">במידה ולא עובד</label>
                                                                <p>נא לצרף אישור מעמד לא עובד מביטוח לאומי</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->lo_oved_zug_files != '' || $Dash->lo_oved_zug_files != NULL){
                  $thefile = json_decode($Dash->lo_oved_zug_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <input type="text" class="form-control" name="self_zug_salary_avg" id="self_zug_salary_avg" value="<?php echo $Dash->self_zug_salary_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_zug_salary_files_cont">
                                                            <div class="custom-file" id="self_zug_salary_files_div">
                                                                <label class="custom-file-label" for="self_zug_salary_files">שלושה תלושי שכר אחרונים</label>
                                                                <p>יש לצרף שלושה תלושי שכר אחרונים</p>
                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_zug_salary_files != '' || $Dash->self_zug_salary_files != NULL){
                  $thefile = json_decode($Dash->self_zug_salary_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                            <input type="text" class="form-control" name="self_zug_employ_avg" id="self_zug_employ_avg" value="<?php echo $Dash->self_zug_employ_avg; ?>">
                                                        </div>
                                                        <div class="col-md-12 mb-3" id="self_zug_employ_avg_files_cont">
                                                            <div class="custom-file" id="self_zug_employ_avg_files_div">
                                                                <label class="custom-file-label" for="self_zug_employ_files">דוח שומה</label>

                                                                <ul class="file-list">
                                                                    <?php  if($Dash->self_zug_employ_files != '' || $Dash->self_zug_employ_files != NULL){
                  $thefile = json_decode($Dash->self_zug_employ_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                    <input type="text" class="form-control" name="self_children" id="self_children" value="<?php echo $Dash->self_children; ?>">
                                                </div>
                                                <div class="col-md-12 mb-3" id="self_children_files_cont">
                                                    <div class="custom-file" id="self_children_files_div">
                                                        <label class="custom-file-label" for="self_children_files">חייב בהעלאת קובץ ספח תעודות זהות</label>

                                                        <ul class="file-list">
                                                            <?php  if($Dash->self_children_files != '' || $Dash->self_children_files != NULL){
                  $thefile = json_decode($Dash->self_children_files);
                  $i = 0;
                  foreach($thefile as $filename){
                    echo '
                      <li>
                        <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                        <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                    <input type="text" class="form-control" name="self_soldier" id="self_soldier" value="<?php echo $Dash->self_soldier; ?>">
                                                </div>
                                                <div class="col-md-12 mb-3" id="self_soldier_files_cont">
                                                    <div class="custom-file" id="self_soldier_files_div">
                                                        <label class="custom-file-label" for="self_soldier_files">
                                                            חייב בהעלאת קובץ תעודת חוגר/קצין
                                                        </label>

                                                        <ul class="file-list">
                                                            <?php  if($Dash->self_soldier_files != '' || $Dash->self_soldier_files != NULL){
                        $thefile = json_decode($Dash->self_soldier_files);
                        $i = 0;
                        foreach($thefile as $filename){
                        echo '
                            <li>
                            <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                            <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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

                                                    <input type="text" class="form-control" name="self_student" id="self_student" value="<?php echo $Dash->self_student; ?>">
                                                </div>
                                                <div class="col-md-12 mb-3" id="self_student_files_cont">
                                                    <div class="custom-file" id="self_student_files_div">
                                                        <label class="custom-file-label" for="self_student_files">
                                                            אם כן חייב בהעלאת אישור לימודים
                                                        </label>

                                                        <ul class="file-list">
                                                            <?php  if($Dash->self_student_files != '' || $Dash->self_student_files != NULL){
                $thefile = json_decode($Dash->self_student_files);
                $i = 0;
                foreach($thefile as $filename){
                echo '
                    <li>
                    <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                    <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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


                                                            <input id="no_social_harig" value="0" name="social_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->social_harig == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_social_harig">לא</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="yes_social_harig" value="1" name="social_harig" type="radio" checked class="custom-control-input ff" <?php echo($Dash->social_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_social_harig">כן</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="social_harig_file_cont">
                                                            <label class="custom-file-label" for="social_harig_file">אישור מצב סוציאלי חריג</label>
                                                            <p>למצבים סוציאלים חריגים עליך לצרף אישור רלוונטי- דו"ח סוציאלי
                                                                או מסמך של רשויות הרווחה</p>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->social_harig_file != '' || $Dash->social_harig_file != NULL){
                    //var_dump(unserialize($Dash->tzfile));
                    $thefile = json_decode($Dash->social_harig_file);
                    $i = 0;
                    foreach($thefile as $filename){
                      
                      echo '
                        <li>
                          <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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


                                                            <input id="no_medical_harig" value="0" name="medical_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->medical_harig == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_medical_harig">לא</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="yes_medical_harig" value="1" name="medical_harig" type="radio" checked class="custom-control-input ff" <?php echo($Dash->medical_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_medical_harig">כן</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="medical_harig_file_cont">
                                                            <label class="custom-file-label" for="medical_harig_file">אישור מצב רפואי חריג</label>
                                                            <p>למצבים רפואיים חריגים עליך לצרף מסמך מרופא מומחה</p>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->medical_harig_file != '' || $Dash->medical_harig_file != NULL){
                    //var_dump(unserialize($Dash->tzfile));
                    $thefile = json_decode($Dash->medical_harig_file);
                    $i = 0;
                    foreach($thefile as $filename){
                      
                      echo '
                        <li>
                          <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                          <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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


                                                            <input id="no_family_harig" value="0" name="family_harig" type="radio" class="custom-control-input ff" <?php echo($Dash->family_harig == '0' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="no_family_harig">לא</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input id="yes_family_harig" value="1" name="family_harig" type="radio" checked class="custom-control-input ff" <?php echo($Dash->family_harig == '1' ? 'checked' : '' ); ?>>
                                                            <label class="custom-control-label" for="yes_family_harig">כן</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="family_harig_file_cont">
                                                            <label class="custom-file-label" for="family_harig_file">אישור מצב רפואי חריג בן משפחה</label>
                                                            <p>במידה ומי מבני משפחתך הקרובה בעל מצב רפואי חריג יש לצרף מסמכים
                                                                מרופא מומחה</p>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->family_harig_file != '' || $Dash->family_harig_file != NULL){
                      //var_dump(unserialize($Dash->tzfile));
                      $thefile = json_decode($Dash->family_harig_file);
                      $i = 0;
                      foreach($thefile as $filename){
                        
                        echo '
                          <li>
                            <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                            <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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
                                                            <textarea class="form-control" name="explanation" rows="5" id="explanation">
                                                                <?php echo $Dash->explanation; ?>
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <div class="custom-file" id="explanation_file_cont">
                                                            <label class="custom-file-label" for="explanation_file">ניתן לצרף מכתב נלווה</label>
                                                            <ul class="file-list">
                                                                <?php  if($Dash->explanation_file != '' || $Dash->explanation_file != NULL){
                      //var_dump(unserialize($Dash->tzfile));
                      $thefile = json_decode($Dash->explanation_file);
                      $i = 0;
                      foreach($thefile as $filename){
                        
                        echo '
                          <li>
                            <a href="./uploads/'.$Dash->tz.'/'.$filename.'" target="_blank"> '.$filename.' </a>
                            <span class="item-file" id="'.$Dash->year.'-'.$Dash->tz.'-'.$Dash->id.'-'.$i.'" href="'.$Dash->id.'/'.$i.'">הסר קובץ</span>
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