<!-- Форма отклика для работодателя -->
<div class="popup none" id="popup-employer">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-sm-12">
        <form class="popup-content" id="form-employer">
          <img class="popup-close" src="img/close.svg" alt="Закрыть">
          <h2 class="popup-head">Отправить заявку</h2>
          <div class="popup-vac-name">Сотрудник ФСО</div>
          <div class="popup-form-section">
            <div class="popup-form-section-head">Основная информация</div>
            <div class="popup-form-row">
              <div class="form-block">
                <label for="name" class="form-head">ФИО ответственного лица</label>
                <input name="fullname" data-req="true" id="name" placeholder="Иванов Иван Иванович" type="text" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
              <div class="form-block">
                <label for="date" class="form-head">Название компании</label>
                <input name="company_name" data-req="true" id="date" type="text" placeholder="ООО ДомСтрой" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
            </div>
          </div>
          <div class="popup-form-section">
            <div class="popup-form-section-head">Контакты</div>
            <div class="popup-form-row">
              <div class="form-block">
                <label for="num" class="form-head">Номер телефона</label>
                <input name="phone_number" data-req="true" id="num" placeholder="+7 000 000 00-00" type="text" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
              <div class="form-block">
                <label for="el" class="form-head">Электронная почта</label>
                <input name="email" data-req="true" id="el" placeholder="address@mail.ru" type="email" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
            </div>
          </div>

          <!-- Алерт -->
          <div class="none alert popup-alert">
            <strong>Success!</strong> Indicates a successful or positive action.
          </div>
          <!--  -->


          <div id="send-form-employer" class="button button-primary">
            <img class="button-icon" src="img/done.svg" alt="Добавить">
            <div class="button-content">Откликнуться</div>
          </div>
          <div class="pers-block">
            <input name="signature" type="checkbox" id="pers">
            <label for="pers" class="pers-head">Согласен на обработку персональных данных</label>
            <div class="form-input-error-label form-input-error-label-pers">Согласие обязательно</div>
            <!-- <label class="pers-text">Согласен на обработку персональных данных в соответствии с федеральным законом от 27 июля 2006 г. № 152-ФЗ «О персональных данных»</label> -->
            <input type="hidden" id="popup_resume_id" name="popup_resume_id" value="#">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>