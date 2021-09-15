<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="accueil">Les Petites annonces</a>
        </div>
        <div>

            <?php
            //////////utilisateur

            if (isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] == true) {
                ?>
                <a class="btn btn-danger" href="pageDeconnexion">deconnexion</a>
                <a class="btn btn-success" href="accueilUtilisateur">mon compte</a>
                <?php
            //////////administrateur
            }elseif(isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] == true) {
                ?>

                <a class="btn btn-danger" href="pageDeconnexion">deconnexion</a>
                <a class="btn btn-success" href="accueilAdministrateur">Administrateur</a>

                <a style="display:none" href=""></a>
                <?php
                ////////////visiteur
            } else {
                ?>
                <a class="btn btn-danger" href="FormulaireConnexion">connexion</a>
                <a class="btn btn-success" href="formulaireInscription">inscription</a>
                <?php

            }
            ?>


            <a class="btn btn-info" href="accueil">recherche</a>


        </div>
    </div>
</nav>


<section class="home"></section>
