<?php

class CategorieDB extends Categorie {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getListeCategorie() {
        try {
            $query = "select * from categorie";
            $resultset = $this->_db->prepare($query);
            // var_dump($resultset);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Categorie($data);
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
