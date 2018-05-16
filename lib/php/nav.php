<?php
if (isset($_SESSION['idclient'])) {
    $panier = new PanierDB($cnx);
    $tabPanier = $panier->getListePanier($_SESSION['idclient']);
    $count = $panier->getcountPanier($_SESSION['idclient']);
    $nbre = count($tabPanier);
}
?>
<nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
    <!--<a class = "navbar-brand" href = "index.php">PHP</a>
    <div class = "collapse navbar-collapse">
        <ul class = "navbar-nav mr-auto">
            <li class = "nav-item active">
                <a class = "nav-link" href = "index.php">Accueil</a>
            </li>
        </ul>
        <div class = "float-right">
            <ul class = "navbar-nav mr-auto">
                <li class = "nav-item">
                    <a class = "nav-link" href = "./index.php?page=formulaire_inscription">Inscription</a>
                </li>
                <li class = "nav-item">
                    <button class ="nav-link" onclick="document.getElementById('modal-wrapper').style.display = 'block'" <!--style="width:200px; margin-top:200px; margin-left:160px;">Connexion</button>
                    <a class = "nav-link" href = "index.php?page=Se_connecter">Connexion</a>
                    <div class="container">
                        <div id="modal-wrapper" class="modal">

                            <form class="modal-content animate" action="./index.php?page=se_connecter" method="POST">

                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('modal-wrapper').style.display = 'none'" class="close" title="Close PopUp">&times;</span>
                                    <h1 style="text-align:center">Connexion</h1>
                                </div>

                                <div class="container">
                                    <input type="text" placeholder="Enter Username" name="login">
                                    <input type="password" placeholder="Enter Password" name="password">        
                                    <button type="submit">Login</button>     
                                    <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>-->


    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">	
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a href="#" class="navbar-brand">Khan Store</a>-->
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="gg.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li><a href="hh.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
                </ul>
                <!--<form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" id="search">
                        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                    
                </form>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge"><?php if (isset($_SESSION['idclient'])) {print $nbre;} else {print "0";} ?></span></a>
                        <div class="dropdown-menu" style="width:400px;">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-4">Description</div>
                                        <div class="col-md-4">Product Name</div>
                                        <div class="col-md-4">Price in $.</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="cart_product">
                                    <?php
                                    if (isset($_SESSION['idclient'])) {
                                        for ($i = 0; $i < $nbre; $i++) {
                                            ?>
                                                <div class="row">
                                                    <div class="col-md-4"><?php print $tabPanier[$i]->description ?></div>
                                                    <div class="col-md-4"><?php print $tabPanier[$i]->quantite ?></div>
                                                    <div class="col-md-4"><?php print $tabPanier[$i]->prixvente ?></div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="index.php?page=confirm_panier"><span></span>Confirmer</a>
                                </div>
                            </div>
                        </div>
                    </li>
<?php
if (!isset($_SESSION['idclient'])) {
    ?>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                            <ul class="dropdown-menu">
                                <div style="width:300px;">
                                    <div class="panel panel-primary">
                                        <!--<div class="panel-heading">Login</div>-->
                                        <div class="panel-heading">
                                            <form name='formulaire' action='index.php?page=Se_connecter' method='POST' enctype='multipart/form-data' >
                                                <td>Login</td>
                                                <input type="text" class="form-control" name="login" id="login" required/>
                                                <td>Mot de passe</td>
                                                <input type="password" class="form-control" name="password" id="password" required/>
                                                <input type="submit" class="btn btn-success" style="float:right;">
                                            </form>
                                        </div>
                                        <!--<div class="panel-footer" id="e_msg"></div>-->
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <?php
                        } else {
                        ?>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php print "Bonjour," . $_SESSION['login']; ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="customer_order.php" style="text-decoration:none; color:blue;">Mes commandes</a></li>
                            <li class="divider"></li>
                            <li><a href="" style="text-decoration:none; color:blue;">Changer Mot de passe</a></li>
                            <li class="divider"></li>
                            <li><a href="./index.php?page=disconnect" style="text-decoration:none; color:blue;">Se déconnecter</a></li>
                        </ul>
                        <?php
                        }
                        ?>
                    </li>
                    <!--<li class = "nav-item">
                        <button class ="" onclick="document.getElementById('modal-wrapper').style.display = 'block'"> style="width:200px; margin-top:200px; margin-left:160px;"Connexion</button>
                        <a class = "nav-link" href = "index.php?page=Se_connecter">Connexion</a>
                        <div class="container">
                            <div id="modal-wrapper" class="modal">

                                <form class="modal-content animate" action="./index.php?page=se_connecter" method="POST">

                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('modal-wrapper').style.display = 'none'" class="close" title="Close PopUp">&times;</span>
                                        <h1 style="text-align:center">Connexion</h1>
                                    </div>

                                    <div class="container">
                                        <input type="text" placeholder="Enter Username" name="login">
                                        <input type="password" placeholder="Enter Password" name="password">        
                                        <button type="submit">Login</button>     
                                        <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>

</nav>
