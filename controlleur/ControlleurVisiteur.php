<?php
require_once "../model/ClassAnnonces.php";

function AfficherFormulaireInscription (){

    require_once "../vue/VueVisiteur/formulaireInscription.php";
}

function AfficherFormulaireRecherche (){

    require_once "../vue/formulaireRecherche.php";
}

function AfficherFormulaireConnexion (){
    require_once "../vue/VueUtilisateur/FormulaireConnexion.php";
}
function AfficherLesAnnonces(){
    //instance de la class ClassAnnonces (requet sql)
    $ListeAnnonces = new ClassAnnonces();
    // appel de la méthode afficherToutesAnnonces
    $res = $ListeAnnonces->afficherToutesAnnonces();

        require_once "../vue/accueil.php";

}
