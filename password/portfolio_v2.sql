-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2018 at 02:42 PM
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
-- Database: `u12893p9221_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(3) NOT NULL,
  `menuname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `menuname`) VALUES
(1, 'Bottom'),
(2, 'Top');

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `itemid` int(3) NOT NULL,
  `menuid` int(3) NOT NULL,
  `itemname` varchar(20) NOT NULL COMMENT 'Name displayed',
  `itemorder` int(3) NOT NULL COMMENT 'order in menu',
  `itemtype` varchar(5) NOT NULL,
  `phpfilename` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`itemid`, `menuid`, `itemname`, `itemorder`, `itemtype`, `phpfilename`) VALUES
(1, 2, 'Home', 1, '', ''),
(2, 2, 'POP', 2, '', ''),
(3, 2, 'CV', 3, '', ''),
(4, 2, 'Certificaten', 4, '', ''),
(5, 2, 'Over', 5, '', ''),
(6, 2, 'Contact', 6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL DEFAULT '0',
  `rolename` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `sessionid` int(30) NOT NULL DEFAULT '0',
  `startdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ipadress` int(39) NOT NULL,
  `portnumber` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(4) NOT NULL COMMENT 'Userid',
  `loginid` varchar(30) NOT NULL,
  `roleid` int(11) NOT NULL,
  `email` varchar(40) NOT NULL COMMENT 'e-mail adress',
  `passwordhash` varchar(255) NOT NULL COMMENT 'password hash',
  `creationdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'creation date',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthday` int(11) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `adress2` varchar(20) NOT NULL,
  `zipcode` varchar(7) NOT NULL,
  `town` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `displayname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `itemid` int(11) NOT NULL DEFAULT '0',
  `roleid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`),
  ADD UNIQUE KEY `menuname` (`menuname`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`itemid`),
  ADD KEY `menuid` (`menuid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sessionid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `loginid` (`loginid`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`roleid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `itemid` (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Userid';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD CONSTRAINT `menuitems_ibfk_1` FOREIGN KEY (`menuid`) REFERENCES `menu` (`menuid`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `user` (`roleid`);

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userrole` (`userid`);

--
-- Constraints for table `userrole`
--
ALTER TABLE `userrole`
  ADD CONSTRAINT `userrole_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `menuitems` (`itemid`),
  ADD CONSTRAINT `userrole_ibfk_2` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
