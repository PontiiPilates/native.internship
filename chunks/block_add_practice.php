<!-- Форма добавления практики. -->
<form id="add_practice">
  <div class="form-group">
    <label for="practice_title">Введите название практики<span class="text-danger">*</span></label>
    <input type="text" name="practice_title" id="practice_title" class="form-control" required>
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
    <select name="practice_company" id="practice_company" required>
      <option value="10" class="form-control">Газпром</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>