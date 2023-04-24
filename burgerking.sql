-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 24 2023 г., 19:44
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burgerking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` date DEFAULT NULL,
  `button` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `date`, `button`, `image`) VALUES
(1, 'Böyük Yeməklər İlk Gəlir', 'Hər gün bütün dünyada 11 milyondan çox qonaq Burger King restoranlarını ziyarət edir. Onlar bunu ona görə edirlər ki, bizim restoranlar yüksək keyfiyyətli, gözəl dadlı və sərfəli yeməklər təqdim etməklə tanınır. 1954-cü ildə əsası qoyulan Burger King, dünyanın ikinci ən böyük fast food hamburger şəbəkəsidir. Orijinal Home of the Whopper, premium inqrediyentlərə, əla reseptlərə və ailə üçün uyğun yemək təcrübələrinə sadiqliyimiz 50-dən çox uğurlu il ərzində brendimizi müəyyən edən şeydir.', NULL, 'Etrafli', '7MFedPMD6Z.png');

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `slag` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `text`, `date`, `image`, `slag`) VALUES
(6, 'Royalti kimi mükafat alın', 'Melty Zövqünüz. Ədviyyatlı biri. Gəlin Bu Bekonu Alaq. Ultimate One. 7 dollardan başlayan dəyəri ilə dolu pendirlə sızma - dördünü də sınayana qədər dayanmayın! Sizin Melty Zövqünüz. The Spicy One. Gəlin Bu Bekonu Alaq. Ultimate One. 7 dollardan başlayan dəyəri olan pendirlə sızma - dördünü də sınayana qədər dayanmayın!', '2023-04-24', '3rltmkyS1I.jpg', 'Royalti'),
(7, 'Melt Meals sizin üçün burada.', 'Crowns qazanmaq, BK yeməyi üçün geri ödəmək və hər gün pulsuz şirniyyat və ya içki almaq üçün Royal Perkslərə qoşulun. Crowns qazanmaq, BK yeməkləri almaq və hər gün pulsuz yemək və ya içki almaq üçün Royal Perks-ə qoşulun.', '2023-04-24', 'AfFMTLWU18.png', 'Melt Meals'),
(8, 'İstənilən $20 BK çatdırılma sifarişinə $4 ENDİRİM!', 'BK Tətbiqində və ya bk.com saytında sifariş edin və siz əlavə bonus əldə edin - hər hansı $20+ BK çatdırılma sifarişinə 4$ ENDİRİM! Qismən. ABŞ istirahəti. BK Tətbiqində və ya bk.com saytında sifariş edin və siz əlavə bonus əldə edəcəksiniz — istənilən $20+ BK çatdırılma sifarişinə 4$ ENDİRİM! Qismən. ABŞ istirahəti.', '2023-04-24', '90veNTaYqu.jpg', 'BK'),
(9, 'Komandaya qoşulun!', 'BK-da siz iş-həyat balansı, çeviklik və karyera yüksəlişi tapa bilərsiniz, çünki siz həyatı istədiyiniz kimi yaşamağa layiqsiniz. Bu, sadəcə bir iş deyil, karyera fürsətidir! İşə qəbulla bağlı qərarlar yalnız hər bir restorana müstəqil sahib olan və fəaliyyət göstərən françayzi tərəfindən müəyyən edilir.', '2023-04-24', 'BkvyYPHNJk.jpg', 'kamp');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `map` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `address`, `map`, `phone`, `email`, `instagram`, `youtube`) VALUES
(1, '67, 71 Mammad Araz, Baku, Azerbaijan', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1519.027801240332!2d49.847429!3d40.407619!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDI0JzI3LjQiTiA0OcKwNTAnNTMuMSJF!5e0!3m2!1sen!2sbd!4v1682354342980!5m2!1sen!2sbd&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade', '+994 (5-) 737 -- -4', 'mex_burgerking@cafe.com', 'https://burgerkingrus.ru/', 'https://www.youtube.com/channel/UC23ZqC2LTzl7dfOi6EmwJhg');

-- --------------------------------------------------------

--
-- Структура таблицы `contactform`
--

CREATE TABLE `contactform` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `headslider`
--

CREATE TABLE `headslider` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_general_ci,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `headslider`
--

INSERT INTO `headslider` (`id`, `title`, `text`, `image`) VALUES
(3, 'Keyfiyyətli Tərkib', 'Hər gün bütün dünyada BURGER KING restoranlarına on bir milyondan çox ziyarətçi gəlir. Təəccüblü deyil: bütün bunlardan sonra bizim restoranlar ixtisasların dadı və qiymətinə görə əla qiymətlərlə tanınır..', 'kOTVCw2cWw.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'mvc@mail.ru', '1233');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slag` (`slag`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `headslider`
--
ALTER TABLE `headslider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `headslider`
--
ALTER TABLE `headslider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
