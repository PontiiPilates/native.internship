-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT 'Название категории',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `categorys` (`id`, `name`) VALUES
(1,	'Промышленность'),
(2,	'Дизайн'),
(3,	'Маркетинг'),
(4,	'Финансы');

DROP TABLE IF EXISTS `companys`;
CREATE TABLE `companys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT 'Название компании',
  `logotip` text NOT NULL COMMENT 'Имя файла логотипа компании',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `companys` (`id`, `name`, `logotip`) VALUES
(1,	'Норильский никель',	'1597153168.jpg'),
(2,	'Газпром',	'1597153219.jpg'),
(3,	'Новатэк',	'1597153254.jpg'),
(4,	'Сбербанк',	'1597324689.jpg');

DROP TABLE IF EXISTS `practices`;
CREATE TABLE `practices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT 'Название практики',
  `features` text NOT NULL COMMENT 'Характерные черты',
  `description` text NOT NULL COMMENT 'Описание',
  `company_id` int(11) NOT NULL COMMENT 'Идентификатор компании',
  `category_id` int(11) NOT NULL COMMENT 'Идентификатор категории',
  `timestamp` int(11) NOT NULL COMMENT 'Временная метка добавления записи',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `practices` (`id`, `title`, `features`, `description`, `company_id`, `category_id`, `timestamp`) VALUES
(7,	'Парафинщик',	'Опасно для жизни',	'На автомойку',	1,	0,	1597029261),
(8,	'Маляр',	'Опасно для жизни, Интересно студенту',	'На аванпост',	2,	0,	1597029319),
(16,	'Вальцовщик',	'Интересно',	'В столовую',	3,	0,	1597216696),
(17,	'Мясопотам',	'Интересно как никогда',	'В абсерваторию',	4,	4,	1597217357),
(18,	'Эволюционер',	'Интересно пенсионеру',	'В столовую',	3,	2,	1597646794),
(19,	'Крановщик',	'Опасно для жизни, Здорово для злоровья',	'К Гольдману на свиноферму',	4,	3,	1597646823);

DROP TABLE IF EXISTS `responds_applicants`;
CREATE TABLE `responds_applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL COMMENT 'Фио',
  `birthday` text NOT NULL COMMENT 'Дата рождения',
  `citizenship` text NOT NULL COMMENT 'Гражданство',
  `phone_number` text NOT NULL COMMENT 'Номер телефона',
  `email` text NOT NULL COMMENT 'Почта',
  `vk_profile` text NOT NULL COMMENT 'Профиль в Вк',
  `institute` text NOT NULL COMMENT 'Институт',
  `level_education` text NOT NULL COMMENT 'Уровень образования',
  `course` text NOT NULL COMMENT 'Курс',
  `direction` text NOT NULL COMMENT 'Направление / специальность',
  `form_education` text NOT NULL COMMENT 'Форма обучения',
  `applicant_about` text NOT NULL COMMENT 'Подробнее о соискателе',
  `popup_practice_id` int(11) NOT NULL COMMENT 'Идентификатор практики',
  `datetime` int(11) NOT NULL COMMENT 'Временная метка занесения записи в базу данных',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `responds_applicants` (`id`, `fullname`, `birthday`, `citizenship`, `phone_number`, `email`, `vk_profile`, `institute`, `level_education`, `course`, `direction`, `form_education`, `applicant_about`, `popup_practice_id`, `datetime`) VALUES
(50,	'Фшытрих Фарух Фейхуовович',	'2020-08-23',	'Ташкартастат',	'89233341635',	'zloileshii@gmail.com',	'https://vk.com/im?sel=4608263',	'Институт филологии и языковой коммуникации (ИФиЯК)',	'Специалитет',	'1',	'Припуршиха',	'Очно-заочная',	'Я скорее всего наверное я.',	16,	1598159351),
(49,	'Архенштольт Илья Урбекович',	'2020-08-21',	'Франция',	'89233341635',	'zpp@gpd.com',	'https://vk.com/shtayts88',	'Институт нефти и газа (ИНиГ)',	'Магистратура',	'2',	'Эспандероведение',	'Очно-заочная',	'Легкий на ветер',	17,	1597975609),
(48,	'Альберт Эвклидович Бродский',	'2020-08-20',	'Казахстан',	'7931474120',	'enokentiy@ads.ru',	'https://vk.com/enokentii',	'Институт горного дела, геологии и геотехнологий (ИГДГиГ)',	'Магистратура',	'2',	'Пелёнкология',	'Заочная',	'Я старый моряк!',	8,	1597916854),
(47,	'Лешуков Сергей Михайлович',	'2020-08-20',	'РФ',	'89233341635',	'zloileshii@gmail.com',	'https://vk.com/zloileshii',	'Юридический институт (ЮИ)',	'Специалитет',	'5',	'Правоохранительная деятельность',	'Очная',	'Люблю, когда никто не отвлекает меня от программирования.',	17,	1597916426);

DROP TABLE IF EXISTS `responds_employers`;
CREATE TABLE `responds_employers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `company_name` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `resume_id` int(11) NOT NULL,
  `datetime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `responds_employers` (`id`, `fullname`, `company_name`, `phone_number`, `email`, `resume_id`, `datetime`) VALUES
(8,	'Нурлан Сабуров',	'ЧБД',	'89233341635',	'zloileshii@gmail.com',	5,	1598168956),
(7,	'Валдай Владленович Попиков',	'Махачкалинские авиалинии',	'89233341635',	'zloileshii@gmail.com',	4,	1598164902);

DROP TABLE IF EXISTS `resumes`;
CREATE TABLE `resumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` text NOT NULL COMMENT 'Фамилия, имя, отчество',
  `features` text NOT NULL COMMENT 'Характерные черты',
  `about` text NOT NULL COMMENT 'Описание',
  `datetime` int(11) NOT NULL COMMENT 'Дата добавления резюме',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `resumes` (`id`, `fio`, `features`, `about`, `datetime`) VALUES
(1,	'Граблин Тяпка Лопатович',	'Крепкий парень',	'Нормальный мужик-инструмент',	1597660206),
(4,	'Армагадян Шаурма Леонидович',	'Маэстро укропоплетения.',	'Ловкие руки',	1598002064),
(5,	'Брюс Уиллис',	'Бью жену и всё норм',	'Крепкий орешек',	1598002114);

-- 2020-08-23 08:04:27
