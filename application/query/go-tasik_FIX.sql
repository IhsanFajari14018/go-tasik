-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 12:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go-tasik`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_pariwisata`
-- (See below for the actual view)
--
CREATE TABLE `daftar_pariwisata` (
`id_pariwisata` int(11)
,`nama` varchar(50)
,`deskripsi` text
,`alamat` varchar(150)
,`telepon` varchar(14)
,`buka` varchar(15)
,`kategori` varchar(25)
,`email` varchar(50)
,`rating` decimal(14,4)
,`url_map` varchar(255)
,`foto` varchar(150)
,`harga_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_rekomendasi`
-- (See below for the actual view)
--
CREATE TABLE `daftar_rekomendasi` (
`id_pariwisata` int(11)
,`id_rekomendasi` int(11)
,`nama` varchar(50)
,`foto` varchar(150)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_review`
-- (See below for the actual view)
--
CREATE TABLE `data_review` (
`nama` varchar(50)
,`id_review` int(11)
,`ulasan` text
,`tanggal` date
,`ditampilkan` int(1)
,`rating` int(1)
,`fk_pariwisata` int(11)
,`nama_pariwisata` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `fk_pariwisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `nama`, `deskripsi`, `harga`, `foto`, `fk_pariwisata`) VALUES
(1, 'Jalan Menuju Kawah', '', NULL, 'img\\Pariwisata\\1_Jalan_Menuju_Kawah.jpg', 1),
(2, 'Tangga Menuju Kawah', '', NULL, 'img\\Pariwisata\\1_Tangga_Menuju_Kawah.jpg', 1),
(3, 'Tiket', '', 6500, '', 1),
(4, 'Kolam Air Hangat Bernuansa Alam', '', NULL, 'img\\Pariwisata\\2_Kolam_Air_Hangat_Bernuansa_Alam.jpg', 2),
(5, 'Tiket', '', 10000, NULL, 2),
(6, 'Tiket', '', 5000, '', 3),
(7, 'Perahu Rakit', '', NULL, 'img\\Pariwisata\\3_Perahu_Rakit.jpg', 3),
(8, 'Gazebo', '', NULL, 'img\\Pariwisata\\3_Gazebo.jpg', 3),
(10, 'Wahana Kolam Ombak', '', NULL, 'img\\Pariwisata\\4_Wahana_Kolam_Ombak.jpg', 4),
(11, 'Wahana Seluncur Air', '', NULL, 'img\\Pariwisata\\4_Wahana_Seluncur_Air.jpg', 4),
(12, 'Tiket Weekday', '', 20000, '', 4),
(13, 'Bersantai Menggunakan Hammock', '', NULL, 'img\\Pariwisata\\5_Bersantai_Menggunakan_Hammock.jpg', 5),
(14, 'Tiket', '', 15000, NULL, 13),
(16, 'Aliran Air Curug Dengdeng', '', NULL, 'img\\Pariwisata\\6_Aliran_Air_Curug_Dengdeng.png', 6),
(17, 'Tebing Pantai Karang Tawulan', '', NULL, 'img\\Pariwisata\\7_Tebing_Pantai_Karang_Tawulan.jpg', 7),
(18, 'Tiket', '', 2000, NULL, 7),
(19, 'Hamparan Karang', '', NULL, 'img\\Pariwisata\\8_Hamparan_Karang.jpg', 8),
(20, 'Keindahan Kebun Teh', '', NULL, 'img\\Pariwisata\\9_Keindahan_Kebun_Teh.jpg', 9),
(21, 'Rumah Tradisional Kampung Naga', '', NULL, 'img\\Pariwisata\\10_Rumah_Tradisional_Kampung_Naga.jpg', 10),
(22, 'Nuansa Kampung Naga', '', NULL, 'img\\Pariwisata\\10_Nuansa_Kampung_Naga.jpg', 10),
(23, 'Penduduk Asli Kampung Naga', '', NULL, 'img\\Pariwisata\\10_Penduduk_Asli_Kampung_Naga.jpg', 10),
(24, 'Tiket', '', NULL, '', 10),
(25, 'Keindahan Curug Blek', '', NULL, 'img\\Pariwisata\\11_Keindahan_Curug_Blek.JPG', 11),
(26, 'Tiket', '', 5000, NULL, 11),
(27, 'Bibir Pantai Cipatujah', '', NULL, 'img\\Pariwisata\\12_Bibir_Pantai_Cipatujah.jpg', 12),
(28, 'Tiket', '', NULL, NULL, 12),
(29, 'Tiket', '', NULL, NULL, 5),
(30, 'Tiket', '', NULL, NULL, 6),
(31, 'Tiket', '', NULL, NULL, 8),
(32, 'Tiket', '', NULL, NULL, 9),
(33, 'Tiket Weekend', '', 30000, NULL, 4),
(34, 'Wahana Labirin', '', NULL, 'img\\Pariwisata\\13_Wahana_Labirin.jpg', 13),
(35, 'Taman Bunga', '', NULL, 'img\\Pariwisata\\13_Taman_Bunga.jpg', 13),
(36, 'Ampitheater', '', NULL, 'img\\Pariwisata\\13_Ampitheater.jpg', 13),
(39, '1 porsi bubur ayam', 'Porsi bubur yang lebih banyak dengan suwiran ayam kampung, ati ayam, cakwe, dan daun bawang.', 25000, 'img\\Pariwisata\\14_1_porsi_bubur_ayam.jpg', 14),
(40, '1/2 porsi bubur ayam', 'Porsi bubur lebih sedikit ditambah dengan suwiran ayam kampung, ati ayam, cakwe, dan daun bawang.', 15000, 'img\\Pariwisata\\14_12_porsi_bubur_ayam.jpg', 14),
(41, '1 porsi bubur ayam', 'Porsi bubur yang lebih banyak dengan suwiran ayam kampung, ati ayam, cakwe, dan daun bawang.', 17000, 'img\\Pariwisata\\15_1_porsi_bubur_ayam.jpg', 15),
(42, '1/2 porsi bubur ayam', 'Porsi bubur lebih sedikit ditambah dengan suwiran ayam kampung, ati ayam, cakwe, dan daun bawang.', 12000, 'img\\Pariwisata\\15_12_porsi_bubur_ayam.jpg', 15),
(43, 'Sate telur puyuh', 'Tusukan beberapa telur puyuh', 3000, 'img\\Pariwisata\\15_Sate_telur_puyuh.jpg', 15),
(44, '1 porsi bubur ayam', 'Porsi bubur yang lebih banyak dengan suwiran ayam kampung, ati ayam, cakwe, daun bawang, ditambahkan sedikit kuah kaldu kekuningan, kerupuk atau empin', 18000, 'img\\Pariwisata\\16_1_porsi_bubur_ayam.jpg', 16),
(45, '1/2 porsi bubur ayam', 'Porsi bubur lebih sedikit ditambah dengan suwiran ayam kampung, ati ayam, cakwe, daun bawang, kerupuk atau emping', 12000, 'img\\Pariwisata\\16_12_porsi_bubur_ayam.jpg', 16),
(46, '1 porsi bubur ayam', 'Porsi bubur yang cukup dengan suwiran ayam kampung, ati ayam, cakwe, dan daun bawang.', 10000, 'img\\Pariwisata\\17_1_porsi_bubur_ayam.jpg', 17),
(47, '1 porsi bubur ayam spesial ati', 'Porsi bubur yang lebih banyak dengan suwiran ayam kampung, ati ayam, cakwe, daun bawang, kerupuk atau emping', 17000, 'img\\Pariwisata\\18_1_porsi_bubur_ayam_spesial_ati.jpg', 18),
(48, '1 porsi bubur ayam biasa', 'Porsi bubur yang lebih banyak dengan suwiran ayam kampung, cakwe, dan daun bawang, serta kerupuk', 15000, 'img\\Pariwisata\\18_1_porsi_bubur_ayam_biasa.jpg', 18),
(49, 'Bubur ayam kumplit', '(merica, kecap, cakwe, daun bawang, kacang, bawang goreng, ampela, suwir ayam, kerupuk)', 10000, 'img\\Pariwisata\\19_Bubur_ayam_kumplit.jpg', 19),
(50, 'Bubur ayam biasa', '(merica, kecap, cakwe, daun bawang, kacang, bawang goreng, suwir ayam, kerupuk)', 8000, NULL, 19),
(51, 'Bubur ayam komplit special', '(merica, kecap, cakwe, daun bawang, kacang, bawang goreng, suwir ayam, ampela, sate telor puyuh, telor ayam, kerupuk)', 18000, 'img\\Pariwisata\\19_Bubur_ayam_komplit_special.jpeg', 19),
(52, 'Sate telur puyuh', 'Tusukan beberapa telur puyuh', 3000, 'img\\Pariwisata\\19_Sate_telur_puyuh.jpg', 19),
(53, 'Mie Bakso', 'Mie bakso dengan kuah berkaldu dipadu dengan potongan kecil daging ayam.', 35000, 'img\\Pariwisata\\20_Mie_Bakso.jpeg', 20),
(54, 'Pangsit Kuah', 'Pangsit berisikan daging ayam.', 35000, 'img\\Pariwisata\\20_Pangsit_Kuah.jpeg', 20),
(55, '1/2 Porsi Mie Bakso', 'Porsi mie bakso yang hanya setengahnya.', 25000, 'img\\Pariwisata\\20_12_Porsi_Mie_Bakso.jpeg', 20),
(56, 'Sop Buah', 'Potongan buah nangka, melon, tomat, peuyeum, agar-agar, anggur, & kelapa yang disiram sirop beserta es parut.', 15000, 'img\\Pariwisata\\20_Sop_Buah.JPG', 20),
(57, 'Mie bakso kumplit', '(Mie/bihun, yamin manis/asin, bakso goreng + bakso sapi + tahu + kuah + bawang daun + bawang goreng + daging ayam cingcang)', 25000, 'img\\Pariwisata\\21_Mie_yamin_kumplit.jpg', 21),
(58, 'Mie bakso biasa', '(Mie/bihun, yamin manis/asin, bakso goreng + bakso sapi + kuah+ bawang daun + bawang goreng + daging ayam cingcang)', 16000, 'img\\Pariwisata\\21_Mie_bakso_biasa.jpg', 21),
(59, 'Mie Bakso ', '(Mie/bihun + kol + bakso (ati/gaji) + kuah + bawang goreng)', 10000, 'img\\Pariwisata\\22_Mie_Bakso_.JPG', 22),
(60, 'Mie bakso kumplit', '(Mie/bihun, yamin manis/asin, bakso sapi gede + bakso sapi kecil + kuah + bawang daun + bawang goreng + daging ayam cingcang)', 17500, 'img\\Pariwisata\\23_Mie_bakso_kumplit.jpg', 23),
(61, 'Bakso Campur', '(Bakso sapi mulus + bakso urat + tahu bakso + kuah + bawang goreng)', 12000, 'img\\Pariwisata\\23_Bakso_Campur.jpg', 23),
(62, 'Mie Bakso + Tahu Bakso', 'Mie Bakso diyamin manis beserta taburan daging cincang. Dilengkapi juga dengan tahu bakso kuah.', 17000, 'img\\Pariwisata\\24_Mie_Bakso_+_Tahu_Bakso.jpg', 24),
(63, 'Mie Ayam', 'Mie ditambah dengan toping suiran daging ayam.', 14000, 'img\\Pariwisata\\25_Mie_Ayam.jpg', 25),
(64, 'Mie Ayam + Bakso', 'Mie ayam ditambah dengan toping bakso.', 20000, 'img\\Pariwisata\\25_Mie_Ayam_+_Bakso.jpg', 25),
(65, 'Mie bakso kumplit', '(Mie/bihun, yamin manis/asin + bakso sapi + sayur + bawang daun + bawang goreng + ayam cingcang)', 25000, 'img\\Pariwisata\\26_Mie_bakso_kumplit.jpg', 26),
(66, 'Mie goreng', '(Mie goreng + irisan baso + suwir ayam + sayur + bawang goreng)', 30000, 'img\\Pariwisata\\26_Mie_goreng.jpg', 26),
(67, 'Nasi goreng', 'nasi goreng + potongan baso + suwiran ayam + sayur', 30000, 'img\\Pariwisata\\26_Nasi_goreng.jpg', 26),
(68, 'Mie Bakso Medium', 'Mie dengan toping bakso kecil dan bakso ukuran medium.', 15000, 'img\\Pariwisata\\27_Mie_Bakso_Medium.jpg', 27),
(69, 'Mie Bakso Krikil', 'Mie dengan toping bakso yang sangat kecil-kecil terlihat seperti krikil karena saking banyaknya.', 15000, 'img\\Pariwisata\\27_Mie_Bakso_Krikil.jpg', 27),
(70, 'Bakso Istigfar', 'Bakso dengan ukuran jumbo sebesar satu mangkok.', 28000, 'img\\Pariwisata\\27_Bakso_Istigfar.jpg', 27),
(71, 'Soto Ayam', 'Soto dengan menggunakan ayam kampung.', 15000, 'img\\Pariwisata\\28_Soto_Ayam.jpg', 28),
(72, 'Soto Ayam + Telor Muda', 'Soto ayam kampung ditambah telor muda dari ayam kampung.', 25000, 'img\\Pariwisata\\28_Soto_Ayam_+_Telor_Muda.jpg', 28),
(73, 'Soto Sapi', 'Soto dengan daging sapi yang lunak beserta kuah yang gurih. Sudah termasuk nasi.', 22000, 'img\\Pariwisata\\29_Soto_Sapi.jpg', 29),
(74, '1/2 Porsi', '1/2 Porsi dari soto dengan daging sapi yang lunak beserta kuah yang gurih. Sudah termasuk nasi.', 13000, 'img\\Pariwisata\\29_12_Porsi.jpg', 29),
(75, 'Soto Ayam', 'Seporsi soto ayam dengan nasi.', 24000, 'img\\Pariwisata\\30_Soto_Ayam.jpg', 30),
(76, '1/2 Porsi Soto Ayam', 'Soto ayam dengan porsi hanya setengahnya. Sudah termasuk nasi.', 15000, 'img\\Pariwisata\\30_12_Porsi_Soto_Ayam.jpg', 30),
(77, '1 porsi soto ayam', '(porsi nasi putih banyak + daging ayam kampung suwir + bawang goreng + bawang daun + kacang kedelai goreng + kuah )', 20000, 'img\\Pariwisata\\31_1_porsi_soto_ayam.jpg', 31),
(78, '1/2 porsi soto ayam', '(porsi nasi putih sedikit + daging ayam kampung suwir + bawang goreng + bawang daun + kacang kedelai goreng + kuah )', 12000, 'img\\Pariwisata\\31_12_porsi_soto_ayam.jpg', 31),
(79, 'Soto Ayam', 'Soto ayam satu porsi sudah termasuk dengan nasi.', 25000, 'img\\Pariwisata\\32_Soto_Ayam.jpg', 32),
(80, '1/2 Soto Ayam', 'Soto ayam satu setengah porsi. Sudah termasuk dengan nasi.', 15000, 'img\\Pariwisata\\32_12_Soto_Ayam.jpg', 32),
(81, 'Soto Ayam', 'Soto ayam yang sudah termasuk dengan nasi.', 15000, 'img\\Pariwisata\\33_Soto_Ayam.JPG', 33),
(82, '1 porsi soto ayam', '(porsi nasi putih banyak + daging ayam kampung suwir + bawang goreng + bawang daun + kacang kedelai goreng + kuah )', 17000, 'img\\Pariwisata\\34_1_porsi_soto_ayam.jpg', 34),
(83, '1/2 porsi', '(porsi nasi putih sedikit + daging ayam kampung suwir + bawang goreng + bawang daun + kacang kedelai goreng + kuah )', 15000, 'img\\Pariwisata\\34_12_porsi.jpg', 34),
(84, '1 Porsi Nasi Tutug Oncom', '(Nasi + oncom + leunca + timun + sambal hijau/merah)', 8000, 'img\\Pariwisata\\35_1_Porsi_Nasi_Tutug_Oncom.jpg', 35),
(85, 'Gorengan', 'Cipe/ Tempe/ Tahu', 1000, 'img\\Pariwisata\\35_Gorengan.jpg', 35),
(86, '1 porsi lengko ayam biasa', '(kupat + suwiran ayam + kuah + kerupuk + acar + sambel)', 15000, 'img\\Pariwisata\\36_1_porsi_lengko_ayam_biasa.jpg', 36),
(87, '1 porsi lengko ayam + telur', '(kupat + suwiran ayam + kuah + kerupuk + acar + sambel + telur)', 18000, 'img\\Pariwisata\\36_1_porsi_lengko_ayam_+_telur.jpg', 36),
(88, '1 porsi rujak ', '(bumbu rujak + nanas + bengkuang + kedondong + mangga + jambu + ubi)', 25000, 'img\\Pariwisata\\37_1_porsi_rujak_.jpg', 37),
(89, 'Aneka kolak', 'Candil/ Ketan hitam/ kacang ijo/ sekoteng', 8000, 'img\\Pariwisata\\37_Aneka_kolak.jpg', 37),
(90, 'Es Campur Tanpa duren', '(Es + alpuket + agar-agar + nangka + kelapa + anggur + pacar cina)', 12000, 'img\\Pariwisata\\38_Es_Campur_Tanpa_duren.jpg', 38),
(91, 'Es Campur Duren Biasa', '(Es + alpuket + agar-agar + nangka + kelapa + anggur + pacar cina + duren)', 18000, 'img\\Pariwisata\\38_Es_Campur_Duren_Biasa.jpg', 38),
(92, 'Es Campur Duren Biasa', '(Es + alpuket + agar-agar + nangka + kelapa + anggur + pacar cina + duren)', 18000, 'img\\Pariwisata\\38_Es_Campur_Duren_Biasa.jpg', 38),
(93, 'Es Campur Duren Spesial', '(Es + alpuket + agar-agar + nangka + kelapa + anggur + pacar cina + duren lebih banyak)', 25000, 'img\\Pariwisata\\38_Es_Campur_Duren_Spesial.jpg', 38),
(94, 'Es Duren', '(Es + Duren + kuah susu)', 18000, 'img\\Pariwisata\\38_Es_Duren.jpg', 38),
(95, 'Es Campur Duren ', '(Es + tape + agar-agar + nangka + kelapa + alpukat + cingcau + duren)', 12000, 'img\\Pariwisata\\39_Es_Campur_Duren_.jpg', 39),
(96, 'Es Campur Biasa', '(Es + tape + agar-agar + nangka + kelapa + alpukat + cingcau)', 10000, 'img\\Pariwisata\\39_Es_Campur_Biasa.jpg', 39),
(97, 'Siomay', '(baso tahu/ siomay/ telor/ tahu/ kentang/ kol)', 2000, 'img\\Pariwisata\\39_Siomay.jpg', 39),
(98, 'Lumpia Basah Telor + Baso + Sosis ', '(campuran tauge + tahu + telur + baso + sosis + bumbu masak yang ditumis + dibungkus dengan lumpia + olahan bengkoang)', 19000, 'img\\Pariwisata\\41_Lumpia_Basah_Telor_+_Baso_+_Sosis_.jpg', 41),
(99, 'Lumpia Basah Telor + Sosis + Daging Ayam', '(campuran tauge + tahu + telur + suwiran daging ayam + sosis + bumbu masak yang ditumis + dibungkus dengan lumpia + olahan bengkoang)', 19000, 'img\\Pariwisata\\41_Lumpia_Basah_Telor_+_Sosis_+_Daging_Ayam.jpg', 41),
(100, 'Lumpia Basah Telor + Daging Ayam', '(campuran tauge + tahu + telur + suwiran daging ayam + bumbu masak yang ditumis + dibungkus dengan lumpia + olahan bengkoang)', 16000, 'img\\Pariwisata\\41_Lumpia_Basah_Telor_+_Daging_Ayam.jpg', 41),
(101, 'Lumpia Basah Telor + Baso', '(campuran tauge + tahu + telur + baso + bumbu masak yang ditumis + dibungkus dengan lumpia + olahan bengkoang)', 16000, 'img\\Pariwisata\\41_Lumpia_Basah_Telor_+_Baso.jpg', 41),
(102, 'Lumpia Basah Telor', '(campuran tauge + tahu + telur + bumbu masak yang ditumis + dibungkus dengan lumpia + olahan bengkoang)', 13000, 'img\\Pariwisata\\41_Lumpia_Basah_Telor.jpg', 41),
(103, 'Lumpia Komplit', '(campuran tauge + tahu + telur +baso + sosis + suwiran daging ayam + bumbu masak yang ditumis + dibungkus dengan lumpia + olahan bengkoang)', 22000, 'img\\Pariwisata\\41_Lumpia_Komplit.jpg', 41),
(104, 'Makaroni basah', '(Makaroni rebus, lalu goreng setengah matang + penyedap rasa asin + pedas)', 5000, 'img\\Pariwisata\\40_Makaroni_basah.jpg', 40),
(105, 'Makaroni Kering', '(Makaroni kering + bumbu penyedap asin + pedas)', 5000, 'img\\Pariwisata\\40_Makaroni_Kering.jpg', 40),
(106, 'Paket Ceker', '(kwetiaw + mie kuning + bakwan kering + kol + sayur + cilok + tahu + ceker + telor)', 15000, 'img\\Pariwisata\\42_Paket_Ceker.jpg', 42),
(107, 'Paket Usus', '(kwetiaw + mie kuning + bakwan kering + kol + sayur + cilok + tahu + usus + telor)', 15000, 'img\\Pariwisata\\42_Paket_Usus.jpg', 42),
(108, 'Paket Kepala Ayam', '(kwetiaw + mie kuning + bakwan kering + kol + sayur + cilok + tahu + kepala ayam + telor)', 15000, 'img\\Pariwisata\\42_Paket_Kepala_Ayam.jpg', 42),
(109, 'Paket Kulit', '(kwetiaw + mie kuning + bakwan kering + kol + sayur + cilok + tahu + kulit + telur)', 15000, 'img\\Pariwisata\\42_Paket_Kulit.jpg', 42),
(110, 'Paket Tulang', '(kwetiaw + mie kuning + bakwan kering + kol + sayur + cilok + tahu + tulang + telor)', 15000, 'img\\Pariwisata\\42_Paket_Tulang.jpg', 42),
(111, '1 porsi bubur ayam', '(bubur + suwiran ayam + cakwe + bawang goreng + kerupuk)', 10000, 'img\\Pariwisata\\43_1_porsi_bubur_ayam.jpg', 43),
(112, 'Pecel', 'Terdiri dari kangkung, kacang panjang, waluh, tauge, dan saus bumbu kacang.', 12000, 'img\\Pariwisata\\44_Pecel.jpg', 44),
(113, 'Surabi Kismis Susu', 'Surabi dengan toping kismis dan susu kental manis.', 10000, 'img\\Pariwisata\\45_Surabi_Kismis_Susu.jpg', 45),
(114, 'Surabi Ayam Suir', 'Surabi dengan toping suiran daging ayam.', 10000, 'img\\Pariwisata\\45_Surabi_Ayam_Suir.jpg', 45),
(115, 'Surabi Oncom', 'Surabi ditambah toping oncom.', 1500, 'img\\Pariwisata\\46_Surabi_Oncom.JPG', 46),
(116, 'Surabi Manis Gula', 'Surabi manis.', 1500, 'img\\Pariwisata\\46_Surabi_Manis_Gula.jpg', 46),
(117, 'Surabi Keju', 'Surabi dengan toping keju.', 2500, 'img\\Pariwisata\\46_Surabi_Keju.JPG', 46),
(118, 'Surabi Ayam', 'Surabi dengan toping suiran daging ayam.', 2500, 'img\\Pariwisata\\46_Surabi_Ayam.JPG', 46),
(119, 'Sumur Tawar', 'Susu murni tawar (original).', 6500, 'img\\Pariwisata\\47_Sumur_Tawar.jpg', 47),
(120, 'Sumur OREO', 'Susu murni rasa OREO.', 8500, 'img\\Pariwisata\\47_Sumur_OREO.jpg', 47),
(121, 'Sumur Manis', 'Susu murni yang ditambah gula.', 7000, 'img\\Pariwisata\\47_Sumur_Manis.jpg', 47),
(122, 'Sumur Coklat', 'Susu murni dengan rasa coklat.', 7500, 'img\\Pariwisata\\47_Sumur_Coklat.jpg', 47),
(123, 'Sumur Jahe', 'Susu murni ditambah dengan jahe.', 8000, 'img\\Pariwisata\\47_Sumur_Jahe.jpg', 47),
(124, 'Sumur Telor Madu', 'Susu murni ditambah dengan madu dan telor.', 10000, 'img\\Pariwisata\\47_Sumur_Telor_Madu.jpg', 47),
(125, 'Sumur Melon', 'Susu murni dengan rasa melon.', 7000, 'img\\Pariwisata\\47_Sumur_Melon.jpg', 47),
(126, 'Kupat Tahu', 'Kupat ditambah tahu yang disiram dengan bumbu kacang.', 12000, 'img\\Pariwisata\\48_Kupat_Tahu.jpg', 48),
(127, 'Kupat Tahu', 'Kupat, tahu, bumbu kacang, daun bawang, dan tauge.', 12500, 'img\\Pariwisata\\49_Kupat_Tahu.jpg', 49),
(128, 'Kupat Tahu', 'Kupat, tahu, bumbu kacang dengan sedikit rasa pedas.', 20000, 'img\\Pariwisata\\50_Kupat_Tahu.jpg', 50),
(129, 'Tiket', '', NULL, '', 53),
(130, 'Berenang di aliran sungai', '', NULL, 'img\\Pariwisata\\53_Berenang_di_aliran_sungai.jpg', 53);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_terendah`
-- (See below for the actual view)
--
CREATE TABLE `harga_terendah` (
`fk_pariwisata` int(11)
,`harga_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `objek_wisata`
-- (See below for the actual view)
--
CREATE TABLE `objek_wisata` (
`id_pariwisata` int(11)
,`nama` varchar(50)
,`deskripsi` text
,`alamat` varchar(150)
,`telepon` varchar(14)
,`buka` varchar(15)
,`kategori` varchar(25)
,`email` varchar(50)
,`rating` decimal(14,4)
,`url_map` varchar(255)
,`foto` varchar(150)
,`harga_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id_pariwisata` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(14) DEFAULT NULL,
  `buka` varchar(15) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `url_map` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id_pariwisata`, `nama`, `deskripsi`, `alamat`, `telepon`, `buka`, `kategori`, `email`, `rating`, `url_map`, `foto`) VALUES
(1, 'Lembah Gunung Galunggung', 'Gunung Galunggung merupakan gunung berapi dengan ketinggian 2.167 meter di atas permukaan laut, terletak sekitar 17 km dari pusat kota Tasikmalaya, 100 km dari Bandung, dan 350 km dari Jakarta. Untuk mencapai puncak Galunggung, dibangun sebuah tangga yang memiliki 620 anak tangga. Agar lebih menarik minat pengunjung, pihak pengelola memasang lampu-lampu indah di gardu pandang dan anak tangga agar wisatawan tidak hanya dapat berfoto siang hari, tetapi juga malam hari dengan pemandangan kerlip lampu kota Tasikmalaya dari ketinggian.', 'Kecamatan Leuwisari, Kota Tasikmalaya, Provinsi Jawa Barat', '', '07.00 - 21.00', 'gunung', '', NULL, 'https://goo.gl/maps/RnyyMMRvwn32', 'img\\Pariwisata\\1_Lembah_Gunung_Galunggung.jpg'),
(2, 'Pemandian Air Panas Gunung Galunggung', 'Gunung Galunggung merupakan salah satu objek pariwisata andalan di Kabupaten Tasikmalaya yang hingga saat ini masih menjadi primadona. Berada satu kompleks dengan wisata kawah Galunggung, kolam pemandian air panas atau lebih dikenal Cipanas Galunggung menawarkan kenikmatan berendam air panas alami. Terdapat beberapa kolam renang, dari yang umum dan kolam renang yang privat bernuansa alam dengan dikelilingi pepohonan. ', 'Desa Linggajati, Kecamatan Sukaratu, Tasikmalaya, Jawa Barat ', '', '07.00 - 21.00', 'kolam-renang', '', NULL, 'https://goo.gl/maps/Xz8W1HpZgBU2', 'img\\Pariwisata\\2_Pemandian_Air_Panas_Gunung_Galunggung.jpg'),
(3, 'Situ Gede', 'Dalam bahasa Sunda, Situ berarti danau, sedangkan Gede memiliki makna besar atau luas, jadi memang pada kenyataannya, Situ Gede ini mempunyai wilayah yang amat luas, yaitu sekitar 47 hektar dan kedalaman hingga 6 meter. Ada banyak gazebo yang disediakan oleh pengelola. Gazebo-gazebo tersebut berada di atas air yang dilengkapi dengan meja dan kursi sebagai tempat bersantai. Di samping beberapa fasilitas tersebut, masih ada beberapa fasilitas penunjang lainnya yang bisa pengunjung nikmati diantaranya Mushola, kamar mandi, jogging track, dan perahu. Anda bisa melihat-lihat keseluruhan Situ Gede dengan memanfaatkan fasilitas perahu yang ada.', 'Kecamatan Mangkubumi, Kota Tasikmalaya Provinsi, Jawa Barat', '', '07.00 - 20.00', 'danau', '', NULL, 'https://goo.gl/maps/Rj6UTnwdmLU2', 'img\\Pariwisata\\3_Situ_Gede.jpg'),
(4, 'Water Boom Tee Jay', 'Wisata kolam renang selalu menjadi salah satu destinasi favorit wisatawan untuk menikmati liburan akhir pekan. Hampir di setiap daerah di Indonesia, telah memiliki tempat wisata air yang hits, baik kolam renang alam, atau waterpark hingga waterboom. Seperti yang ada di Tasikmalaya Jawa Barat, terdapat wahana permainan air yang sedang ngehits, yaitu Teejay Waterpark.  Di Teejay Waterpark ini, terdapat beragam wahana air menarik seperti Water Slide, Kolam Arus, Kolam Ombak, Kolam Renang Khusus Orang Dewasa dan Anak-anak. Di sini, Kalian bisa berswafoto di spot-spot keren, dengan panorama alam yang indah menjadi background-nya.', 'Komplek Plaza Asia, Kecamatan Cihideung, Kota Tasikmalaya, Provinsi Jawa Barat ', '(0265) 2350025', '09.00 - 18.00', 'kolam-renang', '', NULL, 'https://goo.gl/maps/fh9wqrNb7fM2', 'img\\Pariwisata\\4_Water_Boom_Tee_Jay.jpg'),
(5, 'Tonjong Canyon', 'Tonjong Canyon adalah Wisata yang menawarkan kesegaran sungai di pedesaan. Sungai yang berada di Tonjong Canyon dikelilingi oleh tebing bebatuan berwarna coklat dan pepohonan yang rindang. Keindahan tersebut menjadi spot objek menarik bagi anda yang ingin berfoto selfie ataupun menikmati air sungai dengan melakukan atraksi lompat dari tebing canyon. ', 'Desa Nagrog, Kecamatan Cipatujah, Kabupaten Tasikmalaya, Provinsi Jawa Barat ', '', '7.00 - 18.00', 'air-terjun-dan-sungai', '', NULL, 'https://goo.gl/maps/smjWNynxwAJ2', 'img\\Pariwisata\\5_Tonjong_Canyon.jpg'),
(6, 'Curug Dengdeng', 'Curug, yang merupakan istilah untuk penyebutan air terjun ini pertama kali digunakan oleh orang - orang sunda (Jawa Barat). Curug dengdeng merupakan wisata air terjun yang memiliki keunikan, yaitu struktur air terjun yang memiliki beberapa tingkatan. Tingkatan pertama merupakan muara sungai, dari sana anda bisa menikmati keindahan dari atas ketinggian 9 meter. Di tingkatan kedua 11 meter dan di tingkatan terakhir 13 meter.', 'Cikatomas, Tawang, Pancatengah, Tasikmalaya, Jawa Barat', '', '07.00 - 18.00', 'air-terjun-dan-sungai', '', NULL, 'https://goo.gl/maps/e3u4HCpSQw42', 'img\\Pariwisata\\6_Curug_Dengdeng.jpg'),
(7, 'Pantai Karang Tawulan', 'Pantai Karang Tawulan merupakan pantai yang memiliki daya tarik pantai berupa bentukan tebing yang sedikit menjorok ke tengah laut, dengan pantai pasir yang indah dan sedikit tersembunyi dibagian bawah kiri dan kanan tebing. Area pantai Karang Tawulan sendiri sebetulnya cukup luas, dan mempunyai fasilitas yang cukup lengkap.\r\nDi area utama yang berada diatas tebing, anda bisa beristirahat di warung-warung yang tersedia dengan sarana parkir yang cukup luas.', 'Desa Cimanuk, Kecamatan Cikalong, Kabupaten Tasikmalaya', '', '05.00 - 20.00', 'pantai', '', NULL, 'https://goo.gl/maps/tjCSKGqtmiM2', 'img\\Pariwisata\\7_Pantai_Karang_Tawulan.jpg'),
(8, 'Pantai Sindang Kerta ', 'Pantai sindangkerta, pantai yang terletak 76 kilometer dari Kota Tasikmalaya merupakan pantai yang dapat digunakan untuk berenang. Memiliki kondisi geografis yang berkarang sejauh 20 meter dari bibir pantai hingga deburan ombak pantai. Jika beruntung dipantai ini anda dapat menemukan banyak biota laut seperti ikan, udang, keran, hingga bintang laut yang terjebak diantara karang - karang.', 'Desa Sindangkerta, Kecamatan Cipatujah, Kabupaten Tasikmalaya, Jawa Barat', '', '05.00 - 20.00', 'pantai', '', NULL, 'https://goo.gl/maps/aRnGs7XuR2y', 'img\\Pariwisata\\8_Pantai_Sindang_Kerta_.jpg'),
(9, 'Kebun Teh Taraju', 'Salah satu destinasi agrowisata di Tasik ini sangat cocok untuk anda, para pelancong yang sudah sumpek dengan hiruk pikuk kehidupan kota. Kebun teh Taraju tak ubahnya seperti karpet permadani hijau yang membentang luas, sungguh memanjakan mata yang memandang. Udara yang sejuk ditambah panorama alam yang indah menjadi ciri khas perkebunan teh Taraju. Tak kalah dengan perkebunan teh puncak Bogor atau Perkebunan teh Ciwidey Bandung.', 'Desa Banyuasin, Kecamatan Taraju, Kabupaten Tasikmalaya, Provinsi Jawa Barat', '', '24 Jam', 'wisata-lainnya', '', NULL, 'https://goo.gl/maps/TvGfTCUdWXT2', 'img\\Pariwisata\\9_Kebun_Teh_Taraju.jpg'),
(10, 'Kampung Naga', 'Kampung Naga terletak di Tasikmalaya, Jawa Barat, merupakan suatu perkampungan yang dihuni oleh sekelompok masyarakat yang sangat kuat dalam memegang adat istiadat peninggalan leluhurnya, dalam hal ini adalah adat Sunda. Seperti permukiman Badui, Kampung Naga menjadi objek kajian antropologi mengenai kehidupan masyarakat pedesaan Sunda pada masa peralihan dari pengaruh Hindu menuju pengaruh Islam di Jawa Barat. \r\n Kampung ini berada di lembah yang subur, dengan batas wilayah, di sebelah Barat Kampung Naga dibatasi oleh hutan keramat karena di dalam hutan tersebut terdapat makam leluhur masyarakat Kampung Naga. Di sebelah selatan dibatasi oleh sawah-sawah penduduk, dan di sebelah utara dan timur dibatasi oleh Ci Wulan (Kali Wulan) yang sumber airnya berasal dari Gunung Cikuray di daerah Garut.', 'Desa Neglasari, Kecamatan Salawu Kabupaten Tasikmalaya, Provinsi Jawa Barat ', '(0265) 547541', '24 Jam', 'wisata-lainnya', '', NULL, 'https://goo.gl/maps/VE3r49kk7bA2', 'img\\Pariwisata\\10_Kampung_Naga.jpg'),
(11, 'Curug Batu Blek', 'Gemuruh suara jatuhan air Curug Batu Blek memecah keheningan alam kawasan hutan Cisanyong Tasikmalaya. Tak sampai di situ, airnya yang segar serta suasana alam yang terbilang masih perawan ini pun jadi magnet tersendiri wisata Curug Batu Blek. Maklum saja, untuk mencapai lokasi pengunjung harus menempuh petualangan alam dengan berjalan kaki. Dari pusat Kota Tasikmalaya, Curug Batu Blek dapat diakses lewat jalur Tasikmalaya menuju Cisayong lalu ke Curug Batu Blek. Jarak tempuhnya sekitar 17 Km.', 'Desa Santanamekar, Kecamatan Cisayong, Tasikmalaya, Provinsi Jawa Barat', '', '07.00 - 18.00', 'air-terjun-dan-sungai', '', NULL, 'https://goo.gl/maps/P3A2pD26NKr', 'img\\Pariwisata\\11_Curug_Batu_Blek.jpg'),
(12, 'Pantai Selatan Cipatujah', 'Keindahan Pantai Selatan Cipatujah Kabupaten Tasikmalaya, Jawa Barat dikenal karena pantainya panjang, ombak yang besar serta masih alami belum atau disentuh tangan-tangan pemodal. Pantai di ujung selatan Tasikmalaya ini ini menjadi tujuan wisata laut ketiga Priangan Timur setelah Pangandaran dan Santolo Garut Selatan.', 'Cipatujah, Tasikmalaya, Jawa Barat ', '', '07.00 - 21.00', 'pantai', '', NULL, 'https://goo.gl/maps/j4caYhq1Q3K2', 'img\\Pariwisata\\12_Pantai_Selatan_Cipatujah.jpg'),
(14, 'Bubur Ayam Zaenal', 'Tekstur buburnya tidak terlalu kental yaitu agak cair, dan untuk toppingnya melimpah ruah, terdapat beberapa topping, berupa suwiran ayam kampung, ati ayam, cakwe, dan daun bawang. Topping bisa dipesan sesuai dengan selera. Keseluruhan topping bisa mengisi 45% dari ukuran mangkuknya.', 'Jl. R. Ikik Wiradikarta No.56-30, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '', '06-00 - 14.00', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/34UeoMwbdPG2', 'img\\Pariwisata\\14_Bubur_Ayam_Zaenal.jpg'),
(15, 'Bubur Ayam Pak Nana', 'Bubur ayam ini mempunyai keistimewaan, tidak menggunakan penyedap rasa seperti bubur ayam kebanyakan. Tekstur buburnya cukup kental. Topping suwiran ayam kampungnya melimpah, terdapat juga aneka topping lain seperti ati ayam, cakwe, telur puyuh dan daun bawang.', 'Jl. Rumah Sakit No.28, Empangsari, Tawang, Tasikmalaya, Jawa Barat 46113', '', '05.30 - 10.30', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/RLs9n6HTUtq', 'img\\Pariwisata\\15_Bubur_Ayam_Pa_Nana.jpg'),
(16, 'Bubur Ayam Engkus', 'Buburnya terasa lebih gurih dan kental. bisa di tambah dengan toping sate-satean sepeti usus, ati ampela, dan telor puyuh, harganya relatif murah dan terjangkau.', 'Jl. Raya Sumedang - Cibeureum, Cikalang, Tawang, Tasikmalaya, Jawa Barat 46114', '', '06.00 - 10.00', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/P3MietrwtSD2', 'img\\Pariwisata\\16_Bubur_Ayam_Engkus.jpg'),
(17, 'Bubur Ayam Biasa Malam', 'Untuk 1 porsinya bubur ini disajikan kira-kira bisa sampai setengah atau 3/4 mangkok, berbeda dengan penyajian tukang bubur lainnya yang biasanya setumpuk. Tekstur dari bubur ayam ini lebih cair dari pada bubur ayam pada umumnya. Untuk rasanya cukup dengan harga yg relatif murah. Untuk specialnya ada ati ampela sebagai topping tambahan.', 'Prapatan, Jl. Gunung Sabeulah, Argasari, Cihideung, Tasikmalaya, Jawa Barat 46122', '', '16.00 – 06.00 ', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/xXFqG77c9812', 'img\\Pariwisata\\17_Bubur_Ayam_Biasa_Malam.jpg'),
(18, 'Bubur Ayam Dokar', 'Rasa yang asin nan gurih menjadi daya tarik dari bubur satu ini. Harganya cukup terjangkau, bubur dengan berbagai topping seperti cakue, ayam, potongan ati dan lain lain.', 'Jl. Raya Rajapolah - Tasikmalaya No.26-22, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '', '06.00 - 11.00, ', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/nh9QkoCnb1T2', 'img\\Pariwisata\\18_Bubur_Ayam_Dokar.jpg'),
(19, 'Bubur Ayam Mang Ade', 'Bubur yg tidak terlalu cair atau terbilang cukup kental, gurih tak berlebihan, disajikan dalam keadaan panas dengan pelengkap cakwe, kacang, bawang goreng, bawang daun, ayam suwir, ati-ampela ayam dan telor ayam rebus. Dilengkapi kerupuk dan emping. ', 'Empangsari, Tawang, Tasikmalaya, Jawa Barat 46113', '', '06.00 - 10.00', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/ByzJYmrJxHw', 'img\\Pariwisata\\19_Bubur_Ayam_Mang_Ade.jpg'),
(20, 'Mie Bakso Laksana', 'Mie Bakso yang terdiri dari daging cincang, bawang bombay, bakso, dan kuah yang disajikan dengan terpisah. Terdiri juga menu mie bakso lainnya.', 'Jl. Pemuda No.5, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', '(0265) 333883', '09.00 - 21.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/vuXBdMRuef52', 'img\\Pariwisata\\20_Mie_Bakso_Laksana.jpeg'),
(21, 'Mie Bakso Toto', 'Mie bakso ini berbeda dengan mie bakso pada umumnya, tekstur dari mie nya sendiri lebih tebal dan lebih empuk, saus yang digunakan dalam bakso pun berbeda, menggunakan saus bawang bukan saus cabai. Di Mie bakso Toto juga disediakan laucupan, bentuknya panjang dan tebal berwarna putih terbuat dari beras, lalu ditambah bermacam-macam varian Bakso dari bakso urat, bakso goreng, bakso gepeng, bakso tahu, dll.', 'Jalan Babakan Payung 3, Nagarawangi, Cihideung, Tasikmalaya, Jawa Barat', '0853-2035-3794', '08.00 - 17.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/9gcdTuLDxUBbfh9m9', 'img\\Pariwisata\\21_Mie_bakso_Toto.jpg'),
(22, 'Mie Bakso Kurdi', 'Bakso ini mempunyai ciri khas mie nya yang dicampur dengan kol dan kuah yang segar. Baksonya pun bakso aci, yang di dalamnya terdapat isian Ati/ gajih.', 'Jl. Gunung Sabeulah No.42, Argasari, Cihideung, Tasikmalaya, Jawa Barat 46122', '', '17.00 - 22.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/fE4bLrAzC9HJAft27', 'img\\Pariwisata\\22_Mie_bakso_kol_Kurdi.jpg'),
(23, 'Mie Bakso Firman', 'Jagonya bakso urat di Tasikmalaya, baksonya cukup kenyal, teksturnya pas layaknya bakso urat pada umumnya. kuahnya gurih. Kenyal mienya pas, manisnya juga tidak berlebihan dengan asin yang cukup. ', 'Jl. Dr. Sukardjo No.103, Panglayungan, Simpang Lima, Tasikmalaya, Jawa Barat 46134', '', '10.00 - 22.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/tnJGiwB2d8ygLZeg8', 'img\\Pariwisata\\23_Mie_bakso_Firman.jpg'),
(24, 'Mie Bakso Loma', 'Mie bakso yang memiliki rasa segar karena menggunakan sedikit lemon. Bentuk mie nya juga cenderung lebih berbentuk seperti kwetiau. Makan mie ini harus dengan tahu baksonya, karena kunci kenikmatan mie bakso loma adalah dimakan beserta dengan tahu baksonya.', 'Jl. Tarumanagara No.15, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '0823-1746-8742', '08.00 - 20.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/hQNDihbVPgGv8x3w6', 'img\\Pariwisata\\24_Mie_Bakso_Loma.jpg'),
(25, 'Mie Bakso Borju', 'Terkenal karena menu mie ayamnya. Banyak daging ayam pada seporsinya pun tidak tanggung-tanggung. Selain itu mie ayamnya juga bisa ditambah dengan bakso. Anda juga bisa memesan hanya mie baksonya saja tanpa daging ayam.', 'Tuguraja, Cihideung, Tasikmalaya, West Java 46125', '', '08.00 - 15.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/2iutabLwJxVaUSg18', 'img\\Pariwisata\\25_Mie_Bakso_Borju.jpg'),
(26, 'Mie bakso 55', 'Mie Bakso 55 menyediakan aneka macam bakso seperti: mie bakso pangsit, mie bakso babat, mie bakso ceker, mir bakso kumplit.', 'Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '0853-2361-1977', '15.00 - 00.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/4nVvYH58FZSNawWr7', 'img\\Pariwisata\\26_Mie_bakso_55.jpg'),
(27, 'Mie Bakso Gejrot', 'Mie dengan banyaknya varian bakso yang disuguhkan. Ada bakso dengan ukuran standar, mungil seperti krikil, dan ada juga yang berukuran jumbo sebesar 1 mangkuk.', 'Jl. Cempakawarna, Gg. Mawar 2 No.11, RT.002/RW.010, Cilembang, Cihideung, Tasikmalaya, Jawa Barat 46123', '', '10.00 - 19.00', 'mie-bakso', '', NULL, 'https://goo.gl/maps/eb3qRx3k4Ce1Ggz66', 'img\\Pariwisata\\27_Mie_Bakso_Gejrot.jpg'),
(28, 'Soto Ayam Kampung Nonoy', 'Soto dengan menggunakan ayam kampung membuat dagingnya ini lebih berasa, ditambah lagi dengan kuahnya yang gurih dan khas.', 'Jl. Ir. H. Juanda, Bantarsari, Bungursari, Tasikmalaya, Jawa Barat 46151', '0821-2081-9439', '07.00 - 15.00', 'soto', '', NULL, 'https://goo.gl/maps/ythj5VB5fRC2', 'img\\Pariwisata\\28_Soto_Ayam_Kampung_Nonoy.jpg'),
(29, 'Soto Sapi Didi', 'Soto Sapi H. Didi selalu mempertahankan resep & cita rasa dari tahun 1958 sampai sekarang. Serta menggunakan bahan-bahan terbaik & daging sapi pilihan yang segar.', 'Jl. RAA. Wiratanuningrat No.9, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '+62-857-9550-6', '06.30 - 20.00', 'soto', '', NULL, 'https://goo.gl/maps/WTd5chR1p2xycaZ38', 'img\\Pariwisata\\29_Soto_Sapi_Didi.jpg'),
(30, 'Soto Ayam Pataruman', 'Menyediakan rasa soto ayam yang khas dan gurih. Memiliki kemiripan dengan soto betawi. Toping soto ini dapat berisi  daging, kulit, ati ampela, ceker, kepala ayam, dan telor. Soto ini didirikan pada tahun 1960.', 'Jl. Pataruman No.23, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', '0813-2317-7720', '06.00 - 20.00', 'soto', '', NULL, 'https://goo.gl/maps/CfteamNvGqoXQ9ou6', 'img\\Pariwisata\\30_Soto_Ayam_Pataruman.jpg'),
(31, 'Soto Ayam Empangsari', 'Soto ayam ini tidak terlalu kental dan berminyak, semua bahan bumbu dan rempah-rempahnya dicampur dengan kaldu ayam dan santan yg selalu baru.', 'Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', '(0265) 333557', '05.00–13.00', 'soto', '', NULL, 'https://goo.gl/maps/nTwo5Jd8o9aiJP2L8', 'img\\Pariwisata\\31_Soto_Ayam_Empangsari.jpg'),
(32, 'Soto Ayam Pasar Mambo Bu Oom', 'Soto ayam Ibu Oom ini punya rasa soto yang khas dengan kuah yang banyak dan gurih yang selalu bikin nagih. Lokasinya berada di sebrang Ayam Kriuk Padasuka.', 'Jl. Empang, Empangsari, Tawang, Tasikmalaya, Jawa Barat 46121', '081223205591', '17:00 - 23:00', 'soto', '', NULL, 'https://goo.gl/maps/mE5ar4XCsjaNJtJy5', 'img\\Pariwisata\\32_Soto_Ayam_Pasar_Mambo_Bu_Oom.jpg'),
(33, 'Soto Ayam Sari Rasa', 'Soto dengan kuah kaldo yang terbaik dengan potongan daging ayam yang banyak. Tetesan perasan jeruk nipis membuat rasa soto ini semakin mantap.', 'Jl. Empang, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', '0853-1444-4798', '08.00 - 15.00', 'soto', '', NULL, 'https://goo.gl/maps/3hFxKbRmFZYGwcJA8', 'img\\Pariwisata\\33_Soto_Ayam_Sari_Rasa.jpg'),
(34, 'Soto Ayam Mang Oyon', 'Tempat ini menyajikan menu soto ayam khas tasik. Soto ini disajikan dengan kuah santan yang menambah rasa gurih dari kuas soto. Tempatnya juga dekat dengan jalan raya sehingga selalu ramai pada saat makan siang.\r\n', 'Aneka Jajanan Al-Muslim, Jl. Perintis Kemerdekaan No.164, Karsamenak, Kawalu, Tasikmalaya, Jawa Barat 46182', '0853-2070-7310', '06.00–20.00', 'soto', '', NULL, 'https://goo.gl/maps/nTJADosfEwRWim3g6', 'img\\Pariwisata\\34_Soto_Ayam_Mang_Oyon.jpg'),
(35, 'Tutug Oncom Benhil', 'Nasi yang dicampur oncom, diberi pelengkap sayuran seperti terong, timun dan leunca. Ada juga pilihan sambal hijau dan merah.', 'Depan Kampus UPI, Jl. Dadaha Petir, Cikalang, Tawang, Tasikmalaya, Jawa Barat 46124', '0822-4355-1179', '08.00 - 13.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/maiie4jwS2bF6MLS7', 'img\\Pariwisata\\35_Tutug_Oncom_Benhil.jpg'),
(36, 'Lengko Ayam 99 ', 'Lengko merupakan makanan yang terdiri dari lontong, irisan daging dan disiram dengan kuah kuning. Lengko Ayam di Tasikmalaya sangatlah diminati dan cocok untuk sarapan pagi.', 'Jl. Sutisna Sanjaya No.140, Cikalang, Tawang, Tasikmalaya, Jawa Barat 46114', '0821-2792-3094', '06.00 - 12.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/7ZpRZrvTo3XvuvhFA', 'img\\Pariwisata\\36_Lengko_Ayam_99_.jpg'),
(37, 'Rujak Uleg Ibu Iyoy', 'Buah-buahan yang dilengkapi dengan bumbu kacang sebagai bumbu rujak, ada buah nanas, bengkuang, kedondong, mangga, jambu, dan ubi.', 'Jl. R. Ikik Wiradikarta No.56, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '0853-2303-2448', '09.30–16.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/AfotFAh7Z5g7rwVBA', 'img\\Pariwisata\\37_Rujak_Uleg_Ibu_Iyoy.jpg'),
(38, 'Es Duren Si Madu', 'Duren yang disajikan dengan kuah susu, juga dengan campuran berbagai macam topping lainnya.', 'Jalan Ahmad Yani No.154 RT. 14 / RW 04, Sukamanah, Cipedes, Sukamanah, Cipedes, Tasikmalaya, Jawa Barat 46131', '0853-5341-3018', 'Kamis 10.00–20.', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/MDf6CUHizUsGVX4P6', 'img\\Pariwisata\\38_Es_Duren_Si_Madu.jpg'),
(39, 'Es Sirop Bojong Ibu Momoh', 'Es sirop dengan campuran potongan buah-buahan (es campur/es buah), untuk kuahnya menggunakan santan bukan menggunakan susu kental manis seperti sop buah pada umumnya.', 'Jl. Ampera Barat No.207, Panglayungan, Cipedes, Tasikmalaya, Jawa Barat 12560', '0852-2203-7203', '08.00–20.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/mjVQJoiSABg7x5D98', 'img\\Pariwisata\\39_Es_Sirop_Bojong_Ibu_Momoh.jpg'),
(40, 'Makaroni Citapen Mang Ade', 'Makaroni Mang Ade merupakan salah satu produk cemilan. cemilan makaroni ini terkenal dengan pedas dan asin yang begitu pas.', 'Jl. Otto Iskandardinata No.38, Empangsari, Tawang, Tasikmalaya, Jawa Barat 46113', '', '09.00 - 17.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/xsvz1REfn6TUeGjK8', 'img\\Pariwisata\\40_Makaroni_Mang_Ade.jpg'),
(41, 'Lumpia Basah Mang Ucun Alun Alun', 'Lumpia basah yang dibuat dari campuran tauge, telur dan bumbu masak yang ditumis kemudian dibungkus dengan lumpia. Setelah itu diberikan lumuran kuah gula merah yang dikentalkan dan dicampur dengan bengkuang.', 'Jl. Alun-Alun Kab., Empangsari, Tawang, Tasikmalaya, Jawa Barat 46113', '', '08.00–20.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/bAwB7hPjfYw7oTUu9', 'img\\Pariwisata\\41_Lumpia_Basah_Mang_Ucun_Alun_Alun.jpg'),
(42, 'Seblak Ceu Edah', 'Varian toping seblaknya banyak. Mulai dari toping sosis, baso, tulang, ceker, kulit ayam, kwetiaw, cilok, mie, bihun, siomay kering, kerupuk dengan berbagai varian. Jadi bisa memilih toppingnya sesuai selera.', 'Gg. Hegarsari 4, RT.3/RW.8, Argasari, Cihideung, Tasikmalaya, Jawa Barat 46122', '0821-2195-9015', '09.00–21.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/CBiF1BXSz7bhk5uB6', 'img\\Pariwisata\\42_Seblak_Ceu_Edah.jpg'),
(43, 'Bubur Ayam Pengadilan', 'Tekstur bubur agak cair, ditambahkan dengan suwiran ayam, cakwe, dan topping lainnya.', 'Jl. Tarumanagara No.16, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46113', '', '06.00 - 12.00', 'bubur-ayam', '', NULL, 'https://goo.gl/maps/qh514hY6FmmsmAqd7', 'img\\Pariwisata\\43_Bubur_Ayam_Pengadilan.jpg'),
(44, 'Pecel Ceu Nyai', 'Berdiri sejak tahun 1965 oleh Ceu Acih, kemudian diteruskan oleh anaknya yaitu Ceu Nyai. Tetap menjaga kualitas rasa hingga kini.', 'Jl. Babakan Payung I, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', '0852-2668-2929', '09.30 - 17.30', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/YDDpkj9zThCHmtQ66', 'img\\Pariwisata\\44_Pecel_Ceu_Nyai.jpg'),
(45, 'Surabi Oranye', 'Surabi adalah makanan tradisional dengan mengunakan bahan dasar tepung terigu dan santan. Surabi Oranye ini telah berdiri sejak tahun 1923. Menyajikan berbagai macam rasa surabi yang kekinian yang patut untuk dicoba. Tersedia surabi rasa manis dan asin.', 'Jl. Empang No.28, Empangsari, Tawang, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46113', '(0265) 338208', '06.00 - 11.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/uPcNVFyBCGsNFetT6', 'img\\Pariwisata\\45_Surabi_Oranye.jpg'),
(46, 'Kedai Jasera', 'Kedai yang cocok untuk mengisi perut Anda di pagi hari.', 'Jl. Abr Cikurubuk, Linggajaya, Mangkubumi, Tasikmalaya, Jawa Barat 46181', '', '05.00 - 07.00', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/BYeQnTNFLBacBT3x8', 'img\\Pariwisata\\46_Kedai_Jasera.jpg'),
(47, 'Sumur Si Doel', 'Susu murni milik Doel ini menyajikan susu terbaik dari sapi pilihan. Menjamin kualitas susu murni terbaik. Memiliki banyak varian rasa olahan susu murni.', 'Jl. Bkr, Kahuripan, Tawang, Tasikmalaya, Jawa Barat 46115', '0852-2302-4567', '10.00 - 23.59', 'kuliner-lainnya', '', NULL, 'https://goo.gl/maps/XYfc3itQPu9F7YGd9', 'img\\Pariwisata\\47_Sumur_Si_Doel.jpg'),
(48, 'Kupat Tahu Kabita', 'Kupat tahu ini telah berdiri sejak tahun 1975. Dengan resep turun temurun hingga sekarang sudah mencapai dua generasi. Selain bumbu kacangnya yang lembut, tahu ini bisa digoreng biasa atau hingga kering.', 'Jl. Tarumanagara No.36, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', '(0265) 338818', '07.30 - 14.00', 'kupat-tahu', '', NULL, 'https://goo.gl/maps/NC4AeEGP8DHRx1Tk7', 'img\\Pariwisata\\48_Kupat_Tahu_Kabita.jpg'),
(49, 'Kupat Tahu Simpang 5', 'Memiliki nama lain juga yakni Kupat Tahu Taman Putra Simpang 5. Kupat tahu ini selain dilumuri dengan bumbu kacang, hal lain yang membuatnya berbeda adalah ditambahkankan daun bawang dan sedikit tauge pada menunya.', 'Jl. R.E Martadinata, Panglayungan, Cipedes, Tasikmalaya, Jawa Barat 46134', '0823-1805-0306', '07.00 - 23.59', 'kupat-tahu', '', NULL, 'https://goo.gl/maps/jjTNSt2adoTaMpSh8', 'img\\Pariwisata\\49_Kupat_Tahu_Simpang_5.jpg'),
(50, 'Kupat Tahu Mangunreja', 'Kupat tahu ini telah berdiri sejak 1955. Meskipun sudah berdiri sejak lama, rasa keasliannya masih tetap terjaga dengan baik. Rasanya yang khas beserta dengan rasa sedikit pedas.', 'Jl. Mangunreja No.76, Cikunten, Singaparna, Tasikmalaya, Jawa Barat 46414', '', '07.00 - 21.00', 'kupat-tahu', '', NULL, 'https://goo.gl/maps/3UEMD7EyRFFRTaEq6', 'img\\Pariwisata\\50_Kupat_Tahu_Mangunreja.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `rating_pariwisata`
-- (See below for the actual view)
--
CREATE TABLE `rating_pariwisata` (
`fk_pariwisata` int(11)
,`rating` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id_pariwisata` int(11) NOT NULL,
  `id_rekomendasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id_pariwisata`, `id_rekomendasi`) VALUES
(37, 1),
(37, 2),
(37, 39),
(39, 1),
(39, 2),
(39, 37),
(14, 2),
(14, 13),
(14, 39),
(39, 2),
(39, 13),
(39, 14),
(29, 2),
(29, 13),
(29, 39),
(39, 2),
(39, 13),
(39, 29),
(10, 2),
(10, 29),
(10, 39),
(29, 2),
(29, 10),
(29, 39),
(39, 2),
(39, 10),
(39, 29),
(10, 2),
(10, 13),
(10, 29),
(29, 2),
(29, 10),
(29, 13);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `tanggal` date NOT NULL,
  `ditampilkan` int(1) NOT NULL,
  `rating` int(1) NOT NULL,
  `fk_pariwisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `fk_user`, `ulasan`, `tanggal`, `ditampilkan`, `rating`, `fk_pariwisata`) VALUES
(1, 1, 'Best Water Boom di Tasik!', '2019-03-19', 1, 5, 4),
(2, 2, 'Serasa gersang, kurang pepohonan', '2019-03-10', 1, 3, 4),
(3, 3, 'Banyak wahananya', '2019-03-12', 1, 4, 4),
(4, 1, 'Curugnya terkelola dengan baik', '2019-04-01', 1, 5, 6),
(5, 4, 'Pemandangan air terjunnya unik', '2019-03-01', 1, 5, 6),
(6, 3, 'Mantep banget buat selfie, hati2 licin', '2019-03-11', 1, 4, 6),
(7, 1, 'Udaranya seger, walau cape naikin tangganya', '2019-04-01', 1, 4, 1),
(9, 5, 'Toping di buburnya banyak, bikin kenyang, worth it pokoknya walaupun mahal', '2019-04-05', 1, 4, 14),
(11, 6, 'Best bubur ever!', '2019-04-05', 1, 5, 14),
(13, 1, 'Pemandangan yang indah, udara sejuk, dan suasana yang masih asri.\r\nTidak sia2 naik 600 anak tangga', '2019-04-05', 1, 5, 1),
(14, 7, 'View dari gunungnya keren banget.\r\nSayangnya tempat istirahat di puncaknya belum tertata dengan baik.', '2019-04-05', 1, 4, 1),
(15, 1, 'Perkampungannya masih asri, benar2 serba alami, tidak ada penggunaan listrik sama sekali', '2019-04-07', 1, 5, 10),
(16, 8, 'Ombaknya kecil, sehingga enak buat foto-foto selfie tanpa takut basah. Sayangnya hotelnya masih biasa-biasa saja', '2019-05-03', 1, 4, 8),
(17, 1, 'Enak nih rujaknya dimakan pas tengah siang yang panas, bikin segeer', '2019-05-18', 1, 5, 37),
(18, 1, 'Gunungnya indah', '2019-05-20', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `data_survei` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`data_survei`) VALUES
('1 2 13 9 10 23 27 14 32 45 '),
('2 9 10 20 27 40 41 '),
('1 3 13 9 10 20 22 23 14 18 30 33 39 40 '),
('1 2 13 5 8 9 10 11 12 20 23 26 27 14 15 17 18 28 30 32 34 36 39 40 42 41 '),
('2 13 7 8 9 11 31 35 38 39 50 40 47 '),
('1 2 13 28 '),
('1 2 9 10 20 22 23 27 18 43 28 32 34 35 38 49 47 '),
('2 7 8 9 10 11 20 21 23 24 26 17 18 29 35 38 39 48 49 50 40 47 42 41 '),
('1 2 13 6 9 10 30 39 50 47 '),
('6 21 16 '),
('13 9 27 14 29 40 42 '),
('1 2 3 13 6 7 8 9 10 20 22 23 24 26 27 14 17 18 43 29 30 32 31 35 37 38 50 40 47 42 45 41 '),
('1 2 3 4 13 6 8 9 23 26 27 15 43 35 36 39 49 40 47 41 '),
('1 2 3 7 8 9 12 22 15 16 28 30 31 36 37 38 39 40 42 '),
('1 23 27 18 35 36 39 40 '),
('1 2 7 9 10 20 14 18 32 35 '),
('2 13 22 23 27 14 15 28 29 35 38 39 40 '),
('1 3 6 7 9 10 12 20 22 25 26 14 16 17 43 28 31 35 36 37 39 49 40 42 45 41 '),
('2 3 13 6 7 10 11 12 20 14 28 29 38 39 48 50 '),
('3 13 7 10 11 12 20 24 18 29 37 48 40 42 '),
('1 3 7 8 11 20 24 25 27 16 18 19 29 35 49 42 41 '),
('2 4 8 10 12 28 37 50 42 41 '),
('14 31 '),
('2 3 4 13 5 8 9 10 12 14 15 16 18 28 29 30 34 31 36 37 38 48 49 '),
('12 27 28 35 48 '),
('12 27 28 35 48 '),
('1 5 12 20 14 30 38 48 49 '),
('1 3 4 13 6 7 11 20 21 26 14 15 16 17 18 28 30 35 '),
('1 2 3 4 13 7 8 9 10 12 20 21 22 23 24 25 26 27 14 16 17 18 28 29 30 35 37 38 40 '),
('1 2 3 4 13 8 9 10 11 20 21 22 23 24 25 26 27 14 17 18 29 32 31 35 37 38 39 48 49 40 47 41 '),
('6 26 14 28 50 '),
('2 23 18 28 35 '),
('1 2 3 4 13 7 8 9 10 11 12 20 23 25 14 15 18 28 29 30 31 35 37 39 49 50 '),
('1 2 3 4 13 9 10 20 23 25 14 16 18 29 35 37 39 49 50 41 '),
('7 23 18 28 37 '),
('1 2 3 4 13 5 6 7 8 9 10 11 12 20 21 22 23 24 25 26 27 14 15 16 17 18 43 28 29 30 32 33 34 31 35 36 37 38 39 48 49 50 40 47 42 44 45 46 41 '),
('1 2 3 4 13 20 24 26 14 18 28 30 37 38 39 '),
('1 13 6 10 23 24 14 15 16 18 29 30 35 37 38 50 '),
('1 2 3 4 13 9 10 20 21 22 23 24 25 26 27 16 17 29 30 35 36 37 39 48 40 47 42 41 '),
('1 3 4 13 5 9 10 12 20 21 23 24 26 27 15 16 17 28 29 30 35 37 38 39 50 40 41 '),
('1 2 3 5 8 9 12 20 26 14 18 28 35 36 39 50 40 47 41 '),
('13 21 14 30 38 '),
('1 2 3 4 13 10 23 24 25 18 29 35 48 49 50 40 47 41 '),
('2 13 6 7 9 10 21 22 26 14 16 28 29 30 36 39 49 '),
('2 3 6 10 22 17 28 29 35 50 40 41 '),
('1 13 8 10 23 25 27 18 28 29 35 38 40 47 41 '),
('1 8 9 20 23 24 14 35 38 39 50 '),
('1 2 23 14 28 35 37 40 41 '),
('1 2 3 13 7 8 20 21 22 23 27 14 15 17 18 29 36 37 38 39 49 '),
('1 2 3 13 24 14 17 28 37 39 49 '),
('1 2 3 4 13 5 6 7 8 9 10 11 12 20 21 24 25 26 27 14 18 43 28 29 30 31 35 37 38 39 48 49 50 47 '),
('1 2 3 4 13 5 6 7 8 9 10 11 12 20 21 24 25 26 27 14 18 43 28 29 30 31 35 37 38 39 48 49 50 47 '),
('13 6 12 20 14 28 35 38 '),
('9 23 17 29 50 '),
('1 2 3 13 5 6 7 8 10 11 20 22 23 24 26 14 16 18 28 29 31 37 38 39 49 '),
('8 20 16 28 38 '),
('5 20 14 30 35 '),
('11 22 16 28 35 '),
('1 2 3 4 13 9 10 12 20 23 27 14 16 18 28 29 30 31 35 37 38 39 48 50 40 47 '),
('1 2 3 13 5 6 7 8 10 11 20 22 23 24 26 14 16 18 28 29 31 37 38 39 48 49 50 '),
('1 2 3 4 13 6 7 20 21 22 25 26 14 15 16 17 18 28 29 30 31 35 37 38 39 48 49 50 40 '),
('1 3 6 8 9 10 11 12 20 22 23 27 14 18 28 35 39 50 40 42 45 41 '),
('3 13 20 21 24 25 26 14 18 28 29 30 31 35 37 38 39 48 49 '),
('10 20 14 16 28 40 '),
('1 3 13 5 6 7 8 9 10 11 12 22 24 25 26 14 16 43 28 29 31 36 37 38 48 49 50 40 41 '),
('1 2 13 7 8 9 12 26 27 14 15 16 18 28 36 37 50 44 '),
('1 2 3 12 20 26 15 28 30 37 49 40 '),
('3 12 20 26 14 15 18 28 30 31 35 37 39 48 40 '),
('12 17 34 '),
('2 3 13 7 8 10 12 20 23 24 27 14 16 17 28 29 31 35 36 37 38 39 48 50 40 46 41 '),
('3 8 10 12 20 21 22 23 24 26 27 14 15 16 17 18 43 28 29 30 32 33 34 31 35 36 37 48 50 40 42 45 41 '),
('1 2 3 5 7 10 23 27 15 29 35 40 '),
('13 20 14 28 38 '),
('1 2 3 5 11 12 20 22 27 15 17 18 29 32 31 35 37 39 '),
('1 2 13 10 12 20 14 30 37 '),
('1 2 3 13 7 9 23 24 25 27 14 17 18 29 34 35 39 41 '),
('1 5 10 12 22 14 28 30 36 37 39 49 '),
('1 2 3 13 10 12 20 24 14 28 30 37 38 39 50 '),
('1 6 7 9 22 27 17 28 39 40 '),
('2 13 20 24 14 18 28 30 37 38 39 '),
('1 3 13 5 7 9 23 24 25 16 18 43 35 36 37 40 41 '),
('1 2 13 7 9 10 12 20 21 22 24 25 26 27 14 15 16 28 29 31 35 36 37 38 39 50 40 42 45 41 '),
('1 2 3 4 13 5 6 7 8 9 10 11 12 20 21 22 23 24 25 26 27 14 15 16 17 28 30 34 31 36 38 39 48 49 '),
('1 5 7 10 20 22 23 24 14 18 28 29 36 38 42 '),
('1 2 3 13 5 6 7 8 9 10 11 12 22 24 27 29 35 36 37 38 39 49 40 42 44 45 41 '),
('2 3 13 7 10 12 22 23 24 25 14 16 18 28 29 38 39 49 40 42 41 '),
('6 20 16 28 36 '),
('1 2 3 13 5 6 7 8 9 10 11 12 14 15 16 17 18 43 28 29 30 32 33 34 31 35 37 38 39 45 '),
('1 9 10 21 22 23 24 25 26 14 16 17 18 28 29 36 37 38 50 40 42 '),
('2 20 23 27 29 42 '),
('1 2 6 7 8 11 12 20 22 23 24 26 15 17 18 29 35 36 41 '),
('22 18 29 50 '),
('3 27 15 28 48 '),
('1 6 8 11 20 21 22 23 24 25 26 27 17 18 28 32 31 35 38 39 40 42 41 '),
('1 2 13 9 10 20 22 23 24 14 29 38 39 40 41 '),
('1 5 9 10 22 25 26 18 28 30 35 37 38 40 41 '),
('1 13 5 6 11 22 27 14 17 35 39 40 41 '),
('2 6 8 10 20 22 24 26 17 18 28 30 35 36 37 38 39 45 '),
('2 13 20 21 22 23 24 25 26 15 16 17 18 43 30 32 33 35 36 40 42 41 '),
('1 2 3 10 12 20 27 15 29 31 35 37 39 48 '),
('2 3 13 5 6 7 8 9 12 26 27 28 30 32 34 31 36 37 38 39 48 49 50 46 41 '),
('2 9 24 14 16 43 37 39 40 41 '),
('1 13 5 7 9 11 23 25 27 14 18 28 29 35 36 40 42 45 41 '),
('1 3 9 12 20 26 27 15 16 28 29 35 37 48 '),
('1 2 13 5 7 8 20 21 22 24 17 29 32 31 35 36 42 '),
('1 2 7 11 21 22 24 16 18 28 29 30 36 39 50 41 '),
('2 13 5 9 10 20 22 23 24 25 15 16 18 43 28 29 35 37 38 39 48 50 40 47 41 '),
('1 2 13 5 7 10 23 27 16 18 29 30 31 37 39 48 50 '),
('1 2 13 5 7 10 23 27 16 18 29 30 31 37 39 48 50 '),
('1 2 7 8 10 12 20 22 15 30 32 35 36 37 39 48 50 44 '),
('2 3 13 10 20 21 22 23 24 25 26 27 14 15 16 17 43 28 29 30 31 36 37 38 39 48 49 40 47 42 41 '),
('6 21 17 28 39 '),
('2 5 12 20 14 30 48 '),
('13 16 28 35 '),
('1 3 13 7 10 20 21 25 26 14 15 16 17 28 29 30 35 39 40 '),
('1 20 18 34 35 49 '),
('1 2 7 8 10 21 23 25 16 17 18 28 29 31 35 36 37 38 39 48 49 50 40 47 41 '),
('1 2 3 8 10 20 23 24 25 14 17 18 28 29 35 36 37 38 39 48 49 50 40 47 41 '),
('10 11 12 20 24 18 29 35 39 40 47 41 '),
('1 13 7 23 18 33 47 42 41 '),
('1 3 13 6 7 8 10 23 24 17 18 28 35 38 39 40 41 '),
('2 3 13 5 6 10 11 23 26 14 16 17 18 29 35 38 49 40 '),
('1 2 9 10 11 22 23 25 26 15 17 43 28 29 30 31 36 39 48 49 40 42 45 41 '),
('1 2 7 10 11 20 21 22 23 24 26 27 14 15 16 17 18 43 29 31 35 37 38 39 49 50 40 47 42 41 '),
('1 2 6 8 10 12 20 22 14 16 17 29 31 35 36 50 41 '),
('2 13 35 '),
('1 2 3 4 13 5 6 7 8 9 10 11 12 20 22 26 27 14 16 17 29 31 35 37 38 39 50 46 '),
('1 3 7 10 12 22 23 24 27 14 15 17 28 29 30 34 35 37 38 39 48 '),
('3 13 23 25 18 43 29 38 40 '),
('2 3 4 13 5 12 20 22 23 24 26 27 14 18 43 29 30 31 38 39 50 47 41 '),
('2 26 14 29 40 '),
('1 2 3 4 13 5 6 7 8 9 10 11 12 40 '),
('1 3 13 7 8 20 22 23 24 18 29 35 38 '),
('13 20 24 25 15 16 28 30 36 37 38 49 40 '),
('2 13 7 8 9 10 12 20 22 23 26 17 29 31 35 36 38 40 47 '),
('1 3 10 17 29 35 38 '),
(' 22 26 16 18 33 50 37'),
(' 5 22 24 16 43 32 49 40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`) VALUES
(1, 'Ihsan Fajari', 'ihsan.fajari@gmail.com'),
(2, 'Jhony Cage', 'jhony.cage@gmail.com'),
(3, 'Mogul Kahn', 'mogul.kahn@gmail.com'),
(4, 'Yurnero', 'juggernaut@gmail.com'),
(5, 'Galih Riksana', 'riksanagalih@gmail.com'),
(6, 'Sir GueL', 'san_guel@rocketmail.com'),
(7, 'Mars Fianca', 'mars.fianca@yahoo.com'),
(8, 'Fingkan Regina', 'fingkan.regina@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `wisata_kuliner`
-- (See below for the actual view)
--
CREATE TABLE `wisata_kuliner` (
`id_pariwisata` int(11)
,`nama` varchar(50)
,`deskripsi` text
,`alamat` varchar(150)
,`telepon` varchar(14)
,`buka` varchar(15)
,`kategori` varchar(25)
,`email` varchar(50)
,`rating` decimal(14,4)
,`url_map` varchar(255)
,`foto` varchar(150)
,`harga_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `daftar_pariwisata`
--
DROP TABLE IF EXISTS `daftar_pariwisata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_pariwisata`  AS  select `objek_wisata`.`id_pariwisata` AS `id_pariwisata`,`objek_wisata`.`nama` AS `nama`,`objek_wisata`.`deskripsi` AS `deskripsi`,`objek_wisata`.`alamat` AS `alamat`,`objek_wisata`.`telepon` AS `telepon`,`objek_wisata`.`buka` AS `buka`,`objek_wisata`.`kategori` AS `kategori`,`objek_wisata`.`email` AS `email`,`objek_wisata`.`rating` AS `rating`,`objek_wisata`.`url_map` AS `url_map`,`objek_wisata`.`foto` AS `foto`,`objek_wisata`.`harga_terendah` AS `harga_terendah` from `objek_wisata` union select `wisata_kuliner`.`id_pariwisata` AS `id_pariwisata`,`wisata_kuliner`.`nama` AS `nama`,`wisata_kuliner`.`deskripsi` AS `deskripsi`,`wisata_kuliner`.`alamat` AS `alamat`,`wisata_kuliner`.`telepon` AS `telepon`,`wisata_kuliner`.`buka` AS `buka`,`wisata_kuliner`.`kategori` AS `kategori`,`wisata_kuliner`.`email` AS `email`,`wisata_kuliner`.`rating` AS `rating`,`wisata_kuliner`.`url_map` AS `url_map`,`wisata_kuliner`.`foto` AS `foto`,`wisata_kuliner`.`harga_terendah` AS `harga_terendah` from `wisata_kuliner` ;

-- --------------------------------------------------------

--
-- Structure for view `daftar_rekomendasi`
--
DROP TABLE IF EXISTS `daftar_rekomendasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_rekomendasi`  AS  select `rekomendasi`.`id_pariwisata` AS `id_pariwisata`,`rekomendasi`.`id_rekomendasi` AS `id_rekomendasi`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`foto` AS `foto` from (`rekomendasi` join `pariwisata` on((`rekomendasi`.`id_rekomendasi` = `pariwisata`.`id_pariwisata`))) ;

-- --------------------------------------------------------

--
-- Structure for view `data_review`
--
DROP TABLE IF EXISTS `data_review`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_review`  AS  select `user`.`nama` AS `nama`,`review`.`id_review` AS `id_review`,`review`.`ulasan` AS `ulasan`,`review`.`tanggal` AS `tanggal`,`review`.`ditampilkan` AS `ditampilkan`,`review`.`rating` AS `rating`,`review`.`fk_pariwisata` AS `fk_pariwisata`,`pariwisata`.`nama` AS `nama_pariwisata` from ((`review` join `user` on((`review`.`fk_user` = `user`.`id`))) left join `pariwisata` on((`review`.`fk_pariwisata` = `pariwisata`.`id_pariwisata`))) order by `review`.`tanggal` desc ;

-- --------------------------------------------------------

--
-- Structure for view `harga_terendah`
--
DROP TABLE IF EXISTS `harga_terendah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_terendah`  AS  select `detail`.`fk_pariwisata` AS `fk_pariwisata`,min(`detail`.`harga`) AS `harga_terendah` from `detail` group by `detail`.`fk_pariwisata` ;

-- --------------------------------------------------------

--
-- Structure for view `objek_wisata`
--
DROP TABLE IF EXISTS `objek_wisata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `objek_wisata`  AS  select `pariwisata`.`id_pariwisata` AS `id_pariwisata`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`deskripsi` AS `deskripsi`,`pariwisata`.`alamat` AS `alamat`,`pariwisata`.`telepon` AS `telepon`,`pariwisata`.`buka` AS `buka`,`pariwisata`.`kategori` AS `kategori`,`pariwisata`.`email` AS `email`,`rating_pariwisata`.`rating` AS `rating`,`pariwisata`.`url_map` AS `url_map`,`pariwisata`.`foto` AS `foto`,`harga_terendah`.`harga_terendah` AS `harga_terendah` from ((`pariwisata` left join `harga_terendah` on((`pariwisata`.`id_pariwisata` = `harga_terendah`.`fk_pariwisata`))) left join `rating_pariwisata` on((`pariwisata`.`id_pariwisata` = `rating_pariwisata`.`fk_pariwisata`))) where ((`pariwisata`.`kategori` = 'air-terjun-dan-sungai') or (`pariwisata`.`kategori` = 'wisata-lainnya') or (`pariwisata`.`kategori` = 'danau') or (`pariwisata`.`kategori` = 'gunung') or (`pariwisata`.`kategori` = 'kolam-renang') or (`pariwisata`.`kategori` = 'pantai')) ;

-- --------------------------------------------------------

--
-- Structure for view `rating_pariwisata`
--
DROP TABLE IF EXISTS `rating_pariwisata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rating_pariwisata`  AS  select `review`.`fk_pariwisata` AS `fk_pariwisata`,avg(`review`.`rating`) AS `rating` from `review` where (`review`.`ditampilkan` = 1) group by `review`.`fk_pariwisata` ;

-- --------------------------------------------------------

--
-- Structure for view `wisata_kuliner`
--
DROP TABLE IF EXISTS `wisata_kuliner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wisata_kuliner`  AS  select `pariwisata`.`id_pariwisata` AS `id_pariwisata`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`deskripsi` AS `deskripsi`,`pariwisata`.`alamat` AS `alamat`,`pariwisata`.`telepon` AS `telepon`,`pariwisata`.`buka` AS `buka`,`pariwisata`.`kategori` AS `kategori`,`pariwisata`.`email` AS `email`,`rating_pariwisata`.`rating` AS `rating`,`pariwisata`.`url_map` AS `url_map`,`pariwisata`.`foto` AS `foto`,`harga_terendah`.`harga_terendah` AS `harga_terendah` from ((`pariwisata` left join `harga_terendah` on((`pariwisata`.`id_pariwisata` = `harga_terendah`.`fk_pariwisata`))) left join `rating_pariwisata` on((`pariwisata`.`id_pariwisata` = `rating_pariwisata`.`fk_pariwisata`))) where ((`pariwisata`.`kategori` = 'bubur-ayam') or (`pariwisata`.`kategori` = 'kupat-tahu') or (`pariwisata`.`kategori` = 'mie-bakso') or (`pariwisata`.`kategori` = 'soto') or (`pariwisata`.`kategori` = 'kuliner-lainnya')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `FK_PARIWISATA` (`fk_pariwisata`),
  ADD KEY `FK_USER` (`fk_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_PARIWISATA` FOREIGN KEY (`fk_pariwisata`) REFERENCES `pariwisata` (`id_pariwisata`),
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
