-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 08 2023 г., 23:55
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(5, 'everfdnvef@gmail.com', '$2y$10$CVxeyXWRDBcJNS3PBf00UOTE1QPWzmh9qB5Sp/1yK3pqO51S4XbbG'),
(6, 'rbr@gmail.com', '$2y$10$TnyA9CcDqss.gMaewoO7nOW4vjY8L4qgUckuFdD/WhG3WgCmlBNGO'),
(7, 'refebr@gmail.com', '$2y$10$qnxvgBss4VdnvHOdIMuKwORSXo183osDHWxcFbt9kc8ZTeEjcg2qS'),
(8, 'ref@gmail.com', '$2y$10$Dnxjw1zOvwbHkHWDsxjoZe9x4OgEuWGcFQD6Mw.FxmGeP0bvofPxe'),
(9, 'gggg@mail.com', '$2y$10$8Z9uLCNXrkDY2ax1GtqjfepTi4156nPgoQmKaEstm7ukRjbBd3Qlq'),
(10, 'qwerty@gmail.com', '$2y$10$Wc1W4kKLyZp2qYg8kNMmqOy5cq2XIMnXxlbRjjq7.2n9VWFFxYnGS'),
(11, 'anvyyy1@gmail.com', '$2y$10$jey2DPqFn8YSMe3gb83Ds.BFRB6Yxpk3u6lIweup71rKJaywz7naG'),
(12, 'anvyyy1@gmail.com', '$2y$10$Fg4ZSjRKBpb9e0MUQmRR1.vtHedZM4tJr3fndnLEKD5jS4n7yH9u.'),
(13, 'dima250200@mail.ru', '$2y$10$2l6CR/kavu4XlOXLDDJzLut4t9p1kOo0cYKLIS9IQi/YgWqc2p5Te');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
