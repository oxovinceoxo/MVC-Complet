<?php



?>
    <div class="p-3 mb-2 bg-primary text-white"><h1 >Detail de l'annonce</h1></div>



    <ul>
        <li><?=$resultat['id_article']?></li>
        <li><?=$resultat['nom_article']?></li>
        <li><?=$resultat['description_article']?></li>
        <li><?=$resultat['prix_article']?></li>
        <li><img  width="10%" src="~/<?php
            echo $resultat['photo_article'];
            ?>" alt="<?=$resultat ["nom_article"]?>"title="<?=$resultat ["nom_article"]?>"></li>
        <li><?=$resultat['categorie_id']?></li>
        <li><?=$resultat['utilisateur_id']?></li>
        <li><?=$resultat['region_id']?></li>
    </ul>

    <a class="btn btn-info href="accueilAdministrateur">retour</a>
    <form method="post">
        <button type="submit" name="confirmerSup"  class="btn btn-danger">confirmer suppression</button>
    </form>

