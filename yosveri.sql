-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Ağu 2015, 13:14:09
-- Sunucu sürümü: 5.6.24
-- PHP Sürümü: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `yosveri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(75) COLLATE utf8_bin NOT NULL,
  `entry_time` varchar(100) COLLATE utf8_bin NOT NULL,
  `autho_create` int(3) NOT NULL DEFAULT '0',
  `autho_cons` int(3) NOT NULL DEFAULT '0',
  `autho_change` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `entry_time`, `autho_create`, `autho_cons`, `autho_change`) VALUES
(3, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@erdogan.edu.tr', '1440682200', 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `registry`
--

CREATE TABLE IF NOT EXISTS `registry` (
  `id` int(20) NOT NULL,
  `receipt` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `passport` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tcno` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `gender` varchar(2) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mot_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fat_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birth_plc` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birth_date` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `nation` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `photo_dir` varchar(220) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `grad_year` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `high_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `high_city` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `grade` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `grade_sys` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `period` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `country` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adress` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `entry_date` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `entry_code` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `registry`
--

INSERT INTO `registry` (`id`, `receipt`, `passport`, `tcno`, `name`, `surname`, `gender`, `mot_name`, `fat_name`, `birth_plc`, `birth_date`, `nation`, `photo_dir`, `grad_year`, `high_name`, `high_city`, `grade`, `grade_sys`, `period`, `country`, `city`, `adress`, `phone`, `mail`, `status`, `entry_date`, `ip`, `entry_code`) VALUES
(30, '12/04/2015', '318abcaAA', '', 'Hakan', 'Çılgın', 'M', 'Fidan', 'Çınar', 'ANKARA', '09/07/1993', 'Cote d', '../registry_pages/uploads/IMG_1439973216.jpeg', '', 'Kohuralp Lisesi', 'Türkiye / Ankara', '', '', '', 'Lao, People', 'Rize', 'abc mah. def sk. hadibe apt kat 2 no 9', '5064560237', 'hakanovural@hov.com', 1, '19/08/2015 - 11:33:36', '::1', 'HO88OU81UH97'),
(31, '11/11/1111', '444asd', '', 'asdsdads', 'asdasdasd', 'm', 'asdasdasd', 'asdasdasdsa', 'köstebek', 'köstebek', 'Antigua and Barbuda', '../registry_pages/uploads/IMG_1440071569.jpeg', '11/11/1111', 'asdasdadsad', 'sadsadadadssa', '', '', '', 'Azerbaijan', 'asdasdasdda', 'sdadasdasdasdadasdsadasd', '5555555', 'sasdsasd@asadsasd.asd', 2, '20/08/2015 - 14:52:49', '::1', 'IO92OF89FI72'),
(32, '11/11/1111', '31811aa', '', 'Murat', 'Keçeli', 'f', 'Kabire', 'Habire', 'Bağdat', '11/12/1990', 'Lithuania', '../registry_pages/uploads/IMG_1440179744.jpeg', '', 'asasd', 'asdad', '', '', '', 'Bahamas', 'asdasda', 'asdasdadas', '555555555', 'asdasdasd@sadasd.com', 1, '21/08/2015 - 20:55:44', '::1', 'UO52OU82UU69'),
(33, '12/22/2015', '311223rte', '', 'Hakansd', 'asdasda', 'm', 'asdasdasd', 'sadasdasd', 'asdasdasd', '12/12/1314', 'Bahamas', '../registry_pages/uploads/IMG_1440180573.jpeg', '', 'asdadasd', 'asdsadadqer', '', '', '', 'Azerbaijan', 'asdasdasdsa', 'asdasdq vfbfdbgq sadasdasd', '21324155151', 'asdadasd@gasdasd.com', 2, '21/08/2015 - 21:09:33', '::1', 'FP13PY31YF26'),
(34, '11/11/1111', '123131231', '13133141411', 'Misaka', 'Kirito', 'f', 'Shiro', 'Natsu', 'Osaka', '09/07/1995', 'Japan', '../registry_pages/uploads/IMG_1440661733.jpeg', '', 'Osaka High School', 'Japan - Osaka', '', '', '', 'Japan', 'Osaka', 'Oramakoma Buramako st. Shine Apt. 10/2 OSAKA - JAPAN', '+805058889213', 'misaka.kirito19@gmail.com', 1, '27/08/2015 - 10:48:53', '::1', 'LE37EM11ML62');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `registry`
--
ALTER TABLE `registry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
