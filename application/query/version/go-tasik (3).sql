-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 09:52 PM
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
,`jumlah_dikunjungi` int(11)
,`kategori` varchar(25)
,`email` varchar(50)
,`rating` decimal(14,4)
,`url_map` varchar(255)
,`foto` varchar(150)
,`harga_terendah` int(11)
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
(6, 'Tiket Parkir Motor', '', 2000, '', 3),
(7, 'Perahu Rakit', '', NULL, 'img\\Pariwisata\\3_Perahu_Rakit.jpg', 3),
(8, 'Gazebo', '', NULL, 'img\\Pariwisata\\3_Gazebo.jpg', 3),
(9, 'Tiket Parkir Mobil', '', 5000, '', 3),
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
(36, 'Ampitheater', '', NULL, 'img\\Pariwisata\\13_Ampitheater.jpg', 13);

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
,`jumlah_dikunjungi` int(11)
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
  `jumlah_dikunjungi` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `url_map` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id_pariwisata`, `nama`, `deskripsi`, `alamat`, `telepon`, `buka`, `jumlah_dikunjungi`, `kategori`, `email`, `rating`, `url_map`, `foto`) VALUES
(1, 'Lembah Gunung Galunggung', 'Gunung Galunggung merupakan gunung berapi dengan ketinggian 2.167 meter di atas permukaan laut, terletak sekitar 17 km dari pusat kota Tasikmalaya, 100 km dari Bandung, dan 350 km dari Jakarta. Untuk mencapai puncak Galunggung, dibangun sebuah tangga yang memiliki 620 anak tangga. Agar lebih menarik minat pengunjung, pihak pengelola memasang lampu-lampu indah di gardu pandang dan anak tangga agar wisatawan tidak hanya dapat berfoto siang hari, tetapi juga malam hari dengan pemandangan kerlip lampu kota Tasikmalaya dari ketinggian.', 'Kecamatan Leuwisari, Kota Tasikmalaya Tasikmalaya, Provinsi Jawa Barat', '', '07.00 - 21.00', 0, 'gunung', '', NULL, 'https://goo.gl/maps/RnyyMMRvwn32', 'img\\Pariwisata\\1_Lembah_Gunung_Galunggung.jpg'),
(2, 'Pemandian Air Panas Gunung Galunggung', 'Gunung Galunggung merupakan salah satu objek pariwisata andalan di Kabupaten Tasikmalaya yang hingga saat ini masih menjadi primadona. Berada satu kompleks dengan wisata kawah Galunggung, kolam pemandian air panas atau lebih dikenal Cipanas Galunggung menawarkan kenikmatan berendam air panas alami. Terdapat beberapa kolam renang, dari yang umum dan kolam renang yang privat bernuansa alam dengan dikelilingi pepohonan. ', 'Desa Linggajati, Kecamatan Sukaratu, Tasikmalaya, Jawa Barat ', '', '07.00 - 21.00', 0, 'kolam-renang', '', NULL, 'https://goo.gl/maps/Xz8W1HpZgBU2', 'img\\Pariwisata\\2_Pemandian_Air_Panas_Gunung_Galunggung.jpg'),
(3, 'Situ Gede', 'Dalam bahasa Sunda, Situ berarti danau, sedangkan Gede memiliki makna besar atau luas, jadi memang pada kenyataannya, Situ Gede ini mempunyai wilayah yang amat luas, yaitu sekitar 47 hektar dan kedalaman hingga 6 meter. Ada banyak gazebo yang disediakan oleh pengelola. Gazebo-gazebo tersebut berada di atas air yang dilengkapi dengan meja dan kursi sebagai tempat bersantai. Di samping beberapa fasilitas tersebut, masih ada beberapa fasilitas penunjang lainnya yang bisa pengunjung nikmati diantaranya Mushola, kamar mandi, jogging track, dan perahu. Anda bisa melihat-lihat keseluruhan Situ Gede dengan memanfaatkan fasilitas perahu yang ada.', 'Kecamatan Mangkubumi Kota Tasikmalaya Provinsi Jawa Barat', '', '07.00 - 20.00', 0, 'danau', '', NULL, 'https://goo.gl/maps/Rj6UTnwdmLU2', 'img\\Pariwisata\\3_Situ_Gede.jpg'),
(4, 'Water Boom Tee Jay', 'Wisata kolam renang selalu menjadi salah satu destinasi favorit wisatawan untuk menikmati liburan akhir pekan. Hampir di setiap daerah di Indonesia, telah memiliki tempat wisata air yang hits, baik kolam renang alam, atau waterpark hingga waterboom. Seperti yang ada di Tasikmalaya Jawa Barat, terdapat wahana permainan air yang sedang ngehits, yaitu Teejay Waterpark.  Di Teejay Waterpark ini, terdapat beragam wahana air menarik seperti Water Slide, Kolam Arus, Kolam Ombak, Kolam Renang Khusus Orang Dewasa dan Anak-anak. Di sini, Kalian bisa berswafoto di spot-spot keren, dengan panorama alam yang indah menjadi background-nya.', 'Komplek Plaza Asia, Kecamatan Cihideung, Kota Tasikmalaya, Provinsi Jawa Barat ', '(0265) 2350025', '09.00 - 18.00', 0, 'kolam-renang', '', NULL, 'https://goo.gl/maps/fh9wqrNb7fM2', 'img\\Pariwisata\\4_Water_Boom_Tee_Jay.jpg'),
(5, 'Tonjong Canyon', 'Tonjong Canyon adalah Wisata yang menawarkan kesegaran sungai di pedesaan. Sungai yang berada di Tonjong Canyon dikelilingi oleh tebing bebatuan berwarna coklat dan pepohonan yang rindang. Keindahan tersebut menjadi spot objek menarik bagi anda yang ingin berfoto selfie ataupun menikmati air sungai dengan melakukan atraksi lompat dari tebing canyon. ', 'Desa Nagrog Kecamatan Cipatujah Kabupaten Tasikmalaya Provinsi Jawa Barat ', '', '7.00 - 18.00', 0, 'air-terjun-dan-sungai', '', NULL, 'https://goo.gl/maps/smjWNynxwAJ2', 'img\\Pariwisata\\5_Tonjong_Canyon.jpg'),
(6, 'Curug Dengdeng', 'Curug, yang merupakan istilah untuk penyebutan air terjun ini pertama kali digunakan oleh orang - orang sunda (Jawa Barat). Curug dengdeng merupakan wisata air terjun yang memiliki keunikan, yaitu struktur air terjun yang memiliki beberapa tingkatan. Tingkatan pertama merupakan muara sungai, dari sana anda bisa menikmati keindahan dari atas ketinggian 9 meter. Di tingkatan kedua 11 meter dan di tingkatan terakhir 13 meter.', 'Cikatomas, Tawang, Pancatengah, Tasikmalaya, Jawa Barat', '', '07.00 - 18.00', 0, 'air-terjun-dan-sungai', '', NULL, 'https://goo.gl/maps/e3u4HCpSQw42', 'img\\Pariwisata\\6_Curug_Dengdeng.jpg'),
(7, 'Pantai Karang Tawulan', 'Pantai Karang Tawulan merupakan pantai yang memiliki daya tarik pantai berupa bentukan tebing yang sedikit menjorok ke tengah laut, dengan pantai pasir yang indah dan sedikit tersembunyi dibagian bawah kiri dan kanan tebing. Area pantai Karang Tawulan sendiri sebetulnya cukup luas, dan mempunyai fasilitas yang cukup lengkap.\r\nDi area utama yang berada diatas tebing, anda bisa beristirahat di warung-warung yang tersedia dengan sarana parkir yang cukup luas.', 'Desa Cimanuk, Kecamatan Cikalong, Kabupaten Tasikmalaya', '', '05.00 - 20.00', 0, 'pantai', '', NULL, 'https://goo.gl/maps/tjCSKGqtmiM2', 'img\\Pariwisata\\7_Pantai_Karang_Tawulan.jpg'),
(8, 'Pantai Sindang Kerta ', 'Pantai sindangkerta, pantai yang terletak 76 kilometer dari Kota Tasikmalaya merupakan pantai yang dapat digunakan untuk berenang. Memiliki kondisi geografis yang berkarang sejauh 20 meter dari bibir pantai hingga deburan ombak pantai. Jika beruntung dipantai ini anda dapat menemukan banyak biota laut seperti ikan, udang, keran, hingga bintang laut yang terjebak diantara karang - karang.', 'Desa Sindangkerta, Kecamatan Cipatujah, Kabupaten Tasikmalaya, Jawa Barat', '', '05.00 - 20.00', 0, 'pantai', '', NULL, 'https://goo.gl/maps/aRnGs7XuR2y', 'img\\Pariwisata\\8_Pantai_Sindang_Kerta_.jpg'),
(9, 'Kebun Teh Taraju', 'Salah satu destinasi agrowisata di Tasik ini sangat cocok untuk anda, para pelancong yang sudah sumpek dengan hiruk pikuk kehidupan kota. Kebun teh Taraju tak ubahnya seperti karpet permadani hijau yang membentang luas, sungguh memanjakan mata yang memandang. Udara yang sejuk ditambah panorama alam yang indah menjadi ciri khas perkebunan teh Taraju. Tak kalah dengan perkebunan teh puncak Bogor atau Perkebunan teh Ciwidey Bandung.', 'Desa Banyuasin, Kecamatan Taraju, Kabupaten Tasikmalaya, Provinsi Jawa Barat', '', '24 Jam', 0, 'wisata-lainnya', '', NULL, 'https://goo.gl/maps/TvGfTCUdWXT2', 'img\\Pariwisata\\9_Kebun_Teh_Taraju.jpg'),
(10, 'Kampung Naga', 'Kampung Naga terletak di Tasikmalaya, Jawa Barat, merupakan suatu perkampungan yang dihuni oleh sekelompok masyarakat yang sangat kuat dalam memegang adat istiadat peninggalan leluhurnya, dalam hal ini adalah adat Sunda. Seperti permukiman Badui, Kampung Naga menjadi objek kajian antropologi mengenai kehidupan masyarakat pedesaan Sunda pada masa peralihan dari pengaruh Hindu menuju pengaruh Islam di Jawa Barat. \r\n Kampung ini berada di lembah yang subur, dengan batas wilayah, di sebelah Barat Kampung Naga dibatasi oleh hutan keramat karena di dalam hutan tersebut terdapat makam leluhur masyarakat Kampung Naga. Di sebelah selatan dibatasi oleh sawah-sawah penduduk, dan di sebelah utara dan timur dibatasi oleh Ci Wulan (Kali Wulan) yang sumber airnya berasal dari Gunung Cikuray di daerah Garut.', 'Desa Neglasari, Kecamatan Salawu Kabupaten Tasikmalaya, Provinsi Jawa Barat ', '(0265) 547541', '24 Jam', 0, 'wisata-lainnya', '', NULL, 'https://goo.gl/maps/VE3r49kk7bA2', 'img\\Pariwisata\\10_Kampung_Naga.jpg'),
(11, 'Curug Batu Blek', 'Gemuruh suara jatuhan air Curug Batu Blek memecah keheningan alam kawasan hutan Cisanyong Tasikmalaya. Tak sampai di situ, airnya yang segar serta suasana alam yang terbilang masih perawan ini pun jadi magnet tersendiri wisata Curug Batu Blek. Maklum saja, untuk mencapai lokasi pengunjung harus menempuh petualangan alam dengan berjalan kaki. Dari pusat Kota Tasikmalaya, Curug Batu Blek dapat diakses lewat jalur Tasikmalaya menuju Cisayong lalu ke Curug Batu Blek. Jarak tempuhnya sekitar 17 Km.', 'Desa Santanamekar, Kecamatan Cisayong, Tasikmalaya, Provinsi Jawa Barat', '', '07.00 - 18.00', 0, 'air-terjun-dan-sungai', '', NULL, 'https://goo.gl/maps/P3A2pD26NKr', 'img\\Pariwisata\\11_Curug_Batu_Blek.jpg'),
(12, 'Pantai Selatan Cipatujah', 'Keindahan Pantai Selatan Cipatujah Kabupaten Tasikmalaya, Jawa Barat dikenal karena pantainya panjang, ombak yang besar serta masih alami belum atau disentuh tangan-tangan pemodal. Pantai di ujung selatan Tasikmalaya ini ini menjadi tujuan wisata laut ketiga Priangan Timur setelah Pangandaran dan Santolo Garut Selatan.', 'Cipatujah, Tasikmalaya, Jawa Barat ', '', '07.00 - 21.00', 0, 'pantai', '', NULL, 'https://goo.gl/maps/j4caYhq1Q3K2', 'img\\Pariwisata\\12_Pantai_Selatan_Cipatujah.jpg'),
(13, 'Karang Resik', 'Taman wisata karang resik merupakan taman kota yang dikelola langsung oleh Pemkot Tasikmalaya. Jarak tempuh dari pusat Kota Tasikmalaya menuju objek wisata karangresik kurang lebih 2 KM. Beberapa tempat wisata di yang bisa dinikmati para pengunjung di antaranya rumah Hobbit, teras cikapundung, peta park, the lodge maribaya, barusen, waterboom, taman bunga, museum 3D, Farm House, cafe di bukit, amphiteather, flying fox, arung jeram sungai citanduy, dan masih banyak lagi sehingga taman wisata ini sangat cocok untuk wisat berfoto selfie dan menguji adrenalin', 'Jln. Mochamad Hatta, Kota Tasikmalaya.', '', '08.00 - 17.00', 0, 'wisata-lainnya', '', NULL, 'https://goo.gl/maps/LN1AhcDR3Dr', 'img\\Pariwisata\\13_Karang_Resik.jpg');

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
(1, 1, 'Mie Baksonya terbaik! Bikin Nagih!', '2019-03-19', 1, 5, 4),
(2, 2, 'Mahal banget', '2019-03-10', 0, 1, 4),
(3, 3, 'Yamin manisnya terbaik', '2019-03-12', 1, 4, 4),
(4, 1, 'Kuahnya gurih beut', '2019-04-01', 1, 5, 6),
(5, 4, 'Telor mudanya lembut', '2019-03-01', 1, 5, 6),
(6, 3, 'Daging di sotonya ada banyak, harga cukup murah', '2019-03-11', 0, 4, 6),
(7, 1, 'Udaranya seger, walau cape naikin tangganya', '2019-04-01', 1, 4, 1),
(9, 5, 'Toping di buburnya banyak, bikin kenyang, worth it pokoknya walaupun mahal', '2019-04-05', 1, 4, 5),
(10, 5, 'Toping di buburnya banyak, bikin kenyang, worth it pokoknya walaupun mahal', '2019-04-05', 0, 4, 5),
(11, 6, 'Best bubur ever!', '2019-04-05', 1, 5, 5),
(13, 1, 'Pemandangan yang indah, udara sejuk, dan suasana yang masih asri.\r\nTidak sia2 naik 600 anak tangga', '2019-04-05', 0, 5, 1),
(14, 7, 'View dari gunungnya keren banget.\r\nSayangnya tempat istirahat di puncaknya belum tertata dengan baik.', '2019-04-05', 1, 4, 1),
(15, 1, 'Perkampungannya masih asri, benar2 serba alami dsni, tidak ada penggunaan listrik juga', '2019-04-07', 1, 5, 3);

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
(7, 'Mars Fianca', 'mars.fianca@yahoo.com');

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
,`jumlah_dikunjungi` int(11)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_pariwisata`  AS  select `objek_wisata`.`id_pariwisata` AS `id_pariwisata`,`objek_wisata`.`nama` AS `nama`,`objek_wisata`.`deskripsi` AS `deskripsi`,`objek_wisata`.`alamat` AS `alamat`,`objek_wisata`.`telepon` AS `telepon`,`objek_wisata`.`buka` AS `buka`,`objek_wisata`.`jumlah_dikunjungi` AS `jumlah_dikunjungi`,`objek_wisata`.`kategori` AS `kategori`,`objek_wisata`.`email` AS `email`,`objek_wisata`.`rating` AS `rating`,`objek_wisata`.`url_map` AS `url_map`,`objek_wisata`.`foto` AS `foto`,`objek_wisata`.`harga_terendah` AS `harga_terendah` from `objek_wisata` union select `wisata_kuliner`.`id_pariwisata` AS `id_pariwisata`,`wisata_kuliner`.`nama` AS `nama`,`wisata_kuliner`.`deskripsi` AS `deskripsi`,`wisata_kuliner`.`alamat` AS `alamat`,`wisata_kuliner`.`telepon` AS `telepon`,`wisata_kuliner`.`buka` AS `buka`,`wisata_kuliner`.`jumlah_dikunjungi` AS `jumlah_dikunjungi`,`wisata_kuliner`.`kategori` AS `kategori`,`wisata_kuliner`.`email` AS `email`,`wisata_kuliner`.`rating` AS `rating`,`wisata_kuliner`.`url_map` AS `url_map`,`wisata_kuliner`.`foto` AS `foto`,`wisata_kuliner`.`harga_terendah` AS `harga_terendah` from `wisata_kuliner` ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `objek_wisata`  AS  select `pariwisata`.`id_pariwisata` AS `id_pariwisata`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`deskripsi` AS `deskripsi`,`pariwisata`.`alamat` AS `alamat`,`pariwisata`.`telepon` AS `telepon`,`pariwisata`.`buka` AS `buka`,`pariwisata`.`jumlah_dikunjungi` AS `jumlah_dikunjungi`,`pariwisata`.`kategori` AS `kategori`,`pariwisata`.`email` AS `email`,`rating_pariwisata`.`rating` AS `rating`,`pariwisata`.`url_map` AS `url_map`,`pariwisata`.`foto` AS `foto`,`harga_terendah`.`harga_terendah` AS `harga_terendah` from ((`pariwisata` left join `harga_terendah` on((`pariwisata`.`id_pariwisata` = `harga_terendah`.`fk_pariwisata`))) left join `rating_pariwisata` on((`pariwisata`.`id_pariwisata` = `rating_pariwisata`.`fk_pariwisata`))) where ((`pariwisata`.`kategori` = 'air-terjun-dan-sungai') or (`pariwisata`.`kategori` = 'wisata-lainnya') or (`pariwisata`.`kategori` = 'danau') or (`pariwisata`.`kategori` = 'gunung') or (`pariwisata`.`kategori` = 'kolam-renang') or (`pariwisata`.`kategori` = 'pantai')) ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wisata_kuliner`  AS  select `pariwisata`.`id_pariwisata` AS `id_pariwisata`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`deskripsi` AS `deskripsi`,`pariwisata`.`alamat` AS `alamat`,`pariwisata`.`telepon` AS `telepon`,`pariwisata`.`buka` AS `buka`,`pariwisata`.`jumlah_dikunjungi` AS `jumlah_dikunjungi`,`pariwisata`.`kategori` AS `kategori`,`pariwisata`.`email` AS `email`,`rating_pariwisata`.`rating` AS `rating`,`pariwisata`.`url_map` AS `url_map`,`pariwisata`.`foto` AS `foto`,`harga_terendah`.`harga_terendah` AS `harga_terendah` from ((`pariwisata` join `harga_terendah` on((`pariwisata`.`id_pariwisata` = `harga_terendah`.`fk_pariwisata`))) left join `rating_pariwisata` on((`pariwisata`.`id_pariwisata` = `rating_pariwisata`.`fk_pariwisata`))) where ((`pariwisata`.`kategori` = 'bubur-ayam') or (`pariwisata`.`kategori` = 'kupat-tahu') or (`pariwisata`.`kategori` = 'mie-bakso') or (`pariwisata`.`kategori` = 'soto') or (`pariwisata`.`kategori` = 'kuliner-lainnya')) ;

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
  ADD PRIMARY KEY (`id_review`);

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
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
