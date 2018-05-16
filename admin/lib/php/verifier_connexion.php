<?php
if (!isset($_SESSION['admin'])) {
    print "Accès réservé";
    ?>
    <meta http-equiv="refresh": Content="1;url=../index.php"/>
    <?php
    exit();
}
