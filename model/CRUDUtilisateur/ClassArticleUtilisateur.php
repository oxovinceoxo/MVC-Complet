<?php
require_once "../model/ClassDatabase.php";


class ClassArticleUtilisateur extends ClassDatabase
{
    private $id_article;
    private $nom_article;
    private $description_article;
    private $prix_article;
    private $photo_article;
    private $categorie_id;
    private $utilisateur_id;
    private $region_id;

    //////////////////////////Afficher les annonces pour un utilisateur//////////////////////////////////////////////////////////////////////


    public function AfficherAnnonceUtilisateur(){
        //Connexion a la classe mere Database PDO
        $db = $this->getPDO();
        $sql = "SELECT *  FROM articles INNER JOIN utilisateurs ON articles.utilisateur_id = utilisateurs.id_utilisateur INNER JOIN  categories ON articles.categorie_id = categories.id_categorie INNER JOIN regions ON articles.region_id = regions.id_regions WHERE utilisateur_id = ?";
        //Requète préparée
        $req= $db->prepare($sql);
        $this->id_article = $_SESSION['id_utilisateur'];
        $req->bindParam(1, $this->id_article);
        $req->execute(array($this->id_article));
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    //////////////////////////Ajouter une annonce pour un utilisateur//////////////////////////////////////////////////////////////////////


    public function AjouterArticleUtilisateur($nom_article, $description_article, $prix_article, $photo_article, $categorie_id, $utilisateur_id, $region_id){
        $db = $this->getPDO();

        $this->nom_article = $nom_article;
        $this->description_article = $description_article;
        $this->prix_article = $prix_article;
        $this->photo_article = $photo_article;
        $this->categorie_id = $categorie_id;
        $this->utilisateur_id = $utilisateur_id;
        $this->region_id = $region_id;

        $sql = "INSERT INTO articles (nom_article, description_article, prix_article, photo_article, categorie_id, utilisateur_id, region_id) VALUES (?,?,?,?,?,?,?)";
        $insert = $db->prepare($sql);
        $insert->bindParam(1, $nom_article);
        $insert->bindParam(2, $description_article);
        $insert->bindParam(3, $prix_article);
        $insert->bindParam(4, $photo_article);
        $insert->bindParam(5, $categorie_id);
        $insert->bindParam(6, $utilisateur_id);
        $insert->bindParam(7, $region_id);

        $insert->execute(array($nom_article, $description_article, $prix_article, $photo_article, $categorie_id, $utilisateur_id, $region_id));
        return $insert;

    }
/////////////////////////////////////////////////////////////////////////Class detail Annonce Utilisateur////////////////////////////////////////////////////////////////////////////////////////////

    public function detailAnnonceUtilisateur(){
        $db = $this->getPDO();
        $id = $_GET['id_supU'];
        $sql = "SELECT * FROM articles WHERE id_article = ?";
        $requete_insertion = $db->prepare($sql);

        $requete_insertion->bindParam(1, $id);

        $requete_insertion->execute();

        return $requete_insertion->fetch();

    }

    /////////////////////////////////////////////////////////////////////////Class supprimer Annonce Utilisateur////////////////////////////////////////////////////////////////////////////////////////////

    public function SupprimerAnnonceUtilisateur(){
        $db = $this->getPDO();
        $id = $_GET['id_supU'];
        $sql = "DELETE FROM articles WHERE id_article = ?";
        $requete_sup = $db->prepare($sql);

        $requete_sup->execute(array($id));


    }

}