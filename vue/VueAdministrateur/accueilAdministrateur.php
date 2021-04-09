<?php

?>
<!---------------------------------------------------------------------------------liste Administrateurs ------------------------------------------------------------------------------->

<!--afficher les Administrateurs ------------------------------------------------------------------------------->
        <div>
            <div class=" mb-2 bg-danger text-white"><h1 class="text-center p-1">liste des administrateurs</h1></div>


                <?php

                foreach ($table4 as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['email_admin']; ?></td>
                        <td><a href="ConfirmerSupprimerAdministrateur?id_sup=<?=$row['id_admin']?>" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                    <?php
                }
                ?>

        </div>


                <!--ajouter un Administrateurs ------------------------------------------------------------------------------->
                        <div class=" mb-2 bg-dark text-white mt-5 " style="width: 30%"><h4>Ajouter un Administrateur</h4></div>


                        <!-- formulaire pour rajouter un administrateur --->
                        <form method="post">

                            <label for="titre">Email Administrateur</label>
                            <input type="text" name="AjouterEmailAdmin">

                            <label for="titre">password administrateur</label>
                            <input type="text"  name="AjouterPasswordAdmin">



                            <button class="btn btn-success" name="boutonAjouterAdmin" type="submit">Enregistrer l'Administrateur</button>
                        </form>
                            <?php

                            if(isset($_POST["boutonAjouterAdmin"])){
                                $form = true;
                                    EnregistrerAdmin();

                            }else{
                                echo "merci de remplir tous les champs";
                            }

                            ?>


<!---------------------------------------------------------------------------------------liste categories ------------------------------------------------------------------------------------->

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


                <a href="ConfirmerSupprimerCategorie?id_sup=<?=$row['id_categorie']?>" class="btn btn-danger">Supprimer</a>
            </div>

            <?php
        }

        ?>
    </div>
</div>

                        <!--ajouter une catégorie ------------------------------------------------------------------------------->
                        <div class=" mb-2 bg-dark text-white mt-5 " style="width: 30%"><h4>Ajouter une catégorie</h4></div>

                        <!-- formulaire pour rajouter une catégorie --->
                        <form method="post">

                            <label for="titre">Nom de la catégorie</label>
                            <input type="text" name="AjouterCategorie">


                            <button class="btn btn-success" name="boutonAjouterCategorie" type="submit">Enregistrer la categorie</button>
                        </form>
                        <?php
                        $form = false;
                        if(isset($_POST["boutonAjouterCategorie"])){
                            $form = true;
                            if($form){
                                EnregistrerCategorie();
                            }

                        }else{
                            echo "merci de remplir tous les champs";
                        }

                        ?>


<!---------------------------------------------------------------------------------------liste Utilisateur ------------------------------------------------------------------------------------->


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
                        <a href="ConfirmerSupprimerUtilisateur?id_sup=<?=$row['id_utilisateur']?>" class="btn btn-danger">Supprimer</a>
                    </div>

            <?php

        }

        ?>
    </div>
</div>

<!---------------------------------------------------------------------------------------liste Annonces ------------------------------------------------------------------------------------->

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
                        <a href="ConfirmerSupprimerAnnonce?id_sup=<?=$row['id_article']?>" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php

        }

        ?>
    </div>
</div>

