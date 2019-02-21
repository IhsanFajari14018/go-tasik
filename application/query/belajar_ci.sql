-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 03:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES
('2014730017', 'Ihsan', 'Ranca Bentang'),
('2014730018', 'Fajari', 'Bukit Jarian'),
('2014730020', 'Guel', 'Ciumbuleuit');

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id` int(7) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id`, `nama`, `alamat`, `rating`) VALUES
(1811001, 'Kupat Tahu Kabita', 'Jl. Tarumanagara No.36, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', 4),
(1811002, 'Bubur Ayam H. Zaenal', 'Jl. R. Ikik Wiradikarta No.33, Tawangsari, Tawang, Tasikmalaya, Jawa Barat 46112', 4),
(1811003, 'Soto Ayam Pataruman', 'Jl. Pataruman No.23, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', 3),
(1811004, 'Mie Baso Laksana', 'Jl. Pemuda No.5, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
