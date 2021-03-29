<?php

require_once "../model/CRUDAdministrateur/ClassAdministrateur.php";

function afficherTableAdmin(){
    //instance de la ClassAfficherUtilisateurs
    $tableAdmin = new ClassAdministrateur();
    $table = $tableAdmin->afficherUtilisateur();
    $table2 = $tableAdmin->afficherToutesAnnonces();
    $table3 = $tableAdmin->afficherToutescatégories();

    $table4 =$tableAdmin->afficherTousAdministrateurs();
    require_once "../vue/VueAdministrateur/accueilAdministrateur.php";

}



