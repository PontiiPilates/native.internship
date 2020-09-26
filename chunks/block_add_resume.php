<<<<<<< HEAD
<?php
$output_directions = db_output_all("SELECT DISTINCT direction FROM directions ORDER BY direction");

// echo '<pre>';
// print_r($output_directions);
// echo '</pre>';

// Запрос для построения селекта
$output_programs = db_output_all("SELECT DISTINCT program FROM directions ORDER BY program");
?>



=======
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
<form id="add-resume">
  <div class="form-group">
    <label for="resume_fio">Введите ФИО соискателя<span class="text-danger">*</span></label>
    <input type="text" name="resume_fio" id="resume_fio" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="resume_about">Расскажите о соискателе<span class="text-danger">*</span></label>
    <textarea name="resume_about" id="resume_about" cols="30" rows="10" class="form-control" required></textarea>
  </div>

<<<<<<< HEAD
  <!-- <div class="form-group">
    <label for="resume_features">Введите ключевые слова через ","</label>
    <input type="text" class="form-control" name="resume_features" id="resume_features">
  </div> -->

  <div class="form-group">
    <label for="direction">Выберите направление подготовки<span class="text-danger">*</span></label>
    <select name="direction" id="direction" class="form-control" required>
      <option selected value="<?php print $output['direction']; ?>"><?php print $output['direction']; ?></option>
      <option value="" selected="selected">Не выбрано</option>
      <?php require('data/data_directions.php'); ?>

      <!-- <?php // foreach ($output_programs as $k) : // Вывод групп в селекте
            ?>
          <?php // $group = $k['program']; // Оптимизация переменной для участия в запросе
          ?>
          <optgroup label="<?php // print $group; 
                            ?>">
            <?php // $output_directions = db_output_all("SELECT * FROM directions WHERE `program` = '$group' ORDER BY direction"); 
            ?>
            <?php // foreach ($output_directions as $mk) : // Вывод содержимого группы
            ?>
              <option value="<?php // print $mk['direction']; 
                              ?>"><?php // print $mk['direction']; 
                                  ?></option>
            <?php // endforeach; 
            ?>
          </optgroup>
        <?php // endforeach; 
        ?> -->

    </select>
  </div>

  <div class="form-group">
    <label for="phone">Введите номер телефона<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>

  <div class="form-group">
    <label for="profile">Введите профиль в Вк<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="profile" id="profile">
  </div>

  <div class="form-group">
    <label for="email">Введите email<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="email" id="email">
  </div>

=======
  <div class="form-group">
    <label for="resume_features">Введите ключевые слова через ","</label>
    <input type="text" class="form-control" name="resume_features" id="resume_features">
  </div>

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>