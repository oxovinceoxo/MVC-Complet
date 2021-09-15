<?php
require_once "../model/ClassAnnonces.php";
require_once "../model/CRUDVisiteur/ClassInscription.php";
require_once "../model/CRUDVisiteur/recherche.php";

require_once "../model/MailInscription.php";

function AfficherFormulaireInscription (){

    require_once "../vue/VueVisiteur/formulaireInscription.php";
}

/////////////////////////////////////////////////////Inscription////////////////////////////////////////////////////////////////
function Inscription(){
    require_once "../vue/VueVisiteur/formulaireInscription.php";

    if (isset($_POST['BoutonInscription'])){
        $inscription = new MailInscription();
        $EnvoiDuformulaire = $inscription->envoyerEmail();
        $EnvoiDuformulaire;
        ?>
        <script>
            alert('Vous allez recevoir un mail de confirmation. Merci de cliquer sur le lien ')
        </script>
        <?php
    }
}
function validerInscription(){

    require_once "../vue/VueVisiteur/validationInscription.php";

    $validerInscription = new ClassInscription();
    $EnregistrerInscription = $validerInscription->CréationUtilisateur();
    $EnregistrerInscription;
}



function AfficherFormulaireRechercheCatReg ($id_region,$id_categorie){

    $recherche = new recherche();
    $CatReg = $recherche->rechercherAnnonceCatReg($id_region,$id_categorie);
    if ($CatReg){
require_once "../vue/resultatRecherche.php";
    }else {
        echo "pas de resultat pour cette region et cette categorie";
    }

}


function AfficherFormulaireConnexion (){
    require_once "../vue/VueUtilisateur/FormulaireConnexion.php";


}

function AfficherLesAnnonces(){
    //nouvelle instance de la class ClassAnnonces (requet sql)
    $ListeAnnonces = new ClassAnnonces();
    // appel de la méthode afficherToutesAnnonces
    $res = $ListeAnnonces->afficherToutesAnnonces();

    require_once "../vue/accueil.php";

}

function detailAnnonceVisiteur(){
    //nouvelle instance de la class recherche (requet sql)
    $Annoncedet = new recherche();
    // appel de la méthode detailAnnonceVisiteur
    $resultat=$Annoncedet->detailAnnonceVisiteur();

    require_once "../vue/VueVisiteur/detailAnnonce.php";

}
