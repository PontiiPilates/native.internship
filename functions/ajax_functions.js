/**
 * Поднимает попап и добавляет идентификатор материала.
 */
function upPopupAddId(button, popup, hidden) {
  // Поднять попап.
  $(button).bind('click', function () {
    $(popup).removeClass('none');
    // Добавить идентификатор практики.
    id = $(this).attr('id');
    $(hidden).attr('value', id);
  });
}






// закрыть окно формы
$('.popup-close').click(function () {
  $('.popup').addClass('none');

  // Очистить форму.
  $('.popup-content')[0].reset();
  // Сбросить классы с алёрта и отключить.
  $('.popup-alert').removeClass('alert-success alert-danger alert-warning').hide();
  // Вернуть кнопку.
  $('#send-form-applicant').show();
});

$(document).mouseup(function (e) {
  var div = $('.popup-content');
  if (!div.is(e.target) && div.has(e.target).length === 0) {
    $('.popup').addClass('none');

    // Очистить форму.
    $('.popup-content')[0].reset();
    // Сбросить классы с алёрта и отключить.
    $('.popup-alert').removeClass('alert-success alert-danger alert-warning').hide();
    // Вернуть кнопку.
    $('#send-form-applicant').show();
  }
});





/**
 * Осуществляет изменение контента на страницы без перезагрузки.
 */
function frontChange(element, value) {
  // Обновление изображения при его замене без перезагрузки.
  if (value) {
    $(element).attr('src', 'img/company_logo/' + value);
  }
}

/**
 * Обработка ответа сервера и вывод его на frontend для Ajax.
 */
function outputMessage(res, form) {
  // Обработка ответов сервера.
  messages = res.split(': ');
  type = messages[0];
  text = messages[1];
  value = messages[2];
  // Сценарии вывода оповещения
  if (type == 's') {
    state = 'alert-success';
    frontChange('#company-logo-preview', value);
  } else if (type == 'e') {
    state = 'alert-danger';
  } else if (type == 'w') {
    state = 'alert-warning';
  }
  // alert(state);
  // Вывод сообщения.
  // !Если сообщение появляется повторно, то у него остаются классы предыдущего. Поэтому приходится перед началом показа сообщения очищать возможно оставшиеся классы.
  $('#alert').removeClass('alert-success alert-danger alert-warning').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);


  // Очистка формы после отправки.
  // $(form)[0].reset();

}


/**
 * Передаёт данные с формы на сервер и получает ответ сервера/
 */
function transferFormData(form, path) {
  $(form).submit(function (evt) {
    evt.preventDefault();
    $.ajax({
      type: "POST",
      url: path,
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function (res) {
        alert(res);
        outputMessage(res, form);
      }
    })
  });
};


/**
 * Передает данные с попап-формы и получает ответ от сервера
 */
function transferPopup(button, form, path) {
  // Кнопка отправки формы.
  $(button).click(function () {
    $.ajax({
      type: 'POST',
      url: path,
      // Форма, данные с которой будут переданы.
      data: $(form).serialize(),
      success: function (res) {
        // Обработка ответов сервера.
        messages = res.split(': ');
        type = messages[0];
        text = messages[1];
        // Сценарии вывода оповещения
        // alert(res);
        if (type == 's') {
          state = 'alert-success';
        } else if (type == 'e') {
          state = 'alert-danger';
        }
        // Кнопка отправки формы.
        $(button).hide();
        // Алетр.
        $('.popup-alert').addClass(state).text(text).fadeIn(300);
      }
    });
  });
}


/**
 * Активные функуции.
 */
upPopupAddId('.respond-practice', '#popup-applicant', '#popup_practice_id');
upPopupAddId('.respond-resume', '#popup-employer', '#popup_resume_id');

transferPopup('#send-form-applicant', '#form-applicant', 'php/respond_applicant.php');
transferPopup('#send-form-employer', '#form-employer', 'php/respond_employer.php');

transferFormData('#add_practice', 'php/add_practice.php');
transferFormData('#add-company', 'php/add_company.php');
transferFormData('#add-category', 'php/add_category.php');
transferFormData('#add-resume', 'php/add_resume.php');

transferFormData('#control-company', 'php/update_company.php');
transferFormData('#control-category', 'php/update_category.php');
transferFormData('#control-practice', 'php/update_practice.php');
transferFormData('#control-resume', 'php/update_resume.php');










/**
 * Реализация ajax удаление компании.
 */
$('#company_delete').click(function (evt) {
  evt.preventDefault();
  company_id = $(this).attr('data-target');
  $.ajax({
    type: "POST",
    url: 'php/delete_company.php',
    data: { 'company_id': company_id },
    success: function (res) {
      // alert(res);
      // Обработка ответов сервера.
      messages = res.split(': ');
      type = messages[0];
      text = messages[1];
      // Сценарии вывода оповещения
      if (type == 's') {
        state = 'alert-success';
        $('#control-company').fadeOut(300);


      } else if (type == 'e') {
        state = 'alert-danger';
      } else if (type == 'w') {
        state = 'alert-warning';
      }
      // Вывод сообщения.
      // !Если сообщение появляется повторно, то у него остаются классы предыдущего. Поэтому приходится перед началом показа сообщения очищать возможно оставшиеся классы.
      $('#alert').removeClass('alert-success alert-danger alert-warning').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);
    }
  });
});

/**
 * Реализация ajax удаление категории.
 */
$('#category_delete').click(function (evt) {
  evt.preventDefault();
  category_id = $(this).attr('data-target');
  $.ajax({
    type: "POST",
    url: 'php/delete_category.php',
    data: { 'category_id': category_id },
    success: function (res) {
      // alert(res);
      // Обработка ответов сервера.
      messages = res.split(': ');
      type = messages[0];
      text = messages[1];
      // Сценарии вывода оповещения
      if (type == 's') {
        state = 'alert-success';
        $('#control-category').fadeOut(300);


      } else if (type == 'e') {
        state = 'alert-danger';
      } else if (type == 'w') {
        state = 'alert-warning';
      }
      // Вывод сообщения.
      // !Если сообщение появляется повторно, то у него остаются классы предыдущего. Поэтому приходится перед началом показа сообщения очищать возможно оставшиеся классы.
      $('#alert').removeClass('alert-success alert-danger alert-warning').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);
    }
  });
});


/**
 * Реализация ajax удаление резюме.
 */
$('#resume_delete').click(function (evt) {
  evt.preventDefault();
  resume_id = $(this).attr('data-target');
  $.ajax({
    type: "POST",
    url: 'php/delete_resume.php',
    data: { 'resume_id': resume_id },
    success: function (res) {
      // alert(res);
      // Обработка ответов сервера.
      messages = res.split(': ');
      type = messages[0];
      text = messages[1];
      // Сценарии вывода оповещения
      if (type == 's') {
        state = 'alert-success';
        $('#control-resume').fadeOut(300);


      } else if (type == 'e') {
        state = 'alert-danger';
      } else if (type == 'w') {
        state = 'alert-warning';
      }
      // Вывод сообщения.
      // !Если сообщение появляется повторно, то у него остаются классы предыдущего. Поэтому приходится перед началом показа сообщения очищать возможно оставшиеся классы.
      $('#alert').removeClass('alert-success alert-danger alert-warning').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);
    }
  });
});





// TODO По окончанию работ нужно отрефакторить этот файл разделением его на функции в рамках проекта.
// 1. Ajax-удаление компании
// 2. Ajax-удаление практики
