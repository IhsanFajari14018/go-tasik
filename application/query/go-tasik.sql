-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 07:14 AM
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
-- Stand-in structure for view `data_review`
-- (See below for the actual view)
--
CREATE TABLE `data_review` (
`nama` varchar(50)
,`ulasan` text
,`tanggal` date
,`ditampilkan` int(1)
,`rating` int(1)
,`fk_pariwisata` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `fk_pariwisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `nama`, `deskripsi`, `harga`, `foto`, `fk_pariwisata`) VALUES
(1, 'Mie Bakso Kuah', 'Mie bakso dengan kuah.', 35000, 'img\\Wisata Kuliner\\4. Mie Bakso Laksana\\1. mie-bakso-kuah.jpeg', 4),
(2, 'Pangsit Kuah', 'Pangsit kuah isi daging ayam.', 20000, 'img\\Wisata Kuliner\\4. Mie Bakso Laksana\\2. pangsit.jpeg', 4),
(3, 'Soto Ayam', 'Soto ayam kampung.', 15000, 'img\\Wisata Kuliner\\6. Soto Ayam Kampung Nonoy\\1. soto-ayam.jpg', 6),
(4, 'Soto Ayam dan Telor Muda', 'Soto ayam kampung ditambah dengan telor muda.', 25000, 'img\\Wisata Kuliner\\6. Soto Ayam Kampung Nonoy\\2. soto-ayam-telor.jpg', 6),
(5, 'Mie Bakso Yamin Manis + Babat + Tahu', 'Mie Bakso yamin manis, ditambah lagi dengan seporsi babat dan tahu.', 50000, 'img\\Wisata Kuliner\\4. Mie Bakso Laksana\\3. mie-bakso-yamin-manis-babat-tahu.jpg', 4),
(6, 'Bubur Ayam', 'Bubur Ayam dilengkapi dengan toping cakwe & ati ampela.', 25000, 'img\\Wisata Kuliner\\5. Bubur Ayam Kalektoran H. Zaenal\\bubur-ayam-h.zaenal.jpg', 5),
(7, '1/2 Porsi Bubur Ayam', 'Bubur Ayam dilengkapi dengan toping cakwe & ati ampela dengan porsi yang lebih sedikit dari biasanya.', 15000, 'img\\Wisata Kuliner\\5. Bubur Ayam Kalektoran H. Zaenal\\setengah-bubur-ayam-h.zaenal.jpg', 5);

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
,`kategori` varchar(15)
,`email` varchar(50)
,`rating` float
,`url_map` varchar(255)
,`foto` varchar(150)
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
  `kategori` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `url_map` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id_pariwisata`, `nama`, `deskripsi`, `alamat`, `telepon`, `buka`, `jumlah_dikunjungi`, `kategori`, `email`, `rating`, `url_map`, `foto`) VALUES
(1, 'Lembah Gunung Galunggung', 'Gunung Galunggung merupakan gunung berapi dengan ketinggian 2.167 meter di atas permukaan laut, terletak sekitar 17 km dari pusat kota Tasikmalaya. Untuk mencapai puncak Galunggung, dibangun sebuah tangga yang memiliki 620 anak tangga. Objek yang lainnya seluas kurang lebih 3 hektar berupa pemandian air panas (Cipanas) lengkap dengan fasilitas kolam renang, kamar mandi dan bak rendam air panas.', 'Linggawangi, Leuwisari, Tasikmalaya, Jawa Barat', NULL, '24 jam', 0, 'Gunung', NULL, NULL, 'https://goo.gl/maps/oxAjs7WSuL72', ''),
(2, 'Karang Resik', 'Taman wisata karang resik adalah sebuah taman kota yang kini menjadi sebuah objek wisata dan berada di Kota Tasikmalaya. Tepat di perbatasan antara Kota Tasikmalaya dengan Kabupaten Ciamis yang merupakan jalur penghubung antar provinsi di pulau Jawa. Karang Resik memiliki banyaknya spot foto yang disediakan oleh pengelola dan juga beragam bentuknya atau pemandanganya. Tak hanya spot foto yang instagramable yang ada disini namun juga ada kawasan wisata lainya yang juga tak kalah menariknya seperti teras cikapundung, peta park, the lodge maribaya, barusen, waterboom, taman bunga, museum 3D ,Hobbit, Farm House, cafe di bukit, amphiteather, flying fox, arung jeram sungai citanduy dan lain-lain.', 'Jl. Mohamad Hatta, Sukamanah, Cipedes, Tasikmalaya, Jawa Barat 46131', NULL, '08.00 - 22.00', 0, 'Alam', NULL, NULL, 'https://goo.gl/maps/iEhBo8v8ru32', ''),
(3, 'Kampung Naga', 'Kampung Naga adalah suatu perkampungan yang dihuni oleh sekelompok masyarakat yang sangat kuat dalam memegang adat istiadat peninggalan leluhurnya, dalam hal ini adalah adat Sunda. Seperti permukiman Badui, Kampung Naga menjadi objek kajian antropologi mengenai kehidupan masyarakat pedesaan Sunda pada masa peralihan dari pengaruh Hindu menuju pengaruh Islam di Jawa Barat. Kampung Naga merupakan sebuah kampung adat yang masih lestari. Masyarakatnya masih memegang adat tradisi nenek moyang mereka. Mereka menolak intervensi dari pihak luar jika hal itu mencampuri dan merusak kelestarian kampung tersebut. ', 'Neglasari, Salawu, Tasikmalaya, West Java 46471', '(0265) 547541', '06.00 - 18.00', 0, 'Alam', NULL, NULL, 'https://goo.gl/maps/eA6qzaHFDbP2', ''),
(4, 'Mie Bakso Laksana', 'Mie Bakso yang terdiri dari daging cincang, bawang bombay, bakso, dan kuah yang disajikan dengan terpisah. Terdiri juga menu mie bakso lainnya.', 'Jl. Pemuda No.5, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', '(0265) 333883', '09.00 - 21.00', 0, 'Mie Bakso', NULL, NULL, 'https://goo.gl/maps/vuXBdMRuef52', 'img/Wisata Kuliner/4. Mie Bakso Laksana/menu-mie-bakso-laksana.jpeg'),
(5, 'Bubur Ayam Kalektoran H. Zaenal', 'Berdiri sejak tahun 1969, bubur ayam racikan H. Zaenal punya keistimewaan. Tekstur buburnya tidak terlalu kental alias agak encer. Toppingnya melimpah ruah berupa suwiran ayam kampung, ati ayam, cakwe, dan daun bawang.   Saking banyaknya, keseluruhan topping kabarnya mengisi 45% mangkuk. ', 'Jl. R. Ikik Wiradikarta No.56-30, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', NULL, '06.00 - 14.00', 0, 'Bubur Ayam', NULL, NULL, 'https://goo.gl/maps/E7Dq7H4hPBN2', 'img\\Wisata Kuliner\\5. Bubur Ayam Kalektoran H. Zaenal\\menu.jpg'),
(6, 'Soto Ayam Kampung Nonoy', 'Soto dengan menggunakan ayam kampung membuat dagingnya ini lebih berasa, ditambah lagi dengan kuahnya yang gurih dan khas.', 'Jl. Ir. H. Juanda, Bantarsari, Bungursari, Tasikmalaya, Jawa Barat 46151', '0821-2081-9439', '07.00 - 15.00', 0, 'Soto', NULL, NULL, 'https://goo.gl/maps/ythj5VB5fRC2', 'img\\Wisata Kuliner\\6. Soto Ayam Kampung Nonoy\\1. soto-ayam.jpg');

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

