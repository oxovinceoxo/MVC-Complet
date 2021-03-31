<?php

require_once "../model/ClassDatabase.php";

class ClassCategories extends ClassDatabase
{

    /////////////////////////////////////////////////////////////////////////Class Afficher categories////////////////////////////////////////////////////////////////////////////////////////////

    public function afficherToutescategories(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM categories";
        $stmt = $db->query($sql);
        return $stmt;

    }

    /////////////////////////////////////////////////////////////////////////Class ajouter categories////////////////////////////////////////////////////////////////////////////////////////////
    public function ajouterCategorie(){

        $db = $this->getPDO();
        $type_categorie = $_POST['AjouterCategorie'];

        $sql = "INSERT INTO `categories`(`type_categorie`) VALUES (?)";

        $req = $db->prepare($sql);

        $req->bindParam(1, $type_categorie);

        $req->execute();
    }

}