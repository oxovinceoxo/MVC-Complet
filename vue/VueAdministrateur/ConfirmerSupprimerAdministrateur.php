<?php



?>
    <div class="p-3 mb-2 bg-primary text-white"><h1 >Detail de l'administrateur</h1></div>



    <ul>
        <li><?=$resultat['id_admin']?></li>
        <li><?=$resultat['email_admin']?></li>
        <li><?=$resultat['password_admin']?></li>
    </ul>

    <a class="btn btn-info href="accueilAdministrateur">retour</a>
    <form method="post">
        <button type="submit" name="confirmerSupAdm"  class="btn btn-danger">confirmer suppression</button>
    </form>
<?php



?>
<?php
