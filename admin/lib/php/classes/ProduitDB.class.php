<?php
class ProduitDB extends Produit {
    private $_db;
    private $_array = array();
    
    public function __construct($db){
        $this->_db = $db;
    }
    
    public function getListeProduit(){  
        try{
            $query = "select * from produit inner join categorie on produit.idcategorie=categorie.idcategorie inner join fabricant on produit.idfabricant=fabricant.idfabricant inner join stock on produit.idproduit=stock.idproduit";
            $resultset = $this->_db->prepare($query);
           // var_dump($resultset);
            $resultset->execute();
            //var_dump($resultset);

            while($data = $resultset->fetch()){
                $_array[] = new Produit($data);
            }        
            
        }
        catch(PDOException $e){
            print $e->getMessage();
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
    
    public function getDetailProduit($idproduit){
        try{
            $query = "select * from produit inner join categorie on produit.idcategorie=categorie.idcategorie inner join fabricant on produit.idfabricant=fabricant.idfabricant inner join stock on produit.idproduit=stock.idproduit where produit.idproduit=:idproduit";
            $resultset = $this->_db->prepare($query);
           // var_dump($resultset);
            $resultset->bindValue(':idproduit', $idproduit);
            $resultset->execute();
            //var_dump($resultset);

            while($data = $resultset->fetch()){
                $_array[] = new Produit($data);
            }        
            
        }
        catch(PDOException $e){
            print $e->getMessage();
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
}