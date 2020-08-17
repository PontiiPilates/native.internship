<?php


$resume_id = $_GET['resume-id'];
$output = db_output_once("SELECT * FROM `resumes` WHERE `id` = '$resume_id'");



// $output_companys = db_output_all("SELECT * FROM companys");
// $company_id = $output['company_id'];
// $output_company = db_output_once("SELECT * FROM companys WHERE id = '$company_id'");

// $output_categorys = db_output_all("SELECT * FROM categorys");
// $category_id = $output['category_id'];
// $output_category = db_output_once("SELECT * FROM categorys WHERE id = '$category_id'");


// echo '<pre>';
// print_r($output_company);
// echo '</pre>';


?>





<form id="control-resume">
    <div class="form-group">
        <label for="resume_fio">Введите ФИО соискателя<span class="text-danger">*</span></label>
        <input type="text" name="resume_fio" id="resume_fio" class="form-control" required value="<?php print $output['fio']; ?>">
    </div>
    <div class="form-group">
        <label for="resume_about">Расскажите о соискателе<span class="text-danger">*</span></label>
        <textarea name="resume_about" id="resume_about" cols="30" rows="10" class="form-control" required><?php print $output['about']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="resume_features">Введите ключевые слова через ","</label>
        <input type="text" class="form-control" name="resume_features" id="resume_features" value="<?php print $output['features']; ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Сохранить">
        <input type="button" class="btn btn-danger" value="Удалить" id="resume_delete" data-target="<?php print $resume_id ?>">
        <!-- Идентификатор категории. -->
        <input type="hidden" name="resume_id" value="<?php print $resume_id ?>">
        <!--  -->
    </div>
</form>