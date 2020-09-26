/**
 * Автокомплит
 */

let regexpStudent = /^\/search-student-.*$/;
let regexpEmployer = /^\/search-employer-.*$/;
let path = window.location.pathname;

// Поиск для студента
if (path == '/student' || path == path.match(regexpStudent)) {
    // Значение placeholder для студента
    $("#tags").attr('placeholder', 'Поиск по практике');
    // Параметры autocomplete
    $("#tags").autocomplete({
        source: 'modules/search/get_data_practices.php',
        minLength: 1,
        delay: 300,
    });
    // Действие при клике по кнопке "Найти"
    $('#getSearch').click(function () {
        window.location.pathname = '/search-student-' + encodeURIComponent($('#tags').val().replace(/[^а-яА-Яa-zA-Z\s]/g, ''));
    });
    // Действие при нажатии клавиши "Enter"
    $('#tags').keyup(function (evt) {
        if (evt.keyCode == 13) {
            window.location.pathname = '/search-student-' + encodeURIComponent($('#tags').val().replace(/[^а-яА-Яa-zA-Z\s]/g, ''));
        }
    });

// Поиск для работодателя
} else if (path == '/employer' || path == path.match(regexpEmployer)) {
    // Значение placeholder для студента
    $("#tags").attr('placeholder', 'Поиск по направлению подготовки студента');
    // Параметры autocomplete
    $("#tags").autocomplete({
        source: 'modules/search/get_data_resumes.php',
        minLength: 1,
        delay: 300,
    });
    // Действие при клике по кнопке "Найти"
    $('#getSearch').click(function () {
        window.location.pathname = '/search-employer-' + encodeURIComponent($('#tags').val().replace(/[^а-яА-Яa-zA-Z]\s/g, ''));
    });
    // Действие при нажатии клавиши "Enter"
    $('#tags').keyup(function (evt) {
        if (evt.keyCode == 13) {
            window.location.pathname = '/search-employer-' + encodeURIComponent($('#tags').val().replace(/[^а-яА-Яa-zA-Z]\s/g, ''));
        }
    });
}