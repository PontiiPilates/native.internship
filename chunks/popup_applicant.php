<div class="popup" style="display: none;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-sm-12">
        <form class="popup-content">
          <img class="popup-close" src="img/close.svg" alt="Закрыть">
          <h2 class="popup-head">Отправить заявку</h2>
          <div class="popup-vac-name">Менеджер по продажам</div>
          <div class="popup-form-section">
            <div class="popup-form-section-head">Основная информация</div>
            <div class="popup-form-row">
              <div class="form-block">
                <label for="name" class="form-head">ФИО</label>
                <input data-req="true" id="name" placeholder="Иванов Иван Иванович" type="text" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
              <div class="form-block">
                <label for="date" class="form-head">Дата рождения</label>
                <input data-req="true" id="date" type="date" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
              <div class="form-block">
                <label for="state" class="form-head">Гражданство</label>
                <input data-req="true" id="state" placeholder="Российская Федерация" type="text" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
                <!-- <div class="form-input-suggest">Российская Федерация</div> -->
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
              <div class="form-block">
                <label for="vk" class="form-head">Профиль ВКонтакте</label>
                <input data-req="false" id="vk" placeholder="vk.com/ivanov" type="email" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
            </div>
          </div>
          <div class="popup-form-section">
            <div class="popup-form-section-head">Образование</div>
            <div class="popup-form-row popup-form-row-column">
              <div class="form-block">
                <label for="inst" class="form-head">Институт</label>
                <select id="inst" size="1" class="form-input">
                  <option value="Военный учебный центр (ВУЦ)">Военный учебный центр (ВУЦ)</option>
                  <option value="Гуманитарный институт (ГИ)">Гуманитарный институт (ГИ)</option>
                  <option value="Инженерно-строительный институт (ИСИ)">Инженерно-строительный институт (ИСИ)</option>
                  <option value="Институт архитектуры и дизайна (ИАиД)">Институт архитектуры и дизайна (ИАиД)</option>
                  <option value="Институт гастрономии">Институт гастрономии (ИГ)</option>
                  <option value="Институт горного дела, геологии и геотехнологий (ИГДГиГ)">Институт горного дела, геологии и геотехнологий (ИГДГиГ)</option>
                  <option value="Институт инженерной физики и радиоэлектроники (ИИФиРЭ)">Институт инженерной физики и радиоэлектроники (ИИФиРЭ)</option>
                  <option value="Институт космических и информационных технологий (ИКИТ)">Институт космических и информационных технологий (ИКИТ)</option>
                  <option value="Институт математики и фундаментальной информатики (ИМиФИ)">Институт математики и фундаментальной информатики (ИМиФИ)</option>
                  <option value="Институт нефти и газа (ИНиГ)">Институт нефти и газа (ИНиГ)</option>
                  <option value="Институт педагогики, психологии и социологии (ИППС)">Институт педагогики, психологии и социологии (ИППС)</option>
                  <option value="Институт управления бизнес-процессами и экономики (ИУБПЭ)">Институт управления бизнес-процессами и экономики (ИУБПЭ)</option>
                  <option value="Институт физической культуры, спорта и туризма (ИФКСиТ)">Институт физической культуры, спорта и туризма (ИФКСиТ)</option>
                  <option value="Институт филологии и языковой коммуникации (ИФиЯК)">Институт филологии и языковой коммуникации (ИФиЯК)</option>
                  <option value="Институт фундаментальной биологии и биотехнологии (ИФБиБТ)">Институт фундаментальной биологии и биотехнологии (ИФБиБТ)</option>
                  <option value="Институт цветных металлов и материаловедения (ИЦМиМ)">Институт цветных металлов и материаловедения (ИЦМиМ)</option>
                  <option value="Институт экологии и географии (ИЭиГ)">Институт экологии и географии (ИЭиГ)</option>
                  <option value="Институт экономики, управления и природопользования (ИЭУиП)">Институт экономики, управления и природопользования (ИЭУиП)</option>
                  <option value="Политехнический институт (ПИ)">Политехнический институт (ПИ)</option>
                  <option value="Торгово-экономический институт (ТЭИ)">Торгово-экономический институт (ТЭИ)</option>
                  <option value="Юридический институт (ЮИ)">Юридический институт (ЮИ)</option>
                </select>
                <!-- <input id="inst" placeholder="Институт управления бизнес-процессами и экономики" size="24" type="text" class="form-input"> -->
                <div class="form-input-error-label">Обязательное поле</div>
              </div>
              <div class="form-block">
                <label class="form-head">Уровень образования</label>
                <div class="form-tabs">
                  <div class="tabs">
                    <input id="bak" type="radio" name="form-tabs" checked>
                    <label for="bak">Бакалавриат</label>

                    <input id="mag" type="radio" name="form-tabs">
                    <label for="mag">Магистратура</label>

                    <input id="spec" type="radio" name="form-tabs">
                    <label for="spec">Специалитет</label>
                  </div>

                  <section id="content-tab1" class="tab-section tab-section-active">
                    <div class="form-block">
                      <label class="form-head">Курс</label>
                      <div class="sub-tabs">
                        <input id="1c" type="radio" name="content-tab1" checked>
                        <label for="1c">1</label>

                        <input id="2c" type="radio" name="content-tab1">
                        <label for="2c">2</label>

                        <input id="3c" type="radio" name="content-tab1">
                        <label for="3c">3</label>

                        <input id="4c" type="radio" name="content-tab1">
                        <label for="4c">4</label>
                      </div>
                    </div>
                    <div class="form-block">
                      <label for="naprb" class="form-head">Направление подготовки</label>
                      <input data-req="true" id="naprb" placeholder="Дизайн" type="text" class="form-input">
                      <div class="form-input-error-label">Обязательное поле</div>
                      <a href="https://admissions.sfu-kras.ru/exams" target="_blank" class="form-input-suggest">Список направлений подготовки</a>
                    </div>
                  </section>
                  <section id="content-tab2" class="tab-section">
                    <div class="form-block">
                      <label class="form-head">Курс</label>
                      <div class="sub-tabs">
                        <input id="1cm" type="radio" name="content-tab2" checked>
                        <label for="1cm">1</label>

                        <input id="2cm" type="radio" name="content-tab2">
                        <label for="2cm">2</label>
                      </div>
                    </div>
                    <div class="form-block">
                      <label for="naprm" class="form-head">Направление подготовки</label>
                      <input data-req="true" id="naprm" placeholder="Прикладная математика" type="text" class="form-input">
                      <div class="form-input-error-label">Обязательное поле</div>
                      <a href="https://admissions.sfu-kras.ru/exams" target="_blank" class="form-input-suggest">Список направлений подготовки</a>
                    </div>
                  </section>
                  <section id="content-tab3" class="tab-section">
                    <div class="form-block">
                      <label class="form-head">Курс</label>
                      <div class="sub-tabs">
                        <input id="1cs" type="radio" name="content-tab3" checked>
                        <label for="1cs">1</label>

                        <input id="2cs" type="radio" name="content-tab3">
                        <label for="2cs">2</label>

                        <input id="3cs" type="radio" name="content-tab3">
                        <label for="3cs">3</label>

                        <input id="4cs" type="radio" name="content-tab3">
                        <label for="4cs">4</label>

                        <input id="5cs" type="radio" name="content-tab3">
                        <label for="5cs">5</label>
                      </div>
                    </div>
                    <div class="form-block">
                      <label for="naprs" class="form-head">Специальность</label>
                      <input data-req="true" id="naprs" placeholder="Прикладная математика" type="text" class="form-input">
                      <div class="form-input-error-label">Обязательное поле</div>
                    </div>
                  </section>
                </div>
              </div>
              <div class="form-block">
                <label class="form-head">Форма обучения</label>
                <div class="form-tabs sub-form-tabs">
                  <div class="sub-tabs">
                    <input id="ok" type="radio" name="edu-form" checked>
                    <label for="ok">Очная</label>

                    <input id="okzao" type="radio" name="edu-form">
                    <label for="okzao">Очно-заочная</label>

                    <input id="zao" type="radio" name="edu-form">
                    <label for="zao">Заочная</label>
                  </div>
                </div>
              </div>
              <!-- <div class="form-block">
                <label for="type" class="form-head">Вид практики</label>
                <input id="type" placeholder="Вид практики" type="text" class="form-input">
                <div class="form-input-error-label">Обязательное поле</div>
              </div> -->
              <div class="form-block">
                <label for="dop" class="form-head">Дополнительная информация</label>
                <textarea id="dop" placeholder="Напишите о себе: есть ли опыт работы, каких результатов достигли, чего ожидаете от практики" type="text" class="form-input"></textarea>
                <div class="form-input-error-label">Обязательное поле</div>
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
          </div>
        </form>
      </div>
    </div>
  </div>
</div>