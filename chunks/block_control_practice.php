<?php


$practice_id = $_GET['practice-id'];
$output = db_output_once("SELECT * FROM `practices` WHERE `id` = '$practice_id'");



$output_companys = db_output_all("SELECT * FROM companys");
$company_id = $output['company_id'];
$output_company = db_output_once("SELECT * FROM companys WHERE id = '$company_id'");

$output_categorys = db_output_all("SELECT * FROM categorys");
$category_id = $output['category_id'];
$output_category = db_output_once("SELECT * FROM categorys WHERE id = '$category_id'");


// echo '<pre>';
// print_r($output_company);
// echo '</pre>';


?>





<form id="control-practice">
    <div class="form-group">
        <label for="practice_title">Введите название практики<span class="text-danger">*</span></label>
        <select name="practice_title" class="form-control" id="practice_title" value="<?php print $output['title']; ?>">
            <option selected value="<?php print $output['title']; ?>"><?php print $output['title']; ?></option>
            <?php require('data/data_directions.php'); ?>
        </select>

    </div>
    <div class="form-group">
        <label for="practice_description">Введите описание<span class="text-danger">*</span></label>
        <textarea name="practice_description" id="practice_description" cols="30" rows="10" class="form-control" required><?php print $output['description']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="practice_features">Введите ключевые слова через ","</label>
        <input type="text" class="form-control" name="practice_features" id="practice_features" value="<?php print $output['features']; ?>">
    </div>


    <div class="form-group">
        <label for="practice_company">Выберите компанию<span class="text-danger">*</span></label>
        <select name="practice_company" id="practice_company" class="form-control" required>
            <option selected value="<?php print $output_company['id']; ?>"><?php print $output_company['name']; ?></option>
            <?php foreach ($output_companys as $k) : ?>
                <?php /*Условия позволяет избежать повторения в селекте*/ if ($k != $output_company) : ?>
                    <option value="<?php print $k['id'] ?>" class="form-control"><?php print $k['name'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="practice_category">Выберите категорию<span class="text-danger">*</span></label>
        <select name="practice_category" id="practice_category" class="form-control" required>
            <option selected value="<?php print $output_category['id']; ?>" class="form-control"><?php print $output_category['name'] ?></option>
            <?php foreach ($output_categorys as $k) : ?>
                <?php /*Условия позволяет избежать повторения в селекте*/ if ($k != $output_category) : ?>
                    <option value="<?php print $k['id'] ?>" class="form-control"><?php print $k['name'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="fio">Введите фамилию<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="fio" id="fio" value="<?php print $output['fio'] ?>">
    </div>

    <div class="form-group">
        <label for="position">Введите должность ответственного за практику<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="position" id="position" value="<?php print $output['position'] ?>">
    </div>

    <div class="form-group">
        <label for="phone">Введите номер телефона<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="phone" id="phone" value="<?php print $output['phone'] ?>">
    </div>

    <div class="form-group">
        <label for="email">Введите email<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="email" id="email" value="<?php print $output['email'] ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Сохранить">
        <input type="button" class="btn btn-danger" value="Удалить" id="practice_delete" data-target="<?php print $practice_id ?>">
        <!-- Идентификатор категории. -->
        <input type="hidden" name="practice_id" value="<?php print $practice_id ?>">
        <!--  -->
    </div>
</form>