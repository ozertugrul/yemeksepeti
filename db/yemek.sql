-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Oca 2024, 06:38:23
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yemek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dukkanlar`
--

CREATE TABLE `dukkanlar` (
  `dukkan_id` int(11) NOT NULL,
  `dukkan_resmi_adi` varchar(255) NOT NULL,
  `dukkan_adi` varchar(100) NOT NULL,
  `dukkan_adresi` varchar(255) NOT NULL,
  `dukkkan_sehiri` varchar(100) NOT NULL,
  `dukkan_mstutar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dukkanlar`
--

INSERT INTO `dukkanlar` (`dukkan_id`, `dukkan_resmi_adi`, `dukkan_adi`, `dukkan_adresi`, `dukkkan_sehiri`, `dukkan_mstutar`) VALUES
(15, 'dukkanlogo/1705094027.png', 'Adana Dükkanı', 'Adananın en güzel yeri', 'Adana', 30),
(16, 'dukkanlogo/1705096381.png', 'AMASYA Dükkanı', 'fgdjfjyhfıkjyfjyfh', 'Amasya', 50),
(18, 'dukkanlogo/1705167803.png', 'adwad', 'awdsefrg', 'Düzce', 123),
(19, 'dukkanlogo/1705347314.png', 'adwad', 'sengfjrdngjkdr', 'Erzurum', 123),
(20, 'dukkanlogo/1706160924.jpg', 'adwad', 'sefsefsefsef', 'Adana', 123);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `KullaniciID` int(11) NOT NULL,
  `Adi` varchar(50) NOT NULL,
  `Soyadi` varchar(50) NOT NULL,
  `Eposta` varchar(100) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `cep_telefonu` varchar(100) NOT NULL,
  `dogum_tarihi` varchar(100) NOT NULL,
  `Adres` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`KullaniciID`, `Adi`, `Soyadi`, `Eposta`, `Sifre`, `cep_telefonu`, `dogum_tarihi`, `Adres`) VALUES
(1, 'Abdullah', 'DOĞAN', 'abdogan0306@gmail.com', 'A', '5522890631', '29.09.2003', ''),
(2, 'ertu', 'özer', 'a@a.com', '$2y$10$lg7WWKJoNKd4w.I1cRDQYeC4tC/jPyd641lUcvFebm/PW4zuoDyJq', '283432875', '2022-05-04', ''),
(3, 'aa', 'aa', 'aa@a.com', '$2y$10$hycq4oJ9kbrj1VtpXdC6KOgfW4xLVmk8HdlTes2C.a35AZ30Hrmqy', '2345678', '2024-01-26', ''),
(4, 'apoooğ', 'wadawd', 'w@a.com', '$2y$10$xjV4jMcW7Pk1Orahn6LCE.3uJjrClaWrmsVGnBQiwu3oTT9MdnFQ.', '34567', '2024-01-24', ''),
(5, 'EREN', 'AŞKIN', 'eren@gmail.com', '$2y$10$YDi95MtnKa3oYoOFPGgrxuCU3ZcxgUVNz7QlhZHpQLmbs6ozCSqqC', '12345678', '5678-04-23', ''),
(6, '', '', 'aaa@a.com', '$2y$10$tK5bp/Moei3mhrpW/oxu6ex8CqhS1dnC/vqqzd5zYi9WRwkso/FVW', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

CREATE TABLE `sehirler` (
  `Id` int(11) NOT NULL,
  `SehirAd` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`Id`, `SehirAd`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elazığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkari'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `SiparisID` int(11) NOT NULL,
  `KullaniciID` int(11) DEFAULT NULL,
  `Detay` varchar(255) DEFAULT NULL,
  `Tarih` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`SiparisID`, `KullaniciID`, `Detay`, `Tarih`) VALUES
(13, 6, '<ul>5 x Abdullah - 0₺<br>4 x wdaw - 128₺<br></ul>', '24.01.2024 17:57:56'),
(14, 6, '<ul>4 x Abdullah - 0₺<br>3 x Mandalina - 0₺<br>3 x aaa - 195₺<br></ul>', '24.01.2024 18:00:29'),
(15, 6, '<ul>4 x Abdullah - 0₺<br>3 x Mandalina - 0₺<br>3 x aaa - 195₺<br></ul>', '24.01.2024 18:08:32'),
(16, 6, '<ul>4 x wdaw - 128₺<br></ul>', '24.01.2024 18:42:09'),
(17, 6, '<ul>1 x aaa - 65₺<br></ul>', '24.01.2024 18:42:54'),
(18, 6, '<ul><li>1 x Mandalina - 0₺</li><br> Toplam Tutar: 0</ul>', '24.01.2024 18:44:08'),
(19, 6, '<ul><li>1 x aaa - 65 ₺</li><br> Toplam Tutar: 65 ₺</ul>', '24.01.2024 18:45:48'),
(20, 6, '<ul><li>4 x wdaw - 128 ₺</li></ul><br> Toplam Tutar: 128 ₺', '24.01.2024 18:46:42'),
(21, 6, '<p>Sepet boş.</p>', '24.01.2024 18:48:29'),
(22, 6, '<ul><li>3 x wdaw - 96 ₺</li></ul><br> <p> Toplam Tutar: 96 ₺</p>', '24.01.2024 19:00:55'),
(23, 6, '<ul><li>3 x Mandalina - 0 ₺</li><li>1 x dürüm - 12 ₺</li></ul><br> <p> Toplam Tutar: 12 ₺</p>', '24.01.2024 20:47:39'),
(24, 6, '<ul><li>1 x Mandalina - 0 ₺</li></ul><br> <p> Toplam Tutar: 0 ₺</p>', '24.01.2024 20:54:25'),
(25, 6, '<ul><li>1 x wdaw - 32 ₺</li><li>1 x aaa - 65 ₺</li></ul><br> <p> Toplam Tutar: 97 ₺</p>', '24.01.2024 20:58:54'),
(26, 6, '<br />\r\n<b>Warning</b>:  Undefined array key ', '25.01.2024 04:24:28'),
(27, 6, '<br />\r\n<b>Warning</b>:  Undefined array key ', '25.01.2024 04:41:15'),
(28, 6, '', '25.01.2024 04:52:26'),
(29, 6, '', '25.01.2024 05:38:38'),
(30, 6, '', '25.01.2024 05:39:14'),
(31, 6, '', '25.01.2024 06:04:43'),
(32, 6, '', '25.01.2024 06:04:53'),
(33, 6, '', '25.01.2024 06:07:04'),
(34, 6, '', '25.01.2024 06:17:15'),
(35, 6, '', '25.01.2024 06:18:23'),
(36, 6, '\r\n                                                                    <ul><li>10 x aaa - 650 ₺</li></ul>', '25.01.2024 06:21:28'),
(37, 6, '\r\n                                                                    <ul><li>10 x aaa - 650 ₺</li></ul>', '25.01.2024 06:22:25'),
(38, 6, '\r\n                                                                    <ul><li>5 x aaa - 325 ₺</li><br> <p> Toplam Tutar: 325 ₺</p></ul>', '25.01.2024 06:31:41'),
(39, 6, '\r\n                                                                    <ul><li>4 x aaa - 260 ₺</li><br> <p> Toplam Tutar: 260 ₺</p></ul>', '25.01.2024 06:33:56');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `UrunID` int(11) NOT NULL,
  `UrunAdi` varchar(100) NOT NULL,
  `Fiyat` decimal(10,2) NOT NULL,
  `DukkanID` int(11) DEFAULT NULL,
  `UrunResmi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`UrunID`, `UrunAdi`, `Fiyat`, `DukkanID`, `UrunResmi`) VALUES
