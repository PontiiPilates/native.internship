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
(1,	'Граблин Тяпка Лопатович',	'Крепкий парень',	'Нормальный мужик-инструмент',	1597660206);

-- 2020-08-17 10:57:27
