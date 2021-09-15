0<?php

require_once "../model/CRUDAdministrateur/ClassAdministrateur.php";
require_once "../model/CRUDAdministrateur/ClassUtilisateurs.php";
require_once "../model/CRUDAdministrateur/ClassArticle.php";
require_once "../model/CRUDAdministrateur/ClassCategories.php";

/////////////////////////////////////////////////////////////////////////Controleur Afficher des elements////////////////////////////////////////////////////////////////////////////////////////////

function afficherTableAdmin(){
    //instance de la ClassAdministrateur
    $tableAdmin = new ClassAdministrateur();
    //instance de la ClassUtilisateurs
    $tableUtilisateur = new ClassUtilisateurs();
    //instance de la ClassArticle
    $tableArticle = new ClassArticle();
    //instance de la ClassCategories
    $tableCategorie = new ClassCategories();


    $table = $tableUtilisateur->afficherUtilisateur();
    $table2 = $tableArticle->afficherToutesAnnonces();
    $table3 = $tableCategorie->afficherToutescategories();
    $table4 = $tableAdmin->afficherTousAdministrateurs();

    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";
    //$Admin = $tableAdmin->ajouterAdmin();

}


/////////////////////////////////////////////////////////////////////////Controleur Créer des elements////////////////////////////////////////////////////////////////////////////////////////////

function  EnregistrerAdmin(){
    //instance de la ClassAfficherUtilisateurs
    $tableAdmin = new ClassAdministrateur();
    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";
    $tableAdmin->ajouterAdmin();
    echo "<script>alert('l administrateur a bien été enregistré')</script>";
}

function EnregistrerCategorie(){
    //instance de la ClassCategories
    $tableAdmin = new ClassCategories();
    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";
    $tableAdmin->ajouterCategorie();
    echo "<script>alert('la catégorie a bien été ajoutée')</script>";

}



///////////////////////////////////////////////////////////////////////// Controleur Supprimer des elements////////////////////////////////////////////////////////////////////////////////////////////


function SupAnnonce(){

    $tableArticle = new ClassArticle();
    $resultat=$tableArticle->detailAnnonce();
    require_once "../vue/VueAdministrateur/ConfirmerSupprimerAnnonce.php";

    if(isset($_POST["confirmerSup"])){
        $tableAdmin = new ClassArticle();
        $okSup=$tableAdmin->SupprimerAnnonce();
        $okSup;
        header("location:http://localhost/AnnonceMVC2/accueilAdministrateur");
    }else{
        echo "merci de remplir tous les champs";
    }
}

function SupCategorie(){
    $tableCategorie = new ClassCategories();
    $resultat=$tableCategorie->detailCategorie();
    require_once "../vue/VueAdministrateur/ConfirmerSupprimerCategorie.php";

    if(isset($_POST["confirmerSupCat"])){
        $tableAdmin = new ClassCategories();
        $okSup=$tableCategorie->SupprimerCategorie();
        $okSup;
        header("location:http://localhost/AnnonceMVC2/accueilAdministrateur");
    }else{
        echo "merci de remplir tous les champs";
    }

}

function SupUtilisateur(){
    $tableUtilisateur = new ClassUtilisateurs();
    $resultat=$tableUtilisateur->detailUtilisateur();
    require_once "../vue/VueAdministrateur/ConfirmerSupprimerUtilisateur.php";

    if(isset($_POST["confirmerSupUt"])){
        $tableAdmin = new ClassUtilisateurs();
        $okSup=$tableUtilisateur->SupprimerUtilisateur();
        $okSup;
        header("location:http://localhost/AnnonceMVC2/accueilAdministrateur");
    }else{
        echo "merci de remplir tous les champs";
    }

}

function SupAdministrateur(){
    $tableAdministrateur = new ClassAdministrateur();
    $resultat=$tableAdministrateur->detailAdministrateur();
    require_once "../vue/VueAdministrateur/ConfirmerSupprimerAdministrateur.php";

    if(isset($_POST["confirmerSupAdm"])){
        $tableAdmin = new ClassUtilisateurs();
        $okSup=$tableAdministrateur->SupprimerAdministration();
        $okSup;
        header("location:http://localhost/AnnonceMVC2/accueilAdministrateur");
    }else{
        echo "merci de remplir tous les champs";
    }

}
