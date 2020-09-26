/**
 * Поднимает попап и добавляет идентификатор материала.
 */
function upPopupAddId(button, popup, hidden) {
  // Поднять попап.
  $(button).bind('click', function () {
    $(popup).removeClass('none');
    // Добавить идентификатор практики.
    id = $(this).attr('id');
<<<<<<< HEAD
    let title = $(this).attr('item-title');
    console.log(title);

    if ($(popup).attr('id') == 'popup-employer') {
      console.log(title);
      $('#popup-employer .popup-head').html(title);
    }

    else if ($(popup).attr('id') == 'popup-applicant') {
      $('#popup-applicant .popup-head').html(title);
    }

    // $('.popup-head').html(title);
    // $('#num').css('background', '#000');
=======
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
    $(hidden).attr('value', id);
  });
}



<<<<<<< HEAD
// $('#num').css('background-color', 'red');
=======

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8


// закрыть окно формы
$('.popup-close').click(function () {
  $('.popup').addClass('none');

  // Очистить форму.
<<<<<<< HEAD
  $('#form-applicant')[0].reset();
  $('#form-employer')[0].reset();
=======
  $('.popup-content')[0].reset();
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
  // Сбросить классы с алёрта и отключить.
  $('.popup-alert').removeClass('alert-success alert-danger alert-warning').hide();
  // Вернуть кнопку.
  $('#send-form-applicant').show();
<<<<<<< HEAD
  $('#send-form-employer').show();
=======
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
});

$(document).mouseup(function (e) {
  var div = $('.popup-content');
  if (!div.is(e.target) && div.has(e.target).length === 0) {
    $('.popup').addClass('none');

    // Очистить форму.
<<<<<<< HEAD
    $('#form-applicant')[0].reset();
    $('#form-employer')[0].reset();
=======
    $('.popup-content')[0].reset();
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
    // Сбросить классы с алёрта и отключить.
    $('.popup-alert').removeClass('alert-success alert-danger alert-warning').hide();
    // Вернуть кнопку.
    $('#send-form-applicant').show();
<<<<<<< HEAD
    $('#send-form-employer').show();
=======
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
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
function transferFormData(form, path, clean) {
  $(form).submit(function (evt) {
    evt.preventDefault();
    $.ajax({
      type: "POST",
      url: path,
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function (res) {
<<<<<<< HEAD
        // alert(res);
        outputMessage(res, form);

        // Очистка формы, после отправки
        if (clean == 'true') {
          $(form)[0].reset();
        }

=======
        alert(res);
        outputMessage(res, form);
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
      }
    })
  });
};


/**
 * Передает данные с попап-формы и получает ответ от сервера
 */
function transferPopup(button, form, path) {
  // Кнопка отправки формы.
<<<<<<< HEAD
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
  // $(button).click(function () {

  // });
=======
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
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
}


/**
 * Активные функуции.
 */
upPopupAddId('.respond-practice', '#popup-applicant', '#popup_practice_id');
upPopupAddId('.respond-resume', '#popup-employer', '#popup_resume_id');

<<<<<<< HEAD
// transferPopup('#send-form-applicant', '#form-applicant', 'php/respond_applicant.php');
// transferPopup('#send-form-employer', '#form-employer', 'php/respond_employer.php');


// Функции обработки форм, отвещающих за добавление материалов в базу данных
=======
transferPopup('#send-form-applicant', '#form-applicant', 'php/respond_applicant.php');
transferPopup('#send-form-employer', '#form-employer', 'php/respond_employer.php');

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
transferFormData('#add_practice', 'php/add_practice.php');
transferFormData('#add-company', 'php/add_company.php');
transferFormData('#add-category', 'php/add_category.php');
transferFormData('#add-resume', 'php/add_resume.php');
<<<<<<< HEAD
transferFormData('#add_direction', 'php/add_direction.php', 'true');

// Функции обработки форм, отвещающих за редактирование материалов
=======

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
transferFormData('#control-company', 'php/update_company.php');
transferFormData('#control-category', 'php/update_category.php');
transferFormData('#control-practice', 'php/update_practice.php');
transferFormData('#control-resume', 'php/update_resume.php');
<<<<<<< HEAD
transferFormData('#control-direction', 'php/update_direction.php');






/**
 * Реализация ajax удаление направления
 */
function unitDelete(form, btn, path) {
  // Идентификатор управляющего элемента
  $(btn).click(function (evt) {
    evt.preventDefault();
    // Идентификатор материала, который передается на btn в аттрибуте data-target
    unit_id = $(this).attr('data-target');
    $.ajax({
      type: "POST",
      // Путь к обработчику
      url: path,
      // Идентификатор передается в обработчик под именем unit_id
      data: { 'unit_id': unit_id },
      success: function (res) {
        // Отладка функции
        // alert(res);
        // Обработка ответов сервера
        messages = res.split(': ');
        type = messages[0];
        text = messages[1];
        // Сценарии вывода оповещения
        let state = '';
        if (type == 's') {
          state = 'alert-success';
          // Форма управления unit
          $(form).fadeOut(300);
        } else if (type == 'e') {
          state = 'alert-danger';
        } else if (type == 'w') {
          state = 'alert-warning';
        }
        // Вывод сообщения
        // !Если сообщение появляется повторно, то у него остаются классы предыдущего. Поэтому приходится перед началом показа сообщения очищать возможно оставшиеся классы.
        $('#alert').removeClass('alert-success alert-danger alert-warning').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);
      }
    });
  });
}

unitDelete('#control-direction', '#direction_delete', 'php/delete_direction.php');
=======

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8









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

<<<<<<< HEAD
/**
 * Реализация ajax удаление практики.
 */
$('#practice_delete').click(function (evt) {
  evt.preventDefault();
  practice_id = $(this).attr('data-target');
  $.ajax({
    type: "POST",
    url: 'php/delete_practice.php',
    data: { 'practice_id': practice_id },
    success: function (res) {
      // alert(res);
      // Обработка ответов сервера.
      messages = res.split(': ');
      type = messages[0];
      text = messages[1];
      // Сценарии вывода оповещения
      if (type == 's') {
        state = 'alert-success';
        $('#control-practice').fadeOut(300);


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



function deleteRespond(close, row, path) {
  $(close).bind('click', function (evt) {
    evt.preventDefault();
    id = $(this).attr('id');
    $.ajax({
      type: "POST",
      url: path,
      data: { 'id': id },
      success: function (res) {
        // alert(res);
        // Обработка ответов сервера.
        messages = res.split(': ');
        type = messages[0];
        text = messages[1];
        // Сценарии вывода оповещения
        if (type == 's') {
          state = 'alert-success';
          // $('#control-resume').fadeOut(300);
          $(row + id + '"]').hide();
        } else if (type == 'e') {
          state = 'alert-danger';
        }
      }
    })
  })
}

deleteRespond('.respond-applicant-close', '[respond-applicant-row-id="', 'php/delete_respond_applicant.php');
deleteRespond('.respond-employer-close', '[respond-employer-row-id="', 'php/delete_respond_employer.php');
=======

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8



// TODO По окончанию работ нужно отрефакторить этот файл разделением его на функции в рамках проекта.
// 1. Ajax-удаление компании
// 2. Ajax-удаление практики
