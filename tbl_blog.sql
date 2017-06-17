-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 11:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belajar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `judul`, `tanggal`, `lokasi`, `isi`) VALUES
(1, 'Penganalan Web', '2017-04-05', 'https://2.bp.blogspot.com/-8ayq9_E1vrE/VeaBGqruPuI/AAAAAAAACJA/HPEimQOUB_s/s1600/Gambar-Konyol-Lucu-Gila-Unik-Aneh-1.jpg', 'sdfdasfsdfasd'),
(2, 'Penganalan Web', '2017-04-05', 'http://4.bp.blogspot.com/-WeXXx2gmVlY/VNiy484uYoI/AAAAAAAAAsU/XeTgzY9k-Us/s1600/Gambar-Keren-Unik-DP-BBM-Terbaru9.jpg', 'sdfsdfsdfsdfsdf'),
(3, 'dsafadsfsdaf', '2017-04-05', 'https://2.bp.blogspot.com/-8ayq9_E1vrE/VeaBGqruPuI/AAAAAAAACJA/HPEimQOUB_s/s1600/Gambar-Konyol-Lucu-Gila-Unik-Aneh-1.jpg', 'asdfsdafsdfsdaf'),
(4, 'asdfasdf', '2017-04-05', 'https://2.bp.blogspot.com/-8ayq9_E1vrE/VeaBGqruPuI/AAAAAAAACJA/HPEimQOUB_s/s1600/Gambar-Konyol-Lucu-Gila-Unik-Aneh-1.jpg', 'hjkhkjhjhkjhjkhkjhjkh'),
(5, 'dasfasdf', '2005-04-17', 'https://2.bp.blogspot.com/-8ayq9_E1vrE/VeaBGqruPuI/AAAAAAAACJA/HPEimQOUB_s/s1600/Gambar-Konyol-Lucu-Gila-Unik-Aneh-1.jpg', 'asdfsdaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
