-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 26 2019 г., 19:07
-- Версия сервера: 5.7.15
-- Версия PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `FIO` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица авторов библиотеки';

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `FIO`, `count`) VALUES
(1, 'Пушкин А.С.', 54),
(2, 'Лермонтов Ю.Л.', 46),
(3, 'Кафка Ф.', 1),
(4, 'Толстой Л.Н.', 5),
(5, 'Есенин С.А.', 3),
(6, 'Гоголь Н.В.', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Таблица книг имеющихся в библиотеке';

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `author`) VALUES
(1, 'Капитанская дочка', 549, 'Пушкин А.С.'),
(2, 'Пиковая дама', 430, 'Пушкин А.С.'),
(3, 'Герой нашего времени', 430, 'Лермонтов М.Ю.'),
(4, 'Медный всадник', 390, 'Пушкин А.С.'),
(5, 'Демон', 160, 'Лермонтов М.Ю.'),
(6, 'Бородино', 210, 'Лермонтов М.Ю.'),
(7, 'Замок', 169, 'Кафка Ф.'),
(8, 'Замок', 169, 'Кафка Ф.'),
(9, 'Замок', 169, 'Кафка Ф.'),
(10, 'Война и мир', 500, 'Толстой Л.Н.'),
(11, 'Письмо к жинщине', 359, 'Есенин С.А.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
