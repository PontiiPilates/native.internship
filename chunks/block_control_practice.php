<?php


$practice_id = $_GET['practice-id'];

$output = db_output_once("SELECT * FROM `practices` WHERE `id` = '$practice_id'");

// echo '<pre>';
// print_r($output);
// echo '</pre>';


?>





<form id="control_practice" action="update_practice.php" method="POST">
    <div class="form-group">
        <label for="practice_title">Введите название практики<span class="text-danger">*</span></label>
        <input type="text" name="practice_title" id="practice_title" class="form-control" required value="<?php print $output['title']; ?>">
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
        <select name="practice_company" id="practice_company" required>
            <!-- Сделать вывод выбранного селекта -->
            <option value="10" class="form-control">Газпром</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Сохранить">
    </div>
</form>