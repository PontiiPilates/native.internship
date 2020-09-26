<?php
$output_program = db_output_all("SELECT DISTINCT program FROM directions ORDER BY program");
// $output_categorys = db_output_all("SELECT * FROM categorys");

// echo '<pre>';
// print_r($output_companys);
// echo '</pre>';

?>


<form id="add_direction">

    <div class="form-group">
        <label for="program">Введите название программы или выберите ее из списка<span class="text-danger">*</span></label>
        <input type="text" name="program" class="form-control" id="program" list="programs" required>
        <datalist id="programs">
            <?php foreach ($output_program as $k) : ?>
                <option value="<?php print $k['program']; ?>"><?php print $k['program']; ?></option>
            <?php endforeach; ?>
        </datalist>
    </div>

    <div class="form-group">
        <label for="direction">Введите название направления подготовки<span class="text-danger">*</span></label>
        <input type="text" name="direction" id="direction" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="code">Введите код направления подготовки<span class="text-danger">*</span></label>
        <input type="text" name="code" id="code" class="form-control" placeholder="01.02.03" required>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary">
    </div>

</form>