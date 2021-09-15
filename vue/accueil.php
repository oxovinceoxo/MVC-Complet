<?php

?>

<!--CARTE DE FRANCE ET RECHERCHE PAR REGION -->
<div class="container-fluid text-center mt-3 mb-5 pb-3">

    <link rel="stylesheet" href="assets/map/cmap/style.css">
    <script src="assets/map/cmap/jquery-1.11.1.min.js"></script>
    <script src="assets/map/cmap/France-map.js"></script>
    <script>francefree();</script>
</div>


<div class="contenuAccueil">
    <h1 class="text-center text-info">liste de toutes les annonces</h1>
    <div class="row">
        <?php

        foreach ($res as $row) {
            ?>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img class="card-img-top" width="10%" src=~/<?php echo $row['photo_article']; ?> alt="image de la carte" />

                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row['nom_article']; ?></h5>
                        <p class="card-text">
                            <?php echo $row['prix_article'] . " €"; ?></p>
                            <?php echo $row['region_id'] ?></p>
                        <a href="detailAnnonce?id_det=<?=$row['id_article']?>" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <?php

        }

        ?>
    </div>
</div>
