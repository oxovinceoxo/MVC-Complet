
<div class="p-3 mb-2 bg-success text-white"><h1 class="text-center" >Inscription</h1></div>



<form method="post">
    <div class="form-group">
        <label for="name_user_inscription">Votre Nom</label>
        <input class="form-control" required type="text" id="nom_inscrition" placeholder="nom" name="nom_inscrition">
    </div>
    <div class="form-group">
        <label for="email_user_inscription">Votre Adresse Email</label>
        <input class="form-control" required type="text" id="email_inscription" placeholder="email" name="email_inscription">
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</small>
    </div>
    <div class="form-group">
        <label for="password_user_inscription">Votre mot de passe</label>
        <input class="form-control" required type="text" id="password_inscription" placeholder="Mot de passe" name="password_inscription">
    </div>
    <button class="btn btn-primary text-center" name="BoutonInscription" type="submit">Envoyer mail d'inscription</button>
</form>
