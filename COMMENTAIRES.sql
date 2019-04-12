-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2019 at 04:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COMMENTAIRES`
--

-- --------------------------------------------------------

--
-- Table structure for table `COMMENTAIRES`
--

CREATE TABLE `COMMENTAIRES` (
  `ID-COM` int(11) NOT NULL,
  `ID-MOVIES` int(11) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `TEXTE` text NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LIKES` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `COMMENTAIRES`
--

INSERT INTO `COMMENTAIRES` (`ID-COM`, `IDMOVIES`, `TITLE`, `TEXTE`, `DATE`, `LIKES`) VALUES
(1, 10, 'Great movie', 'I love this movie so much I actually thought other people online might be interested by my opinion, as if it had any value', '2019-04-03 07:20:12', 6),
(2, 10, 'Meh', 'I\'ve seen better', '2019-04-03 08:00:56', 0),
(4, 10, 'lulz', 'testing,attention please', '2019-04-03 08:24:27', 0),
(12, 20, 'test', 'test', '2019-04-03 12:10:47', 0),
(13, 10, 'commentaire test', 'balhblahblah', '2019-04-08 10:17:17', 3),
(14, 1399, 'test', 'hey, thisis a test for GoT comments', '2019-04-08 12:46:38', 0),
(15, 10, 'commentaire test', 'balhblahblah', '2019-04-08 14:29:38', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COMMENTAIRES`
--
ALTER TABLE `COMMENTAIRES`
  ADD PRIMARY KEY (`ID-COM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `COMMENTAIRES`
--
ALTER TABLE `COMMENTAIRES`
  MODIFY `ID-COM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
