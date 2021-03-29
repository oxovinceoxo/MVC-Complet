<?php
?>
    <h1>Ajouter votre annonce ici</h1>
    <!-- formulaire pour rajouter un une annonce --->
    <form method="POST">

        <label for="titre">Nom de l'annonce</label>
        <input type="text"  name="nom">

        <label for="titre">prix de l'annonce</label>
        <input type="text"  name="prix">

        <label for="titre">région</label>
        <input type="text"  name="region">



        <button name="boutonAjouter" type="submit">Enregistrer l'annonce</button>


<?php
if(isset($_POST["boutonAjouter"])){
    $gite->ajouterGite();
}else{
    echo "merci de remplir tous les champs";
}