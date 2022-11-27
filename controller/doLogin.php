<?php
    $uname = $_POST["username"];

    $conn   = mysqli_connect("localhost", "id17734194_root", ']6UMW6bD=!M7!9!(', "id17734194_uts");
    $result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$uname'");
    $row    = mysqli_fetch_assoc($result);
    $pwd    = $_POST['pass'] .$row["salt"];
    $hash   = md5($pwd);

    if(strcmp($row['Username'],$uname) == 0 && strcmp($row["Password"],$hash) == 0){
        if($row['Username'] === "admin"){
            header("location: ../view/tampilanAdmin.php");
            exit;
        }else{
            header("location: ../view/loginSuccess.php");
            exit;
        }
    }else{
        echo "<script>
        alert(\"Gagal log in, silahkan mengulang kembali\");
        </script>";
        header("location: ../view/login.php");
        exit;
    }
?>