<?php
    include "connect.php";
    $IdBerita   = $_GET['Id_Berita'];

    $query="DELETE from berita where Id_Berita='$IdBerita'";
    mysqli_query($mysqli, $query);

    header("location:../view/tampilanAdmin.php");
?>