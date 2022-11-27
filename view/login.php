<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="../Login/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/fonts/iconic/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/vendor/animate/animate.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/vendor/css-hamburgers/hamburgers.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/vendor/animsition/css/animsition.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/vendor/select2/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/vendor/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/css/util.css" />
    <link rel="stylesheet" type="text/css" href="../assets/Login/css/style.css" />

    <link href="./assets/Home/img/favicon.png" rel="icon">
    <link href="./assets/Home/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <link href="../assets/Home/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/Home/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/Home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/Home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/Home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/Home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/Home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/Home/css/main.css" rel="stylesheet">
  
    </head>
    <body>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="../index.php"><span>Berita Nyantui</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="../index.php">Home</a></li>
          <li><a href="About.php">About</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      </div>
    </header>
      <div class="container-login100" style="background-image: url('../assets/Login/images/bg-03.jpg')">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
          <form class="login100-form validate-form" action= "../controller/doLogin.php" method="post">
            
            <span class="login100-form-title p-b-37"> Sign In </span>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Username is required">
              <input class="input100" type="text" name="username" placeholder="Enter Username" />
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate="Password is required">
              <input class="input100" type="password" name="pass" placeholder="Enter Password" />
              <span class="focus-input100"></span>
            </div>

            <img class="label-input100" src="../controller/captcha.php">
              <div class="wrap-input100 validate-input m-b-25" style="padding: 10px">
                  <input class="input100" type="text" name="captcha">
                  <span class="focus-input100"></span>
                </div>
        

            <div class="container-login100-form-btn">
              <button class="login100-form-btn">Sign In</button>
            </div>

            <div class="text-center">
              <p class="txt2">Don't Have Account?<a href="signup.php" class="txt3 hov1"> Sign Up </a></p>
            </div>
          </form>
        </div>
      </div>

      <div id="dropDownSelect1"></div>

      
      <script src="../assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
      
      <script src="../assets/Login/vendor/animsition/js/animsition.min.js"></script>
      
      <script src="../assets/Login/vendor/bootstrap/js/popper.js"></script>
      <script src="../assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
      
      <script src="../assets/Login/vendor/select2/select2.min.js"></script>
      
      <script src="../assets/Login/vendor/daterangepicker/moment.min.js"></script>
      <script src="../assets/Login/vendor/daterangepicker/daterangepicker.js"></script>
      
      <script src="../assets/Login/vendor/countdowntime/countdowntime.js"></script>
      
      <script src="../assets/Login/js/main.js"></script>
    </body>
</html>
