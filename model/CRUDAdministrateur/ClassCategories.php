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

    /////////////////////////////////////////////////////////////////////////Class detail Categorie////////////////////////////////////////////////////////////////////////////////////////////

    public function detailCategorie(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "SELECT * FROM categories WHERE id_categorie = ?";
        $requete_insertion = $db->prepare($sql);

        $requete_insertion->bindParam(1, $id);

        $requete_insertion->execute();

        return $requete_insertion->fetch();

    }
/////////////////////////////////////////////////////////////////////////Class supprimer Categorie////////////////////////////////////////////////////////////////////////////////////////////

    public function SupprimerCategorie(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "DELETE FROM categories WHERE id_categorie = ?";
        $requete_sup = $db->prepare($sql);

        $requete_sup->execute(array($id));


    }
}