<?php
require_once "../model/ClassDatabase.php";


class recherche extends ClassDatabase

{
    private $id_region;
    private $id_categorie;
    public function rechercherAnnonceCatReg($id_region,$id_categorie){

        $db = $this->getPDO();
        $sql = "SELECT *  FROM articles INNER JOIN utilisateurs ON articles.utilisateur_id = utilisateurs.id_utilisateur INNER JOIN  categories ON articles.categorie_id = categories.id_categorie INNER JOIN regions ON articles.region_id = regions.id_regions WHERE region_id = ? AND categorie_id = ?";
        $stmt = $db->prepare($sql);
        $this->region_id = $id_region;
        $this->categorie_id = $id_categorie;
        $stmt->bindParam(1, $id_region);
        $stmt->bindParam(2, $id_categorie);
        $stmt->execute(array($id_region, $id_categorie));
        $resultsCR = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultsCR;
    }

    ///////////////////////detail d'une annonce/////////////////////////////////

    public function detailAnnonceVisiteur(){
        $db = $this->getPDO();
        $id = $_GET['id_det'];
        /// inner join pour appeler la clé étrangère ///
        $sql = "SELECT *  FROM articles  INNER JOIN regions ON articles.region_id = regions.id_regions WHERE region_id = ?";
        $requete_insertion = $db->prepare($sql);

        $requete_insertion->bindParam(1, $id);

        $requete_insertion->execute();

        return $requete_insertion->fetch();

    }


}