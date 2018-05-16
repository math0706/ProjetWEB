<?php
if (isset($_GET['idclient'])) {
    $idclient = $_GET['idclient'];
    extract($_GET, EXTR_OVERWRITE);
    $id = new ClientDB($cnx);
    $ok = $id->getIDClient($idclient);
    //var_dump($ok);
    
    
    $nom = $ok[0]->nom;
    $prenom = $ok[0]->prenom;
    $login = $ok[0]->login;
    $motdepasse = $ok[0]->motdeppase;
    $adresse = $ok[0]->adresse;
    $numero = $ok[0]->numero;
    $localite = $ok[0]->localite;
    $codepostal = $ok[0]->codepostal;
    $mail = $ok[0]->mail;
    
}
?>

<form action="./index.php?page=modif_client&idclient=<?php print $idclient ?>" method="POST" id="form_inscription" role="form"enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?php print $nom;?>">
        </div>
        <div class="form-group col-md-6">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" value="<?php print $prenom;?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Login</label>
            <input type="text" class="form-control" id="login" name ="login" placeholder="Login" value="<?php print $login;?>">
        </div>
        <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="motdepasse" placeholder="Password" value="<?php print $motdepasse;?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="<?php print $adresse;?>">
        </div>
        <div class="form-group col-md-6">
            <label for="numero">Numéro</label>
            <input type="number" class="form-control" id="numero" name="numero" placeholder="Numéro" value="<?php print $numero;?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="localite">Localité</label>
            <input type="text" class="form-control" id="localite" name="localite" placeholder="Localité" value="<?php print $localite;?>">
        </div>
        <div class="form-group col-md-6">
            <label for="codePostal">Code Postal</label>
            <input type="number" class="form-control" id="codepostal" name="codepostal" placeholder="Code Postal" value="<?php print $codepostal;?>">
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" placeholder="aaa@hotmail.com" value="<?php print $mail;?>">
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
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>