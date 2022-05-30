-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 01:45 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `session_password`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
`id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `uid`, `color`) VALUES
(1, '1', '1'),
(2, '1', '1'),
(3, '1', '1'),
(4, '1', '1'),
(5, '1', '1'),
(6, '1', '1'),
(7, '1', '1'),
(8, '2', '1'),
(9, '2', '1'),
(10, '2', '1'),
(11, '2', '1'),
(12, '2', '1'),
(13, '2', '1'),
(14, '2', '1'),
(15, '3', '1'),
(16, '3', '2'),
(17, '3', '3'),
(18, '3', '4'),
(19, '3', '5'),
(20, '3', '1'),
(21, '3', '2'),
(22, '4', '1'),
(23, '4', '2'),
(24, '4', '3'),
(25, '4', '4'),
(26, '4', '5'),
(27, '4', '5'),
(28, '4', '5'),
(29, '5', '1'),
(30, '5', '2'),
(31, '5', '3'),
(32, '5', '4'),
(33, '5', '5'),
(34, '5', '5'),
(35, '5', '4'),
(36, '6', '1'),
(37, '6', '2'),
(38, '6', '3'),
(39, '6', '1'),
(40, '6', '5'),
(41, '6', '5'),
(42, '6', '5'),
(43, '7', '1'),
(44, '7', '2'),
(45, '7', '3'),
(46, '7', '4'),
(47, '7', '5'),
(48, '7', '5'),
(49, '7', '5');

-- --------------------------------------------------------

--
-- Table structure for table `color1`
--

CREATE TABLE IF NOT EXISTS `color1` (
`id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `color_pass`
--

