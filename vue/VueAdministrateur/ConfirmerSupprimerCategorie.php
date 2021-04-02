<?php



?>
    <div class="p-3 mb-2 bg-primary text-white"><h1 >Detail de la categorie</h1></div>



    <ul>
        <li><?=$resultat['id_categorie']?></li>
        <li><?=$resultat['type_categorie']?></li>
    </ul>

    <a class="btn btn-info href="accueilAdministrateur">retour</a>
    <form method="post">
        <button type="submit" name="confirmerSupCat"  class="btn btn-danger">confirmer suppression</button>
    </form>
<?php



?>
<?php


