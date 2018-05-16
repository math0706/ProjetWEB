<?php
//$cnx = Connexion::getInstance($dsn, $user, $pass);

if (isset($_POST['login']) && isset($_POST['password'])) {

    $motdepasse = ($_POST['password']);
    $login = $_POST['login'];
    extract($_POST, EXTR_OVERWRITE);
    $log = new ClientDB($cnx);
    $ok = $log->getClient($login, $motdepasse);
    var_dump($login, $motdepasse, $ok);

    if (is_null($ok)) {
        print "<br/>Données incorrectes";
    } else {
        print "<br/>Connectés";
        print $_SESSION['idclient'] = $ok[0]->idclient;
        print $_SESSION['login'] = $ok[0]->login;
        /* $_SESSION['login'] = $login->login;
          $_SESSION['idclient'] =$login->idclient;
          $_SESSION['mail']=$login->mail;
          var_dump($_SESSION['login'],$_SESSION['idclient'],$_SESSION['mail']);
         */
        $_SESSION['login'] = $login;
        if ($login == 'admin') {

            $_SESSION['admin'] = 1;
            unset($_SESSION['page']);

            print '<meta http-equiv = "refresh": Content = "1;url=admin/index.php"/>';
            exit();
        } else {
            $_SESSION['client'] = 0;
            print '<meta http-equiv = "refresh": Content = "0;url=index.php"/>';
            exit();
        }
        //header ("Location :index.php?page=accueil.php ");
        //header('Location: http://localhost/projet_web/index.php');
    }
}
else{
    print "fgdfg";
}
?>
