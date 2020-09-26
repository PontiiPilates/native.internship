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


DROP TABLE IF EXISTS `companys`;
CREATE TABLE `companys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT 'Название компании',
  `logotip` text NOT NULL COMMENT 'Имя файла логотипа компании',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `directions`;
CREATE TABLE `directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program` text NOT NULL,
  `direction` text NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `practices`;
CREATE TABLE `practices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT 'Название практики',
  `features` text NOT NULL COMMENT 'Характерные черты',
  `description` text NOT NULL COMMENT 'Описание',
  `company_id` int(11) NOT NULL COMMENT 'Идентификатор компании',
  `category_id` int(11) NOT NULL COMMENT 'Идентификатор категории',
  `timestamp` int(11) NOT NULL COMMENT 'Временная метка добавления записи',
  `fio` text NOT NULL,
  `position` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `responds_employers`;
CREATE TABLE `responds_employers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `company_name` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `resume_id` int(11) NOT NULL,
  `datetime` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `resumes`;
CREATE TABLE `resumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` text NOT NULL COMMENT 'Фамилия, имя, отчество',
  `features` text NOT NULL COMMENT 'Характерные черты',
  `about` text NOT NULL COMMENT 'Описание',
  `direction` text NOT NULL,
  `datetime` int(11) NOT NULL COMMENT 'Дата добавления резюме',
  `profile` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `resumes` (`id`, `fio`, `features`, `about`, `direction`, `datetime`, `profile`, `phone`, `email`) VALUES
(1,	'Граблин Тяпка Лопатович',	'suspended',	'Нормальный мужик-инструмент. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste in quae dolorum at, inventore saepe suscipit facilis recusandae nobis dignissimos cum. Nemo veniam fuga beatae minus sit dolorum recusandae praesentium?',	'Закапыватель ископаемых обратно в недра',	1597660206,	'',	'',	''),
(4,	'Армагадян Шаурма Леонидович',	'suspended',	'Ловкие руки. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste in quae dolorum at, inventore saepe suscipit facilis recusandae nobis dignissimos cum. Nemo veniam fuga beatae minus sit dolorum recusandae praesentium?',	'Основы подрывного дела',	1598002064,	'',	'',	''),
(5,	'Брюс Уиллис',	'suspended',	'Крепкий орешек. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste in quae dolorum at, inventore saepe suscipit facilis recusandae nobis dignissimos cum. Nemo veniam fuga beatae minus sit dolorum recusandae praesentium?',	'Печатальщик программ с ошибкой в слове',	1598002114,	'',	'',	''),
(6,	'Альфрод Брутенберг Третий',	'suspended',	'Больше всего в работе мне нравится прибухнуть и прибухнуть',	'Псалтырное дело',	1599620924,	'',	'',	''),
(7,	'Зульфия Игоревна Чурчхелловна',	'suspended',	'Сплю головой на север',	'Молекулярный баристо',	1599621649,	'',	'',	''),
(9,	'Сильвестр Сталоне',	'suspended',	'Прошел вьетнам',	'Основы подрывного дела',	1599712635,	'',	'',	''),
(10,	'Майк Тайсон',	'suspended',	'Обожаю айрпотс',	'Основы подрывного дела',	1599713412,	'',	'',	''),
(11,	'Аристарх Иосифович',	'suspended',	'фывфыв фыв фывф вф фыв',	'Фундаментальная математика',	1600404569,	'',	'',	''),
(12,	'Латонова Лилия Игоревна',	'suspended',	'Математик',	'Финансы и кредит: банковское дело',	1600658823,	'',	'',	'');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL COMMENT 'Имя пользователя',
  `password` text NOT NULL COMMENT 'Пароль',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2020-09-26 10:51:25
