<?php

?>
<div class="contenuAccueil">
    <h1 class="text-center text-info">résultat filtre</h1>
    <div class="row">
        <?php

        foreach ($CatReg as $row) {
            ?>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img class="card-img-top" width="10%" src=~/<?php echo $row['photo_article']; ?> alt="image de la carte" />

                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row['nom_article']; ?></h5>
                        <p class="card-text">
                            <?php echo $row['prix_article'] . " €"; ?></p>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <?php

        }

        ?>
    </div>
</div>
