<?php
    include 'main.html';
    if($_POST) {
        include 'vt_mailekle.php';
    } else if ($_GET) {
        echo '<div class="alert error animate__animated animate__fadeInUp">Yanlış bir işlem yaptınız.</div>';
    }
?>