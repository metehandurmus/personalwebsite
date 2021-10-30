<?php
    $email = $_POST['email'];

    $baglan=mysqli_connect("localhost","metehand_mailuser","I;W%~cX[APr=","metehand_mail"); 
    mysqli_set_charset($baglan, "utf8");
    $sqlekle="INSERT INTO mailler (mail) VALUES ('$email')";

    $sonuc=mysqli_query($baglan,$sqlekle);

    if ($sonuc==0)
        echo '<div class="alert warning animate__animated animate__fadeInUp">Eksik ya da yanlış bilgi yazdınız.</div>';
    else
        echo '<div class="alert success animate__animated animate__fadeInUp">En yakın zamanda bilgilendirileceksiniz.</div>';

?>