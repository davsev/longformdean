<?php //$Dash  = new Dashboard(); ?>
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title">
            <img src="../assets/images/logow.png" class="dash-logo" alt="">
            <span>ניהול מלגות דיקן</span>
        </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="../assets/images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>היי</span>
            <span>אירית</span>
        </div>
    </div>
   
   
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
           
            <ul class="nav side-menu">
                <li>
                    <a>
                        <i class="fa fa-home"></i> בית
                        <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                        <li>
                            <a href="./dashboard.php">חזרה לדף הראשי</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
     
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">

        <a data-toggle="tooltip" data-placement="top" title="התנתקי" href="logout.php">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
