<?php


require_once "../model/CRUDUtilisateur/ClassUtilisateur.php";
require_once "../model/ClassAnnonces.php";
require_once "../model/CRUDUtilisateur/ClassArticleUtilisateur.php";


function AfficherlesAnnoncesUtilisateur(){
    $ArticleUtilisateur = new ClassArticleUtilisateur();
    $table1 = $ArticleUtilisateur->AfficherAnnonceUtilisateur();
    require_once "../vue/VueUtilisateur/accueilUtilisateur.php";
}






