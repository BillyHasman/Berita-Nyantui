<?php
    include "model/model.php";
    include "connect.php";

    $result = mysqli_query($mysqli, "SELECT * FROM berita");
    while($berita = mysqli_fetch_array($result)){
        $obj = new Berita();
        $obj -> setID($berita['Id_Berita']);
        $obj -> setUrl($berita['url_Gambar']);
        $obj -> setJudul($berita['judul_Berita']);
        $obj -> setisi($berita['isi']);
        $obj -> setTanggal($berita['Tanggal']);
        $obj -> setkategori($berita['kategori']);
        include 'view/view.php';
    }

?>