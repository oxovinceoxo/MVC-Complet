<?php
require_once "../model/region.php";

function CarteAnnonce($id){
    $reg = new region();
    $res = $reg->afficherAnnonceParRegion($_GET['id']);
    if($res){
        require_once '../vue/accueil.php';
    }else{
        echo "<p class='alert-warning text-center p-2 mt-2'><b>Pas d'annonce pour cette region</b></p>";
    }
}
