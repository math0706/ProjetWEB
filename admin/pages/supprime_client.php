<?php

if (isset($_GET['idclient'])) {

    $idclient = ($_GET['idclient']);
    extract($_GET, EXTR_OVERWRITE);
    $id = new ClientDB($cnx);
    $ok = $id->getSupprimeClient($idclient);
    
    print '<meta http-equiv = "refresh": Content = "1;url=index.php?page=liste_clients"/>';
}
?>