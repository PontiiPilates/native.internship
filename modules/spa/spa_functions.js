// $('a').bind('click', function (evt) {
//   evt.preventDefault();
//   var a = $(this).attr('href');
//   alert(a);

//   $.ajax({
//     type: 'POST',
//     // url: 'functions/script.php',
//     url: '/',
//     data: a,
//     success: function (res) {
//       alert(res);
//     },
//   }
//   );
// })



$('#add-practice').submit(function (evt) {
  evt.preventDefault();
  $.ajax({
    type: "post",
    url: 'php/script_add_practice.php',
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function(res){
      alert(res);
    }
  })
})