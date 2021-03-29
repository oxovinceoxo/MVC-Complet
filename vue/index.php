<?php
session_start();
    ob_start();
    require_once "../controlleur/ControlleurUtilisateur.php";
    require_once "../controlleur/ControlleurVisiteur.php";
    require_once "../controlleur/ControlleurAdministrateur.php";

//Verification de l'existance de la super globale $_GET[''] dans url

if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "accueil";
}
if ($url== ""){
    $url = "accueil";
}



//routage
if($url == "accueil"){
    AfficherFormulaireRecherche();
    AfficherLesAnnonces();

}elseif ($url == "formulaireInscription"){
    AfficherFormulaireInscription();



//Connexion Admin ou Utilisateur
}elseif ($url == "FormulaireConnexion"){
    AfficherFormulaireConnexion();

//Page Administrateur
}elseif ($url == "accueilAdministrateur" ){
    afficherTableAdmin();


//Page de déconnexionAdministrateur
}elseif ($url == "pageDeconnexion"){

    require_once "../vue/VueAdministrateur/pageDeconnexion.php";


}elseif ($url == "accueilUtilisateur") {

    AfficherLesAnnoncesUtilisateur();

}



$content = ob_get_clean();
require_once "template.php";