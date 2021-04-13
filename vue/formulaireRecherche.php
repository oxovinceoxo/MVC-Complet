<?php
require_once "../model/LectureClé/LectureClé.php";
$lecture= new LectureCle();
?>

<form  method="post">

    <div class="form-group">
        <label for="exampleFormControlSelect1">Cétégories</label>
        <select class="form-control" name="catRecherche" id="catRecherche">
            <option> </option>
            <?php
            $lecture->LectureCategorie();
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">régions</label>
        <select class="form-control" name="regRecherche" id="regRecherche">
            <option> </option>
            <?php
            $lecture->LectureRegions();
            ?>
        </select>
    </div>
    <div class="text-center" >
    <button type="submit" name="BoutonRecherche" class="btn btn-success">rechercher</button>
    </div>
</form>


