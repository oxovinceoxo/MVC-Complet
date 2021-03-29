<?php
require_once "../model/ClassDatabase.php";

class LectureCle extends ClassDatabase
{

    public function LectureCategorie(){
        $db = $this-> getPDO();
        $req = $db->query("SELECT * FROM categories");

        foreach ($req as $row){
            ?>
            <option value="<?= $row['id_categorie']?>"><?= $row['type_categorie']?></option>
            <?php
        }
    }

    public function LectureRegions(){
        $db = $this-> getPDO();
        $req = $db->query("SELECT * FROM regions");

        foreach ($req as $row){
            ?>
            <option value="<?= $row['id_regions']?>"><?= $row['nom_region']?></option>
            <?php
        }
    }

}