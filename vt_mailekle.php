<?php
    $email = $_POST['email'];
    $now = date_create()->format('Y-m-d H:i:s');

    $baglan=mysqli_connect("localhost","metehand_mailuser","I;W%~cX[APr=","metehand_mail"); 
    mysqli_set_charset($baglan, "utf8");
    $sqlekle="INSERT INTO mailler (mail,datetimes) VALUES ('$email','$now')";

    $sonuc=mysqli_query($baglan,$sqlekle);

    if ($sonuc==0)
        echo '<div class="alert warning animate__animated">Eksik ya da yanlış bilgi yazdınız.</div>';
    else
        echo '<div class="alert success animate__animated">En yakın zamanda bilgilendirileceksiniz.</div>';

?>