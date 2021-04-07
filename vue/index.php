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
    $title = "page accueil";
    AfficherFormulaireRecherche();
    AfficherLesAnnonces();

//Page Administrateur
}elseif ($url == "accueilAdministrateur" ){
    afficherTableAdmin();


//Connexion Admin ou Utilisateur
}elseif ($url == "FormulaireConnexion"){
    AfficherFormulaireConnexion();

//formulaire d'inscription
}elseif ($url == "formulaireInscription"){
    AfficherFormulaireInscription();
    Inscription();




//Page de déconnexionAdministrateur
}elseif ($url == "pageDeconnexion"){

    require_once "../vue/VueAdministrateur/pageDeconnexion.php";


}elseif ($url == "accueilUtilisateur") {
    AfficherLesAnnoncesUtilisateur();



}elseif ($url == "ConfirmerSupprimerAnnonce" && isset($_GET['id_sup']) && $_GET['id_sup'] > 0){
    SupAnnonce();

}elseif ($url == "ConfirmerSupprimerCategorie" && isset($_GET['id_sup']) && $_GET['id_sup'] > 0) {
    SupCategorie();

}elseif ($url == "ConfirmerSupprimerUtilisateur" && isset($_GET['id_sup']) && $_GET['id_sup'] > 0) {
    SupUtilisateur();

}elseif ($url == "ConfirmerSupprimerAdministrateur" && isset($_GET['id_sup']) && $_GET['id_sup'] > 0) {
    SupAdministrateur();


}elseif ($url == "validationInscription"){
    validerInscription();
}



$content = ob_get_clean();
require_once "template.php";