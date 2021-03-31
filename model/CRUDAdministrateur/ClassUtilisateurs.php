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


}
