<?php


require_once "../model/CRUDUtilisateur/ClassUtilisateur.php";
require_once "../model/ClassAnnonces.php";
require_once "../model/CRUDUtilisateur/ClassArticleUtilisateur.php";

//afficher les annonce d'un utilisateur
function AfficherlesAnnoncesUtilisateur(){
    $ArticleUtilisateur = new ClassArticleUtilisateur();
    $table1 = $ArticleUtilisateur->AfficherAnnonceUtilisateur();
    require_once "../vue/VueUtilisateur/accueilUtilisateur.php";
}

//Ajouter une annonce d'utilisateur
function AjouterAnnonceUtilisateur($nom_article, $description_article, $prix_article, $photo_article, $categorie_id, $utilisateur_id, $region_id){
    //Instance du model
    $article = new ClassArticleUtilisateur();

    //Appel de la methode du model
    $ajouterArtcileUser = $article->AjouterArticleUtilisateur($nom_article, $description_article, $prix_article, $photo_article, $categorie_id, $utilisateur_id, $region_id);

}

//Supprimer un annonce Utilisateur

function SupAnnonceUtilisateur(){

    $AnnonceUt = new ClassArticleUtilisateur();
    $resultat=$AnnonceUt->detailAnnonceUtilisateur();
    require_once "../vue/VueUtilisateur/supprimerAnnonce.php";

    if(isset($_POST["confirmerSupU"])){
        $AnnonceU = new ClassArticleUtilisateur();
        $okSup=$AnnonceU->SupprimerAnnonceUtilisateur();
        $okSup;
        header("location:http://localhost/AnnonceMVC2/accueilUtilisateur");
    }
}



