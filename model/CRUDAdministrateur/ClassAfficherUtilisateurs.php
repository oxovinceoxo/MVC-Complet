<?php

require_once "../model/ClassDatabase.php";

class ClassAfficherUtilisateurs extends ClassDatabase
{
    public function afficherUtilisateur(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $db->query($sql);
        return $stmt;
    }
}