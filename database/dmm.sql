-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 03:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `num`, `mail`, `message`) VALUES
(1, 'karan', '9964642973', 'karanbojappa7@gmail.com', 'escn'),
(2, 'karan', '9964642973', 'karanbojappa7@gmail.com', 'escn'),
(3, 'bb', '9964642973', 'karanbojappa7@gmail.com', 'testing'),
(4, 'karan', '9964642973', 'karanbojappa7@gmail.com', 'testing 2'),
(5, '', '', '', ''),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `yt`
--

CREATE TABLE `yt` (
  `id` int(11) NOT NULL,
  `links` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yt`
--

INSERT INTO `yt` (`id`, `links`, `category`) VALUES
(16, 'vdy4koj9haA', 'Instagram'),
(17, 'vdy4koj9haA', 'Facebook'),
(19, 'yuByaTnQPQM', 'Youtube'),
(20, 'yuByaTnQPQM', 'Youtube'),
(21, 'k_jqs-mzqpo', 'Youtube'),
(22, '38sxoUr6imE', 'Instagram'),
(23, 'NqkkTaGvwNQ', 'Instagram'),
(24, 'caiqH3F-yAw', 'Youtube'),
(26, 'ONyrc0jHb3A', 'Facebook');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yt`
--
ALTER TABLE `yt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `yt`
--
ALTER TABLE `yt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
