<?php

require_once "../model/CRUDAdministrateur/ClassAdministrateur.php";

/////////////////////////////////////////////////////////////////////////Controlleur Afficher des elements////////////////////////////////////////////////////////////////////////////////////////////

function afficherTableAdmin(){
    //instance de la ClassAfficherUtilisateurs
    $tableAdmin = new ClassAdministrateur();

    $table = $tableAdmin->afficherUtilisateur();
    $table2 = $tableAdmin->afficherToutesAnnonces();
    $table3 = $tableAdmin->afficherToutescategories();
    $table4 = $tableAdmin->afficherTousAdministrateurs();
    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";
    //$Admin = $tableAdmin->ajouterAdmin();

}


/////////////////////////////////////////////////////////////////////////Controlleur Créer des elements////////////////////////////////////////////////////////////////////////////////////////////

function  EnregistrerAdmin(){
    //instance de la ClassAfficherUtilisateurs
    $tableAdmin = new ClassAdministrateur();
    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";
    $tableAdmin->ajouterAdmin();
    echo "<script>alert('l administrateur a bien été enregistré')</script>";
}

function EnregistrerCategorie(){
    //instance de la ClassAfficherUtilisateurs
    $tableAdmin = new ClassAdministrateur();
    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";
    $tableAdmin->ajouterCategorie();
    echo "<script>alert('la catégorie a bien été ajoutée')</script>";

}

///////////////////////////////////////////////////////////////////////// Controlleur Supprimer des elements////////////////////////////////////////////////////////////////////////////////////////////

