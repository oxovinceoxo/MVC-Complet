<?php

require_once "ClassDatabase.php";

class region extends ClassDatabase
{
    public function afficherAnnonceParRegion($id){
        //Afficher les détails de l'annonce par regions
        $db = $this->getPDO();
        $sql = "SELECT * FROM articles INNER JOIN utilisateurs ON articles.utilisateur_id = utilisateurs.id_utilisateur INNER JOIN categories ON articles.categorie_id = categories.id_categorie INNER JOIN regions ON articles.region_id = regions.id_regions WHERE categorie_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($id));
        $getRegion = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $getRegion;

    }
}