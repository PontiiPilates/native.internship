<form id="add-company">
  <div class="form-group">
    <label for="company_name">Введите название компании<span class="text-danger">*</span></label>
    <input type="text" name="company_name" class="form-control" id="company_name" required>
  </div>
  <div class="form-group">
    <label for="company_logo">Загрузите логотип компании<span class="text-danger">*</span></label>
    <input type="file" class="form-control" name="company_logo" id="company_logo" required>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary">
  </div>
</form>