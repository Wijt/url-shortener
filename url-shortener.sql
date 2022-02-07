-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2022 at 12:36 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url-shortener`
--

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `nickname`, `url`) VALUES
(1, 'gle', 'https://www.google.com.tr/?hl=tr'),
(2, '9jBon', 'https://stackoverflow.com/questions/768431/how-do-i-make-a-redirect-in-php'),
(3, '0Ik5Q', 'https://www.php.net/manual/tr/function.isset.php'),
(4, '5xWUL', 'https://www.php.net/manual/tr/function.isset.php'),
(5, 'dpdk8', 'https://www.w3schools.com/howto/howto_js_copy_clipboard.asp'),
(6, 'SrKSV', 'https://www.w3schools.com/howto/howto_js_copy_clipboard.asp'),
(7, 'Vv3Xi', 'https://stackoverflow.com/questions/9236332/how-to-empty-input-field-with-jquery'),
(8, '7EBBb', 'asdfadsf'),
(9, 'nMNja', 'dghdfg'),
(10, '2lbUv', 'https://stackoverflow.com/questions/4356289/php-random-string-generator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nickname` (`nickname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
