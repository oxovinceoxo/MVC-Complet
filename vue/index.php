<?php
session_start();
    ob_start();
    require_once "../controlleur/ControlleurUtilisateur.php";
    require_once "../controlleur/ControlleurVisiteur.php";
    require_once "../controlleur/ControlleurAdministrateur.php";
    require_once "../controlleur/ControlleurRegions.php";


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
    require_once "../vue/formulaireRecherche.php";
    if (isset($_POST['BoutonRecherche'])){
        //var_dump("salut");
        if (isset($_POST["catRecherche"])&& isset($_POST["regRecherche"])){
            //var_dump($_POST["catRecherche"]);var_dump($_POST["regRecherche"]);
            AfficherFormulaireRechercheCatReg($_POST["catRecherche"],$_POST["regRecherche"]);
        }
    }
    AfficherLesAnnonces();


//Page Administrateur
}elseif (isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] == true && $url == "accueilAdministrateur" ){
    afficherTableAdmin();


//Connexion Admin ou Utilisateur
}elseif ($url == "FormulaireConnexion"){
    AfficherFormulaireConnexion();

//formulaire d'inscription
}elseif ($url == "formulaireInscription") {
    AfficherFormulaireInscription();
    Inscription();

}elseif (isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] === true && $url === "formulaireCreerAnnonce"){

    //Ajout annonce utilisateur

    require_once "VueUtilisateur/formulaireCreerAnnonce.php";
    $_POST['utilisateur_id'] = $_SESSION['id_utilisateur'];

    if(isset($_POST['nom_article']) && isset($_POST['description_article']) && isset($_POST['prix_article']) && isset($_POST['photo_article']) && isset($_POST['categorie_id']) && isset($_SESSION['id_utilisateur']) && isset($_POST['region_id'])){
        //ICI AJOUTER !empty
        AjouterAnnonceUtilisateur($_POST['nom_article'], $_POST['description_article'], $_POST['prix_article'], $_POST['photo_article'], $_POST['categorie_id'],$_SESSION['id_utilisateur'], $_POST['region_id']);
        header("Location: http://localhost/AnnonceMVC2/accueilUtilisateur");
    }



//Page de déconnexionAdministrateur
}elseif ($url == "pageDeconnexion"){

    require_once "../vue/VueAdministrateur/pageDeconnexion.php";


}elseif(isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] == true && $url == "accueilUtilisateur") {
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

    //Supprimer Annonce Utilisateur
}elseif ($url == "supprimerAnnonce" && isset($_GET['id_supU']) && $_GET['id_supU'] > 0){
    SupAnnonceUtilisateur();

}elseif ($url == "region"){
    require_once "../vue/formulaireRecherche.php";
    $title = "CarteDeFrance";
    $id = $_GET['id'];
    CarteAnnonce($_GET['id']);


}elseif ($url == "detailAnnonce" && isset($_GET['id_det']) && $_GET['id_det'] > 0) {
    detailAnnonceVisiteur();

}

$content = ob_get_clean();
require_once "template.php";