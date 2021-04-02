<?php

require_once "../model/ClassDatabase.php";



class ClassArticle extends ClassDatabase
{

    /////////////////////////////////////////////////////////////////////////Class Afficher Annonce////////////////////////////////////////////////////////////////////////////////////////////

    public function afficherToutesAnnonces(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM articles";
        $stmt = $db->query($sql);
        return $stmt;
    }

    /////////////////////////////////////////////////////////////////////////Class detail Annonce////////////////////////////////////////////////////////////////////////////////////////////

    public function detailAnnonce(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "SELECT * FROM articles WHERE id_article = ?";
        $requete_insertion = $db->prepare($sql);

        $requete_insertion->bindParam(1, $id);

        $requete_insertion->execute();

        return $requete_insertion->fetch();

    }

    /////////////////////////////////////////////////////////////////////////Class supprimer Annonce////////////////////////////////////////////////////////////////////////////////////////////

    public function SupprimerAnnonce(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "DELETE FROM articles WHERE id_article = ?";
        $requete_sup = $db->prepare($sql);

        $requete_sup->execute(array($id));


    }
}