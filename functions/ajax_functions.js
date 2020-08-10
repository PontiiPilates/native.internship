/**
 * Обработка ответа сервера и вывод его на frontend для Ajax.
 */
function outputMessage(res) {
  // Обработка ответов сервера.
  messages = res.split(': ');
  type = messages[0];
  text = messages[1];
  // Сценарии вывода оповещения
  if (type == 's') {
    state = 'alert-success';
  } else if (type == 'e') {
    state = 'alert-danger';
  }
  // Вывод сообщения.
  $('#alert').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);
  // Очистка формы после отправки.
  $('#add_practice')[0].reset();
}

/**
 * Передаёт данные с формы на сервер и получает ответ сервера
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
        outputMessage(res);
      }
    })
  });
};

/**
 * Активные функуции.
 */
transferFormData('#add_practice', 'php/add_practice.php');