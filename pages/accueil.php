<h2 id="titre_page" class="visible-xs">Magasin Informatique</h2>
<?php
$prod = new ProduitDB($cnx);
$tabProd = $prod->getListeProduit();
$nbr = count($tabProd);
//var_dump($tabProd);
?>
<div class="container">

    <?php
    for ($i = 0; $i < $nbr; $i++) {
        ?>
        <form name='panier' method ='POST' action='./index.php?page=panier&module=1'>
            <div class ="row espace centrer bordure">
                <div class="col-md-4 col-xs-12">
                    <img src="./admin/images/<?php print $tabProd[$i]->photo ?>" class="img-fluid img-rounded dim"/> 
                </div>
                <div class="col-md-5 col-xs-12 " >
                    <?php
                    print $tabProd[$i]->description;
                    print "<br />";

                    print "Processeur : " . $tabProd[$i]->processeur;
                    print "<br />";

                    print "Marque du processeur : " . $tabProd[$i]->marqueprocesseur;
                    print "<br />";

                    print "Modèle du processeur : " . $tabProd[$i]->modeleprocesseur;
                    print "<br />";

                    print "Numéro du processeur : " . $tabProd[$i]->numeroprocesseur;
                    print "<br />";

                    print "Mémoire RAM : " . $tabProd[$i]->memoireram;
                    print "<br />";

                    print "Carte graphique : " . $tabProd[$i]->cartegraphique;
                    print "<br />";

                    print "Stock disponible : " . $tabProd[$i]->stock;
                    print "<br />";
                    ?>

                </div>
                <div class="col-md-3 col-xs-12" >
                    <?php
                    print "Prix de vente : " . $tabProd[$i]->prixvente;
                    print "<br />";
                    print "TVA et frais d'expédition compris <br />";
                    print "Livraison dans 1 à 2 jours<br>";
                    print"Quantite<input type='number' min=1  max='".$tabProd[$i]->stock."'name='quantite' size='2'><br>";
                    if (isset($_SESSION['login'])) {
                        print"<button class='btn btn-warning' input type='submit'><span class='glyphicon  glyphicon-shopping-cart'></span> Ajouter au panier</button>    </br></br>";
                    } else {
                        print"<button class='btn btn-warning' disabled data-toggle='tooltip' title='Connectez-vous pour pouvoir ajouter au panier!'><span class='glyphicon  glyphicon-shopping-cart'></span> Ajouter au panier</button>    </br></br>";
                    }
                    print"<input type='hidden' value='" . $tabProd[$i]->idproduit . "' name='idproduit'>";
                    print"<input type='hidden' value='" . $tabProd[$i]->prixvente . "' name='prixvente'>";
                    ?>
                </div>
            </div>
        </form>
        <?php
    }
    ?> 


</div>