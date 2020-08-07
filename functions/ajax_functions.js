/**
 * Передаёт данные с формы на сервер и получает ответ сервера
 */
function transferFormData(form, path){
  $(form).submit(function (evt) {
    evt.preventDefault();
    $.ajax({
      type: "POST",
      url: path,
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function(res){
        // Вывод ответов сервера.
        arrMessage = res.split(": ");
        type = arrMessage[0];
        text = arrMessage[1];
        alert(type);
        if (type == "e") {
          alert(text);
        }
        if (type == "s") {
          alert(text);
        }
      }
    })
  });
};

transferFormData('#add_practice', 'php/add_practice.php');