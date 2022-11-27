<?php
    $firstname = $_POST['Fname'];
    $lastname = $_POST['Lname'];
    $username = $_POST['username'];
    $pw = $_POST['password'];
    $tgl = $_POST['tgllahir'];
    $gender = $_POST['gender'];
    $targetfile = $_FILES["imgURL"]["name"];
    $salt = 'kelompok1';

    $pwd = $pw. $salt;
    
    $hash = md5($pwd);

    $conn = new PDO('mysql:host=localhost;dbname=id17734194_uts','id17734194_root', ']6UMW6bD=!M7!9!(');
    $query = 'INSERT INTO users(Firstname,Lastname,Username,Password,Tanggal_Lahir,Gender,imgURL,salt) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($query);
    $success = $stmt->execute([$firstname,$lastname,$username,$hash,$tgl,$gender,$targetfile,$salt]);

    $conn = null;

    if($success){
        header('location: ../view/login.php');
        die();
    }
?>