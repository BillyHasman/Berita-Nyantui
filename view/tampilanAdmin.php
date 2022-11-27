<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UTS Pemweb</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="tampilanAdmin.php"><span>Berita Nyantui</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="tampilanAdmin.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             <?php
                 include "../controller/connect.php";
                  $query = "SELECT * FROM berita Group BY kategori";
                  $hasil = mysqli_query($mysqli, $query);
                  while ($row = mysqli_fetch_array($hasil)) {
                  ?>
                  <li name="submit"><a href='searchBeritaadmin.php?chooseCategories=<?php echo $row['kategori'] ?>' name="chooseCategories"><?php echo $row['kategori'] ?></a></li>
                  <?php
                  }
                ?>
            </ul>
          </li>
          <li><a href="">Admin</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Berita Nyantui</span></h2>
          <p class="animate__animated animate__fadeInUp">Baca berita sambil nyantui</p>
          <a href="addBerita.php" class="btn-get-started animate__animated animate__fadeInUp">+Berita</a>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
      <?php
        $i=1;
        $host       = "localhost";
        $username   = "id17734194_root";
        $dbname     = "id17734194_uts";
        $password   = ']6UMW6bD=!M7!9!(';
        $db         = new mysqli($host, $username, $password, $dbname);
        $query      ="SELECT * FROM berita LIMIT 100"; 
        $result     = $db->query($query);
          while($row = $result->fetch_assoc()){
            echo '    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">';
            echo '<div class="row">';
              echo '<div class="col-lg-6 video-box">';
                echo '<a href="showBeritaadmin.php?Id_Berita='.$row['Id_Berita'].'"><img src="'.$row["url_Gambar"]. '" class="img-fluid" alt="" style="width:100% ">';
              echo "</div>";

              echo '<div class="col-lg-6 d-flex flex-column justify-content-center p-5">';
                echo '<div class="test">';
                  echo '<h4 class="title"><a href="showBeritaadmin.php?Id_Berita='.$row['Id_Berita'].'">'.$row['judul_Berita'].'</a></h4>';
                  echo '<p class="description">'. $row['Tanggal']. '</p>';
                echo '</div>';
                echo "<a href='editNews.php?Id_Berita=$row[Id_Berita]'><button class='edit'>Edit</button></a>
                <a href='../controller/deleteNews.php?Id_Berita=$row[Id_Berita]'><button class='delete'>Delete</button></a>";
              echo '</div>
            </div>';
            echo '</div>
            </section>';
          }

          mysqli_free_result($result);
          mysqli_close($db); 
        ?>

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
