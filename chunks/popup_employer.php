<div class="popup" style="display: none;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-sm-12">
        <form class="popup-content">
          <img class="popup-close" src="img/close.svg" alt="Закрыть">
          <h2 class="popup-head">Отправить заявку</h2>
          <div class="popup-vac-name">Сотрудник ФСО</div>
          <div class="popup-form-section">
            <div class="popup-form-section-head">Основная информация</div>
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
            </div>
          </div>
          <div class="popup-form-section">
            <div class="popup-form-section-head">Контакты</div>
            <div class="popup-form-row">
              <div class="form-block">
                <label for="num" class="form-head">Номер телефона</label>
                <input data-req="true" id="num" placeholder="+7 000 000 00-00" type="number" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
              <div class="form-block">
                <label for="el" class="form-head">Электронная почта</label>
                <input data-req="true" id="el" placeholder="address@mail.ru" type="email" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
            </div>
          </div>
          <div id="send-form" class="button button-primary">
            <img class="button-icon" src="img/done.svg" alt="Добавить">
            <div class="button-content">Откликнуться</div>
          </div>
          <div class="pers-block">
            <input type="checkbox" id="pers">
            <label for="pers" class="pers-head">Согласен на обработку персональных данных</label>
            <div class="form-input-error-label form-input-error-label-pers">Согласие обязательно</div>
            <!-- <label class="pers-text">Согласен на обработку персональных данных в соответствии с федеральным законом от 27 июля 2006 г. № 152-ФЗ «О персональных данных»</label> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>