CREATE TABLE IF NOT EXISTS `color_pass` (
`id` int(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `color_values` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `color_pass`
--

INSERT INTO `color_pass` (`id`, `color`, `color_values`, `uid`) VALUES
(1, '1', '2', '1'),
(2, '1', '3', '1'),
(3, '1', '4', '1'),
(4, '1', '5', '1'),
(5, '1', '6', '1'),
(6, '1', '7', '1'),
(7, '1', '8', '1'),
(8, '1', '2', '2'),
(9, '1', '2', '2'),
(10, '1', '3', '2'),
(11, '1', '3', '2'),
(12, '1', '4', '2'),
(13, '1', '4', '2'),
(14, '1', '5', '2'),
(15, '1', '2', '3'),
(16, '2', '1', '3'),
(17, '3', '1', '3'),
(18, '4', '1', '3'),
(19, '5', '1', '3'),
(20, '1', '2', '3'),
(21, '2', '1', '3'),
(22, '1', '8', '4'),
(23, '2', '8', '4'),
(24, '3', '8', '4'),
(25, '4', '8', '4'),
(26, '5', '8', '4'),
(27, '5', '8', '4'),
(28, '5', '7', '4'),
(29, '1', '2', '5'),
(30, '2', '1', '5'),
(31, '3', '1', '5'),
(32, '4', '1', '5'),
(33, '5', '1', '5'),
(34, '5', '8', '5'),
(35, '4', '8', '5'),
(36, '1', '6', '6'),
(37, '2', '6', '6'),
(38, '3', '6', '6'),
(39, '1', '6', '6'),
(40, '5', '6', '6'),
(41, '5', '7', '6'),
(42, '5', '7', '6'),
(43, '1', '8', '7'),
(44, '2', '8', '7'),
(45, '3', '8', '7'),
(46, '4', '8', '7'),
(47, '5', '8', '7'),
(48, '5', '8', '7'),
(49, '5', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `color_pass1`
--

CREATE TABLE IF NOT EXISTS `color_pass1` (
`id` int(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `color_values` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `color_pass1`
--

INSERT INTO `color_pass1` (`id`, `color`, `color_values`, `uid`) VALUES
(1, '1', '2', '1'),
(2, '1', '3', '1'),
(3, '1', '4', '1'),
(4, '1', '5', '1'),
(5, '1', '6', '1'),
(6, '1', '7', '1'),
(7, '1', '8', '1'),
(8, '1', '2', '1'),
(9, '1', '3', '1'),
(10, '1', '4', '1'),
(11, '1', '5', '1'),
(12, '1', '6', '1'),
(13, '1', '7', '1'),
(14, '1', '8', '1'),
(15, '1', '2', '1'),
(16, '1', '3', '1'),
(17, '1', '4', '1'),
(18, '1', '5', '1'),
(19, '1', '6', '1'),
(20, '1', '7', '1'),
(21, '1', '8', '1'),
(22, '1', '2', '2'),
(23, '1', '2', '2'),
(24, '1', '3', '2'),
(25, '1', '3', '2'),
(26, '1', '4', '2'),
(27, '1', '4', '2'),
(28, '1', '2', '2'),
(29, '1', '2', '2'),
(30, '1', '2', '2'),
(31, '1', '3', '2'),
(32, '1', '3', '2'),
(33, '1', '4', '2'),
(34, '1', '4', '2'),
(35, '1', '5', '2'),
(36, '1', '2', '1'),
(37, '1', '3', '1'),
(38, '1', '4', '1'),
(39, '1', '5', '1'),
(40, '1', '6', '1'),
(41, '1', '7', '1'),
(42, '1', '8', '1'),
(43, '1', '2', '3'),
(44, '2', '1', '3'),
(45, '3', '1', '3'),
(46, '4', '1', '3'),
(47, '5', '1', '3'),
(48, '1', '2', '3'),
(49, '2', '1', '3'),
(50, '1', '2', '3'),
(51, '2', '1', '3'),
(52, '3', '1', '3'),
(53, '4', '1', '3'),
(54, '5', '1', '3'),
(55, '1', '2', '3'),
(56, '2', '1', '3'),
(57, '1', '2', '2'),
(58, '1', '2', '2'),
(59, '1', '3', '2'),
(60, '1', '3', '2'),
(61, '1', '4', '2'),
(62, '1', '4', '2'),
(63, '1', '5', '2'),
(64, '1', '2', '2'),
(65, '1', '3', '2'),
(66, '1', '4', '2'),
(67, '1', '5', '2'),
(68, '1', '6', '2'),
(69, '1', '7', '2'),
(70, '1', '8', '2'),
(71, '1', '2', '3'),
(72, '2', '1', '3'),
(73, '3', '1', '3'),
(74, '4', '1', '3'),
(75, '5', '1', '3'),
(76, '5', '1', '3'),
(77, '1', '2', '3'),
(78, '1', '8', '4'),
(79, '2', '8', '4'),
(80, '3', '8', '4'),
(81, '4', '8', '4'),
(82, '5', '8', '4'),
(83, '5', '8', '4'),
(84, '5', '7', '4'),
(85, '1', '8', '4'),
(86, '2', '8', '4'),
(87, '3', '8', '4'),
(88, '4', '8', '4'),
(89, '5', '8', '4'),
(90, '5', '8', '4'),
(91, '5', '7', '4'),
(92, '1', '2', '5'),
(93, '2', '1', '5'),
(94, '3', '1', '5'),
(95, '4', '1', '5'),
(96, '5', '1', '5'),
(97, '5', '8', '5'),
(98, '4', '8', '5'),
(99, '1', '2', '5'),
(100, '2', '1', '5'),
(101, '3', '1', '5'),
(102, '4', '1', '5'),
(103, '5', '1', '5'),
(104, '5', '8', '5'),
(105, '5', '8', '5'),
(106, '1', '6', '6'),
(107, '2', '6', '6'),
(108, '3', '6', '6'),
(109, '1', '6', '6'),
(110, '5', '6', '6'),
(111, '5', '7', '6'),
(112, '5', '7', '6'),
(113, '1', '8', '7'),
(114, '2', '8', '7'),
(115, '3', '8', '7'),
(116, '4', '8', '7'),
(117, '5', '8', '7'),
(118, '5', '8', '7'),
(119, '5', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `color_password`
--

CREATE TABLE IF NOT EXISTS `color_password` (
`id` int(10) NOT NULL,
  `color1` varchar(10) NOT NULL,
  `color2` varchar(10) NOT NULL,
  `color_val` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `color_password`
--

INSERT INTO `color_password` (`id`, `color1`, `color2`, `color_val`) VALUES
(1, '1', '2', 'Q'),
(2, '1', '3', 'W'),
(3, '1', '4', 'E'),
(4, '1', '5', 'R'),
(5, '1', '6', 'T'),
(6, '1', '7', 'Y'),
(7, '2', '1', 'U'),
(8, '2', '3', 'I'),
(9, '2', '4', 'O'),
(10, '2', '5', 'P'),
(11, '2', '6', 'A'),
(12, '2', '7', 'S'),
(13, '3', '1', 'D'),
(14, '3', '2', 'F'),
(15, '3', '4', 'G'),
(16, '3', '5', 'H'),
(17, '3', '6', 'J'),
(18, '3', '7', 'K'),
(19, '4', '1', 'L'),
(20, '4', '2', 'Z'),
(21, '4', '3', 'X'),
(22, '4', '5', 'C'),
(23, '4', '6', 'V'),
(24, '4', '7', 'B'),
(25, '5', '1', 'N'),
(26, '5', '2', 'M'),
(27, '5', '3', '1'),
(28, '5', '4', '9'),
(29, '5', '6', '*'),
(30, '5', '7', '$'),
(31, '1', '8', '&'),
(32, '2', '8', '@'),
(33, '3', '8', '!'),
(34, '4', '8', '^^'),
(35, '5', '8', '$$');

-- --------------------------------------------------------

--
-- Table structure for table `input1`
--

CREATE TABLE IF NOT EXISTS `input1` (
`id` int(10) NOT NULL,
  `row1` varchar(10) NOT NULL,
  `rowid` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `input1`
--

INSERT INTO `input1` (`id`, `row1`, `rowid`) VALUES
(1, 'Q', '1'),
(2, 'W', '1'),
(3, 'E', '1'),
(4, 'R', '1'),
(5, 'T', '1'),
(6, 'Y', '2'),
(7, 'W', '2'),
(8, 'I', '2'),
(9, 'O', '2'),
(10, 'P', '2'),
(11, 'A', '3'),
(12, 'S', '3'),
(13, 'D', '3'),
(14, 'F', '3'),
(15, 'G', '3'),
(16, 'H', '4'),
(17, 'J', '4'),
(18, 'K', '4'),
(19, 'L', '4'),
(20, 'Z', '4'),
(21, 'X', '5'),
(22, 'C', '5'),
(23, 'V', '5'),
(24, 'B', '5'),
(25, 'N', '5'),
(26, '1', '6'),
(27, 'M', '6'),
(28, '9', '6'),
(29, '5', '6'),
(30, '0', '6');

-- --------------------------------------------------------

--
-- Table structure for table `inputs`
--

CREATE TABLE IF NOT EXISTS `inputs` (
`id` int(10) NOT NULL,
  `row1` varchar(10) NOT NULL,
  `rowid` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `inputs`
--

INSERT INTO `inputs` (`id`, `row1`, `rowid`) VALUES
(1, 'Q', '1'),
(2, 'W', '1'),
(3, 'E', '1'),
(4, 'R', '1'),
(5, 'T', '1'),
(6, 'Y', '2'),
(7, 'W', '2'),
(8, 'I', '2'),
(9, 'O', '2'),
(10, 'P', '2'),
(11, 'A', '3'),
(12, 'S', '3'),
(13, 'D', '3'),
(14, 'F', '3'),
(15, 'G', '3'),
(16, 'H', '4'),
(17, 'J', '4'),
(18, 'K', '4'),
(19, 'L', '4'),
(20, 'Z', '4'),
(21, 'X', '5'),
(22, 'C', '5'),
(23, 'V', '5'),
(24, 'B', '5'),
(25, 'N', '5'),
(26, '1', '6'),
(27, 'M', '6'),
(28, '9', '6'),
(29, '5', '6'),
(30, '0', '6');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
`id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `uid`, `pass`) VALUES
(1, '1', 'Q'),
(2, '1', 'R'),
(3, '1', 'A'),
(4, '1', 'J'),
(5, '2', 'M'),
(6, '2', 'A'),
(7, '2', 'H'),
(8, '2', 'E'),
(9, '3', 'R'),
(10, '3', 'A'),
(11, '3', 'M'),
(12, '3', 'Q'),
(13, '4', 'D'),
(14, '4', 'D'),
(15, '4', 'D'),
(16, '4', 'A'),
(17, '5', 'H'),
(18, '5', 'O'),
(19, '5', 'N'),
(20, '5', 'E'),
(21, '6', 'M'),
(22, '6', 'A'),
(23, '6', 'D'),
(24, '6', 'H'),
(25, '7', 'S'),
(26, '7', 'N'),
(27, '7', 'E'),
(28, '7', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `password1`
--

CREATE TABLE IF NOT EXISTS `password1` (
`id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `pass1` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `uname`, `email`, `mobile`, `uid`) VALUES
(1, 'Rajkumar', 'R', 'raj', 'raj@gmail.com', '9952355052', '1'),
(2, 'Mahendran', 'R', 'mahe', 'mahe@gmail.com', '9994482552', '2'),
(3, 'ram', 'ram', 'ram', 'ram@gmail.com', '9952355052', '3'),
(4, 'Dani', 'R', 'dani', 'dani@gmail.com', '6383754210', '4'),
(5, 'honey', 'R', 'honey', 'honey', '8695421037', '5'),
(6, 'madhu', 'E', 'madhu', 'madhu@gmail.com', '9652200360', '6'),
(7, 'sneha', 'V', 'sneha', 'sneha@gmail.com', '9856589565', '7');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
`id` int(5) NOT NULL,
  `account` varchar(20) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amt` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `account`, `pin`, `amount`, `name`, `receiver`, `amt`) VALUES
(1, '151320', '1513', '2500', '5', '', ''),
(2, '20009', '1911', '1000', '6', '151320', '500'),
(3, '061121', '1106', '500', '7', '151320', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_balance`
--

CREATE TABLE IF NOT EXISTS `transaction_balance` (
`id` int(5) NOT NULL,
  `account` varchar(20) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amt` varchar(10) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transaction_balance`
--

INSERT INTO `transaction_balance` (`id`, `account`, `pin`, `amount`, `receiver`, `amt`, `name`) VALUES
(1, '20009', '1911', '1000', '151320', '500', 6),
(2, '061121', '1106', '500', '151320', '1000', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color1`
--
ALTER TABLE `color1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_pass`
--
ALTER TABLE `color_pass`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_pass1`
--
ALTER TABLE `color_pass1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_password`
--
ALTER TABLE `color_password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input1`
--
ALTER TABLE `input1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputs`
--
ALTER TABLE `inputs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password1`
--
ALTER TABLE `password1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `transaction_balance`
--
ALTER TABLE `transaction_balance`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `color1`
--
ALTER TABLE `color1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `color_pass`
--
ALTER TABLE `color_pass`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `color_pass1`
--
ALTER TABLE `color_pass1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `color_password`
--
ALTER TABLE `color_password`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `input1`
--
ALTER TABLE `input1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `inputs`
--
ALTER TABLE `inputs`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `password1`
--
ALTER TABLE `password1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction_balance`
--
ALTER TABLE `transaction_balance`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
