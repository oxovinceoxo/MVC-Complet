<?php


require_once "../model/CRUDUtilisateur/ClassUtilisateur.php";
require_once "../model/ClassAnnonces.php";


function AfficherlesAnnoncesUtilisateur(){
    require_once "../vue/VueUtilisateur/accueilUtilisateur.php";
}



function AfficherLesAnnonces(){
    //instance de la class ClassAnnonces (requet sql)
    $ListeAnnonces = new ClassAnnonces();
    // appel de la méthode afficherToutesAnnonces
    $res = $ListeAnnonces->afficherToutesAnnonces();
    if ($res){
        require_once "../vue/accueil.php";
    }else {
        die();
    }


}


