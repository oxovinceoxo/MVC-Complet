<?php
require_once "../model/LectureClé/LectureClé.php";
$lecture= new LectureCle();
?>
<form>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Cétégories</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option> </option>
            <?php
            $lecture->LectureCategorie();
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">régions</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option> </option>
            <?php
            $lecture->LectureRegions();
            ?>
        </select>
    </div>
    <div class="text-center" >
    <button type="submit" class="btn btn-success">rechercher</button>
    </div>
</form>


