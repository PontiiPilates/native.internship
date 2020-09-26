$(document).ready(function () {

    var cours1 = true;
    var cours2, cours3;

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
    $('.filter-block').click(function () {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $('.filter-block-content').toggleClass('block');
            $('.filter-block-header').toggleClass('filter-block-header-mag');
        }
    });
    $('.filter-item').click(function () {
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

        $('#naprb').attr('data-req', 'true');
        $("#naprm").removeAttr("data-req");
        $("#naprs").removeAttr("data-req");

        $('#content-tab2').removeClass('tab-section-active');
        $('#content-tab3').removeClass('tab-section-active');
    });

    // переключить вкладку магистратура
    $('label[for=mag]').click(function () {
        $('#mag').prop('checked', true);
        console.log('mag' + $('#mag').prop('checked'));

        $('#bak').prop('checked', false);
        $('#spec').prop('checked', false);
        $('#content-tab2').addClass('tab-section-active');

        $('#naprm').attr('data-req', 'true');
        $("#naprb").removeAttr("data-req");
        $("#naprs").removeAttr("data-req");

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

        $('#naprs').attr('data-req', 'true');
        $("#naprb").removeAttr("data-req");
        $("#naprm").removeAttr("data-req");

        $('#content-tab1').removeClass('tab-section-active');
        $('#content-tab2').removeClass('tab-section-active');
    });

    $('#popup-applicant #num').mask("+7 999 999-99-99", {placeholder:"-"});
    $('#popup-employer #num').mask("+7 999 999-99-99", {placeholder:"-"});

    $('#popup-employer #el').inputmask("email");
    $('#popup-applicant #el').inputmask("email");

    // $.mask.definitions['9'] = "[0-9]";
    // $('#vk').mask('+vk.com/')
    // $('#el').inputmask("email");

    // отправить форму соискателя
    $('#send-form-applicant').click(function () {
        // console.log('click!')
        checkFields(false);
    });

    // отправить форму работодателя
    $('#send-form-employer').click(function () {
        checkFields(true);
    });

    // проверить поля на заполненность
    function checkFields(employer) {

        // console.log('start');

        let one = false, two = false;
        let counter = 0;
        if (employer){
            // console.log('хуss');
            $('#popup-employer input[data-req=true]').each(function(){

                if ($(this).val() == '') {
                    one = false;
                    let input = $(this);
                    let error = $(this).parent().find('.form-input-error-label');
    
                    error.addClass('block');
                    input.addClass('form-input-error');
    
                    counter = counter + 1;
                    console.log('counter - ', counter);
    
                    // if (!employer){
                    //     if (counter != 4 && !employer){
                    //         one = false;
                    //     } else{
                    //         one = true;
                    //     }
                    // }
    
                    // else{
                    //     // console.log('хуss');
                    //     console.log('counter - ', counter);
                    //     if (counter == 1){
                    //         console.log('хуss22');
                    //         one = true;
                    //     }
                    // }
    
    
                }
    
                else if (counter == 0){ 
                    one = true;
                }
            });
        }

        else{
            $('#popup-applicant input[data-req=true]').each(function (index, element) {
                if ($(this).val() == '') {
                    one = false;
                    let input = $(this);
                    let error = $(this).parent().find('.form-input-error-label');
    
                    error.addClass('block');
                    input.addClass('form-input-error');
    
                    counter = counter + 1;
    
                    // if (!employer){
                    //     if (counter != 4 && !employer){
                    //         one = false;
                    //     } else{
                    //         one = true;
                    //     }
                    // }
    
                    // else{
                    //     if (counter == 0){
                            
                    //     }
                    // }
    
    
                }
    
                else if (counter == 0){ 
                    one = true;
                }
            });
        }

        if (employer){
            if (!$('#popup-employer #pers2').prop('checked')) {
                $('.form-input-error-label-pers').addClass('block');
                two = false;
            } else {
                $('.form-input-error-label-pers').removeClass('block');
                two = true;
            }
        }

        else{
            if (!$('#popup-applicant #pers').prop('checked')) {
                $('.form-input-error-label-pers').addClass('block');
                two = false;
            } else {
                $('.form-input-error-label-pers').removeClass('block');
                two = true;
            }
        }

        // console.log('two - ', two);
        // console.log('end');

        console.log('one - ', one);
        console.log('two - ', two);

        if (one && two){
            console.log('submit');
            if (employer){
                transferPopup('#send-form-employer', '#form-employer', 'php/respond_employer.php');
            }

            else{
                console.log('SUBMIT');
                transferPopup('#send-form-applicant', '#form-applicant', 'php/respond_applicant.php');
            }
        }
    };

});