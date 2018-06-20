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
        // $Form->id = $id;
        // $Form->tz = $tz;
        // $Form->year = $year;
      
        
        // $Form->datas = $meida;
    
        $Dash->datas = serialize($datas);

        $Dash->update_user_data($id);
    };
  
    var_dump($Dash->datas);
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
        // $Form->id = $id;
        // $Form->tz = $tz;
        // $Form->year = $year;
      
        
        // $Form->datas = $meida;
    
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
                                        <h3>פרטי הסטודנט
                                            <?php echo $Dash->fname . ' ' . $Dash->lname?>
                                        </h3>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <form name="studentdata" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
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
                                                        <td>
                                                        <input type="checkbox" class="flat">
                                                            קובץ ת.ז</td>
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
                                                            <input type="text" name="gender" value="<?php echo $Dash->gender; ?>" />
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
                                                            <select name="isalone" id="">
                                                                <option value="1" <?php echo($Dash->isalone == 'בודד' ? 'selected' : '')?>>בודד בארץ</option>
                                                                <option value="2" <?php echo($Dash->isalone == 'לא בודד' ? 'selected' : '')?>>לא בודד בארץ</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <?php if($Dash->load_clicked_image('isalonefile')): ?>
                                                    <tr>
                                                        <td>
                                                        <input type="checkbox" class="flat">
                                                            קובץ ת.ז</td>
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('isalonefile');
                                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <?php endif; ?>

                                                    <?php if($Dash->load_clicked_image('self_employ_files')): ?>
                                                    <tr>
                                                        <td>
                                                        <input type="checkbox" class="flat">
                                                            קובץ ת.ז</td>
                                                        <td>
                                                            <?php 
                                                                $Dash->load_clicked_image('self_employ_files');
                                                                    ?>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                </tbody>


                                            </table>
                                            <input type="submit" name="submit" value="אשר בקשה">
                                            <input type="submit" name="return" value="החזר לשולח">
                                        </form>
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