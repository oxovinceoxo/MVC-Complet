<?php
require_once "ClassDatabase.php";

class ClassAnnonces extends ClassDatabase
{
    private $id_annonce;
    private $nom_annonce;
    private $prix_article;

    private $region_id;

    public function afficherToutesAnnonces(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM articles ";
        $res= $db->query($sql);

        return $res;
    }
}