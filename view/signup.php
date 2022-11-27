<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="../assets/Home/img/favicon.png" rel="icon">
  <link href="../assets/Home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <link href="../assets/Home/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/Home/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/Home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/Home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/Home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/Home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/Home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/Home/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="../assets/signup/css/style.css"/>
  </head>
  
  <body style="background-image: url('../assets/signup/images/background.jpg')">
  
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="../index.php"><span>Berita Nyantui</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="../index.php">Home</a></li>
          <li><a href="About.php">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 style="font-size: 50px; color: rgb(255, 255, 255); font-weight: bolder; font-family: system-ui; width:50%; margin: auto;  border-radius: 10%;" >SIGN UP</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div class="img" style="background-image: url('../assets/signup/images/bg3.jpg')"></div>
              <h3 class="text-center mb-4">Create Your Account</h3>
              <form action="../controller/doSignup.php" class="signup-form" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <label class="label" for="FName">First Name</label>
                  <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First Name" />
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="LName">Last Name</label>
                  <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last Name" />
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required/>
                </div>
                <div class="form-group mb-3">
                  <label for="tgllahir">Tanggal Lahir</label><br />
                  <input type="date" id="tgllahir" name="tgllahir" />
                </div>
                <div class="form-group mb-3">
                  <label for="gender">Gender</label><br />
                  <input type="radio" name="gender" value="pria" id="pria" />
                  <label for="pria">Pria</label>
                  <input type="radio" name="gender" value="wanita" id="wanita" />
                  <label for="wanita">Wanita</label>
                </div>
                <div class="form-group mb-3">
                  <label for="formFile" class="form-label">Profile Picture</label><br />
                  <input class="form-control" type="file" id="imgURL" name="imgURL" accept="image/png, image/jpeg" />
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                </div>
              </form>
              <p>Already have a account? <a href="login.php">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="../assets/signup/js/jquery.min.js"></script>
    <script src="../assets/signup/js/popper.js"></script>
    <script src="../assets/signup/js/bootstrap.min.js"></script>
    <script src="../assets/signup/js/main.js"></script>
  </body>
</html>