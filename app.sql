-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2021 г., 21:00
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `index_homes`
--

CREATE TABLE `index_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `index_name` text COLLATE utf8mb4_unicode_ci,
  `index_image` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_1` int DEFAULT NULL,
  `index_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_2` int DEFAULT NULL,
  `index_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_3` int DEFAULT NULL,
  `index_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_4` int DEFAULT NULL,
  `index_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_5` int DEFAULT NULL,
  `index_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_6` int DEFAULT NULL,
  `index_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_7` int DEFAULT NULL,
  `index_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_8` int DEFAULT NULL,
  `index_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_9` int DEFAULT NULL,
  `index_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_gr_10` int DEFAULT NULL,
  `index_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `index_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `index_description_1` text COLLATE utf8mb4_unicode_ci,
  `index_description_2` text COLLATE utf8mb4_unicode_ci,
  `index_description_3` text COLLATE utf8mb4_unicode_ci,
  `index_description_4` text COLLATE utf8mb4_unicode_ci,
  `index_description_5` text COLLATE utf8mb4_unicode_ci,
  `index_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `index_homes`
--

INSERT INTO `index_homes` (`id`, `index_name`, `index_image`, `index_ingredients_1`, `index_ingredients_gr_1`, `index_ingredients_value_1`, `index_ingredients_2`, `index_ingredients_gr_2`, `index_ingredients_value_2`, `index_ingredients_3`, `index_ingredients_gr_3`, `index_ingredients_value_3`, `index_ingredients_4`, `index_ingredients_gr_4`, `index_ingredients_value_4`, `index_ingredients_5`, `index_ingredients_gr_5`, `index_ingredients_value_5`, `index_ingredients_6`, `index_ingredients_gr_6`, `index_ingredients_value_6`, `index_ingredients_7`, `index_ingredients_gr_7`, `index_ingredients_value_7`, `index_ingredients_8`, `index_ingredients_gr_8`, `index_ingredients_value_8`, `index_ingredients_9`, `index_ingredients_gr_9`, `index_ingredients_value_9`, `index_ingredients_10`, `index_ingredients_gr_10`, `index_ingredients_value_10`, `index_ingredients_taste_salt`, `index_ingredients_taste_pepper`, `index_description_1`, `index_description_2`, `index_description_3`, `index_description_4`, `index_description_5`, `index_additionally`, `created_at`, `updated_at`) VALUES
(1, 'КРЕМ СУП ИЗ ЦУКИНИ С ЛУКОМ ПОРЕЙ И ТАР-ТАРОМ ИЗ ГОВЯДИНЫ', '/storage/cream_soup.jpg', 'Цукини', 400, 'гр', 'Лук порей', 100, 'гр', 'Чеснок', 1, 'зубчик', 'Вода', 1, 'л', 'Растительное масло', 2, 'ст.ложки', 'Соль', NULL, 'по вкусу', 'Перец', NULL, 'по вкусу', 'Сливки 20%', 100, 'гр', 'Тар-тар (говядина)', 100, 'гр', NULL, NULL, NULL, NULL, NULL, 'В кастрюлю добавляем очищенный лук и чеснок , обжаривая до золотистого цвета.  После чего добавляем мелко нарезанный цукини пемешиваем и прогреваем до мягкого состояния.', 'Заливаем горячей водой все содержимое , солим и перчим по вкусу,  варим до мягкого состояния овощей, так что-бы цукини при нажатии превращалось в пюре.', 'Добавляем сливки и погружным блендером суп измельчаем  до однородной массы.', 'В готовый суп выкладываем тар-тар.', NULL, 'Тар-тар из говядины можно приготовить по своему рецепту или воспользоваться нашим. Рекомендуем подовать с хрустящеми гренками и сливочным сыром.', NULL, NULL),
(2, 'ЛОСОСЬ КОПЧЕНЫЙ НА ЗЕЛЕНОМ ЧАЕ', '/storage/Salmon.jpg', 'Филе лосося', 170, 'гр', 'Сыр \"Джугас\"', 10, 'гр', 'Масло трюфельное', 1, 'ч.ложка', 'Авокадо', 20, 'гр', 'Картофельное пюре', 150, 'гр', 'Чай зеленый (листовой)', 5, 'гр', 'Соль', NULL, 'по вкусу', 'Сахар', 1, 'ст.ложка', 'Лимон (долька)', 20, 'гр', NULL, NULL, NULL, NULL, NULL, 'Филе рыбы натираем солью, сахаром и смазываем маслом.', 'Из фольги делаем конверт, внутри которого помещаем сахар и листья чая. В верхнем листе ножом делаем небольшие отверстия. ', 'На разогретую сухую сковороду выкладываем конверт из фольги (коптильни), поверх рыбу и печем под крышкой около 7-10 минут. По истечению времени аккуратно снимаем лопаткой филе с кожи, выкладываем сверху слайсы авокадо.', 'Пюре посыпаем тертым пармезаном, добавляем немного трюфельного масла.', NULL, 'Можно полить соком лайма на рыбу.', NULL, NULL),
(3, 'МУСС ИЗ ТИГРОВЫХ КРЕВЕТОК И ФОРЕЛИ', '/storage/Mousse.jpg', 'Лосось', 50, 'гр', 'Лосось копченый', 30, 'гр', 'Креветки', 30, 'гр', 'Сливки', 40, 'гр', 'Соль', NULL, 'По вкусу', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Обжариваем вкуснейшие креветки и измельчапем их.', 'Измельчаем лосось двух видов.', 'Смешиваем этот тандем со сливками, добавляем соль.', 'Пробиваем блендером до однородной массы.', NULL, 'Прекрасным дополнением к блюду будет нарезанный соломкой салат состоящий из манго, болгарского перца, красного лука, авокадо и салатного листа. Заправить эту смесь можно оливковым маслом, солью и перцем. Приготовленый мус надо употреблять намазаным на ожаренный хлеб натертый чесночком.', NULL, NULL),
(4, 'РУЛЬКА В СОУСЕ BBQ', '/storage/shank.jpg', 'Свиная рулька', 1500, 'гр', 'Лавровый лист', 1, 'шт', 'Соль', 1, 'ст.ложка', 'Перец черный (горошек)', 6, 'шт', 'Чеснок', NULL, 'пол зубчика', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Чистую рульку провариваем со специями до готовности на маленьком огне около трех часов.', 'Готовую рульку вынимаем из бульона, обсушиваем, делаем надрезы и смазываем соусом BBQ.', 'Запекаем до образования румяной корочки.', 'После запекания еще раз смазываем соусом BBQ.', NULL, NULL, NULL, NULL),
(5, 'ТАР-ТАР ИЗ ГОВЯДИНЫ С  ТРЮФЕЛЕМ ', '/storage/Tar-Tar.jpg', 'Говядина (вырезка)', 80, 'гр', 'Корнишоны', 2, 'шт', 'Горчица Французкая', 1, 'ч.ложка', 'Масло Трюфельное', 1, 'ч.ложка', 'Каперсы', 4, 'шт', 'Соль', NULL, 'По вкусу', ' Перец', NULL, 'По вкусу', 'Яйцо перепелиное (желток)', 2, 'шт', 'Лук Красный', 10, 'гр', 'Сыр козий', 5, 'гр', NULL, NULL, 'Говядину промыть , зачистить и подморозить в морозильной камере около часа', 'Подмороженную говядину и овощи нарезаем мелким кубиком.', 'Сначала в говядину  добавляем соль,  французскую горчицу, перемешиваем. После добавляем овощи и перемешиваем. В конце заправляем трюфельным маслом и снова перемешиваем.', 'Желток выкладываем на тар-тар присыпав слайсами козьего сыра.', NULL, 'Хлеб \"Чиабатта\", обжаренный на сковороде с добавлением сливочного сыра и подсолнечного масла до золотистой корочки, будет прекрасным дополнением к нашему блюду...', NULL, NULL),
(6, 'ШТРУДЕЛЬ С ПЕЧЕНЫМИ ЯБЛОКАМИ И ГРУШЕЙ', '/storage/strudel.jpg', '', 40, 'гр', 'Куриное яйцо (желток)', 2, 'шт', 'Яблоко-груша ', 50, 'гр', 'Мороженное пломбир', 50, 'гр', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Равномерно распределяем ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ЧИЗКЕЙК', '/storage/Cheesecake.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_chefs`
--

