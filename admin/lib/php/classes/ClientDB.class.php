<?php

class ClientDB {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getClient($login, $password) {
        try {
            $query = "select * from client where login = :login and motdepasse = :password";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login', $login);
            $resultset->bindValue(':password', $password);
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

    public function getLogin($login) {
        try {
            $query = "select * from client where login = :login";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login', $login);
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

    public function getEmail($mail) {
        try {
            $query = "select * from client where mail = :mail";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':mail', $mail);
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

    public function getListeClient() {
        try {
            $query = "select * from client";
            $resultset = $this->_db->prepare($query);
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

    public function AjoutClient($nom, $prenom, $login, $motdepasse, $adresse, $numero, $codepostal, $localite, $mail) {
        try {
            $query = "insert into client (nom,prenom,login,motdepasse,adresse,numero,codepostal,localite,mail) values (:nom,:prenom,:login,:motdepasse,:adresse,:numero,:codepostal,:localite,:mail)";
            $resultset = $this->_db->prepare($query);
            //var_dump($resultset);
            //$resultset->bindValue(':idclient',$idclient);
            $resultset->bindValue(':nom', $nom);
            $resultset->bindValue(':prenom', $prenom);
            $resultset->bindValue(':login', $login);
            $resultset->bindValue(':motdepasse', $motdepasse);
            $resultset->bindValue(':adresse', $adresse);
            $resultset->bindValue(':numero', $numero);
            $resultset->bindValue(':codepostal', $codepostal);
            $resultset->bindValue(':localite', $localite);
            $resultset->bindValue(':mail', $mail);
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

    public function getSupprimeClient($idclient) {
        try {
            $query = "delete from client where idclient =:idclient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $idclient);
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

    public function getIDClient($idclient) {
        try {
            $query = "select * from client where idclient =:idclient";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idclient', $idclient);
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
    
    
        public function ModifClient($idclient,$nom, $prenom, $login, $motdepasse, $adresse, $numero, $codepostal, $localite, $mail) {
        try {
            $query = "UPDATE client SET nom=:nom, prenom=:prenom, login=:login, motdepasse=:motdepasse, adresse=:adresse, numero=:numero, codepostal=:codepostal, localite=:localite, mail=:mail WHERE idclient=:idclient;";
            $resultset = $this->_db->prepare($query);
            //var_dump($resultset);
            $resultset->bindValue(':idclient',$idclient);
            $resultset->bindValue(':nom', $nom);
            $resultset->bindValue(':prenom', $prenom);
            $resultset->bindValue(':login', $login);
            $resultset->bindValue(':motdepasse', $motdepasse);
            $resultset->bindValue(':adresse', $adresse);
            $resultset->bindValue(':numero', $numero);
            $resultset->bindValue(':codepostal', $codepostal);
            $resultset->bindValue(':localite', $localite);
            $resultset->bindValue(':mail', $mail);
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
