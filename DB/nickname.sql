-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2024 г., 20:53
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nickname`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mypredicates`
--

CREATE TABLE `mypredicates` (
  `id` int(15) NOT NULL,
  `predicate` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mypredicates`
--

INSERT INTO `mypredicates` (`id`, `predicate`) VALUES
(1, 'smasher'),
(2, 'eater'),
(3, 'destroyer'),
(4, 'licker'),
(5, 'incinerator');

-- --------------------------------------------------------

--
-- Структура таблицы `mysubjects`
--

CREATE TABLE `mysubjects` (
  `id` int(15) NOT NULL,
  `subject` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mysubjects`
--

INSERT INTO `mysubjects` (`id`, `subject`) VALUES
(1, 'potato'),
(2, 'cockroach'),
(3, 'candy'),
(4, 'bean'),
(5, 'electropea');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mypredicates`
--
ALTER TABLE `mypredicates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mysubjects`
--
ALTER TABLE `mysubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mypredicates`
--
ALTER TABLE `mypredicates`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mysubjects`
--
ALTER TABLE `mysubjects`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
