<?php

if (isset($_GET['idclient']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['motdepasse']) && isset($_POST['adresse']) && isset($_POST['numero']) && isset($_POST['codepostal']) && isset($_POST['localite']) && isset($_POST['mail'])) {

    $idclient = $_GET['idclient'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $motdepasse = ($_POST['motdepasse']);
    $adresse = $_POST['adresse'];
    $numero = $_POST['numero'];
    $localite = $_POST['localite'];
    $codepostal = $_POST['codepostal'];
    $mail = $_POST['mail'];
    
    print $idclient+$nom;
    $id = new ClientDB($cnx);
    $ok = $id->ModifClient($idclient, $nom, $prenom, $login, $motdepasse, $adresse, $numero, $codepostal, $localite, $mail);

    var_dump($ok);
    if (is_null($ok)) {
        print "<br/> Problème lors de la modification";
    } else {
        print "<br/> Modification Réussie";
    }
}
else{
    print "erezfezf";
}