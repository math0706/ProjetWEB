<?php

class PanierDB extends Panier {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getListePanier($idclient) {
        try {
            $query = "select * from panier inner join produit on produit.idproduit=panier.idproduit where idclient=:idclient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $idclient);
            // var_dump($resultset);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Panier($data);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }
       
    public function getcountPanier($idclient) {
        try {
            $query = "select count(*) from panier inner join produit on produit.idproduit=panier.idproduit where idclient=:idclient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $idclient);
            // var_dump($resultset);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Panier($data);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }
    
    
    public function AjoutPanier($idclient,$idproduit,$quantite) {
        try {
            $query = "insert into panier (idclient,idproduit,quantite) values (:idclient,:idproduit,:quantite)";
            $resultset = $this->_db->prepare($query);
            //var_dump($resultset);
            //$resultset->bindValue(':idclient',$idclient);
            //$resultset->bindValue(':idpanier', $idpanier);
            $resultset->bindValue(':idclient', $idclient);
            $resultset->bindValue(':idproduit', $idproduit);
            $resultset->bindValue(':quantite', $quantite);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Panier($data);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

    public function getSupprimeLignePanier($idpanier) {
        try {
            $query = "delete from panier where idpanier =:idpanier";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idpanier', $idpanier);
            //var_dump($resultset);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Client($data);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

            public function ModifPanier($idpanier,$quantite) {
        try {
            $query = "UPDATE panier SET quantite=:quantite WHERE idpanier=:idpanier";
            $resultset = $this->_db->prepare($query);
            //var_dump($resultset);
            $resultset->bindValue(':idpanier',$idpanier);
            $resultset->bindValue(':quantite', $quantite);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Client($data);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }
}
