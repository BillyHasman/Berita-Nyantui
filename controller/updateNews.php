<?php
    $host       = "localhost";
    $username   = "id17734194_root";
    $dbname     = "id17734194_uts";
    $password   = ']6UMW6bD=!M7!9!(';
    $db         = new mysqli($host, $username, $password, $dbname);

    $idBerita   = $_POST['id_Berita'];
    $urlGambar  = $_POST['url_Gambar'];
    $judul      = $_POST['judul_Berita'];
    $isiBerita  = $_POST['isi_Berita'];
    $tanggal    = $_POST['tanggal'];
    $kategori   = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    mysqli_query($db, "UPDATE berita SET url_Gambar='$urlGambar', judul_Berita='$judul', isi='$isiBerita', Tanggal = '$tanggal', kategori = '$kategori', penulis = '$penulis' where Id_Berita = '$idBerita'");
    header("location: ../view/tampilanAdmin.php");
?>