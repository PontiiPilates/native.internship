<?php
$direction_id = $_GET['direction-id'];
$output_program = db_output_all("SELECT program FROM directions");
$output = db_output_once("SELECT * FROM directions WHERE id = $direction_id");
// echo '<pre>';
// print_r($output_program);
// echo '</pre>';
?>


<?php
// Осуществляет предотвращения показа пустой вёрстки пользователю.
if (db_check("SELECT * FROM directions WHERE id = '$direction_id'")) : ?>

    <form id="control-direction">
        <div class="form-group">
            <label for="program">Введите название программы или выберите ее из списка<span class="text-danger">*</span></label>
            <input type="text" name="program" class="form-control" id="program" list="programs" value="<?php print $output['program']?>">
            
            <!-- <datalist id="programs">
                <?php foreach ($output_program as $k) : ?>
                    <option value="<?php print $k['program']; ?>"><?php print $k['program']; ?></option>
                <?php endforeach; ?>
            </datalist> -->

        </div>

        <div class="form-group">
            <label for="direction">Введите название направления подготовки<span class="text-danger">*</span></label>
            <input type="text" name="direction" id="direction" class="form-control" value="<?php print $output['direction']?>">
        </div>

        <div class="form-group">
            <label for="code">Введите код направления подготовки<span class="text-danger">*</span></label>
            <input type="text" name="code" id="code" class="form-control" value="<?php print $output['code']?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить">
            <!-- Идентификатор категории для ajax -->
            <input type="button" class="btn btn-danger" value="Удалить" id="direction_delete" data-target="<?php print $direction_id ?>">
            <!--  -->
            <!-- Идентификатор категории для бэкенда -->
            <input type="hidden" name="direction_id" value="<?php print $direction_id ?>">
            <!--  -->
        </div>
    </form>

<?php endif; ?>