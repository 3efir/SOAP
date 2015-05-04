-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 04 2015 г., 21:21
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `auto_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
`id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `capacity` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `speed` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `brand_id`, `model`, `photo`, `year`, `capacity`, `color`, `speed`, `price`) VALUES
(1, 1, 'X6', '/~user8/auto_shop/server/images/X6.jpg', 2011, 500, 'black', 280, 63500),
(2, 1, '730', '/~user8/auto_shop/server/images/730.jpg', 2010, 500, 'black', 300, 51500),
(3, 1, 'X5', ' /~user8/auto_shop/server/images/X5.jpg', 2000, 300, 'grey', 250, 13999),
(4, 1, 'X6', '/~user8/auto_shop/server/images/X6.jpg', 2010, 400, 'white', 280, 53000),
(5, 1, '530', '/~user8/auto_shop/server/images/530.jpg', 2003, 280, 'black', 320, 13800);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'BMW');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `idCar` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `pay_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`idCar`, `first_name`, `last_name`, `pay_type`) VALUES
(1, 'test', 'me', 'credit'),
(1, 'test', 'me', 'credit'),
(1, 'test', 'me', 'credit'),
(1, 'test', 'me', 'credit'),
(1, 'test', 'me', 'credit'),
(1, 'Ñ„Ñ‹Ð²Ñ„Ð²', 'Ñ„Ð²Ñ„Ñ‹Ð²Ñ„Ñ‹Ð²Ñ„Ñ‹', 'credit');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
