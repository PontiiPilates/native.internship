<!-- Форма добавления практики. -->
<form action="" method="POST">
  <div class="form-group">
    <label for="practice_name">Введите название практики<span class="text-danger">*</span></label>
    <input type="text" name="practice_name" id="practice_name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="practice_name">Введите описание<span class="text-danger">*</span></label>
    <textarea name="practice_name" id="practice_about" cols="30" rows="10" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label for="practice_keyword">Введите ключевые слова через ","</label>
    <input type="text" class="form-control" name="practice_keyword" id="practice_keyword">
  </div>
  <div class="form-group">
    <label for="company">Выберите компанию<span class="text-danger">*</span></label>
    <select name="company" id="company" required>
      <option value="" class="form-control">Газпром</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>