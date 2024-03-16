-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2024 at 10:17 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_les_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `saw_alternatives`
--

CREATE TABLE `saw_alternatives` (
  `id_alternative` smallint UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saw_alternatives`
--

INSERT INTO `saw_alternatives` (`id_alternative`, `name`) VALUES
(1, 'Ganesha Operation (GO)'),
(2, 'Primagama'),
(3, 'An-Nahl Studi Club'),
(4, 'Genius'),
(5, 'Ruang Guru'),
(6, 'Pijar'),
(7, 'Studyku'),
(8, 'Ruang Belajar'),
(9, 'Bimbelku');

-- --------------------------------------------------------

--
-- Table structure for table `saw_criterias`
--

CREATE TABLE `saw_criterias` (
  `id_criteria` tinyint UNSIGNED NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `attribute` set('benefit','cost') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saw_criterias`
--

INSERT INTO `saw_criterias` (`id_criteria`, `criteria`, `weight`, `attribute`) VALUES
(1, 'Biaya', 0.4, 'cost'),
(2, 'Lokasi', 0.3, 'cost'),
(3, 'Fasilitas', 0.2, 'benefit'),
(4, 'Kualitas Pengajar', 0.1, 'benefit'),
(5, '', 0, 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `saw_evaluations`
--

CREATE TABLE `saw_evaluations` (
  `id_alternative` smallint UNSIGNED NOT NULL,
  `id_criteria` tinyint UNSIGNED NOT NULL,
  `value` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saw_evaluations`
--

INSERT INTO `saw_evaluations` (`id_alternative`, `id_criteria`, `value`) VALUES
(1, 4, 4),
(1, 3, 3),
(1, 2, 2),
(1, 1, 3),
(2, 4, 3),
(2, 3, 3),
(2, 2, 4),
(2, 1, 2),
(3, 4, 5),
(3, 3, 5),
(3, 2, 5),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `saw_users`
--

CREATE TABLE `saw_users` (
  `id_user` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saw_users`
--

INSERT INTO `saw_users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saw_alternatives`
--
ALTER TABLE `saw_alternatives`
  ADD PRIMARY KEY (`id_alternative`);

--
-- Indexes for table `saw_criterias`
--
ALTER TABLE `saw_criterias`
  ADD PRIMARY KEY (`id_criteria`);

--
-- Indexes for table `saw_evaluations`
--
ALTER TABLE `saw_evaluations`
  ADD PRIMARY KEY (`id_alternative`,`id_criteria`);

--
-- Indexes for table `saw_users`
--
ALTER TABLE `saw_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saw_alternatives`
--
ALTER TABLE `saw_alternatives`
  MODIFY `id_alternative` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `saw_users`
--
ALTER TABLE `saw_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
