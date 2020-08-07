<!-- Форма добавления практики. -->
<form id="add_practice">
  <div class="form-group">
    <label for="practice_name">Введите название практики<span class="text-danger">*</span></label>
    <input type="text" name="practice_name" id="practice_name" class="form-control" >
  </div>
  <div class="form-group">
    <label for="practice_description">Введите описание<span class="text-danger">*</span></label>
    <textarea name="practice_description" id="practice_description" cols="30" rows="10" class="form-control" ></textarea>
  </div>

  <div class="form-group">
    <label for="practice_feature">Введите ключевые слова через ","</label>
    <input type="text" class="form-control" name="practice_feature" id="practice_feature">
  </div>
  <div class="form-group">
    <label for="practice_company">Выберите компанию<span class="text-danger">*</span></label>
    <select name="practice_company" id="practice_company" >
      <option value="10" class="form-control">Газпром</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>