CREATE TABLE `list_chefs` (
  `id` bigint UNSIGNED NOT NULL,
  `image_chef` text COLLATE utf8mb4_unicode_ci,
  `name_chef` text COLLATE utf8mb4_unicode_ci,
  `chef_description_1` text COLLATE utf8mb4_unicode_ci,
  `chef_description_2` text COLLATE utf8mb4_unicode_ci,
  `chef_description_3` text COLLATE utf8mb4_unicode_ci,
  `chef_description_4` text COLLATE utf8mb4_unicode_ci,
  `chef_description_5` text COLLATE utf8mb4_unicode_ci,
  `name_recipe` text COLLATE utf8mb4_unicode_ci,
  `image_recipe` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_1` int DEFAULT NULL,
  `chef_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_2` int DEFAULT NULL,
  `chef_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_3` int DEFAULT NULL,
  `chef_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_4` int DEFAULT NULL,
  `chef_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_5` int DEFAULT NULL,
  `chef_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_6` int DEFAULT NULL,
  `chef_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_7` int DEFAULT NULL,
  `chef_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_8` int DEFAULT NULL,
  `chef_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_9` int DEFAULT NULL,
  `chef_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_gr_10` int DEFAULT NULL,
  `chef_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `chef_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `chef_recipe_description_1` text COLLATE utf8mb4_unicode_ci,
  `chef_recipe_description_2` text COLLATE utf8mb4_unicode_ci,
  `chef_recipe_description_3` text COLLATE utf8mb4_unicode_ci,
  `chef_recipe_description_4` text COLLATE utf8mb4_unicode_ci,
  `chef_recipe_description_5` text COLLATE utf8mb4_unicode_ci,
  `chef_recipe_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_chefs`
--

INSERT INTO `list_chefs` (`id`, `image_chef`, `name_chef`, `chef_description_1`, `chef_description_2`, `chef_description_3`, `chef_description_4`, `chef_description_5`, `name_recipe`, `image_recipe`, `chef_ingredients_1`, `chef_ingredients_gr_1`, `chef_ingredients_value_1`, `chef_ingredients_2`, `chef_ingredients_gr_2`, `chef_ingredients_value_2`, `chef_ingredients_3`, `chef_ingredients_gr_3`, `chef_ingredients_value_3`, `chef_ingredients_4`, `chef_ingredients_gr_4`, `chef_ingredients_value_4`, `chef_ingredients_5`, `chef_ingredients_gr_5`, `chef_ingredients_value_5`, `chef_ingredients_6`, `chef_ingredients_gr_6`, `chef_ingredients_value_6`, `chef_ingredients_7`, `chef_ingredients_gr_7`, `chef_ingredients_value_7`, `chef_ingredients_8`, `chef_ingredients_gr_8`, `chef_ingredients_value_8`, `chef_ingredients_9`, `chef_ingredients_gr_9`, `chef_ingredients_value_9`, `chef_ingredients_10`, `chef_ingredients_gr_10`, `chef_ingredients_value_10`, `chef_ingredients_taste_salt`, `chef_ingredients_taste_pepper`, `chef_recipe_description_1`, `chef_recipe_description_2`, `chef_recipe_description_3`, `chef_recipe_description_4`, `chef_recipe_description_5`, `chef_recipe_additionally`, `created_at`, `updated_at`) VALUES
(1, '/storage/gordon.jpg', 'ГОРДОН РАМЗИ', 'ШЕФ - ПОВАР', 'СРЕДЕЗЕМНОМОРСКАЯ', ' Его рестораны удостоены 16 звёзд Мишлен.', 'Его фирменный ресторан Restaurant Gordon Ramsay, находящийся в Лондоне, имеет три звезды Мишлен.', 'Популярный ведущий британских телешоу The F-Word, Ramsay’s Kitchen Nightmares и Адская кухня, а также их американских теле-близнецов.', 'КАРЕ ЕГНЕНКА', NULL, 'Каре егненка', 2, 'шт (больших)', 'Сухари', 100, 'гр', 'Пармезан (тертый)', 7, 'ст.ложек', 'Петрушка ', 1, 'веточка', 'Тимьян', 1, 'веточка', 'Кориандер', 1, 'веточка', 'Розмарин', 1, 'веточка', 'Горчица (дюжонская)', 2, 'ст.ложки', 'Соль', NULL, 'по вкусу', 'Перец', NULL, 'по вкусу', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_cream_soups`
--

CREATE TABLE `list_cream_soups` (
  `id` bigint UNSIGNED NOT NULL,
  `cream_soups_name` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_image` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_1` int DEFAULT NULL,
  `cream_soups_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_2` int DEFAULT NULL,
  `cream_soups_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_3` int DEFAULT NULL,
  `cream_soups_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_4` int DEFAULT NULL,
  `cream_soups_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_5` int DEFAULT NULL,
  `cream_soups_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_6` int DEFAULT NULL,
  `cream_soups_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_7` int DEFAULT NULL,
  `cream_soups_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_8` int DEFAULT NULL,
  `cream_soups_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_9` int DEFAULT NULL,
  `cream_soups_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `cream_soupsingredients_10` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_gr_10` int DEFAULT NULL,
  `cream_soups_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_description_1` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_description_2` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_description_3` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_description_4` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_description_5` text COLLATE utf8mb4_unicode_ci,
  `cream_soups_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_cream_soups`
--

INSERT INTO `list_cream_soups` (`id`, `cream_soups_name`, `cream_soups_image`, `cream_soups_ingredients_1`, `cream_soups_ingredients_gr_1`, `cream_soups_ingredients_value_1`, `cream_soups_ingredients_2`, `cream_soups_ingredients_gr_2`, `cream_soups_ingredients_value_2`, `cream_soups_ingredients_3`, `cream_soups_ingredients_gr_3`, `cream_soups_ingredients_value_3`, `cream_soups_ingredients_4`, `cream_soups_ingredients_gr_4`, `cream_soups_ingredients_value_4`, `cream_soups_ingredients_5`, `cream_soups_ingredients_gr_5`, `cream_soups_ingredients_value_5`, `cream_soups_ingredients_6`, `cream_soups_ingredients_gr_6`, `cream_soups_ingredients_value_6`, `cream_soups_ingredients_7`, `cream_soups_ingredients_gr_7`, `cream_soups_ingredients_value_7`, `cream_soups_ingredients_8`, `cream_soups_ingredients_gr_8`, `cream_soups_ingredients_value_8`, `cream_soups_ingredients_9`, `cream_soups_ingredients_gr_9`, `cream_soups_ingredients_value_9`, `cream_soupsingredients_10`, `cream_soups_ingredients_gr_10`, `cream_soups_ingredients_value_10`, `cream_soups_ingredients_taste_salt`, `cream_soups_ingredients_taste_pepper`, `cream_soups_description_1`, `cream_soups_description_2`, `cream_soups_description_3`, `cream_soups_description_4`, `cream_soups_description_5`, `cream_soups_additionally`, `created_at`, `updated_at`) VALUES
(1, 'СУП ИЗ ЦУКИНИ С ТАР-ТАРОМ ИЗ ГОВЯДИНЫ', '/storage/cream_soup.jpg', 'Цукини', 400, 'гр', 'Лук порей', 100, 'гр', 'Чеснок', 1, 'зубчик', 'Вода', 1, 'л', 'Растительное масло', 2, 'ст.ложки', 'Соль', NULL, 'по вкусу', 'Перец', NULL, 'по вкусу', 'Сливки 20%', 100, 'гр', 'Тар-тар (говядина)', 100, 'гр', NULL, NULL, NULL, NULL, NULL, 'В кастрюлю добавляем очищенный лук и чеснок , обжаривая до золотистого цвета.  После чего добавляем мелко нарезанный цукини пемешиваем и прогреваем до мягкого состояния.', 'Заливаем горячей водой все содержимое , солим и перчим по вкусу,  варим до мягкого состояния овощей, так что-бы цукини при нажатии превращалось в пюре.', 'Добавляем сливки и погружным блендером суп измельчаем  до однородной массы.', 'В готовый суп выкладываем тар-тар.', NULL, 'Тар-тар из говядины можно приготовить по своему рецепту или воспользоваться нашим. Рекомендуем подовать с хрустящеми гренками и сливочным сыром.', NULL, NULL),
(2, 'КРЕМ СУП ИЗ БЕЛЫХ ГРИБОВ', '/storage/sup_mashrooms.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ТОМ ЯМ', '/storage/soup_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'БОРЩ', '/storage/soupmeat_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'СЛИВОЧНО СЫРНЫЙ С ЛОСОСЕМ', '/storage/fishsoup_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_desserts`
--

CREATE TABLE `list_desserts` (
  `id` bigint UNSIGNED NOT NULL,
  `desserts_name` text COLLATE utf8mb4_unicode_ci,
  `desserts_image` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_1` int DEFAULT NULL,
  `desserts_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_2` int DEFAULT NULL,
  `desserts_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_3` int DEFAULT NULL,
  `desserts_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_4` int DEFAULT NULL,
  `desserts_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_5` int DEFAULT NULL,
  `desserts_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_6` int DEFAULT NULL,
  `desserts_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_7` int DEFAULT NULL,
  `desserts_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_8` int DEFAULT NULL,
  `desserts_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_9` int DEFAULT NULL,
  `desserts_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_gr_10` int DEFAULT NULL,
  `desserts_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `desserts_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `desserts_description_1` text COLLATE utf8mb4_unicode_ci,
  `desserts_description_2` text COLLATE utf8mb4_unicode_ci,
  `desserts_description_3` text COLLATE utf8mb4_unicode_ci,
  `desserts_description_4` text COLLATE utf8mb4_unicode_ci,
  `desserts_description_5` text COLLATE utf8mb4_unicode_ci,
  `desserts_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_desserts`
--

INSERT INTO `list_desserts` (`id`, `desserts_name`, `desserts_image`, `desserts_ingredients_1`, `desserts_ingredients_gr_1`, `desserts_ingredients_value_1`, `desserts_ingredients_2`, `desserts_ingredients_gr_2`, `desserts_ingredients_value_2`, `desserts_ingredients_3`, `desserts_ingredients_gr_3`, `desserts_ingredients_value_3`, `desserts_ingredients_4`, `desserts_ingredients_gr_4`, `desserts_ingredients_value_4`, `desserts_ingredients_5`, `desserts_ingredients_gr_5`, `desserts_ingredients_value_5`, `desserts_ingredients_6`, `desserts_ingredients_gr_6`, `desserts_ingredients_value_6`, `desserts_ingredients_7`, `desserts_ingredients_gr_7`, `desserts_ingredients_value_7`, `desserts_ingredients_8`, `desserts_ingredients_gr_8`, `desserts_ingredients_value_8`, `desserts_ingredients_9`, `desserts_ingredients_gr_9`, `desserts_ingredients_value_9`, `desserts_ingredients_10`, `desserts_ingredients_gr_10`, `desserts_ingredients_value_10`, `desserts_ingredients_taste_salt`, `desserts_ingredients_taste_pepper`, `desserts_description_1`, `desserts_description_2`, `desserts_description_3`, `desserts_description_4`, `desserts_description_5`, `desserts_additionally`, `created_at`, `updated_at`) VALUES
(1, 'ШТРУДЕЛЬ С ПЕЧЕНЫМИ ЯБЛОКАМИ И ГРУШЕЙ', '/storage/strudel.jpg', '', 40, 'гр', 'Куриное яйцо (желток)', 2, 'шт', 'Яблоко-груша ', 50, 'гр', 'Мороженное пломбир', 50, 'гр', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Равномерно распределяем ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ШОКОЛАДНЫЙ БРАУНИ С ВАНИЛЬНЫМ ПЛОМБИРОМ И ВИШНЕЙ', '/storage/brouni.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ЧИЗКЕЙК', '/storage/Cheesecake.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ШТРУДЕЛЬ С ВИШНЕЙ', '/storage/shtrudel_chery.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'СЛАДКИЕ СУШИ С МАНГО И КИВИ', '/storage/sweat_sushi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_exquisites`
--

CREATE TABLE `list_exquisites` (
  `id` bigint UNSIGNED NOT NULL,
  `exquisite_name` text COLLATE utf8mb4_unicode_ci,
  `exquisite_image` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_1` int DEFAULT NULL,
  `exquisite_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_2` int DEFAULT NULL,
  `exquisite_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_3` int DEFAULT NULL,
  `exquisite_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_4` int DEFAULT NULL,
  `exquisite_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_5` int DEFAULT NULL,
  `exquisite_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_6` int DEFAULT NULL,
  `exquisite_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_7` int DEFAULT NULL,
  `exquisite_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_8` int DEFAULT NULL,
  `exquisite_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_9` int DEFAULT NULL,
  `exquisite_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_gr_10` int DEFAULT NULL,
  `exquisite_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `exquisite_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `exquisite_description_1` text COLLATE utf8mb4_unicode_ci,
  `exquisite_description_2` text COLLATE utf8mb4_unicode_ci,
  `exquisite_description_3` text COLLATE utf8mb4_unicode_ci,
  `exquisite_description_4` text COLLATE utf8mb4_unicode_ci,
  `exquisite_description_5` text COLLATE utf8mb4_unicode_ci,
  `exquisite_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_exquisites`
--

INSERT INTO `list_exquisites` (`id`, `exquisite_name`, `exquisite_image`, `exquisite_ingredients_1`, `exquisite_ingredients_gr_1`, `exquisite_ingredients_value_1`, `exquisite_ingredients_2`, `exquisite_ingredients_gr_2`, `exquisite_ingredients_value_2`, `exquisite_ingredients_3`, `exquisite_ingredients_gr_3`, `exquisite_ingredients_value_3`, `exquisite_ingredients_4`, `exquisite_ingredients_gr_4`, `exquisite_ingredients_value_4`, `exquisite_ingredients_5`, `exquisite_ingredients_gr_5`, `exquisite_ingredients_value_5`, `exquisite_ingredients_6`, `exquisite_ingredients_gr_6`, `exquisite_ingredients_value_6`, `exquisite_ingredients_7`, `exquisite_ingredients_gr_7`, `exquisite_ingredients_value_7`, `exquisite_ingredients_8`, `exquisite_ingredients_gr_8`, `exquisite_ingredients_value_8`, `exquisite_ingredients_9`, `exquisite_ingredients_gr_9`, `exquisite_ingredients_value_9`, `exquisite_ingredients_10`, `exquisite_ingredients_gr_10`, `exquisite_ingredients_value_10`, `exquisite_ingredients_taste_salt`, `exquisite_ingredients_taste_pepper`, `exquisite_description_1`, `exquisite_description_2`, `exquisite_description_3`, `exquisite_description_4`, `exquisite_description_5`, `exquisite_additionally`, `created_at`, `updated_at`) VALUES
(1, 'ГОЛУБЫЕ МИДИИ В ПРОВАНСКОМ СТИЛЕ', '/storage/mussels.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'РАКИ', '/storage/Crabs.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ПОКЕ С КРЕВЕТКАМИ И АРАХИСОМ', '/storage/exquisite_3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ФОРЕЛЬ РАДУЖНАЯ С ГРАНОЛОЙ И ОВОЩНЫМ РАТАТУЕМ', '/storage/trout.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'РУЛЬКА', '/storage/ex_4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_fishes`
--

CREATE TABLE `list_fishes` (
  `id` bigint UNSIGNED NOT NULL,
  `fishes_name` text COLLATE utf8mb4_unicode_ci,
  `fishes_image` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_1` int DEFAULT NULL,
  `fishes_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_2` int DEFAULT NULL,
  `fishes_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_3` int DEFAULT NULL,
  `fishes_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_4` int DEFAULT NULL,
  `fishes_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_5` int DEFAULT NULL,
  `fishes_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_6` int DEFAULT NULL,
  `fishes_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_7` int DEFAULT NULL,
  `fishes_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_8` int DEFAULT NULL,
  `fishes_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_9` int DEFAULT NULL,
  `fishes_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_gr_10` int DEFAULT NULL,
  `fishes_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `fishes_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `fishes_description_1` text COLLATE utf8mb4_unicode_ci,
  `fishes_description_2` text COLLATE utf8mb4_unicode_ci,
  `fishes_description_3` text COLLATE utf8mb4_unicode_ci,
  `fishes_description_4` text COLLATE utf8mb4_unicode_ci,
  `fishes_description_5` text COLLATE utf8mb4_unicode_ci,
  `fishes_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_fishes`
--

INSERT INTO `list_fishes` (`id`, `fishes_name`, `fishes_image`, `fishes_ingredients_1`, `fishes_ingredients_gr_1`, `fishes_ingredients_value_1`, `fishes_ingredients_2`, `fishes_ingredients_gr_2`, `fishes_ingredients_value_2`, `fishes_ingredients_3`, `fishes_ingredients_gr_3`, `fishes_ingredients_value_3`, `fishes_ingredients_4`, `fishes_ingredients_gr_4`, `fishes_ingredients_value_4`, `fishes_ingredients_5`, `fishes_ingredients_gr_5`, `fishes_ingredients_value_5`, `fishes_ingredients_6`, `fishes_ingredients_gr_6`, `fishes_ingredients_value_6`, `fishes_ingredients_7`, `fishes_ingredients_gr_7`, `fishes_ingredients_value_7`, `fishes_ingredients_8`, `fishes_ingredients_gr_8`, `fishes_ingredients_value_8`, `fishes_ingredients_9`, `fishes_ingredients_gr_9`, `fishes_ingredients_value_9`, `fishes_ingredients_10`, `fishes_ingredients_gr_10`, `fishes_ingredients_value_10`, `fishes_ingredients_taste_salt`, `fishes_ingredients_taste_pepper`, `fishes_description_1`, `fishes_description_2`, `fishes_description_3`, `fishes_description_4`, `fishes_description_5`, `fishes_additionally`, `created_at`, `updated_at`) VALUES
(1, 'ЛОСОСЬ КОПЧЕНЫЙ НА ЗЕЛЕНОМ ЧАЕ', '/storage/Salmon.jpg', 'Филе лосося', 170, 'гр', 'Сыр \"Джугас\"', 10, 'гр', 'Масло трюфельное', 1, 'ч.ложка', 'Авокадо', 20, 'гр', 'Картофельное пюре', 150, 'гр', 'Чай зеленый (листовой)', 5, 'гр', 'Соль', NULL, 'по вкусу', 'Сахар', 1, 'ст.ложка', 'Лимон (долька)', 20, 'гр', NULL, NULL, NULL, NULL, NULL, 'Филе рыбы натираем солью, сахаром и смазываем маслом.', 'Из фольги делаем конверт, внутри которого помещаем сахар и листья чая. В верхнем листе ножом делаем небольшие отверстия. ', 'На разогретую сухую сковороду выкладываем конверт из фольги (коптильни), поверх рыбу и печем под крышкой около 7-10 минут. По истечению времени аккуратно снимаем лопаткой филе с кожи, выкладываем сверху слайсы авокадо.', 'Пюре посыпаем тертым пармезаном, добавляем немного трюфельного масла.', NULL, 'Можно полить соком лайма на рыбу.', NULL, NULL),
(2, 'ФОРЕЛЬ РАДУЖНАЯ С ГРАНОЛОЙ И ОВОЩНЫМ РАТАТУЕМ', '/storage/trout.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ДРАНИКИ С ЛОСОСЕМ И СЛИВОЧНЫМ СЫРОМ', '/storage/draniki_fish.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ЛОСОСЬ', '/storage/fish_4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ТАР-ТАР ИЗ ЛОСОСЯ', '/storage/snack_4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_meats`
--

CREATE TABLE `list_meats` (
  `id` bigint UNSIGNED NOT NULL,
  `meats_name` text COLLATE utf8mb4_unicode_ci,
  `meats_image` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_1` int DEFAULT NULL,
  `meats_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_2` int DEFAULT NULL,
  `meats_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_3` int DEFAULT NULL,
  `meats_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_4` int DEFAULT NULL,
  `meats_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_5` int DEFAULT NULL,
  `meats_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_6` int DEFAULT NULL,
  `meats_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_7` int DEFAULT NULL,
  `meats_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_8` int DEFAULT NULL,
  `meats_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_9` int DEFAULT NULL,
  `meats_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_gr_10` int DEFAULT NULL,
  `meats_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `meats_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `meats_description_1` text COLLATE utf8mb4_unicode_ci,
  `meats_description_2` text COLLATE utf8mb4_unicode_ci,
  `meats_description_3` text COLLATE utf8mb4_unicode_ci,
  `meats_description_4` text COLLATE utf8mb4_unicode_ci,
  `meats_description_5` text COLLATE utf8mb4_unicode_ci,
  `meats_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_meats`
--

INSERT INTO `list_meats` (`id`, `meats_name`, `meats_image`, `meats_ingredients_1`, `meats_ingredients_gr_1`, `meats_ingredients_value_1`, `meats_ingredients_2`, `meats_ingredients_gr_2`, `meats_ingredients_value_2`, `meats_ingredients_3`, `meats_ingredients_gr_3`, `meats_ingredients_value_3`, `meats_ingredients_4`, `meats_ingredients_gr_4`, `meats_ingredients_value_4`, `meats_ingredients_5`, `meats_ingredients_gr_5`, `meats_ingredients_value_5`, `meats_ingredients_6`, `meats_ingredients_gr_6`, `meats_ingredients_value_6`, `meats_ingredients_7`, `meats_ingredients_gr_7`, `meats_ingredients_value_7`, `meats_ingredients_8`, `meats_ingredients_gr_8`, `meats_ingredients_value_8`, `meats_ingredients_9`, `meats_ingredients_gr_9`, `meats_ingredients_value_9`, `meats_ingredients_10`, `meats_ingredients_gr_10`, `meats_ingredients_value_10`, `meats_ingredients_taste_salt`, `meats_ingredients_taste_pepper`, `meats_description_1`, `meats_description_2`, `meats_description_3`, `meats_description_4`, `meats_description_5`, `meats_additionally`, `created_at`, `updated_at`) VALUES
(1, 'РУЛЬКА В СОУСЕ BBQ', '/storage/shank.jpg', 'Свиная рулька', 1500, 'гр', 'Лавровый лист', 1, 'шт', 'Соль', 1, 'ст.ложка', 'Перец черный (горошек)', 6, 'шт', 'Чеснок', NULL, 'пол зубчика', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Чистую рульку провариваем со специями до готовности на маленьком огне около трех часов.', 'Готовую рульку вынимаем из бульона, обсушиваем, делаем надрезы и смазываем соусом BBQ.', 'Запекаем до образования румяной корочки.', 'После запекания еще раз смазываем соусом BBQ.', NULL, NULL, NULL, NULL),
(2, 'ДРАНИКИ С МЯСОМ', '/storage/draniki_meat.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'BBQ КРЫЛЬЯ', '/storage/chiken_kebab.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'BBQ СВИНИНА                                                                                                                 ', '/storage/pork_kebab.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'BBQ КУРИНОЕ ФИЛЕ', '/storage/chiken_bbq.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ГОРШОЧЕК', '/storage/gorshochek_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ЗРАЗЫ СО СВИНИНОЙ И ГРИБНЫМ СОУСОМ', '/storage/zrazi_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'ЦИПЛЕНОК ТАБАКА С БРУСНИЧНЫМ СОУСОМ', '/storage/meat_7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'СВИННЫЕ МЕДАЛЬОНЫ В БЕКОНЕ С СОУСОМ ДЕМИГЛЯС', '/storage/meat_8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ГОВЯЖИЙ РОСТБИФ С ЯЙЦОМ ПАШОТ', '/storage/meat_10.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'BBQ ГОВЯДИНА', '/storage/bbq_biff.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_pastes`
--

CREATE TABLE `list_pastes` (
  `id` bigint UNSIGNED NOT NULL,
  `pastes_name` text COLLATE utf8mb4_unicode_ci,
  `pastes_image` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_1` int DEFAULT NULL,
  `pastes_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_2` int DEFAULT NULL,
  `pastes_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_3` int DEFAULT NULL,
  `pastes_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_4` int DEFAULT NULL,
  `pastes_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_5` int DEFAULT NULL,
  `pastes_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_6` int DEFAULT NULL,
  `pastes_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_7` int DEFAULT NULL,
  `pastes_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_8` int DEFAULT NULL,
  `pastes_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_9` int DEFAULT NULL,
  `pastes_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_gr_10` int DEFAULT NULL,
  `pastes_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `pastes_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `pastes_description_1` text COLLATE utf8mb4_unicode_ci,
  `pastes_description_2` text COLLATE utf8mb4_unicode_ci,
  `pastes_description_3` text COLLATE utf8mb4_unicode_ci,
  `pastes_description_4` text COLLATE utf8mb4_unicode_ci,
  `pastes_description_5` text COLLATE utf8mb4_unicode_ci,
  `pastes_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_pastes`
--

INSERT INTO `list_pastes` (`id`, `pastes_name`, `pastes_image`, `pastes_ingredients_1`, `pastes_ingredients_gr_1`, `pastes_ingredients_value_1`, `pastes_ingredients_2`, `pastes_ingredients_gr_2`, `pastes_ingredients_value_2`, `pastes_ingredients_3`, `pastes_ingredients_gr_3`, `pastes_ingredients_value_3`, `pastes_ingredients_4`, `pastes_ingredients_gr_4`, `pastes_ingredients_value_4`, `pastes_ingredients_5`, `pastes_ingredients_gr_5`, `pastes_ingredients_value_5`, `pastes_ingredients_6`, `pastes_ingredients_gr_6`, `pastes_ingredients_value_6`, `pastes_ingredients_7`, `pastes_ingredients_gr_7`, `pastes_ingredients_value_7`, `pastes_ingredients_8`, `pastes_ingredients_gr_8`, `pastes_ingredients_value_8`, `pastes_ingredients_9`, `pastes_ingredients_gr_9`, `pastes_ingredients_value_9`, `pastes_ingredients_10`, `pastes_ingredients_gr_10`, `pastes_ingredients_value_10`, `pastes_ingredients_taste_salt`, `pastes_ingredients_taste_pepper`, `pastes_description_1`, `pastes_description_2`, `pastes_description_3`, `pastes_description_4`, `pastes_description_5`, `pastes_additionally`, `created_at`, `updated_at`) VALUES
(1, 'ПАСТА', '/storage/baloneze.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ПАСТА', '/storage/pasta_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ПАСТА', '/storage/pasta_3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ПАСТА', '/storage/pasta_4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_risottos`
--

CREATE TABLE `list_risottos` (
  `id` bigint UNSIGNED NOT NULL,
  `risottos_name` text COLLATE utf8mb4_unicode_ci,
  `risottos_image` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_1` int DEFAULT NULL,
  `risottos_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_2` int DEFAULT NULL,
  `risottos_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_3` int DEFAULT NULL,
  `risottos_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_4` int DEFAULT NULL,
  `risottos_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_5` int DEFAULT NULL,
  `risottos_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_6` int DEFAULT NULL,
  `risottos_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_7` int DEFAULT NULL,
  `risottos_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_8` int DEFAULT NULL,
  `risottos_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_9` int DEFAULT NULL,
  `risottos_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_gr_10` int DEFAULT NULL,
  `risottos_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `risottos_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `risottos_description_1` text COLLATE utf8mb4_unicode_ci,
  `risottos_description_2` text COLLATE utf8mb4_unicode_ci,
  `risottos_description_3` text COLLATE utf8mb4_unicode_ci,
  `risottos_description_4` text COLLATE utf8mb4_unicode_ci,
  `risottos_description_5` text COLLATE utf8mb4_unicode_ci,
  `risottos_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_risottos`
--

INSERT INTO `list_risottos` (`id`, `risottos_name`, `risottos_image`, `risottos_ingredients_1`, `risottos_ingredients_gr_1`, `risottos_ingredients_value_1`, `risottos_ingredients_2`, `risottos_ingredients_gr_2`, `risottos_ingredients_value_2`, `risottos_ingredients_3`, `risottos_ingredients_gr_3`, `risottos_ingredients_value_3`, `risottos_ingredients_4`, `risottos_ingredients_gr_4`, `risottos_ingredients_value_4`, `risottos_ingredients_5`, `risottos_ingredients_gr_5`, `risottos_ingredients_value_5`, `risottos_ingredients_6`, `risottos_ingredients_gr_6`, `risottos_ingredients_value_6`, `risottos_ingredients_7`, `risottos_ingredients_gr_7`, `risottos_ingredients_value_7`, `risottos_ingredients_8`, `risottos_ingredients_gr_8`, `risottos_ingredients_value_8`, `risottos_ingredients_9`, `risottos_ingredients_gr_9`, `risottos_ingredients_value_9`, `risottos_ingredients_10`, `risottos_ingredients_gr_10`, `risottos_ingredients_value_10`, `risottos_ingredients_taste_salt`, `risottos_ingredients_taste_pepper`, `risottos_description_1`, `risottos_description_2`, `risottos_description_3`, `risottos_description_4`, `risottos_description_5`, `risottos_additionally`, `created_at`, `updated_at`) VALUES
(1, 'РИЗОТТО С МОРЕПРОДУКТАМИ', '/storage/risotto.jpg', 'Рис арборио', 90, 'гр', 'Котейль из морепродуктов (тигровые креветки, мидии, кальмар)', 180, 'гр', 'Тимьян (свежий)', 1, 'стебель', 'Каперсы', 4, 'шт', 'Орегано (сухой), перец (молотый)', NULL, 'щепотка', 'Соль', NULL, 'по вкусу', 'Соус томатный (помодоро)', 100, 'гр', 'Масло оливковое', 2, 'ст.ложки', 'Вода или бульон (биск)', 280, 'гр', 'Пармезан', 20, 'гр', '', NULL, 'На оливковом масле обжариваем зубчик чеснока, тимьян и мелко нарезанный лук.', 'Добавляем рис арборио и обжариваем на протяжении 2-3 минут (по желанию можно добавить 50 грамм белого сухого вина).', 'Постепенно добавляем маленькими порциями воду или бульон (биск), постоянно помешивая на протяжении 12-15 минут. В это же время отдельно обжариваем морепродукты до готовности.', 'В процессе добавляем соль, перец, томатный соус, отдельно обжаренные морепродукты, маринованные каперсы, тертый пармезан и кусочек сливочного масла и перемешиваем.', NULL, 'В завершении наше блюдо сверху посыпаем тертым пармезаном,  и выжимаем дольку лимона.', NULL, NULL),
(2, 'РИЗОТТО С МОРЕПРОДУКТАМИ', '/storage/rizotto_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'РИЗОТТО С КОПЧЕНОЙ УТКОЙ', '/storage/rizotto_3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_snacks`
--

CREATE TABLE `list_snacks` (
  `id` bigint UNSIGNED NOT NULL,
  `snacks_name` text COLLATE utf8mb4_unicode_ci,
  `snacks_image` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_1` int DEFAULT NULL,
  `snacks_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_2` int DEFAULT NULL,
  `snacks_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_3` int DEFAULT NULL,
  `snacks_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_4` int DEFAULT NULL,
  `snacks_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_5` int DEFAULT NULL,
  `snacks_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_6` int DEFAULT NULL,
  `snacks_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_7` int DEFAULT NULL,
  `snacks_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_8` int DEFAULT NULL,
  `snacks_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_9` int DEFAULT NULL,
  `snacks_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_gr_10` int DEFAULT NULL,
  `snacks_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `snacks_description_1` text COLLATE utf8mb4_unicode_ci,
  `snacks_description_2` text COLLATE utf8mb4_unicode_ci,
  `snacks_description_3` text COLLATE utf8mb4_unicode_ci,
  `snacks_description_4` text COLLATE utf8mb4_unicode_ci,
  `snacks_description_5` text COLLATE utf8mb4_unicode_ci,
  `snacks_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_snacks`
--

INSERT INTO `list_snacks` (`id`, `snacks_name`, `snacks_image`, `snacks_ingredients_1`, `snacks_ingredients_gr_1`, `snacks_ingredients_value_1`, `snacks_ingredients_2`, `snacks_ingredients_gr_2`, `snacks_ingredients_value_2`, `snacks_ingredients_3`, `snacks_ingredients_gr_3`, `snacks_ingredients_value_3`, `snacks_ingredients_4`, `snacks_ingredients_gr_4`, `snacks_ingredients_value_4`, `snacks_ingredients_5`, `snacks_ingredients_gr_5`, `snacks_ingredients_value_5`, `snacks_ingredients_6`, `snacks_ingredients_gr_6`, `snacks_ingredients_value_6`, `snacks_ingredients_7`, `snacks_ingredients_gr_7`, `snacks_ingredients_value_7`, `snacks_ingredients_8`, `snacks_ingredients_gr_8`, `snacks_ingredients_value_8`, `snacks_ingredients_9`, `snacks_ingredients_gr_9`, `snacks_ingredients_value_9`, `snacks_ingredients_10`, `snacks_ingredients_gr_10`, `snacks_ingredients_value_10`, `snacks_ingredients_taste_salt`, `snacks_ingredients_taste_pepper`, `snacks_description_1`, `snacks_description_2`, `snacks_description_3`, `snacks_description_4`, `snacks_description_5`, `snacks_additionally`, `created_at`, `updated_at`) VALUES
(1, 'МУСС ИЗ ТИГРОВЫХ КРЕВЕТОК И ФОРЕЛИ', '/storage/Mousse.jpg', 'Лосось', 50, 'гр', 'Лосось копченый', 30, 'гр', 'Креветки', 30, 'гр', 'Сливки', 40, 'гр', 'Соль', NULL, 'По вкусу', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Обжариваем вкуснейшие креветки и измельчапем их.', 'Измельчаем лосось двух видов.', 'Смешиваем этот тандем со сливками, добавляем соль.', 'Пробиваем блендером до однородной массы.', NULL, 'Прекрасным дополнением к блюду будет нарезанный соломкой салат состоящий из манго, болгарского перца, красного лука, авокадо и салатного листа. Заправить эту смесь можно оливковым маслом, солью и перцем. Приготовленый мус надо употреблять намазаным на ожаренный хлеб натертый чесночком.', NULL, NULL),
(2, 'ТАР-ТАР ИЗ ГОВЯДИНЫ С  ТРЮФЕЛЕМ ', '/storage/Tar-Tar.jpg', 'Говядина (вырезка)', 80, 'гр', 'Корнишоны', 2, 'шт', 'Горчица Французкая', 1, 'ч.ложка', 'Масло Трюфельное', 1, 'ч.ложка', 'Каперсы', 4, 'шт', 'Соль', NULL, 'По вкусу', ' Перец', NULL, 'По вкусу', 'Яйцо перепелиное (желток)', 2, 'шт', 'Лук Красный', 10, 'гр', 'Сыр козий', 5, 'гр', NULL, NULL, 'Говядину промыть , зачистить и подморозить в морозильной камере около часа', 'Подмороженную говядину и овощи нарезаем мелким кубиком.', 'Сначала в говядину  добавляем соль,  французскую горчицу, перемешиваем. После добавляем овощи и перемешиваем. В конце заправляем трюфельным маслом и снова перемешиваем.', 'Желток выкладываем на тар-тар присыпав слайсами козьего сыра.', NULL, 'Хлеб \"Чиабатта\", обжаренный на сковороде с добавлением сливочного сыра и подсолнечного масла до золотистой корочки, будет прекрасным дополнением к нашему блюду...', NULL, NULL),
(3, 'УШИ', '/storage/snack_3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ТАР-ТАР ИЗ ЛОСОСЯ', '/storage/snack_4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_sushis`
--

CREATE TABLE `list_sushis` (
  `id` bigint UNSIGNED NOT NULL,
  `sushis_name` text COLLATE utf8mb4_unicode_ci,
  `sushis_image` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_1` int DEFAULT NULL,
  `sushis_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_2` int DEFAULT NULL,
  `sushis_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_3` int DEFAULT NULL,
  `sushis_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_4` int DEFAULT NULL,
  `sushis_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_5` int DEFAULT NULL,
  `sushis_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_6` int DEFAULT NULL,
  `sushis_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_7` int DEFAULT NULL,
  `sushis_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_8` int DEFAULT NULL,
  `sushis_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_9` int DEFAULT NULL,
  `sushis_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_gr_10` int DEFAULT NULL,
  `sushis_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `sushis_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `sushis_description_1` text COLLATE utf8mb4_unicode_ci,
  `sushis_description_2` text COLLATE utf8mb4_unicode_ci,
  `sushis_description_3` text COLLATE utf8mb4_unicode_ci,
  `sushis_description_4` text COLLATE utf8mb4_unicode_ci,
  `sushis_description_5` text COLLATE utf8mb4_unicode_ci,
  `sushis_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `list_sushis`
--

INSERT INTO `list_sushis` (`id`, `sushis_name`, `sushis_image`, `sushis_ingredients_1`, `sushis_ingredients_gr_1`, `sushis_ingredients_value_1`, `sushis_ingredients_2`, `sushis_ingredients_gr_2`, `sushis_ingredients_value_2`, `sushis_ingredients_3`, `sushis_ingredients_gr_3`, `sushis_ingredients_value_3`, `sushis_ingredients_4`, `sushis_ingredients_gr_4`, `sushis_ingredients_value_4`, `sushis_ingredients_5`, `sushis_ingredients_gr_5`, `sushis_ingredients_value_5`, `sushis_ingredients_6`, `sushis_ingredients_gr_6`, `sushis_ingredients_value_6`, `sushis_ingredients_7`, `sushis_ingredients_gr_7`, `sushis_ingredients_value_7`, `sushis_ingredients_8`, `sushis_ingredients_gr_8`, `sushis_ingredients_value_8`, `sushis_ingredients_9`, `sushis_ingredients_gr_9`, `sushis_ingredients_value_9`, `sushis_ingredients_10`, `sushis_ingredients_gr_10`, `sushis_ingredients_value_10`, `sushis_ingredients_taste_salt`, `sushis_ingredients_taste_pepper`, `sushis_description_1`, `sushis_description_2`, `sushis_description_3`, `sushis_description_4`, `sushis_description_5`, `sushis_additionally`, `created_at`, `updated_at`) VALUES
(1, 'СЛАДКИЕ СУШИ С МАНГО И КИВИ', '/storage/sweat_sushi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2021_02_11_152728_create_list_chefs_table', 1),
(23, '2021_02_23_134138_create_list_recipes_table', 3),
(148, '2014_10_12_000000_create_users_table', 4),
(149, '2014_10_12_100000_create_password_resets_table', 4),
(150, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(151, '2019_08_19_000000_create_failed_jobs_table', 4),
(152, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(153, '2021_02_09_045934_create_sessions_table', 4),
(154, '2021_02_18_084508_create_list_chefs_table', 4),
(155, '2021_02_23_134138_create_list_snacks_table', 4),
(156, '2021_02_24_155614_create_list_salads_table', 4),
(157, '2021_03_03_151130_create_list_salad_table', 5),
(158, '2021_03_03_155458_create_salads_lists_table', 6),
(159, '2021_03_03_165937_create_list_meats_table', 7),
(160, '2021_03_04_180857_create_list_fishes_table', 8),
(161, '2021_03_04_190157_create_list_desserts_table', 9),
(162, '2021_03_09_140355_create_list_risottos_table', 10),
(163, '2021_03_09_143449_create_list_exquisites_table', 11),
(164, '2021_03_10_122021_create_list_sushis_table', 12),
(165, '2021_03_10_130113_create_list_pastes_table', 13),
(166, '2021_03_10_140437_create_list_cream_soups_table', 14),
(167, '2021_03_11_161520_create_index_homes_table', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `salads_lists`
--

CREATE TABLE `salads_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `salads_name` text COLLATE utf8mb4_unicode_ci,
  `salads_image` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_1` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_1` int DEFAULT NULL,
  `salads_ingredients_value_1` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_2` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_2` int DEFAULT NULL,
  `salads_ingredients_value_2` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_3` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_3` int DEFAULT NULL,
  `salads_ingredients_value_3` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_4` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_4` int DEFAULT NULL,
  `salads_ingredients_value_4` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_5` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_5` int DEFAULT NULL,
  `salads_ingredients_value_5` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_6` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_6` int DEFAULT NULL,
  `salads_ingredients_value_6` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_7` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_7` int DEFAULT NULL,
  `salads_ingredients_value_7` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_8` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_8` int DEFAULT NULL,
  `salads_ingredients_value_8` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_9` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_9` int DEFAULT NULL,
  `salads_ingredients_value_9` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_10` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_gr_10` int DEFAULT NULL,
  `salads_ingredients_value_10` text COLLATE utf8mb4_unicode_ci,
  `salads_ingredients_taste_salt` text COLLATE utf8mb4_unicode_ci,
  `snacks_ingredients_taste_pepper` text COLLATE utf8mb4_unicode_ci,
  `salads_description_1` text COLLATE utf8mb4_unicode_ci,
  `salads_description_2` text COLLATE utf8mb4_unicode_ci,
  `salads_description_3` text COLLATE utf8mb4_unicode_ci,
  `salads_description_4` text COLLATE utf8mb4_unicode_ci,
  `salads_description_5` text COLLATE utf8mb4_unicode_ci,
  `salads_additionally` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `salads_lists`
--

INSERT INTO `salads_lists` (`id`, `salads_name`, `salads_image`, `salads_ingredients_1`, `salads_ingredients_gr_1`, `salads_ingredients_value_1`, `salads_ingredients_2`, `salads_ingredients_gr_2`, `salads_ingredients_value_2`, `salads_ingredients_3`, `salads_ingredients_gr_3`, `salads_ingredients_value_3`, `salads_ingredients_4`, `salads_ingredients_gr_4`, `salads_ingredients_value_4`, `salads_ingredients_5`, `salads_ingredients_gr_5`, `salads_ingredients_value_5`, `salads_ingredients_6`, `salads_ingredients_gr_6`, `salads_ingredients_value_6`, `salads_ingredients_7`, `salads_ingredients_gr_7`, `salads_ingredients_value_7`, `salads_ingredients_8`, `salads_ingredients_gr_8`, `salads_ingredients_value_8`, `salads_ingredients_9`, `salads_ingredients_gr_9`, `salads_ingredients_value_9`, `salads_ingredients_10`, `salads_ingredients_gr_10`, `salads_ingredients_value_10`, `salads_ingredients_taste_salt`, `snacks_ingredients_taste_pepper`, `salads_description_1`, `salads_description_2`, `salads_description_3`, `salads_description_4`, `salads_description_5`, `salads_additionally`, `created_at`, `updated_at`) VALUES
(1, 'КАПРЕЗЕ С СОУСОМ ПЕСТО', '/storage/Kapreze.jpg', 'Сыр Моцарелла \"Буффало\"', 100, 'гр', 'Черри', 100, 'гр', 'Соус \"Песто\"', 1, 'ст.ложка', 'Руккола', 50, 'гр', 'Свежий базилик', 1, 'стебель', 'Бальзамический уксус', 1, 'ч.ложка', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Рвем листья руколы и базилика.', ' Томаты нарезаем пополам. ', 'Сыр кусочками добавляем к рукколе и томатом.', 'Заправляем соусом песто и перемешиваем.', NULL, 'Если ограничены во времени соус песто можно купить в супурмаркете или приготовить по нашему речепту соус \"Песто\".', NULL, NULL),
(2, 'ОЛИВЬЕ С КУРИЦЕЙ', '/storage/olive_chiken.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ЦЕЗАРЬ С КРЕВЕТКАМИ', '/storage/salad_3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'САЛАТ С ГОВЯДИНОЙ', '/storage/saladmeat_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'САЛАТ', '/storage/salad_4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4TAughi8Y6Yg9vrWEFWunaXdApcOQxIaNMGNQAFW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidVJ2b3FNS3hhODBPVk0zVWZDN1I3UE9QTElIWmIzVFZVWnFGa2pDbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9wdWJsaWMvbGlzdF9jaGVmIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEZFSzBiSTlBTlpTa0ZPLjcxcExLOXU0SWI0Sy5ka3pxWnQ2alYzOWN2SlBFeEZrMC5PM2x1IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRGRUswYkk5QU5aU2tGTy43MXBMSzl1NEliNEsuZGt6cVp0NmpWMzljdkpQRXhGazAuTzNsdSI7fQ==', 1616081557);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Pavel', 'Pavlysha_judo@gmail.com', NULL, '$2y$10$FEK0bI9ANZSkFO.71pLK9u4Ib4K.dkzqZt6jV39cvJPExFk0.O3lu', NULL, NULL, NULL, NULL, NULL, '2021-03-18 12:24:24', '2021-03-18 12:24:24');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `index_homes`
--
ALTER TABLE `index_homes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_chefs`
--
ALTER TABLE `list_chefs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_cream_soups`
--
ALTER TABLE `list_cream_soups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_desserts`
--
ALTER TABLE `list_desserts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_exquisites`
--
ALTER TABLE `list_exquisites`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_fishes`
--
ALTER TABLE `list_fishes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_meats`
--
ALTER TABLE `list_meats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_pastes`
--
ALTER TABLE `list_pastes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_risottos`
--
ALTER TABLE `list_risottos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_snacks`
--
ALTER TABLE `list_snacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `list_sushis`
--
ALTER TABLE `list_sushis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `salads_lists`
--
ALTER TABLE `salads_lists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `index_homes`
--
ALTER TABLE `index_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `list_chefs`
--
ALTER TABLE `list_chefs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `list_cream_soups`
--
ALTER TABLE `list_cream_soups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `list_desserts`
--
ALTER TABLE `list_desserts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `list_exquisites`
--
ALTER TABLE `list_exquisites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `list_fishes`
--
ALTER TABLE `list_fishes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `list_meats`
--
ALTER TABLE `list_meats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `list_pastes`
--
ALTER TABLE `list_pastes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `list_risottos`
--
ALTER TABLE `list_risottos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `list_snacks`
--
ALTER TABLE `list_snacks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `list_sushis`
--
ALTER TABLE `list_sushis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `salads_lists`
--
ALTER TABLE `salads_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
