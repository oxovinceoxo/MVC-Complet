<?php
require_once "../model/CRUDAdministrateur/ClassAdministrateur.php";

// Instance de la classAdministrateur
$admin = new ClassAdministrateur();
$utilisateur = new ClassUtilisateur();
?>

<div class="p-3 mb-2 bg-dark text-white"><h1 class="text-center" >Connexion à Votre compte</h1></div>

<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Votre adresse email</label>
        <input name="email_admin" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre email">
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input name="password_admin" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
    </div>

    <button name="connexion" type="submit" class="btn btn-primary">Se connecter</button>

</form>

<?php


if (isset($_POST["connexion"])) {
$admin->Connexion();
$utilisateur->ConnexionUtilisateur();
}

