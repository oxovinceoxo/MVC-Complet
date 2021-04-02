<?php
require_once "../model/ClassDatabase.php";

class ClassInscription extends ClassDatabase
{
    public function CréationUtilisateur()
    {
        $db = $this->getPDO();

        $nom_inscrition = $_GET['name'];
        $email_inscription = $_GET['email'];
        $password_inscription = $_GET['password'];

        $sql = "INSERT INTO `utilisateurs`(`nom_utilisateur`, `email_utilisateur`, `password_utilisateur`) VALUES (?,?,?)";

        $req = $db->prepare($sql);

        $req->bindParam(1, $nom_inscrition);
        $req->bindParam(2, $email_inscription);
        $req->bindParam(3, $password_inscription);

        $req->execute();

    }
}