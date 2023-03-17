-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2020, 20:00:42
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mesajlaşmalar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(255) NOT NULL,
  `gonderen_id` int(255) NOT NULL,
  `alan_id` int(255) NOT NULL,
  `mesaj` text NOT NULL,
  `okundu` int(10) NOT NULL DEFAULT 0,
  `tarih` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `gonderen_id`, `alan_id`, `mesaj`, `okundu`, `tarih`) VALUES
(22, 9, 16, 'qweteqwe', 1, '30.05.2020 19:05:14'),
(23, 9, 9, 'iyidir senden', 1, '30.05.2020 19:22:21'),
(24, 9, 9, 'he knkam söyle', 1, '30.05.2020 19:29:01'),
(25, 9, 9, 'iyimisiniz', 1, '30.05.2020 19:34:22'),
(26, 13, 9, 'sdgsdg', 1, '30.05.2020 20:17:15'),
(27, 9, 13, 'kardeşim nasılsın iyimisin', 1, '30.05.2020 20:19:22'),
(28, 9, 9, '', 1, '31.05.2020 13:13:44'),
(29, 9, 9, 'iyim saol', 1, '31.05.2020 13:14:35'),
(30, 13, 9, 'Bende iyiyim teşekkürler napıyosun ', 1, '31.05.2020 13:57:39'),
(31, 17, 9, 'nabersin lan dayııı', 1, '31.05.2020 13:59:28'),
(32, 17, 14, 'nasılsın abi iyimisin', 0, '31.05.2020 14:04:38'),
(33, 17, 14, 'nasılsın abi iyimisin', 0, '31.05.2020 14:06:38'),
(34, 9, 17, 'iyidir senden', 1, '31.05.2020 14:08:30'),
(35, 17, 9, 'iyidir senden', 1, '31.05.2020 14:13:14'),
(36, 17, 9, 'nasılsın abi iyimisin', 1, '31.05.2020 14:14:08'),
(37, 9, 9, 'http://localhost/proje/mesajsend.php?id=9', 1, '31.05.2020 14:24:28'),
(38, 9, 9, 'saolasın', 1, '31.05.2020 15:51:24'),
(39, 9, 13, 'naber iyimisin', 1, '31.05.2020 15:51:50'),
(40, 13, 9, 'saolasın canım', 1, '31.05.2020 15:52:27'),
(41, 9, 9, '', 1, '31.05.2020 16:42:41'),
(42, 9, 9, '', 1, '31.05.2020 16:42:53'),
(43, 9, 9, '', 1, '31.05.2020 16:42:55'),
(44, 9, 13, '', 1, '31.05.2020 16:43:10'),
(45, 18, 13, 'malmısın', 1, '02.06.2020 20:01:30'),
(46, 13, 18, 'Abicim nasılsın iyimisin', 1, '04.06.2020 19:51:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adres` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `adres`, `email`) VALUES
(13, 'buse', 'buse3434', 'istanbul', 'asjghasgjkl@gmail.com'),
(14, 'bugra', '1234', 'istanbul', 'bugraklc@gmail.com'),
(15, 'fanatik', '1444', 'avcılar', 'gajkl@gmail.com'),
(17, 'aliosman', 'klcc', 'istanbul esenyurt', 'aliosman123@gmail.com'),
(18, 'klcc', '1233', 'İstanbul', 'kilicmelikbugra@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
