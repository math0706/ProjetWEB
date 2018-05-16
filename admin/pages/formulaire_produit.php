<?php
$cat = new CategorieDB($cnx);
$liste_cat = $cat->getListeCategorie();
$nbre_cat = count($liste_cat);

$fab = new FabricantDB($cnx);
$liste_fab = $fab->getListeFabricant();
$nbre_fab = count($liste_fab);
?>
<form action="./index.php?page=ajout_produit" method="POST" id="form_inscription" role="form"enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
        </div>
        <div class="form-group col-md-6">
            <label for="processeur">Processeur</label>
            <input type="text" class="form-control" id="processeur" name="processeur" placeholder="Processeur">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Marque Processeur</label>
            <input type="text" class="form-control" id="marqueprocesseur" name ="marqueprocesseur" placeholder="Marque Processeur">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Modele Processeur</label>
            <input type="password" class="form-control" id="modeleprocesseur" name="modeleprocesseur" placeholder="Modele Processeur">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="adresse">Numero Processeur</label>
            <input type="text" class="form-control" id="numeroprocesseur" name="numeroprocesseur" placeholder="Numero Processeur">
        </div>
        <div class="form-group col-md-6">
            <label for="numero">Memoire RAM</label>
            <input type="number" class="form-control" id="memoireram" name="memoireram" placeholder="Memoire RAM">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="localite">Carte Graphique</label>
            <input type="text" class="form-control" id="cartegraphique" name="cartegraphique" placeholder="Carte Graphique">
        </div>
        <div class="form-group col-md-6">
            <label for="codePostal">Categorie</label>
            <select class=form-control>
                <?php
                for ($i = 0; $i < $nbre_fab; $i++) {
                ?>
                <option value="cat"><?php print $liste_fab[$i]->fabricant ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="localite">Fabricant</label>
            <select class=form-control>
                <?php
                for ($i = 0; $i < $nbre_cat; $i++) {
                ?>
                <option value="cat"><?php print $liste_cat[$i]->categorie ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="codePostal">Prix de Vente</label>
            <input type="number" class="form-control" id="codepostal" name="codepostal" placeholder="Code Postal">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="localite">TVA</label>
            <input type="text" class="form-control" id="cartegraphique" name="cartegraphique" placeholder="Carte Graphique">
        </div>
    </div>


    <!--<div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>-->
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

