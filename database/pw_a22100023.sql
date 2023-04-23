-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 01:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_a22100023`
--

-- --------------------------------------------------------

--
-- Table structure for table `cosplayer`
--

CREATE TABLE `cosplayer` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(20) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `followers` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cosplayer`
--

INSERT INTO `cosplayer` (`id`, `nama`, `umur`, `ig`, `followers`, `gambar`) VALUES
('1', 'KameAam', 32, '@kameaam', '811.000', 'KameAam.jpeg'),
('2', 'MatchaMei', 31, '@matchamei', '284.000', 'MatchaMei.jpeg'),
('3', 'Clarissa Punipun', 31, '@punipun7', '592.000', 'Clasrissa Punipun.jpeg'),
('4', 'Lola Zieta', 26, '@lolazieta', '461.000', 'Lola Zieta.jpeg'),
('5', 'Larissa Rocefort', 25, '@LarissaRocefort', '598.000', 'Larissa Rocefort.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cosplayer`
--
ALTER TABLE `cosplayer`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
