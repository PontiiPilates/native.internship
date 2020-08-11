-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
(4,	'Сбербанк',	'1597153271.jpg');

DROP TABLE IF EXISTS `practices`;
CREATE TABLE `practices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT 'Название практики',
  `features` text NOT NULL COMMENT 'Характерные черты',
  `description` text NOT NULL COMMENT 'Описание',
  `company_id` int(11) NOT NULL COMMENT 'Идентификатор компании',
  `timestamp` int(11) NOT NULL COMMENT 'Временная метка добавления записи',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `practices` (`id`, `title`, `features`, `description`, `company_id`, `timestamp`) VALUES
(7,	'Парафинщик',	'Опасно для жизни',	'На автомойку',	10,	1597029261),
(8,	'Маляр',	'Опасно для жизни, Интересно студенту',	'На аванпост',	10,	1597029319);

-- 2020-08-11 13:48:57
