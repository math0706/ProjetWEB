<?php
$ok1=0;
$ok2=0;
//if (isset($_GET['codeclient'])){$codeclient=$_GET['codeclient'];}


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['motdepasse']) && isset($_POST['adresse']) && isset($_POST['numero']) && isset($_POST['codepostal']) && isset($_POST['localite']) && isset($_POST['mail'])) {

    $idclient = 0;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $motdepasse = ($_POST['motdepasse']);
    $adresse = $_POST['adresse'];
    $numero = $_POST['numero'];
    $localite = $_POST['localite'];
    $codepostal = $_POST['codepostal'];
    $mail = $_POST['mail'];

    $log = new ClientDB($cnx);

    $verif_login = $log->getLogin($login);
    if(is_null($verif_login)){
        $ok1=1;
    }
    else{
        print "<br/> Login déjà utilisé";
    }
    $verif_email = $log->getEmail($mail);
    if(is_null($verif_email)){
        $ok2=1;
    }
    else{
        print "<br/> Email déjà utilisé";
    }
    
    if (($ok1 == 1) && ($ok2 == 1)){
        $ok = $log->AjoutClient($nom, $prenom, $login, $motdepasse, $adresse, $numero, $codepostal, $localite, $mail);
        $verif_connexion = $log->getClient($login, $motdepasse);
        var_dump($verif_connexion);
        if (is_null($verif_connexion)) {
            print "<br/> Problème lors de l'inscription";
        } else {
            print "<br/> Incription Réussie";
        }
    }
}
?>

