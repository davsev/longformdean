<?php

include './api/incg.php';

if (isset($_SESSION['valid'])) {
    header("Location: dashboard.php");
    die();
}

echo '<pre>';
var_dump($_SESSION);
var_dump($_POST);
echo '</pre>';
$msg = '';

if (isset($_POST['submit'])) {

   if ($_POST['email'] == 'irit@achva.ac.il' && $_POST['password'] == '1234') {
       
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['email'] = 'irit@achva.ac.il';

      header("Location: dasboard.php");
       die();
   } else {
      $msg = 'Wrong username or password';
   }
};


?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include 'head.php'; ?> 
  </head>
  <body class="login-page">

      <div class="login_wrapper">
        <div class="animate form login_form">
            
          <section class="login_content">
            <h1>התחברות למערכת מלוגת דיקאן</h1>
            
            <form method="POST" action="">
            
              <div>
                <input type="email" name="email" class="form-control" placeholder="email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="text-right">
               <input type="submit" name="submit" class="btn btn-info btn-lg" value="התחברי">
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">


         
                <br />

                <div>
                    <div><img src="./assets/images/logo.png" alt=""></div>
                 
                 
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
</body>
</html>
