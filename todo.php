<?php
echo 'TODO file';
// // TODO Реализовать функцию удаления компании.
// // TODO В добавлении практики осуществить вывод компаний в селекте.
// // TODO в контроле практики реализовать ее удаление.
// // TODO присвоить практике категорию.
// // TODO В контроле практики реализовать ее обновление.
// // TODO Реализовать добавление резюме.
// // TODO Реализовать вывод резюме.
// // TODO Реализовать контроль резюме.
// // TODO Остановился на том, что нужно осуществить добавление резюме в таблицу.
// // TODO Организовать функции вывода шорт и лонг текста в материалах.
// // TODO Организовать поиск автокомплитом.
// // TODO На страницу админа осуществить доступ только по паролю. Без логина.
// // TODO Меню в хедере добавить классы активности.
// // TODO в админке в таблицах привести временную метку к читаемому формату.
// // TODO в .htaccess задать алиасы для страниц.
// // TODO В попап вставлять название материала.
// // TODO разработать классы для списков, жирного текста в теле материала
// // TODO в кабинете сделать фильтр на вывод откликов по дате
// // TODO в кабинете обрезать строки в таблицах
// // TODO алллиасы для категорий
// // TODO настроить все роутинги
// // TODO добавить фильтр на отклики
// // TODO починить отклики
// // TODO поменять очередность вывода практик, откликов, резюме сделать пагинатор
// // TODO добавить фильтр откликов по диапазону дат, и по фамилии
// // TODO оформить алиасы на карточках откликнувшихся
// // TODO 1 сформировать таблицу в базе данных по направлениям подготовки
// // TODO 2 реализовать пополнение направлений подготовки
// // TODO 3 осуществить вывод направлений подготовки селектом в попап
// // TODO 4 осуществить вывод направлений подготовки в подачу резюме
// // TODO 5 осуществить поиск на странице работодателя по направлениям подготовки
// // TODO Рециркулировать поиск на странице выдачи результата
// // TODO Настроить роутинг
// // TODO Приаттачить селект из управления практики в добавление практики
// // TODO Сделать вывод рандомных компаний на главной
// // TODO Сделать вывод последних добавленных четырех практик
// // TODO Добавить удаление отклика таким образом, чтобы запись сохранялась в базе.
// // TODO В выводе материалов для пользователя убрать "читать дальше", если контент короткий
// // TODO Всем селектам присвоить класс form-control
// // TODO Настроить функцию обрезки строк для практик резюме
// // TODO стартовая страница лендингом
// TODO выводить ключевые слова отдельно по запятой
// TODO Валидировать все запросы, поступающие в базу данных
// TODO добавить уведомления на почту при добавлении отклика
// TODO Добавить счетчик яндекс метрики
// TODO сделать пагинатор на вывод 50 материалов
// TODO проставить обязательные для заполнения поля
// TODO улучшить семантику в лэйблах полей форм. на страницах редактирования - убрать слова "введите", поскольку система предусматривает, что данные и так введены.
// // TODO привести таблицы админки к единому стилю



// ?Работы по фронтенду:
// 1. Убрать эффект при наведении на название компании. Поскольку изменение состояния предполагает интерактивность, а здесь ее нет.
// 2. Центрировать логотип и название компании с учетом изменения количества символов в названии компании.
// 3. Из попапа выпадает поле "Профиль ВКонтакте".
// 4. В input аттрибут name и value - для бэкенда. В php они становятся ключами и значениями соответственно. В тех формах, которые ты сделал для popup, где то их не было, где то они были заняты. Мне пришлось их реорганизовать под нужды бэкенда. Таким образом я скорее всего поламал фронтенд. Поправь его пожалуйста там должно быть не сильно много делов. Кстати type="submit" тоже нужен в форме для бэкенда, иначе приходится городки городить. Здесь я погородил, а вот с name и value уж никак, сорян. 
// 5. В форме в попапе есть поле с номером телефона. Оно number. Это означает, что цифры можно прибавлять кликом. Так номер никто не набирает. И пользователь не сможет ввести номер начиная с символа "+".
// 6. Переделал фильтры по практикам. У тебя были чексбоксы, но такой способ предполагает возможность выбора нескольких вариантов + отправка формы, что не совсем подходит для secondary-menu поэтому я сделал ссылками. Тебе нужно вернуть им прежний стиль: отступы, ховер, ...
// 7. На страницах админки используется бутстрап и поэтому поплыл хедер, конкретно ссылка стала кнопкой. Проведи ревизию меню в хедере, чтобы классы не конфликтовали.
// 8. Поиск сделал на плагине autocomplete, соответственно там поменялись стили, поправь их тоже. https://www.devbridge.com/sourcery/components/jquery-autocomplete/
// 9. Не забудь сказать мне количество символов, требуемое для вывода шорт-текста в материале.

