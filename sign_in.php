<html lang="en">
<?php require('chunks/head.php'); ?>

<body>
  <div class="popup">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 col-sm-12">
          <form class="popup-content">
            <h2 class="popup-head">Отправить заявку</h2>
            <div class="popup-form-section">
              <div class="popup-form-row">
                <div class="form-block">
                  <label for="name" class="form-head">ФИО ответственного лица</label>
                  <input data-req="true" id="name" placeholder="Иванов Иван Иванович" type="text" class="form-input">
                  <div class="form-input-error-label">Обязательное поле</div>
                </div>
                <div class="form-block">
                  <label for="date" class="form-head">Название компании</label>
                  <input data-req="true" id="date" type="text" placeholder="ООО ДомСтрой" class="form-input">
                  <div class="form-input-error-label">Обязательное поле</div>
                </div>
                <div class="form-block">
                  <img class="button-icon" src="img/done.svg" alt="Добавить">
                  <input type="submit" class="button button-primary" value="Войти">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>