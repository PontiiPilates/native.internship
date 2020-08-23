$(document).ready(function () {



    // раскрыть полное описание заявки
    $('.app-desc-small').click(function () {
        let container = $(this).parent();
        let full = container.find('.app-desc-full');
        let small = $(this);

        small.toggleClass('none');
        full.toggleClass('block');
        console.log(full);
    });

    // скрыть полное описание заявки, раскрыть короткое
    $('.app-desc-full').click(function () {
        let container = $(this).parent();
        let full = $(this);
        let small = container.find('.app-desc-small');

        small.toggleClass('none');
        full.toggleClass('block');
        console.log(full);
    });

    // убрать красноту при клике по полю ввода
    $('input[data-req=true]').click(function () {
        if ($(this).hasClass('form-input-error')) {
            let input = $(this);
            let error = $(this).parent().find('.form-input-error-label');

            error.removeClass('block');
            input.removeClass('form-input-error');
        }
    });

    // раскрыть фильтр на мобилке
    $('.filter-block-header').click(function () {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $('.filter-block-content').toggleClass('block');
            $('.filter-block-header').toggleClass('filter-block-header-mag');
        }
    });

    // переключить вкладку бакалавр
    $('label[for=bak]').click(function () {
        $('#bak').prop('checked', true);
        console.log('bak' + $('#bak').prop('checked'));

        $('#mag').prop('checked', false);
        $('#spec').prop('checked', false);
        $('#content-tab1').addClass('tab-section-active');

        $('#content-tab2').removeClass('tab-section-active');
        $('#content-tab2').removeClass('tab-section-active');
    });

    // переключить вкладку магистратура
    $('label[for=mag]').click(function () {
        $('#mag').prop('checked', true);
        console.log('mag' + $('#mag').prop('checked'));

        $('#bak').prop('checked', false);
        $('#spec').prop('checked', false);
        $('#content-tab2').addClass('tab-section-active');

        $('#content-tab1').removeClass('tab-section-active');
        $('#content-tab3').removeClass('tab-section-active');
    });

    // переключить вкладку специалитет
    $('label[for=spec]').click(function () {
        $('#spec').prop('checked', true);
        console.log('spec' + $('#spec').prop('checked'));

        $('#mag').prop('checked', false);
        $('#bak').prop('checked', false);
        $('#content-tab3').addClass('tab-section-active');

        $('#content-tab1').removeClass('tab-section-active');
        $('#content-tab2').removeClass('tab-section-active');
    });

    // отправить форму соискателя
    $('#send-form-applicant').click(function () {
        checkFields();
    });

    // отправить форму работодателя
    $('#send-form-employer').click(function () {
        checkFields();
    });

    // проверить поля на заполненность
    function checkFields() {
        $('input[data-req=true]').each(function (index, element) {
            if ($(this).val() == '') {
                let input = $(this);
                let error = $(this).parent().find('.form-input-error-label');

                error.addClass('block');
                input.addClass('form-input-error');
            }

            if (!$('#pers').prop('checked')) {
                $('.form-input-error-label-pers').addClass('block');
            } else {
                $('.form-input-error-label-pers').removeClass('block');
            }
        });
    };

});