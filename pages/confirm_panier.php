<?php 
$tot=0;
$idpan=0;
if (isset($_SESSION['idclient'])) {
    $panier = new PanierDB($cnx);
    $tabPanier = $panier->getListePanier($_SESSION['idclient']);
    $nbre = count($tabPanier);

}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="cart_msg">
            <!--Cart Message--> 
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">Cart Checkout</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2 col-xs-2"><b>Action</b></div>
                        <div class="col-md-2 col-xs-2"><b>Image</b></div>
                        <div class="col-md-2 col-xs-2"><b>Description</b></div>
                        <div class="col-md-2 col-xs-2"><b>Quantité</b></div>
                        <div class="col-md-2 col-xs-2"><b>Prix unitaire</b></div>
                        <div class="col-md-2 col-xs-2"><b>Prix total</b></div>
                    </div>
                    <div id="cart_checkout"></div>
                    <div class="row">
                        <?php
                        for ($i = 0; $i < $nbre; $i++) {
                            
                            $prod = new ProduitDB($cnx);
                            $tabProd = $prod->getDetailProduit($tabPanier[$i]->idproduit);
                            $idpan = $tabPanier[$i]->idpanier;
                            $tot=$tot + $tabPanier[$i]->quantite*$tabProd[0]->prixvente;
                        ?>
                            <div class="col-md-2">
                                    <div class="btn-group">
                                            <!--<a href="./index.php?page=panier&module=2" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>-->
                                            <?php print "<a href='./index.php?page=panier&idpanier=".$tabPanier[$i]->idpanier."&module=3' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>"?>
                                            <?php print "<a href='./index.php?page=panier&idpanier=".$tabPanier[$i]->idpanier."&module=2' class='btn btn-primary'><span class='glyphicon glyphicon-ok-sign'></span></a>"?>
                                    </div>
                            </div>
                            <div class="col-md-2"><img src='./admin/images/<?php print $tabProd[0]->photo ?>' width="50%"></div>
                            <div class="col-md-2"><?php print $tabProd[0]->description?></div>
                            <div class="col-md-2"><input type='text' class='form-control' value='<?php print $tabPanier[$i]->quantite?>' name="<?php.$_SESSION['quantite'].?>"></div>
                            <div class="col-md-2"><input type='text' class='form-control' value='<?php print $tabProd[0]->prixvente?>' disabled></div>
                            <div class="col-md-2"><input type='text' class='form-control' value='<?php print $tabPanier[$i]->quantite*$tabProd[0]->prixvente?>' disabled></div>
                        <?php
                        }
                        ?>
                    </div> 
                    <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                    <b>Total <?php print $tot?> €</b>
                            </div>
                    </div>
                    <button class='btn btn-warning' input type='submit'>Confirmer</button>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
    <div class="col-md-2"></div>

</div>
</body>	
</html>
















