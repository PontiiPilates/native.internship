<form id="add-resume">
  <div class="form-group">
    <label for="resume_fio">Введите ФИО соискателя<span class="text-danger">*</span></label>
    <input type="text" name="resume_fio" id="resume_fio" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="resume_about">Расскажите о соискателе<span class="text-danger">*</span></label>
    <textarea name="resume_about" id="resume_about" cols="30" rows="10" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label for="resume_features">Введите ключевые слова через ","</label>
    <input type="text" class="form-control" name="resume_features" id="resume_features">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>