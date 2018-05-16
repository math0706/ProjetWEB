<?php

$prod = new ProduitDB($cnx);
$liste_prod = $prod->getListeProduit();
$nbre_prod = count($liste_prod);

?>
<b>Liste des produits</b><a href='index.php?page=formulaire_produit'><img src='images/creer.png' width=20 height=20 placeholder ='Ajouter' title='Ajouter'></a>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">idProduit</th>
            <th scope="col">Description</th>
            <th scope="col">Processeur</th>
            <th scope="col">Marque Processeur</th>
            <th scope="col">Modele Processeur</th>
            <th scope="col">Numéro Processeur</th>
            <th scope="col">Mémoire RAM</th>
            <th scope="col">Carte Graphique</th>
            <th scope="col">Categorie</th>
            <th scope="col">Fabricant</th>
            <th scope="col">Prix Vente</th>
            <th scope="col">TVA</th>
            <th scope="col">Photo</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < $nbre_prod; $i++) {
            ?>
            <tr>
                <th scope="row"><?php print $liste_prod[$i]->idproduit ?></th>
                <td><?php print $liste_prod[$i]->description ?></td>
                <td><?php print $liste_prod[$i]->processeur ?></td>
                <td><?php print $liste_prod[$i]->marqueprocesseur ?></td>
                <td><?php print $liste_prod[$i]->modeleprocesseur ?></td>
                <td><?php print $liste_prod[$i]->numeroprocesseur ?></td>
                <td><?php print $liste_prod[$i]->memoireram ?></td>
                <td><?php print $liste_prod[$i]->cartegraphique ?></td>
                <td><?php print $liste_prod[$i]->categorie ?></td>
                <td><?php print $liste_prod[$i]->fabricant ?></td>
                <td><?php print $liste_prod[$i]->prixvente ?></td>
                <td><?php print $liste_prod[$i]->tva ?></td>
                <td><?php print $liste_prod[$i]->photo ?></td>
                <td><a href=""><img src="images/modifier.png" width="20" height="20" title ="Modifier"></a></td>
                <td><a href=""><img src="images/supprimer.png" width="20" height="20" title="Supprimer"></a></td>

            </tr>

            <?php
        }
        ?>
    </tbody>
</table>