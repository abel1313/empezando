<?php
require 'fbInic.php';
require 'google-api-php-client-master/srcGoogle/Google/autoload.php';
require 'gooleAuth.php';

if(isset($_SESSION['fb_access_token'])){

}else{
$helper= $fb->getRedirectLoginHelper ();

$permisos = [];
$loginUrl = $helper->getLoginUrl('http://localhost/Empresa/Vista/Home.php', $permisos);  


}

$googleClient=new Google_Client();
$auth=new GoogleAuth($googleClient);


?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../jQuery/Login.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>


  <link rel="stylesheet" type="text/css" href="Estilos/css/util.css">
  <link rel="stylesheet" type="text/css" href="Estilos/css/main.css">



    <title>Login</title>
  </head>
  <body>
    

<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
        <form class="login100-form validate-form flex-sb flex-w">
          <span class="login100-form-title p-b-53">
            Sign In With
          </span>

          <a href='<?php echo htmlspecialchars($loginUrl);?>' class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Facebook
          </a>
<?php if(!$auth->isLoggedIn()):?>

          <a href="<?php echo $auth->getAuthUrl(); ?>" class="btn-google m-b-20">
            <img src="images/icons/icon-google.png" alt="GOOGLE">
            Google
          </a>
          <?php else: ?>

        <a href="Salir.php">Cerrar</a>

          <?php endif; ?>

          <div class="p-t-31 p-b-9">
            <span class="txt1">
              Username
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input class="input100" type="text" name="username" >
            <span class="focus-input100"></span>
          </div>
          
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Password
            </span>

            <a href="#" class="txt2 bo1 m-l-5">
              Forgot?
            </a>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" >
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn">
           Iniciar Sesión
            </button>
          </div>

          <div class="w-full text-center p-t-55">
            <span class="txt2">
              Not a member?
            </span>

            <a href="#" class="txt2 bo1">
              Sign up now
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>




  </body>
</html>