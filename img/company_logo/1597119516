-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 09 2020 г., 13:06
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internship`
--

-- --------------------------------------------------------

--
-- Структура таблицы `practices`
--

CREATE TABLE `practices` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL COMMENT 'Название практики',
  `features` text NOT NULL COMMENT 'Характерные черты',
  `description` text NOT NULL COMMENT 'Описание',
  `company_id` int(11) NOT NULL COMMENT 'Идентификатор компании',
  `datetime` text NOT NULL COMMENT 'Временная метка добавления записи'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `practices`
--

INSERT INTO `practices` (`id`, `name`, `features`, `description`, `company_id`, `datetime`) VALUES
(6, 'Могильщик пирогов', 'Не обязательно быть молодым', 'Бабушка в шоке', 10, '1596795633'),
(124, 'Мочесобиралкин', 'Интересно не брезгливым, Опасно для психики', 'Уборка за домашними животными', 10, '1596965574');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `practices`
--
ALTER TABLE `practices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `practices`
--
ALTER TABLE `practices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
