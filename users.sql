-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2015 г., 13:45
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `categorias`
--

INSERT INTO `categorias` (`id`, `name`, `description`) VALUES
(1, 'Blues', 'Блюз'),
(2, 'Juzz', 'Джаз'),
(3, 'Pop-music', 'Поп-музыка'),
(4, 'ROCK MUSIC', 'Рок'),
(5, 'Hip-hop', 'Хип-хоп');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` tinytext NOT NULL,
  `text` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `userss`
--

CREATE TABLE IF NOT EXISTS `userss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `userss`
--

INSERT INTO `userss` (`id`, `login`, `password`, `email`, `creat_at`, `update_at`) VALUES
(1, 'kat', '123456', 'kat@mail.ru', '2015-05-07 05:11:03', '2015-05-02 21:00:00'),
(2, 'dan', '465789', 'dan145@yandex.ua', '2015-04-13 08:18:19', '0000-00-00 00:00:00'),
(5, 'User123', 'user132', 'user@rambler.ru', '2015-06-10 11:37:00', '2015-06-10 11:37:00'),
(8, 'dasha', '9876', 'dasha43@mail.ru', '2015-06-10 12:20:04', '2015-06-10 12:20:04'),
(9, 'Nikita', 'ula456', 'nikita@mail.ru', '2015-06-10 12:21:14', '2015-06-10 12:21:14'),
(11, 'roma', '1230', 'roma@mail.ru', '2015-06-10 12:27:01', '2015-06-10 12:27:01'),
(12, 'Lina', '789', 'lina@rambler.ru', '2015-06-10 12:29:38', '2015-06-10 12:29:38'),
(13, 'Zina', 'as123', 'zina@mail.ru', '2015-06-11 10:55:13', '2015-06-11 10:55:13'),
(14, 'diana', '456321', 'diana567@rambler.ru', '2015-06-11 11:06:20', '2015-06-11 11:06:20'),
(17, 'Henrich', 'ggg789', 'henrich@yahoo.com', '2015-06-11 14:14:42', '2015-06-11 14:14:42'),
(18, 'JJJ', '4521', 'jjj@yandex.ua', '2015-06-11 14:31:34', '2015-06-11 14:31:34'),
(19, 'Petrov', '999999', 'petrov789@rambler.ru', '2015-06-11 14:33:56', '2015-06-11 14:33:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
