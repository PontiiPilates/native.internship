/**
 * Обработка ответа сервера и вывод его на frontend для Ajax.
 */
function outputMessage(res, form) {
  // Обработка ответов сервера.
  messages = res.split(': ');
  type = messages[0];
  text = messages[1];
  // Сценарии вывода оповещения
  if (type == 's') {
    state = 'alert-success';
  } else if (type == 'e') {
    state = 'alert-danger';
  } else if (type == 'w') {
    state = 'alert-warning';
  }
  // Вывод сообщения.
  // !Если сообщение появляется повторно, то у него остаются классы предыдущего. Поэтому приходится перед началом показа сообщения очищать возможно оставшиеся классы.
  $('#alert').removeClass('alert-success alert-danger alert-warning').addClass(state).text(text).fadeIn(300).delay(5000).fadeOut(300);
  // Очистка формы после отправки.
  $(form)[0].reset();
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
        // alert(res);
        outputMessage(res, form);
      }
    })
  });
};


// $('[data-target="#practiceModal"]').bind('click', function() {
//   practiceId = $(this).attr('id');
//   // window.location += '&practice_id=' + practiceId;
//   // window.history.pushState("object or string", "Title", "http://xx.x/index?brand[]=1");
//   // $.get('http://internship.sfu-kras.ru/admin.php?block=list-practice', {param: 1});
  
//   $.ajax({
//     url: 'php/output_practice.php',
//     method: 'post',
//     dataType: 'html',
//     data: {

//       id: practiceId
//     },
//     success: function(data) {
//       // !Остановился тут. Нужно бы получить json.
//       alert(data);
//     }
//   });
// })

/**
 * Активные функуции.
 */
transferFormData('#add_practice', 'php/add_practice.php');
transferFormData('#add-company', 'php/add_company.php');