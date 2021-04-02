<?php

require_once "../model/ClassDatabase.php";

class ClassUtilisateurs extends ClassDatabase
{


    /////////////////////////////////////////////////////////////////////////Class Afficher Utilisateur////////////////////////////////////////////////////////////////////////////////////////////

    public function afficherUtilisateur(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $db->query($sql);
        return $stmt;
    }
/////////////////////////////////////////////////////////////////////////Class detail Utilisateur////////////////////////////////////////////////////////////////////////////////////////////

    public function detailUtilisateur(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "SELECT * FROM utilisateurs WHERE id_utilisateur = ?";
        $requete_insertion = $db->prepare($sql);

        $requete_insertion->bindParam(1, $id);

        $requete_insertion->execute();

        return $requete_insertion->fetch();

    }
    /////////////////////////////////////////////////////////////////////////Class supprimer Utilisateur////////////////////////////////////////////////////////////////////////////////////////////

    public function SupprimerUtilisateur(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "DELETE FROM utilisateurs WHERE id_utilisateur = ?";
        $requete_sup = $db->prepare($sql);

        $requete_sup->execute(array($id));


    }

}
