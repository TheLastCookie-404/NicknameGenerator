-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2024 г., 19:27
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
(5, 'incinerator'),
(9, 'seaker'),
(10, 'sniffer'),
(11, 'player'),
(12, 'knocker'),
(13, 'painter'),
(14, 'walker'),
(15, 'hider'),
(16, 'cooker'),
(18, 'cleaner'),
(19, 'scarer'),
(20, 'rider'),
(21, 'drinker'),
(22, 'caresser'),
(23, 'warmer'),
(24, 'rotator'),
(25, 'picker'),
(26, 'planter'),
(27, 'thinker'),
(28, 'killer'),
(29, 'caretaker'),
(30, 'humiliator');

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
(1, 'bean'),
(2, 'electropea'),
(3, 'candy'),
(4, 'cockroach'),
(5, 'potato'),
(6, 'sweetypants'),
(7, 'sausage'),
(8, 'gippo'),
(9, 'amogus'),
(10, 'anonymous'),
(11, 'grenade'),
(12, 'catgirl'),
(13, 'ghost'),
(14, 'grainy'),
(15, 'burger'),
(16, 'shaurma'),
(17, 'crocodile'),
(18, 'dust'),
(19, 'banana'),
(20, 'rick'),
(21, 'drunk'),
(22, 'tomato'),
(23, 'corn'),
(24, 'dogboy');

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `mysubjects`
--
ALTER TABLE `mysubjects`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
