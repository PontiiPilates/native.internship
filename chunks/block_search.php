<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<div class="search-block">
  <div class="search">
    <div class="search-icon">
      <img src="img/search.svg" alt="Поиск">
    </div>
    <input type="text" name="query" id="tags" class="search-input" placeholder="Поиск по практике" />
    <div class="search-action">
      <div id="getSearch">Найти</div>
    </div>
  </div>
</div>


<script>
  /**
   * Автокомплит.
   */
  $("#tags").autocomplete({
    source: 'modules/autocomplete/autocomplete.php',
    minLength: 1,
    delay: 300,
  });

  /**
   * Отправляет данные из формы поиска при клике по кнопке.
   */
  // Кнопка отправки данных с инпута
  $('#getSearch').click(function() {
    // Передача параметров.
    window.location.href = 'http://internship.sfu-kras.ru/index.php?block=result&' + $('#tags').serialize();
  });
  // Действие по нажатию Enter
  $('#tags').keyup(function(evt) {
    // Передача параметров.
    if (evt.keyCode == 13) {
      window.location.href = 'http://internship.sfu-kras.ru/index.php?block=result&' + $('#tags').serialize();
    }
  });
</script> -->

<!-- Заменен на модуль -->