(16, 'Abdullah', 0.00, 15, 'urunresmi/1705139845.png'),
(17, 'wdaw', 32.00, 15, 'urunresmi/1705140733.jpg'),
(18, 'aaa', 65.00, 15, 'urunresmi/1705140746.png'),
(20, 'yahya dürüm', 0.00, 18, 'urunresmi/1705167859.png'),
(21, 'dürüm', 12.00, 19, 'urunresmi/1705347350.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkili`
--

CREATE TABLE `yetkili` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkili`
--

INSERT INTO `yetkili` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'Abdullah', '12345');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dukkanlar`
--
ALTER TABLE `dukkanlar`
  ADD PRIMARY KEY (`dukkan_id`),
  ADD UNIQUE KEY `dukkan_adresi` (`dukkan_adresi`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`KullaniciID`),
  ADD UNIQUE KEY `Eposta` (`Eposta`);

--
-- Tablo için indeksler `sehirler`
--
ALTER TABLE `sehirler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`SiparisID`),
  ADD KEY `KullaniciID` (`KullaniciID`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`UrunID`),
  ADD KEY `DukkanID` (`DukkanID`);

--
-- Tablo için indeksler `yetkili`
--
ALTER TABLE `yetkili`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dukkanlar`
--
ALTER TABLE `dukkanlar`
  MODIFY `dukkan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `KullaniciID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `SiparisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `UrunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `yetkili`
--
ALTER TABLE `yetkili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `siparisler`
--
ALTER TABLE `siparisler`
  ADD CONSTRAINT `siparisler_ibfk_1` FOREIGN KEY (`KullaniciID`) REFERENCES `kullanicilar` (`KullaniciID`);

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`DukkanID`) REFERENCES `dukkanlar` (`dukkan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
