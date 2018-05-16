<?php
//$cnx = Connexion::getInstance($dsn, $user, $pass);

$cli = new ClientDB($cnx);
$liste_cli = $cli->getListeClient();
$nbr_cli = count($liste_cli);
//var_dump($liste_cli);
?>
<b>Liste des clients</b><a href='index.php?page=formulaire_client'><img src='images/creer.png' width=20 height=20 placeholder ='Ajouter' title='Ajouter'></a>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">idClient</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Login</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Adresse</th>
            <th scope="col">Numero</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Localité</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < $nbr_cli; $i++) {
            ?>
            <tr>
                <th scope="row"><?php print $liste_cli[$i]->idclient ?></th>
                <td><?php print $liste_cli[$i]->nom ?></td>
                <td><?php print $liste_cli[$i]->prenom ?></td>
                <td><?php print $liste_cli[$i]->login ?></td>
                <td><?php print $liste_cli[$i]->motdepasse ?></td>
                <td><?php print $liste_cli[$i]->adresse ?></td>
                <td><?php print $liste_cli[$i]->numero ?></td>
                <td><?php print $liste_cli[$i]->codepostal ?></td>
                <td><?php print $liste_cli[$i]->localite ?></td>
                <td><?php print $liste_cli[$i]->mail ?></td>
                <?php $_GET['id']=$liste_cli[$i]->idclient ?>
                <td><a href="index.php?page=formulaire_modif_client&idclient=<?php print $liste_cli[$i]->idclient ?>"><img src="images/modifier.png" width="20" height="20" title ="Modifier"></a></td>
                <td><a href="index.php?page=supprime_client&idclient=<?php print $liste_cli[$i]->idclient ?>"><img src="images/supprimer.png" width="20" height="20" title="Supprimer"></a></td>

            </tr>

            <?php
        }
        ?>
    </tbody>
</table>
