<?php
require_once "../model/ClassDatabase.php";


class ClassAdministrateur extends ClassDatabase

{
    private $email_admin;
    private $password_admin;

    public function  Connexion(){

        $db = $this-> getPDO();

        if (!empty($_POST['email_admin']) && !empty($_POST['password_admin'])) {

            $sql = "SELECT * FROM administration WHERE email_admin = ? AND password_admin = ?";

            $req = $db->prepare($sql);

            $req->bindParam(1, $_POST['email_admin']);
            $req->bindParam(2, $_POST['password_admin']);

            $req->execute();
            $row=$req->fetch(PDO::FETCH_ASSOC);


            if (($_POST['email_admin'] == $row['email_admin']) && ($_POST['password_admin'] == $row['password_admin'])) {

                session_start();
                $_SESSION['connecter_admin'] = true;
                $_SESSION['email_admin'] = $row['email_admin'];
                $_SESSION['name_admin'] = $row['name_admin'];

                header("location:http://localhost/AnnonceMVC2/accueilAdministrateur");

            } else {
                echo "L'email ou le mdp n'est pas bon (admin)";
            }

        } elseif (empty($_POST['email_admin']) || empty($_POST['password_admin'])) {

            echo "<div class='alert alert-danger m-2 text-center' role='alert'>Merci de remplir tous les champs</div>";

        } else {
            echo "Else vide";
        }

    }


    /////////////////////////////////////////////////////////////////////////Class Afficher Administrateur////////////////////////////////////////////////////////////////////////////////////////////


    public function afficherTousAdministrateurs(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM administration";
        $stmt = $db->query($sql);
        return $stmt;
    }



    /////////////////////////////////////////////////////////////////////////Class Créer un Administrateur////////////////////////////////////////////////////////////////////////////////////////////

    public function ajouterAdmin(){

        $db = $this->getPDO();

        $sql = "INSERT INTO administration (email_admin, password_admin) VALUES (?,?)";

        $req = $db->prepare($sql);
        $req->bindParam(1,$_POST['AjouterEmailAdmin']);
        $req->bindParam(2, $_POST['AjouterPasswordAdmin']);
        $res = $req->execute(array($_POST['AjouterEmailAdmin'], $_POST['AjouterPasswordAdmin']));
        return $res;
    }



    /////////////////////////////////////////////////////////////////////////Class detail Administrateur////////////////////////////////////////////////////////////////////////////////////////////

    public function detailAdministrateur(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "SELECT * FROM administration WHERE id_admin = ?";
        $requete_insertion = $db->prepare($sql);

        $requete_insertion->bindParam(1, $id);

        $requete_insertion->execute();

        return $requete_insertion->fetch();

    }
/////////////////////////////////////////////////////////////////////////Class supprimer Administrateur////////////////////////////////////////////////////////////////////////////////////////////

    public function SupprimerAdministration(){
        $db = $this->getPDO();
        $id = $_GET['id_sup'];
        $sql = "DELETE FROM administration WHERE id_admin = ?";
        $requete_sup = $db->prepare($sql);

        $requete_sup->execute(array($id));


    }


}