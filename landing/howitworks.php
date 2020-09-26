<html lang="ru">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2488111-57"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-2488111-57');
    </script>
    <!--  -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Биржа практик</title>
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="landing/style.css">
    <link rel="stylesheet" type="text/css" href="landing/bootstrap/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>

    <!-- <div style="width: 500px; height: 150px; overflow: auto;">
        <div style="width: 100px; height: 50px; background-color: #ccc; margin-right: 10px; display: inline-block;"></div>
        <div style="width: 100px; height: 50px; background-color: #ccc; margin-right: 10px; display: inline-block;"></div>
        <div style="width: 100px; height: 50px; background-color: #ccc; margin-right: 10px; display: inline-block;"></div>
        <div style="width: 100px; height: 50px; background-color: #ccc; margin-right: 10px; display: inline-block;"></div>
        <div style="width: 100px; height: 50px; background-color: #ccc; margin-right: 10px; display: inline-block;"></div>
    </div> -->

    <section id="zero">
        <div class="container">
            <div class="row">
                <div class="col menu-col">
                    <div class="logo-block">
                        <a class="logo-link" href="http://internship.sfu-kras.ru/">
                            <img class="logo" alt="logo" src="landing/img/logo.svg">
                        </a>
                    </div>
                    <div class="menu-block">
                        <a class="menu-item" href="#third">Зачем это</a>
                        <a class="menu-item" href="#four">Опыт решает</a>
                        <a class="menu-item" href="#five">Как это было</a>
                        <a class="menu-item" href="#six">Как это работает</a>
                        <a class="menu-item" href="#seven">Найдите свою практику</a>
                        <a class="menu-item" target="_blank" href="http://career.sfu-kras.ru/contacts">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="first" class="first_class">
        <div class="container">
            <!-- <div class="row">
                <div class="col menu-col">
                    <div class="logo-block">
                        <a class="logo-link" href="http://www.sfu-kras.ru/">
                            <img class="logo" alt="logo" src="landing/img/logo.svg">
                        </a>
                    </div>
                    <div class="menu-block">
                        <a class="menu-item" href="#third">Зачем это</a>
                        <a class="menu-item" href="#four">Опыт решает</a>
                        <a class="menu-item" href="#five">Как это было</a>
                        <a class="menu-item" href="#six">Как это работает</a>
                        <a class="menu-item" href="#seven">Найдите свою практику</a>
                        <a class="menu-item" href="#eight">Контакты</a>
                    </div>
                </div>
            </div> -->
            <div class="row row-margin">
                <div class="col-sm-12 col-md-6 col-margin">
                    <div class="first-block">
                        <a href="https://career.sfu-kras.ru/" class="career-center">Центр карьеры СФУ</a>
                        <div class="main-heading">Биржа практик — новый сервис для поиска практики</div>
                        <p class="p">Хотите пойти инженером в Норникель? Или в РУСАЛ? Или интересует маркетинг? Биржа практик подберет практику под любой ваш запрос.</p>
                        <!-- <div class="main-heading">Биржа практик</div>
                        <p class="p">сервис для подбора практик.</p> -->
                        <div class="buttons">
                            <a href="http://internship.sfu-kras.ru/student" class="button-primary">Студенту</a>
                            <a href="http://internship.sfu-kras.ru/employer" class="button-secondary">Работодателю</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="first-img"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="second" class="first_class">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="second-head">Практика на разный вкус</div>
                </div>
            </div>

            <?php
            require('../functions/db_functions.php');
            require('../functions/functions.php');

            $output_first_column = db_output_all("SELECT * FROM `practices` ORDER BY `id` DESC LIMIT 2");
            $output_second_column = db_output_all("SELECT * FROM `practices` ORDER BY `id` DESC LIMIT 2 OFFSET 2");
            $output_companys = db_output_all("SELECT * FROM `companys` ORDER BY RAND()");
            $output_companys_for_footer = db_output_all("SELECT * FROM `companys` ORDER BY RAND() LIMIT 4");


            ?>

            <div class="row" style="margin-top: 24px;">
                <div class="col-sm-12 col-md-6">
                    <?php foreach ($output_first_column as $k) : ?>
                        <div class="intern-block" style="margin-bottom: 16px;">
                            <div class="intern-content">
                                <div class="intern-heading">
                                    <div class="intern-head"><?php print $k['title'] ?></div>
                                    <div class="intern-benefits">
                                        <div class="intern-benefit"><?php print $k['features'] ?></div>
                                    </div>
                                </div>
                                <div class="intern-logo">
                                    <?php
                                    $company_id = $k['company_id'];
                                    $company = db_output_all("SELECT * FROM `companys` WHERE `id` = $company_id");
                                    $company_name = $company[0]['name'];
                                    $company_logo = $company[0]['logotip'];
                                    ?>
                                    <img width="60" height="60" src="../img/company_logo/<?php print_r($company_logo); ?>" alt="<?php print_r($company_name); ?>">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-sm-12 col-md-6">
                    <?php foreach ($output_second_column as $k) : ?>
                        <div class="intern-block" style="margin-bottom: 16px;">
                            <div class="intern-content">
                                <div class="intern-heading">
                                    <div class="intern-head"><?php print $k['title'] ?></div>
                                    <div class="intern-benefits">
                                        <div class="intern-benefit"><?php print $k['features'] ?></div>
                                    </div>
                                </div>
                                <div class="intern-logo">
                                    <?php
                                    $company_id = $k['company_id'];
                                    $company = db_output_all("SELECT * FROM `companys` WHERE `id` = $company_id");
                                    $company_name = $company[0]['name'];
                                    $company_logo = $company[0]['logotip'];
                                    ?>
                                    <img width="60" height="60" src="../img/company_logo/<?php print_r($company_logo); ?>" alt="<?php print_r($company_name); ?>">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="label label_bold">Наши партнёры</div>
                    <div class="company_logos">

                        <?php foreach ($output_companys as $k) : ?>
                            <a href="##" class="company_logo">
                                <img width="60" height="60" src="../img/company_logo/<?php print_r($k['logotip']); ?>" alt="<?php print_r($k['name']); ?>">
                            </a>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="third" class="first_class">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="second-head">
                        Зачем студенту проходить практику
                    </div>
                    <p class="p" style="margin-top: 18px;">
                        Практика позволяет засучить рукава и поработать руками и головой: делать отчёты, писать код, разговаривать с клиентами и продавать им товар. Вы узнаете работу изнутри и получите реальный опыт.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="whys">
                        <div class="why-block">
                            <img class="why-img" src="landing/img/why1.svg">
                            <div class="why-text">Зарекомендовать себя работодателю</div>
                        </div>
                        <div class="why-block">
                            <img class="why-img" src="landing/img/why2.svg">
                            <div class="why-text">Вырасти как специалист</div>
                        </div>
                        <div class="why-block">
                            <img class="why-img" src="landing/img/why3.svg">
                            <div class="why-text">Возможно, получить работу там, где была практика</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="four">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="second-head second-head_white">
                        Опыт решает
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="ex-block">
                        <div class="ex-head">67%</div>
                        <div class="ex-desc">студентов, прошедших практику, получают работу сразу после выпуска</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="ex-block">
                        <div class="ex-head">84%</div>
                        <div class="ex-desc">студентов остаются работать на полную ставку там, где проходила практика</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <p class="p pwhite">
                        Работодатели всегда смотрят на опыт работы. Если у вас его нет, то устроиться на работу будет непросто.
                        На практике вы получаете реальный опыт, поэтому найти работу будет куда проще.
                    </p>
                    <p class="p pwhite" style="margin-top: 20px; opacity: 0.8; font-size: 14px;">На основе статистики Центра карьеры СФУ</p>
                </div>
            </div>
        </div>
    </section>
    <section id="five">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="second-head">
                        Как это было
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="photo" style="background-image: url('landing/img/1.jpg');"></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="photo" style="background-image: url('landing/img/2.jpg');"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="photo" style="background-image: url('landing/img/3.jpg');"></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="photo" style="background-image: url('landing/img/4.jpg');"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="six">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="second-head">
                        Как это работает
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="how-block">
                        <div class="how-num">1</div>
                        <div class="how-head">Выбрать подходящую для вас практику</div>
                        <div class="how-desc">На сайте есть поиск и фильтр по направлениям. Можно искать по нужной компании или только по специальности</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="how-block">
                        <div class="how-num">2</div>
                        <div class="how-head">Заполнить анкету и отправить её</div>
                        <div class="how-desc">Некоторые личные данные, контакты, информация об учёбе и немного о себе</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="how-block">
                        <div class="how-num">3</div>
                        <div class="how-head">Дождаться ответа</div>
                        <div class="how-desc">Вам позвонят или напишут, могут запросить дополнительные сведения или же сразу дать ответ</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="seven">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-heading main-heading2">Найдите свою практику</div>
                </div>
            </div>
            <div class="row" style="margin-top: 24px;">
                <div class="col-sm-12 col-md-12">
                    <div class="company_logos2">

                        <?php foreach ($output_companys_for_footer as $k) : ?>
                            <a href="##" class="company_logo company_logo2">
                                <img width="180" height="180" src="../img/company_logo/<?php print_r($k['logotip']); ?>" alt="<?php print_r($k['name']); ?>">
                            </a>
                        <?php endforeach; ?>

                    </div>
                    <!-- <div class="intern-block" style="margin-bottom: 16px;">
                        <div class="intern-content">
                            <div class="intern-heading">
                                <div class="intern-head">Java-разработчик</div>
                                <div class="intern-benefits">
                                    <div class="intern-benefit">
                                        Интересная практика
                                    </div>
                                    <div class="intern-benefit">
                                        Востребованно у студентов
                                    </div>
                                </div>
                            </div>
                            <div class="intern-logo">
                                <img src="landing/img/nikel-logo.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="intern-block">
                        <div class="intern-content">
                            <div class="intern-heading">
                                <div class="intern-head">Инженер-коструктор</div>
                                <div class="intern-benefits">
                                    <div class="intern-benefit">
                                        Интересная практика
                                    </div>
                                    <div class="intern-benefit">
                                        Востребованно у студентов
                                    </div>
                                </div>
                            </div>
                            <div class="intern-logo">
                                <img src="landing/img/nikel-logo.svg" alt="">
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-sm-12 col-md-6">
                    <div class="intern-block" style="margin-bottom: 16px;">
                        <div class="intern-content">
                            <div class="intern-heading">
                                <div class="intern-head">UX/UX Дизайнер</div>
                                <div class="intern-benefits">
                                    <div class="intern-benefit">
                                        Интересная практика
                                    </div>
                                    <div class="intern-benefit">
                                        Востребованно у студентов
                                    </div>
                                </div>
                            </div>
                            <div class="intern-logo">
                                <img src="landing/img/nikel-logo.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="intern-block" style="margin-bottom: 16px;">
                        <div class="intern-content">
                            <div class="intern-heading">
                                <div class="intern-head">Проектировщик интефейсов</div>
                                <div class="intern-benefits">
                                    <div class="intern-benefit">
                                        Интересная практика
                                    </div>
                                    <div class="intern-benefit">
                                        Востребованно у студентов
                                    </div>
                                </div>
                            </div>
                            <div class="intern-logo">
                                <img src="landing/img/nikel-logo.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row" style="text-align: center; margin-top: 48px;">
                <div class="col">
                    <a href="http://internship.sfu-kras.ru/student" class="button-primary">Подобрать практику</a>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" style="padding: 36px 0;">
        <div class="container">
            <div class="col-sm-12 col-md-12">
                <h3>Центр карьеры СФУ</h3>
                <a class="footer_link" href="tel:+2-46-99-41">тел. 2-46-99-41</a>
                <a class="footer_link" href="mailto:ck@sfu-kras.ru">ck@sfu-kras.ru</a>
                <a class="footer_link" href="http://career.sfu-kras.ru">career.sfu-kras.ru</a>
                <a class="footer_link" href="http://vk.com/ck_sfu">vk.com/ck_sfu</a>
                <a class="footer_link" href="http://twitter.com/ck_sfu">twitter.com/ck_sfu</a>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/main.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>

</html>