INSERT INTO `review` (`fk_user`, `ulasan`, `tanggal`, `ditampilkan`, `rating`, `fk_pariwisata`) VALUES
(1, 'Mie Baksonya terbaik! Bikin Nagih!', '2019-03-19', 1, 5, 4),
(2, 'Mahal banget', '2019-03-10', 0, 1, 4),
(3, 'Yamin manisnya terbaik', '2019-03-12', 1, 4, 4),
(1, 'Kuahnya gurih beut', '2019-04-01', 1, 5, 6),
(4, 'Telor mudanya lembut', '2019-03-01', 1, 5, 6),
(3, 'Daging di sotonya ada banyak, harga cukup murah', '2019-03-11', 0, 4, 6);

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
(4, 'Yurnero', 'juggernaut@gmail.com');

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
,`kategori` varchar(15)
,`email` varchar(50)
,`rating` decimal(14,4)
,`url_map` varchar(255)
,`foto` varchar(150)
,`harga_terendah` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `data_review`
--
DROP TABLE IF EXISTS `data_review`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_review`  AS  select `user`.`nama` AS `nama`,`review`.`ulasan` AS `ulasan`,`review`.`tanggal` AS `tanggal`,`review`.`ditampilkan` AS `ditampilkan`,`review`.`rating` AS `rating`,`review`.`fk_pariwisata` AS `fk_pariwisata` from (`review` join `user` on((`review`.`fk_user` = `user`.`id`))) ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `objek_wisata`  AS  select `pariwisata`.`id_pariwisata` AS `id_pariwisata`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`deskripsi` AS `deskripsi`,`pariwisata`.`alamat` AS `alamat`,`pariwisata`.`telepon` AS `telepon`,`pariwisata`.`buka` AS `buka`,`pariwisata`.`jumlah_dikunjungi` AS `jumlah_dikunjungi`,`pariwisata`.`kategori` AS `kategori`,`pariwisata`.`email` AS `email`,`pariwisata`.`rating` AS `rating`,`pariwisata`.`url_map` AS `url_map`,`pariwisata`.`foto` AS `foto` from `pariwisata` where ((`pariwisata`.`kategori` = 'air terjun') or (`pariwisata`.`kategori` = 'alam') or (`pariwisata`.`kategori` = 'daunau') or (`pariwisata`.`kategori` = 'gunung') or (`pariwisata`.`kategori` = 'kolam renang') or (`pariwisata`.`kategori` = 'pantai')) ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wisata_kuliner`  AS  select `pariwisata`.`id_pariwisata` AS `id_pariwisata`,`pariwisata`.`nama` AS `nama`,`pariwisata`.`deskripsi` AS `deskripsi`,`pariwisata`.`alamat` AS `alamat`,`pariwisata`.`telepon` AS `telepon`,`pariwisata`.`buka` AS `buka`,`pariwisata`.`jumlah_dikunjungi` AS `jumlah_dikunjungi`,`pariwisata`.`kategori` AS `kategori`,`pariwisata`.`email` AS `email`,`rating_pariwisata`.`rating` AS `rating`,`pariwisata`.`url_map` AS `url_map`,`pariwisata`.`foto` AS `foto`,`harga_terendah`.`harga_terendah` AS `harga_terendah` from ((`pariwisata` join `harga_terendah` on((`pariwisata`.`id_pariwisata` = `harga_terendah`.`fk_pariwisata`))) left join `rating_pariwisata` on((`pariwisata`.`id_pariwisata` = `rating_pariwisata`.`fk_pariwisata`))) where ((`pariwisata`.`kategori` = 'bubur ayam') or (`pariwisata`.`kategori` = 'kupat tahu') or (`pariwisata`.`kategori` = 'mie bakso') or (`pariwisata`.`kategori` = 'soto') or (`pariwisata`.`kategori` = 'lainnya')) ;

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
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
