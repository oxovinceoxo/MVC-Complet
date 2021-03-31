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
                <a class="btn btn-danger" href="pageDeconnexion">deconexion</a>
            <?php
            }else{
                ?>

            <?php
                }
            //////////administrateur
            if (isset($_SESSION['connecter_admin']) && $_SESSION['connecter_admin'] == true) {
                ?>
                <a class="btn btn-danger" href="pageDeconnexion">deconexion</a>
                <a class="btn btn-success" href="accueilAdministrateur">Administrateur</a>
                <?php
                ////////////visiteur
            }else{
                ?>
                <a class="btn btn-danger" href="FormulaireConnexion">connexion</a>
            <?php
            }
            ?>


                <a class="btn btn-info" href="accueil">recherche</a>
                <a class="btn btn-success" href="formulaireInscription">inscription</a>

            </div>
        </div>
    </nav>


<section class="home"></section>
