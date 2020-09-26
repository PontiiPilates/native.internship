<?php
$output_companys = db_output_all("SELECT * FROM companys");
$output_categorys = db_output_all("SELECT * FROM categorys");
?>


<form id="add_practice">
  <div class="form-group">
    <label for="practice_title">Введите направление практики<span class="text-danger">*</span></label>
    <!-- <input type="text" name="practice_title" id="practice_title" class="form-control" required> -->
    <select name="practice_title" class="form-control" id="practice_title">
      <option value="Задайте имя" selected="selected">Не выбрано</option>
      <?php require('data/data_directions.php'); ?>
    </select>
  </div>
  <div class="form-group">
    <label for="practice_description">Введите описание<span class="text-danger">*</span></label>
    <textarea name="practice_description" id="practice_description" cols="30" rows="10" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label for="practice_features">Введите ключевые слова через ","</label>
    <input type="text" class="form-control" name="practice_features" id="practice_features">
  </div>
  <div class="form-group">
    <label for="practice_company">Выберите компанию<span class="text-danger">*</span></label>
<<<<<<< HEAD
    <select name="practice_company" id="practice_company" class="form-control" required>
      <option selected>Не выбрано</option>
      <?php foreach ($output_companys as $k) : ?>
        <option value="<?php print $k['id'] ?>"><?php print $k['name'] ?></option>
=======
    <select name="practice_company" id="practice_company" required>
      <?php foreach ($output_companys as $k) : ?>
        <option value="<?php print $k['id'] ?>" class="form-control"><?php print $k['name'] ?></option>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="practice_category">Выберите категорию<span class="text-danger">*</span></label>
<<<<<<< HEAD
    <select name="practice_category" id="practice_category" class="form-control" required>
      <option selected>Не выбрано</option>
      <?php foreach ($output_categorys as $k) : ?>
        <option value="<?php print $k['id'] ?>"><?php print $k['name'] ?></option>
=======
    <select name="practice_category" id="practice_category" required>
      <?php foreach ($output_categorys as $k) : ?>
        <option value="<?php print $k['id'] ?>" class="form-control"><?php print $k['name'] ?></option>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="fio">Введите фамилию<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="fio" id="fio">
  </div>

  <div class="form-group">
    <label for="position">Введите должность ответственного за практику<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="position" id="position">
  </div>

  <div class="form-group">
    <label for="phone">Введите номер телефона<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>

  <div class="form-group">
    <label for="email">Введите email<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="email" id="email">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>

<script src="modules/value_converter/option_to_value.js"></script>