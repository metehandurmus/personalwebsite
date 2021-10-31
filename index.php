<?php
    $saat = date("H");
    if ($saat > 18)
        include 'main.dark.min.html';
    else
        include 'main.dark.min.html';

    if($_POST)
        include 'vt_mailekle.php';
    else if ($_GET)
        echo '<div class="alert error animate__animated">Yanlış bir işlem yaptınız.</div>';
?>