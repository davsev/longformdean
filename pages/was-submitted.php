<?php
    include '../api/inc.php';
?>
<html>

<head></head>

<body>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>בקשה למלגת דיקן</title>

    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../vendors/parsleyjs/dist/parsley.css">


    <link rel="stylesheet" href="../assets/style/style.css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-left">
                <img src="../assets/images/logo.png" alt="לוגו המכללה האקדמית אחוה">
            </div>
        </div>

        <div class="col-md-12 order-md-1 text-center">

            <h1> הטופס נשלח בהצלחה </h1>
            <p>
                בקשתך נקלטה במערכת<br />
                מספר הבקשה שלך הוא<b> <?php echo $_SESSION['id']; ?></b><br />
                לנוחיותך, אישור הגשת הטופס נשלח לתיבת הדוא"ל שלך<br />
                לתשומת ליבך, במידה והבקשה חסרה ו / או מכילה מסמכים לא תקינים, תקבל/י הודעה על כך בדוא"ל <br />
                לעדכון, ותהליך הטיפול בה יעצר עד להשלמות נדרשות על ידך. <br />
            
            </p>      
            <p></p>
                לבירורים או שאלות ניתן לפנות <a href="mailto: melagot@achva.ac.il"> melagot@achva.ac.il</a><br />
                בברכה,<br />
                משרד הדיקן<br />
               
                
                

            </p>
        </div>
    </div>
    <a href="http://www.achva.ac.il/AGLogout" class="btn-lg green-btn" id="disconnect"> התנתקות</a>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">המכללה האקדמית אחוה</p>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="../vendors/parsleyjs/dist/parsley.js"></script>
    <script src="../vendors/parsleyjs/dist/i18n/he.js"></script>
    <script src="./vendors/parsleyjs/dist/i18n/he.extra.js"></script>


    <script src="../api/js/js.js"></script>
    <script src="../api/js/fileupload.js"></script>
    <script src="../api/js/removefile.js"></script>


    <script>
        $('#studentForm').parsley();
    </script>








</body>

</html>