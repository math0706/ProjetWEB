<?php

class FabricantDB extends Fabricant {

    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getListeFabricant() {
        try {
            $query = "select * from fabricant";
            $resultset = $this->_db->prepare($query);
            // var_dump($resultset);
            $resultset->execute();
            //var_dump($resultset);

            while ($data = $resultset->fetch()) {
                $_array[] = new Fabricant($data);
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
