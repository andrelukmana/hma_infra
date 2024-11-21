-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2024 at 03:32 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `url_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `url_menu`) VALUES
(1, 'BERANDA', 'https://hanatekindo.co.id/index.php'),
(2, 'TENTANG KAMI', 'https://hanatekindo.co.id/tentangkami.php'),
(3, 'UNDUH', 'https://hanatekindo.co.id/download.php'),
(4, 'KONTAK', 'https://hanatekindo.co.id/kontak.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
