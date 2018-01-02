-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2018 at 11:34 AM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u12893p9221_fgb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fgb_con`
--

CREATE TABLE `con` (
  `con_name` varchar(40) NOT NULL,
  `con_mail` varchar(40) NOT NULL,
  `con_tekst` varchar(255) NOT NULL,
  `con_ts` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fgb_log`
--

CREATE TABLE `log` (
  `log_time` varchar(19) NOT NULL,
  `log_ipaddr` varchar(40) NOT NULL,
  `log_ts` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `log_port` int(5) NOT NULL,
  `log_subd` varchar(10) NOT NULL COMMENT 'Sub Domein naam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='logging';

-- --------------------------------------------------------

--
-- Table structure for table `fgb_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `fgb_menu_items`
--

CREATE TABLE `menu_items` (
  `menu_id` int(3) NOT NULL,
  `menu_name` varchar(10) NOT NULL COMMENT 'menu name',
  `menu_item_name` varchar(20) NOT NULL COMMENT 'Name displayed',
  `menu_order` int(3) NOT NULL COMMENT 'order in menu',
  `menu_item_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fgb_menu_items`
--

INSERT INTO `menu_items` (`menu_name`, `menu_item_name`, `menu_order`, `menu_id`, `menu_item_type`) VALUES
('Top', 'Home', 1, 1, ''),
('Top', 'POP', 2, 2, ''),
('Top', 'CV', 3, 3, ''),
('Top', 'Certificaten', 4, 4, ''),
('Top', 'Over', 5, 5, ''),
('Top', 'Contact', 6, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
