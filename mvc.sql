-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Nis 2023, 23:12:10
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mvc`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basic_mvc`
--

CREATE TABLE `basic_mvc` (
  `id` int(11) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `subj` varchar(400) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `basic_mvc`
--

INSERT INTO `basic_mvc` (`id`, `writer`, `subj`, `content`, `date`) VALUES
(1, 'özgür vurgun', 'İlk Yazı', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\nPraesentium eligendi maiores ex laboriosam eaque sunt.  margin-top: 10px;', '2023-04-26 19:39:55'),
(28, 'özgür vurgun', 'büyük hadron çarpıştırıcısı', 'Büyük Hadron Çarpıştırıcısı (LHC, İngilizce Large Hadron Collider) dünyanın en büyük ve en güçlü parçacık çarpıştırıcısı ve dünyanın en büyük makinesi.[1] Avrupa Nükleer Araştırmalar Merkezi (CERN) tarafından, 1998 ve 2008 yılları arasına 100ü aşkın ülkeden 10.000 bilim insanı ve mühendisin yanı sıra 100ün üzerinde üniversite ve laboratuvarın katılımıyla inşa edildi.[2] Cenevre yakınlarında, Fransa-İsviçre sınırının altındaki 27 kilometre uzunluğunda ve derinliği 175 metreyi bulan bir tünel boyunca uzanır.', '2023-04-26 23:53:21'),
(29, 'özgür vurgun', 'kuantum bilgisayarlar', 'Klasik bilgisayarlar bitlerden oluşan hafıza yapısına sahiptir. Her bit 1 veya 0 değerini alabilir. Kuantum bilgisayarları ise kübit (qubit)lerden oluşan seriler içerir. Tek bir qubit 1, 0 veya bu ikisi arasındaki (kuantum çakışması) bir değeri alabilir. Bir kübit (qubit) çifti 4 kuantum çakışması durumunun herhangi birinde, üç kübit (qubit) ise 8 kuantum çakışması durumunun herhangi birinde olabilir. Genel olarak \r\n�\r\n{displaystyle n} kübit sahibi bir kuantum bilgisayarı aynı anda \r\n2\r\n�\r\n{displaystyle 2^{n}} çakışmanın herhangi birinde olabilir. (Normal bilgisayarlar \r\n2\r\n�\r\n{displaystyle 2^{n}} durumun sadece birinde olurken, bir kuantum bilgisayarı bu durumların hepsinde ya da bir kısmında bulunabilir.) Kuantum bilgisayarları kübitleri (qubit) belirli kuantum mantık kapıları ile düzenleyebilir. Uygulanan bu kapı serilerine kuantum algoritması adı verilir.', '2023-04-26 23:54:40'),
(30, 'deneme yazar', 'deneme konu', 'içerik deneme', '2023-04-27 00:06:10'),
(31, 'deneme', 'deneme', 'deneme iceriği', '2023-04-27 14:10:05');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `basic_mvc`
--
ALTER TABLE `basic_mvc`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `basic_mvc`
--
ALTER TABLE `basic_mvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
