<?php
        $conn = mysqli_connect("localhost", "id17734194_root", ']6UMW6bD=!M7!9!(', "id17734194_uts");
        if($conn === false){
            die("ERROR: Could not connect. " 
            . mysqli_connect_error());
        }
        
        $id             = $_REQUEST['ID_Berita'];
        $url_image      = $_REQUEST['url_image'];
        $judul_berita   = $_REQUEST['judul_Berita'];
        $isi_berita     = $_REQUEST['isi_Berita'];
        $tanggal        = $_REQUEST['tanggal'];
        $kategori       = $_REQUEST['kategori'];
        $penulis        = $_REQUEST['penulis'];

        $sql = "INSERT INTO berita VALUES('$id','$url_image', '$judul_berita', '$isi_berita', '$tanggal', '$kategori', '$penulis')";

        if(mysqli_query($conn, $sql)){
            header("location: ../view/tampilanAdmin.php");
            exit();
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
?>