-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2023 г., 02:29
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `powerful`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int UNSIGNED NOT NULL,
  `brand` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2730 DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `brand`) VALUES
(1, 'Prime Kraft'),
(2, 'PrimeBar'),
(3, 'MyProtein'),
(4, 'BIGSNT');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Новинки'),
(2, 'Протеин'),
(3, 'Гейнер'),
(4, 'Креатин'),
(5, 'Аминокислоты');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `dt_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AVG_ROW_LENGTH=2730 DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `dt_added`) VALUES
(31, 'Иван', 'vcupsev@gmail.com', '89048516123', '2023-04-24 14:48:30'),
(32, 'Михаил', 'vcupsev@gmail.com', '89048516123', '2023-04-24 14:54:35'),
(33, 'Артем', 'vcupsev@gmail.com', '89048516123', '2023-04-24 15:09:23');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int UNSIGNED NOT NULL,
  `good` varchar(255) NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `brand_id` int UNSIGNED NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `rating` int UNSIGNED NOT NULL DEFAULT '0',
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=1170 DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `good`, `category_id`, `brand_id`, `price`, `rating`, `photo`) VALUES
(2, 'Сывороточный протеин WHEY TIRAMISU (тирамису), 900 гр', 2, 1, 2200, 9, 'protein2.png'),
(4, 'Creatine Monohydrate со вкусом Pineapple (ананас), банка 200г', 1, 1, 1089, 7, 'newCreatine.png'),
(5, 'Creatine Monohydrate со вкусом Сitrus mix (цитрусовый микс), банка 200 гр', 1, 1, 1089, 8, 'newCreatine2.png'),
(6, 'Предтренировочный комплекс PRE-WORKOUT BOOST со вкусом «Кола», 300 гр', 1, 1, 1200, 9, 'newPREworkout.png'),
(7, 'ISO MASS GAINER со вкусом Ваниль (банка), 1500 гр', 3, 1, 2970, 8, 'gainer.png'),
(8, 'Гейнер BIG Gainer 1500 гр., Banana Dessert (банановый десерт)', 3, 4, 1600, 10, 'gainer2.png'),
(10, 'Гейнер BIG Gainer 1500 гр., Cookies cream (печенье с кремом)\r\n', 3, 4, 1600, 9, 'gainer3.png'),
(11, 'Гейнер ISO MASS GAINER со вкусом Банан (банка), 3000 гр', 3, 1, 4890, 5, 'gainer4.png'),
(12, 'Creatine Monohydrate со вкусом Pineapple (ананас), банка 200г', 4, 1, 1089, 9, 'newCreatine.png'),
(13, 'Creatine Monohydrate со вкусом Сitrus mix (цитрусовый микс),', 4, 1, 1089, 6, 'newCreatine2.png'),
(14, 'Креатин Big Creatine 150 гр., Bubble Gum (жевательная резинка)', 4, 4, 724, 9, 'CREATINE.png'),
(15, 'Креатин моногидрат (250 таблеток)', 4, 3, 2947, 4, 'CREATINE2.png'),
(16, 'L-Carnitine 3000 CHERRY (со вкусом вишни), 500 мл', 5, 2, 1400, 4, 'amin.png'),
(17, 'Аминокислота L-глютамин (250 таблеток)', 5, 3, 1786, 5, 'amin2.png'),
(18, 'L-Carnitine 3000 MANGO (со вкусом манго), 500 мл', 5, 2, 1400, 6, 'amin3.png'),
(19, 'Аминокислоты BCAA 2:1:1 COLA (кола), 150 гр', 5, 1, 779, 9, 'amin 5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `client_id` int UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dt_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AVG_ROW_LENGTH=2730 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`) VALUES
(2, 'Иван', 'Чупшев', 'vcupsev@gmail.com', '1111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_goods_brands_id` (`brand_id`),
  ADD KEY `FK_goods_categories_id` (`category_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `FK_goods_brands_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_goods_categories_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
