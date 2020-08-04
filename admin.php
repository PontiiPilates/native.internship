<html lang="en">

<!-- Подключил бутстрап на этой странице, чтобы быстренько накидать основные стили. -->

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>

<?php require('chunks/head.php'); ?>

<body>
    <?php require('chunks/popup_applicant.php'); ?>
    <?php require('chunks/popup_employer.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-3 col-md-12">
                <?php require('chunks/header.php'); ?>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-3 col-sm-12">
                <ul>
                    <li class="mb-3"><a href="##" class="btn btn-primary">Добавить практику</a></li>
                    <li class="mb-3"><a href="##" class="btn btn-secondary">Добавить резюме</a></li>
                    <li class="mb-3"><a href="##" class="btn btn-info">Добавить компанию</a></li>
                </ul>
                <ul>
                    <li class="mb-1"><a href="##" class="btn btn-link">Смотреть практики</a></li>
                    <li class="mb-1"><a href="##" class="btn btn-link">Смотреть резюме</a></li>
                    <li class="mb-1"><a href="##" class="btn btn-link">Смотреть отклики</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-sm-12">
                <div class="content">

                    <!-- Форма добавления практики -->
                    <form action="">
                        <div class="form-group">
                            <label for="">Введите название практики</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Введите описание</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Введите ключевые слова через ","</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Выберите компанию</label>
                            <select name="" id="">
                                <option value="" class="form-control">Газпром</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

                    <!-- Форма добавления резюме -->
                    <form action="">
                        <div class="form-group">
                            <label for="">Введите ФИО соискателя</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Расскажите о нем</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Введите ключевые слова через ","</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

                    <!-- Форма добавления компании -->
                    <form action="">
                        <div class="form-group">
                            <label for="">Введите название компании</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Загрузите логотип компании</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

                    <!-- Таблица вывода практик -->
                    <!-- После открытия переходим на страницу вывода конкретной практики или показываем ее в попап окне-->
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Компания</th>
                                <th>Дата размещения</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Мэнеджер</td>
                                <td>Газпром</td>
                                <td>21.06.2020</td>
                                <td><button>Открыть</button></td>
                            </tr>
                            <tr>
                                <td>Мэнеджер</td>
                                <td>Газпром</td>
                                <td>21.06.2020</td>
                                <td><button>Открыть</button></td>
                            </tr>
                        </tbody>
                    </table>


                    <!-- Таблица вывода резюме -->
                    <!-- После открытия переходим на страницу вывода конкретной практики или показываем ее в попап окне-->
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ФОИ соискателя</th>
                                <th>Дата размещения</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Креветкин Шашлык Омбарович</td>
                                <td>21.06.2020</td>
                                <td><button>Открыть</button></td>
                            </tr>
                            <tr>
                                <td>Аргыджэков Суслан Вольфрамович</td>
                                <td>21.06.2020</td>
                                <td><button>Открыть</button></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Таблица вывода компаний -->

                    <!-- Таблица вывода откликов -->



                </div>
            </div>
        </div>
    </div>
    <?php require('chunks/links_scripts.php'); ?>
</body>

</html>