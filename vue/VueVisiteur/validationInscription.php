<?php
$nom_inscrition = $_GET['name'];
$email_inscription = $_GET['email'];
$password_inscription = $_GET['password'];

?>

    <h1>inscription réussie, vous allez être redirigé vers le formulaire de connexion </h1>

<?php
header("refresh: 3, http://localhost/AnnonceMVC2/FormulaireConnexion");
