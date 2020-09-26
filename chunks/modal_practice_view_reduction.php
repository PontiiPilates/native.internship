<!-- The Modal -->
<div class="modal fade" id="practiceModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Просмотр практики</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <!-- Форма просмотра и редактирования практики. -->
        <form action="" method="POST">
          <div class="form-group">
            <label for="practice_name">Название</label>
            <input type="text" name="practice_name" id="practice_name" class="form-control" disabled value="title">
          </div>
          <div class="form-group">
            <label for="practice_name">Описание</label>
            <textarea name="practice_name" id="practice_about" cols="30" rows="10" class="form-control" disabled value="description"></textarea>
          </div>
          <div class="form-group">
            <label for="practice_keyword">Ключевые слова</label>
            <input type="text" class="form-control" name="practice_keyword" id="practice_keyword" disabled value="keywords">
          </div>
          <div class="form-group">
            <label for="company">Компанию</label>
            <select name="company" id="company" disabled>
              <option value="" class="form-control">Газпром</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Редактировать" role="reduction">
            <input type="submit" class="btn btn-danger" value="Удалить">
          </div>
        </form>

      </div>

    </div>
  </div>
</div>