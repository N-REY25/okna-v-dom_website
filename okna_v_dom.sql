-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 28 2022 г., 10:46
-- Версия сервера: 5.7.29-log
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `okna_v_dom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `rubrika` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `rubrika`, `photo`, `name`, `text`) VALUES
(1, 'brusbox', 'brus-60.jpg', 'BRUSBOX 60 AERO', '• конструктивная ширина — 60 мм</br>\r\n• количество камер — 3 шт.</br>\r\n• толщина лицевых стенок — 2.5 мм</br>\r\n• нахлест уплотнений – 8 мм</br>\r\n• максимальная толщина заполнения — 32 мм</br>\r\n• сопротивление теплопередаче — 0,76 м2С/Вт (без армирования)'),
(2, 'brusbox', 'brus-70-1.jpg', 'BRUSBOX 70 SUPER AERO', 'Использование профиля BRUSBOX 70 SUPER AERO – идеальное решение для тех, кто делает выбор, основываясь на рациональном подходе, позволяющем достойно оценить оптимальное сочетание высоких показателей энергоэффективности окон и их доступной цены.</br>\r\n• Конструктивная ширина — 70 мм.</br>\r\n• Количество камер — 5 шт.</br>\r\n• Двухконтурное уплотнение</br>\r\n• Толщина лицевых стенок — 2.5 мм</br>\r\n• Нахлест уплотнений – 8 мм</br>\r\n• Максимальная толщины заполнения — 40 мм</br>\r\n• Сопротивление теплоп 0,82 м2*С/Вт');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
