?>
<div class="p-3 mb-2 bg-primary text-white"><h1 >Detail de l'utilisateur</h1></div>



<ul>
    <li><?=$resultat['id_utilisateur']?></li>
    <li><?=$resultat['nom_utilisateur']?></li>
    <li><?=$resultat['email_utilisateur']?></li>
    <li><?=$resultat['password_utilisateur']?></li>
</ul>

<a class="btn btn-info href="accueilAdministrateur">retour</a>
<form method="post">
    <button type="submit" name="confirmerSupUt"  class="btn btn-danger">confirmer suppression</button>
</form>
<?php



?>
<?php