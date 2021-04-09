<?php
require_once "../model/ClassDatabase.php";

class ClassUtilisateur extends ClassDatabase
{
    public function  ConnexionUtilisateur(){

        $db = $this-> getPDO();

        if (!empty($_POST['email_admin']) && !empty($_POST['password_admin'])) {

            $sql = "SELECT * FROM utilisateurs WHERE email_utilisateur = ? AND password_utilisateur = ?";

            $req = $db->prepare($sql);

            $req->bindParam(1, $_POST['email_admin']);
            $req->bindParam(2, $_POST['password_admin']);

            $req->execute();
            $row=$req->fetch(PDO::FETCH_ASSOC);


            if (($_POST['email_admin'] == $row['email_utilisateur']) && ($_POST['password_admin'] == $row['password_utilisateur'])) {

                //demar la session
                session_start();
                $_SESSION['connecter_utilisateur'] = true;
                $_SESSION['email_utilisateur'] = $row['email_utilisateur'];
                $_SESSION['nom_utilisateur'] = $row['nom_utilisateur'];
                $_SESSION['id_utilisateur'] = $row['id_utilisateur'];

                header("location:http://localhost/AnnonceMVC2/accueilUtilisateur");

            } else {
                echo "L'email ou le mdp n'est pas bon (admin)";
            }

        } elseif (empty($_POST['email_admin']) || empty($_POST['password_admin'])) {

            echo "<div class='alert alert-danger m-2 text-center' role='alert'>Merci de remplir tous les champs</div>";

        } else {
            echo "Else vide";
        }

    }

}