<?php
require_once "../model/LectureClé/LectureClé.php";
$lecture= new LectureCle();
if(isset($_SESSION['connecter_utilisateur']) && $_SESSION['connecter_utilisateur'] === true){

    ?>
    <h1 class="text-primary text-center">Ajouter votre annonce ici</h1>

    <form  method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title">Nom du produit</label>
            <input class="form-control" type="text" name="nom_article" id="title" placeholder="Nom du produit" required/>
        </div>

        <div class="form-group">
            <label for="description">Description du produits</label>
            <textarea rows="4" class="form-control" type="text" name="description_article" id="description" placeholder="Description du produit" required></textarea>
        </div>

        <div class="form-group">
            <label for="title">Prix du produit</label>
            <input class="form-control" type="number" step="any" name="prix_article" id="title" placeholder="Prix du produit" required/>
        </div>


        <div class="form-group">
            <label for="stock">Catégories : </label>
            <select class="form-control" id="stock" name="categorie_id" required>
                <?php
                $lecture->LectureCategorie();
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="stock">Région : </label>
            <select class="form-control" id="stock" name="region_id" required>

                <?php
                $lecture->LectureRegions();
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image jeux</label>
            <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
            <!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
            <input type="file" id="image" name="photo_article" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="hidden" id="image" name="id_utilisateur" class="form-control">
        </div>


        <button type="submit" class="btn btn-outline-success">Ajouter l'annonce</button>
    </form>

    <?php
    $_POST['id_utilisateur'] = $_SESSION['id_utilisateur'];

    if(isset($_FILES['photo_article'])) {
        //Gestion upload image
        $uploaddir = '../assets/img/';
        $photo_article = $uploaddir . basename($_FILES['photo_article']['name']);
        $_POST['photo_article'] = $photo_article;
        if (move_uploaded_file($_FILES['photo_article']['tmp_name'], $photo_article)) {
            echo '<p class="alert-success">Le fichier est valide et à été téléchargé avec succès !</p>';
        } else {
            echo '<p class="alert-danger">Une erreur s\'est produite, le fichier n\'est pas valide !</p>';
        }
    }else{
        echo "<p class='alert-warning mt-5 p-5'>Seul les format d'image png, jpg, webp, svg et gif sont accepté !</p>";
    }



}else{
    echo "merci de vous connecter pour ajouter un produit";
}
