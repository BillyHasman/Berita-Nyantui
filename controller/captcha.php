<?php
    session_start();

    $rand_str = md5(rand());
    
    $str = substr($rand_str, 0,6);

    $_SESSION['str'] = $str;
    $img = imagecreatetruecolor(280, 48);
    $bgcolor = imagecolorallocate($img, 150, 200, 180);
    $fontcolor = imagecolorallocate($img, 120, 60, 200);
    imagestring($img, 10, 110, 15, $str, $fontcolor);
    header("Content-Type: image/png");
    imagepng($img);
    imagedestroy($img);
?>