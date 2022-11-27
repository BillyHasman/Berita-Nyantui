<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
        <link href="../assets/Home/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/Home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/Home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="../assets/Home/css/main.css" rel="stylesheet">
        <link href="../assets/Display/main.css" rel="stylesheet">
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
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                 <?php
                    include "../controller/connect.php";
                      $query = "SELECT * FROM berita Group BY kategori";
                      $hasil = mysqli_query($mysqli, $query);
                      while ($row = mysqli_fetch_array($hasil)) {
                      ?>
                      <li name="submit"><a href='searchBerita.php?chooseCategories=<?php echo $row['kategori'] ?>' name="chooseCategories"><?php echo $row['kategori'] ?></a></li>
                      <?php
                  }
                ?>
            </ul>
          </li>
          <li><a href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <div class="carousel-container" style="margin-left:45%;">
            <h2 class="animate__animated animate__fadeInDown" style="font-size:40px" >OUR TEAM</h2>
            </div>
        </div>
        </div>
        </section>
        

        <main id="main" data-aos="fade-up" date-aos-delay="200" >
        <?php include 'page1.php' ;?>
        </main>

        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" style="margin-top:50px">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script src="../assets/Home/vendor/aos/aos.js"></script>
        <script src="../assets/Home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/Home/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/Home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/Home/vendor/php-email-form/validate.js"></script>
        <script src="../assets/Home/vendor/purecounter/purecounter.js"></script>
        <script src="../assets/Home/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/Home/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="../assets/Home/js/main.js"></script>
    </body>
</html>