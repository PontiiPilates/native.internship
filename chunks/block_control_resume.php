<?php

$resume_id = $_GET['resume-id'];

// Запрос для вывода общей информации
$output = db_output_once("SELECT * FROM `resumes` WHERE `id` = '$resume_id'");

// Запрос для построения селекта
$output_programs = db_output_all("SELECT DISTINCT program FROM directions ORDER BY program");

?>

<form id="control-resume">
    <div class="form-group">
        <label for="resume_fio">ФИО соискателя<span class="text-danger">*</span></label>
        <input type="text" name="resume_fio" id="resume_fio" class="form-control" required value="<?php print $output['fio']; ?>">
    </div>
    <div class="form-group">
        <label for="resume_about">О соискателе<span class="text-danger">*</span></label>
        <textarea name="resume_about" id="resume_about" cols="30" rows="10" class="form-control" required><?php print $output['about']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="direction">Направление подготовки<span class="text-danger">*</span></label>
        <select name="direction" id="direction" class="form-control" required>
            <option selected value="<?php print $output['direction']; ?>"><?php print $output['direction']; ?></option>
            <?php require('data/data_directions.php'); ?>

            
            <!-- <option selected value="<?php print $output['direction']; ?>"><?php print $output['direction']; ?></option>
            <?php // foreach ($output_programs as $k) : // Вывод групп в селекте
            ?>
                <?php // $group = $k['program']; // Оптимизация переменной для участия в запросе
                ?>
                <optgroup label="<?php // print $group; ?>">
                    <?php // $output_directions = db_output_all("SELECT * FROM directions WHERE `program` = '$group' ORDER BY direction"); ?>
                    <?php // foreach ($output_directions as $mk) : // Вывод содержимого группы
                    ?>
                        <option value="<?php // print $mk['direction']; ?>"><?php // print $mk['direction']; ?></option>
                    <?php // endforeach; ?>
                </optgroup>
            <?php // endforeach; ?> -->

        </select>
    </div>

    <div class="form-group">
        <label for="profile">Профиль в Вк<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="profile" id="profile" value="<?php print $output['profile'] ?>">
    </div>

    <div class="form-group">
        <label for="phone">Номер телефона<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="phone" id="phone" value="<?php print $output['phone'] ?>">
    </div>

    <div class="form-group">
        <label for="email">Email<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="email" id="email" value="<?php print $output['email'] ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Сохранить">
        <input type="button" class="btn btn-danger" value="Удалить" id="resume_delete" data-target="<?php print $resume_id ?>">
        <!-- Идентификатор категории. -->
        <input type="hidden" name="resume_id" value="<?php print $resume_id ?>">
        <!--  -->
    </div>
</form>