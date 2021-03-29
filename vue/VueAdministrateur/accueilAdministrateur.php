<?php

?>
<!--afficher les Administrateurs ------------------------------------------------------------------------------->
<div>
    <div class=" mb-2 bg-danger text-white"><h1 class="text-center p-1">liste des administrateurs</h1></div>


    <div class="row">
        <?php

        foreach ($table4 as $row) {
            ?>
            <div class="col-md-3 col-sm-12">

                <h5>
                    <?php
                    echo $row['email_admin'];
                    ?></h5>

                    <a href="#" class="btn btn-danger">Supprimer</a>
            </div>

            <?php

        }

        ?>
    </div>
</div>


<!--afficher les catégories --------------------------------------------------------------------------------------->
<div>
    <div class=" mb-2 bg-success text-white"><h1 class="text-center p-1">liste des Catégories</h1></div>
    <div class="row">
        <?php

        foreach ($table3 as $row) {
            ?>
            <div class="col-md-3 col-sm-12">

                <h5>
                    <?php
                    echo $row['type_categorie'];
                    ?></h5>


                <a href="#" class="btn btn-danger">Supprimer</a>
            </div>

            <?php

        }

        ?>
    </div>
</div>

<!--afficher les utilisateur -------------------------------------------------------------------------------------->

<div>
    <div class=" mb-2 bg-info  text-white"><h1 class="text-center p-1">liste des utilisateurs</h1></div>
    <div class="row">
        <?php

        foreach ($table as $row) {
            ?>
            <div class="col-md-3 col-sm-12">

                        <h5>
                            <?php
                            echo $row['nom_utilisateur'];
                            ?></h5>
                        <p>
                            <?php
                            echo $row['email_utilisateur'];
                            ?></p>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </div>

            <?php

        }

        ?>
    </div>
</div>

<!--afficher les annonces ----------------------------------------------------------------------------------------->

<div>
    <div class=" mb-2 bg-dark text-white"><h1 class="text-center p-1">liste des annonces</h1></div>
    <div class="row">
        <?php
        foreach ($table2 as $row) {
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
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php

        }

        ?>
    </div>
</div>

