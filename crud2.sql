-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Tem 2021, 17:33:54
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `burcu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `201913709027`
--

CREATE TABLE `201913709027` (
  `id` int(11) NOT NULL,
  `urun_adi` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `adet` int(100) NOT NULL,
  `birim_fiyat` int(100) NOT NULL,
  `tur` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `201913709027`
--

INSERT INTO `201913709027` (`id`, `urun_adi`, `adet`, `birim_fiyat`, `tur`, `aciklama`) VALUES
(1, 'RAM', 1, 20, 'Perakende', '4gb'),
(6, 'CPU', 2, 100, 'toptan', ''),
(7, 'GPU', 2, 50, 'toptan', 'GTX1060T'),
(8, 'SSD', 6, 500, 'toptan', 'm2ssd');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `201913709027`
--
ALTER TABLE `201913709027`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `201913709027`
--
ALTER TABLE `201913709027`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
