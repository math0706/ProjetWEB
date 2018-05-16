<?php
$pan = new PanierDB($cnx);

if (isset($_GET['module'])) {
    $module = $_GET['module'];
}
if (isset($_SESSION['client'])) {
    if ($module == 1) {
        if (isset($_POST['idproduit']) && isset($_POST['quantite']) && isset($_POST['prixvente'])){
            $idpanier = 0;
            $idproduit = $_POST['idproduit'];
            $quantite = $_POST['quantite'];
            $prixvente = $_POST['prixvente'];
            $idclient = $_SESSION['idclient'];
            
            $ajout_panier = $pan->AjoutPanier($idclient, $idproduit, $quantite);
            var_dump($ajout_panier);
        }
        //$sql="insert into panier (codeclient,codearticle,quantite) values ('".$_SESSION['codeclient']."','".$codearticle."','".$quantite."')";
        //$base1->exec($sql);
        /*print $idarticle;
        print $quantite;
        print $prixvente;*/
     var_dump($_POST);
    }
    
    else if($module == 2){
        if(isset($_GET['idpanier']) && isset($_POST['quantite'])){
            $idpanier = $_GET['idpanier'];
            $quantite = $_GET['quantite'];
            print $idpanier+$quantite;
            /*$modi_panier = $pan->ModifPanier($idpanier, $quantite);
            print '<meta http-equiv = "refresh": Content = "1;url=index.php?page=confirm_panier"/>';*/
        }else{
            print var_dump($_POST);
            print var_dump($_GET);
            print var_dump($_SESSION);
        }
    }
    else if($module == 3){
        if(isset($_GET['idpanier'])){
            $idpanier = $_GET['idpanier'];
            
            $supp_panier = $pan->getSupprimeLignePanier($idpanier);
            print '<meta http-equiv = "refresh": Content = "1;url=index.php?page=confirm_panier"/>';
        }
    }
}