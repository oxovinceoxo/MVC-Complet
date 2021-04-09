<?php
if (isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] == true) {
    var_dump($_SESSION["id_utilisateur"]);
?>


<div>
    <h1 class="text-center text-info">liste de vos annonces</h1>
    <div class="text-center p-3">
    <a href="formulaireCreerAnnonce" class="btn btn-success ">Ajouter une annonce</a>
    </div>
    <div class="row">
        <?php
        foreach ($table1 as $row) {
            ?>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img class="card-img-top" width="10%" src="~/<?php
                    echo $row['photo_article'];
                    ?>" alt="image de la carte">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                            echo $row['nom_article'];
                            ?></h5>
                        <p class="card-text">
                            <?php
                            echo $row['prix_article'] . " €";
                            ?></p>
                        <a href="supprimerAnnonce?id_supU=<?=$row['id_article']?>" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php

        }

        ?>
    </div>
</div>
   <?php
}else {
    echo "merci de vous connecter";
}