// 10 В форме при переходе с вкладки "Специалитет" на "Бакалавриат" появляется еще одно поле для заполнения.
// 10.5 Форма пропускает отправку без выбора курса.
// 11. Отправка формы происходит 5 раз.
// 12. Если в фокусе находится какой-либо элемент, то требуется 2 клика на отправку.

// 13. В попап поместить заголовок с элемента.
// 14. Сделать выбор гражданства селектом (РФ, СНГ, иное... ?) Уточнить у СА.
// 15. Номер телефона, Почта, адрес ВК строго типизировать, привести к единому формату.
// 16. "Сотрудничаем с крупными компаниями" переименовать в "Наши партнеры".
// 17. Практики дублируются в начале и в внизу страницы. При взгляде это вызывает вопрос: "а зачем?" вместо эффекта заинтересованности, чтобы "удержать пользователя на странице". Поэтому есть предложение заменить нижние практики партнерами. Если нет иных вариантов.
// 18. Навигационное меню в лендинге сделать закрепленным при скролле.
// 19. "Новый сервис для поиска практик + дальнейшее описание" заменить на "Биржа практик + сервис для подбора практик".
// 20. В навигационное меню лендинга добавать Контакты.
// 21. Оформить в лендинге раздел с контактами, возможно в футере.
// 22. Текст самой нижней кнопки заменить на "Подобрать практику".

// 23. В поиске на странице работодателя placeholder должен быть "Поиск по направлению подготовки"

// 24. В автокомплите есть ховер при наведении на элемент выпадающего списка, но нет стиля при выборе клавишами.

// 25. Сделай "Наши партнеры" дивами или убери cursor pointer при наведение, чтобы поведение не подразумевало кликабельность.
// 26. В справке редактора оформи раздел по требованиям к загружаемым изображениям.

// 27. Поработай с "Читать полностью". Я ограничиваю вывод определенным количеством символов, после чего подставляется троеточие, но в некоторых случаях текст все равно занимает разное количество строк. Поэтому спозиционируй "Читать полностью в какое-то конкретное место", чтобы не было разношерстности.

// 28. Дай стилей на блок с информацией для админа.
// 29. Дай стилей на логотип компании, потому, что они сделали очень длинный текст одному из них и он стал выглядеть ужасно.



// ?Концепции рефакторинга:
// 1. Считать разработанный фреймворк черновым.
// 2. Описать каждый файл врэймворка.
// 3. Разбить на операции, достигаемые фрагментами кода.
// 4. Эти операции оформить функциями со уклоном на специфику проекта.

// 1. Собрать используемые запросы к базе данных.
// 2. Оформить запросы списком переменных.
// 3. Использовать переменные в функциях.
// 4. Управление запросами будет происходить из единого файла.


// ?Принципы сборки фреймворка:
// Осуществлять бэкенд с таблицы, которая не связана с остальными. Чем больше таблица связана с другими таблицами, тем в более последнюю очередь осуществлять связанный с ней бэккенд.
// Вести лог этапов разработки. Сделал скрипт, записал в лог.