<!DOCTYPE html>
<html>
    <head>
        <title>Edit News</title>
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="./tampilanAdmin.php"><span>Berita Nyantui</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="./tampilanAdmin.php">Home</a></li>
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
          <li><a href="../index.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
    <?php
            $host       = "localhost";
            $username   = "id17734194_root";
            $dbname     = "id17734194_uts";
            $password   = ']6UMW6bD=!M7!9!(';
            $db         = new mysqli($host, $username, $password, $dbname);
            $idBerita   = $_GET['Id_Berita'];

            $berita     = mysqli_query($db, "SELECT * FROM berita where Id_Berita='$idBerita'");
            $row        = mysqli_fetch_array($berita);
            mysqli_close($db); 
        
    ?>
    <div class="container" style="margin-top:135px">
        <form action="../controller/updateNews.php" method="post">
            <p>
                <label for="idBerita">ID Berita:</label>
                <input class="form-control form-control-lg" type="text" value ="<?php echo $row['Id_Berita'];?>" id="idBerita" name="id_Berita" readonly>
            </p>
            <p>
                <label for="urlGambar">URL Gambar:</label>
                <input class="form-control form-control-lg" type="text" name="url_Gambar" value ="<?=$row['url_Gambar']?>" id="urlGambar">
            </p>
            <p>
                <label for="judulBerita">Judul Berita:</label>
                <input class="form-control form-control-lg" type="text" name="judul_Berita" value ="<?php echo $row['judul_Berita'];?>" id="judulBerita">
            </p>       
            <p>
                <label for="isi_Berita">Isi Berita:</label>
                <input class="form-control form-control-lg" type="text" name="isi_Berita" value ="<?php echo $row['isi'];?>" id="isi_Berita">
            </p>
            <p>
                <label for="tanggal">Tanggal: </label>
                <input class="form-control form-control-lg" type="text" name="tanggal" value ="<?php echo $row['Tanggal'];?>" id="tanggal">
            </p>
            <p>
                <label for="kategori">Kategori: </label>
                <input class="form-control form-control-lg" type="text" name="kategori" value ="<?php echo $row['kategori'];?>" id="kategori">
            </p>
            <p>
              <label for="kategori">Penulis: </label>
              <input class="form-control form-control-lg" type="text" name="penulis" value ="<?php echo $row['penulis'];?>" id="penulis">
            </p>
            
            <input type="submit" class="submitedit" value="Submit">
            <input type="button" class="back" onClick = "parent.location='tampilanAdmin.php'" value = "Back to List">
        </form>
    </div>
    </body>
</html>