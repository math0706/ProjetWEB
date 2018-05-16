<?php
require './admin/lib/php/admin_liste_include.php';

$cnx = Connexion::getInstance($dsn, $user, $pass);
session_start();
?>

<html>
    <head>
        <!-- 
         
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
         
         
        -->
        <script langage='javascript' src="admin/lib/JS/jquery-3.3.1.js"></script>
        <script langage='javascript' src="admin/lib/JS/jquery/dist/jquery.validate.js"></script>
        <script langage='javascript' src="admin/lib/JS/fonctions.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="admin/lib/css/bootstrap-4.0.0/dist/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="lib/css/p_style.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




        <title>Magasin Infos</title>
    </head>
    <body>
        <div class="container" >
            <header>
                <!--<img src="admin/images/Banniere_infos.png" alt="Informatique" class="img"/>
                -->
            </header>
            <nav>

            </nav>
            <section id="main">
                <div class="container">

                    <?php
                    //si on n'est pas encore logué

                    if (!isset($_SESSION['page'])) {
                        $_SESSION['page'] = "accueil";
                    } else {
                        $_SESSION['page'] = "accueil";
                        if (file_exists('./lib/php/p_menu.php')) {
                            require '/lib/php/nav.php';
                            include('./lib/php/p_menu.php');
                        }
                        /* $admin = $_SESSION['admin'];
                          $login = $_SESSION['login'];
                          print $admin;
                          print $login; */
                    }
                    if (isset($_GET['page'])) {//verifie que dans l'URL il y a écrit page=
                        $_SESSION['page'] = $_GET['page'];
                    }

                    $path = './pages/' . $_SESSION['page'] . '.php';
                    if (file_exists($path)) {
                        include($path);
                    } else {
                        print "Erreur...";
                    }
                    ?>

                </div>
            </section>
        </div>
        <div class="footer centrer clear">
            Editeur responsable mathieu.delva@hotmail.com
        </div>

    </body>
</html>