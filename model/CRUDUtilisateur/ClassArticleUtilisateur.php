<?php
require_once "../model/ClassDatabase.php";

class ClassArticleUtilisateur extends ClassDatabase
{
    public function AfficherAnnonceUtilisateur(){
        $db = $this-> getPDO();
        $sql = "SELECT * FROM articles WHERE id_article = ?";

        $req = $db->prepare($sql);
        $req->bindParam(1, $_GET['ID']);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}