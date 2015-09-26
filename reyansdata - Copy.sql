-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2014 at 05:02 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reyansdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`) VALUES
(1, 'YOUR CONTRIBUTION IS KEPT CONFIDENTIAL AND WILL BE USED TO MAKE THE SYSTEM BETTER. THANK U. ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `access_level` int(11) DEFAULT '0',
  `email_add` varchar(45) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `first_name`, `last_name`, `access_level`, `email_add`) VALUES
(1, 'admin', 'admin', 'Sam', 'Bonnie', 0, 'daryl_franz@yahoo.com'),
(2, 'zhy', '1234', 'Zairen ', 'Bonto', 0, ''),
(3, 'pam', '1234', 'Pamela', 'Pineda', 0, ''),
(4, 'reyan', '1234', 'Reynaldo', 'Terrado Jr.', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` text,
  `msg_id_fk` int(11) DEFAULT NULL,
  `firstname` text,
  `emailaddress` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `msg_id_fk` (`msg_id_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `msg_id_fk`, `firstname`, `emailaddress`) VALUES
(98, 'Cool Products', 0, 'sam dare', 'samdare@ymail.com'),
(99, 'sa', 0, 'sa', 'samdare@ymail.com'),
(100, 'coolll', 0, 'coooool', 'samdare@ymail.com11'),
(101, 'col', 0, 'dare sam', 'samdare@ymail.com22'),
(102, 'ca', 0, 'dare sam', 'samdare@ymail.com'),
(103, 'ca', 0, 'dare sam', 'samdare@ymail.com'),
(104, 'sa', 0, 'sam', 'samdare@ymail.com'),
(105, 'sdsdsd', 0, 'dsds', 'samdare@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `subject`, `message`) VALUES
(12, 'Ali Mugisha', 'ali@gmail.com', 'Business', 'See U'),
(13, 'sa', 'samdare@ymail.com', 'assa', 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `email`, `comment`) VALUES
(32, 'sam', 'samdare@ymail.com', 'dasasas ');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE IF NOT EXISTS `myorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Department` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `Contact_Number` varchar(45) NOT NULL,
  `Landmark` varchar(45) NOT NULL,
  `OrderedProduct` varchar(200) NOT NULL,
  `Message` varchar(45) NOT NULL,
  `Total` varchar(45) NOT NULL,
  `Time_Delivery` varchar(45) NOT NULL,
  `Transactiondate` varchar(45) NOT NULL,
  `status` varchar(30) NOT NULL,
  `mop` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 PACK_KEYS=0 AUTO_INCREMENT=688 ;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`id`, `First_Name`, `Last_Name`, `City`, `Department`, `Street`, `Contact_Number`, `Landmark`, `OrderedProduct`, `Message`, `Total`, `Time_Delivery`, `Transactiondate`, `status`, `mop`) VALUES
(685, 'mugisha ali', '', 'Ntinda', '77777', '', '555555', '', 'Whole Milk x 1', 'kalalala', '10433', '6:00pm', '06/27/2014', 'pending', 'Cash On Deliverly'),
(686, 'gaga', '', 'Mengo', '23232 Mengo Hill', '', '3443333', '', 'Buter x 1', 'Keep Time', '9276', '7:00pm', '07/21/2014', 'pending', 'Cash On Deliverly'),
(687, 'mugisha ali', '', 'Kampala City', '454', '', '+256 4444444', '', 'Fresh Dairy Milk x 1', 'lalala', '4876', '7:00am', '07/22/2014', 'pending', 'Cash On Deliverly'),
(684, 'mugisha ali', '', 'Kampala City', '4444', '', '55555', '', 'Fresh Dairy Milk x 1', 'jaaaaaa', '4443', '7:00am', '06/27/2014', 'pending', 'Cash On Deliverly'),
(681, 'mugisha ali', '', 'Mengo', '44', '', '444444', '', 'Yoghurt x 1', 'KAMMA', '18077', '7:00am', '06/27/2014', 'Delivered', 'Cash On Deliverly'),
(682, 'mugisha ali', '', 'Mengo', '555', '', '+445444', '', 'Home made Cheese x 1', 'kapapapapa', '463243', '4:00pm', '06/27/2014', 'pending', 'Cash On Deliverly'),
(683, 'mugisha ali', '', 'Kampala City', '45555', '', '+44545454', '', 'Buter x 1', 'test2222', '4876', '8:00pm', '06/27/2014', 'Delivered', 'Cash On Deliverly');

-- --------------------------------------------------------

--
-- Table structure for table `reyansproduct`
--

CREATE TABLE IF NOT EXISTS `reyansproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(45) NOT NULL,
  `product_prize` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'Available',
  `description` varchar(45) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `originated` varchar(30) NOT NULL,
  `category` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `reyansproduct`
--

INSERT INTO `reyansproduct` (`id`, `product`, `product_prize`, `status`, `description`, `picture`, `originated`, `category`, `quantity`) VALUES
(42, 'Fresh Dairy Milk', '4443.00', 'Available', 'Preoteins and Minerals for All Ages', 'upload/home01.jpg', 'kampaala', 'milk', ''),
(43, 'Fresh Milk', '343.00', 'Available', 'Raw Nutricious Milk', 'upload/images333.jpg', 'kampala', 'milk', '33 kg'),
(49, 'Local Butter', '4400.00', 'Available', 'Rich In proteins', 'upload/index4.jpg', 'kampala', 'Butter', ''),
(51, 'Buter', '433.oo', 'Available', 'Nice', 'upload/cream.gif', 'kampala', 'cream', ''),
(52, 'Yoghurt', '434.00', 'Available', 'Strawberry', 'upload/ICU_Strawberry.jpg', 'kampala', 'Yoghurt', ''),
(63, 'Whole Milk', '10000.00', 'Available', 'Raw Milk', 'upload/colostrum.jpg', 'kampala', 'milk', ''),
(64, 'Ice cream cake', '3445.00', 'Available', 'Sweet ice Cream', 'upload/Tulips.jpg', 'kampala', 'Cream', '80 kg'),
(65, 'Cheese11', '343434.00', 'Available', 'cool', 'upload/Koala.jpg', 'kampala', 'cheese', ''),
(66, 'butter', '30000000.00', 'Available', 'butter', 'upload/Tulips.jpg', 'butter', 'Butter', '5 kg'),
(67, 'cheese', '4560000.00', 'Available', 'Nice', 'upload/Tulips.jpg', 'kampala', 'cheese', ''),
(68, 'test', '3434', 'Available', 'test', 'upload/Hydrangeas.jpg', 'test', 'cheese', ''),
(69, 'Cream', '56700', 'Available', 'cream', 'upload/Chrysanthemum.jpg', 'kampala', 'Cream', '40 kg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(30) NOT NULL,
  `user_level` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `address`, `user_level`, `role`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Sam', '', '1', ''),
(3, 'ali', '123', 'ali', 'mugisha', '', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eName` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `eType` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lastedit` varchar(30) NOT NULL,
  `cat` varchar(30) NOT NULL,
  `datein` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `eName`, `gender`, `country`, `password`, `userName`, `eType`, `email`, `lastedit`, `cat`, `datein`, `date`) VALUES
(63, 'mugisha ali', 'male', 'Uganda', '12345', 'sam', 'Customer', 'alimugisha@yahoo.com', '2014-06-25', 'regular', '2014-06-25', '0000-00-00'),
(64, 'admin', 'male', 'Uganda', '123456', 'admin', 'Customer', 'smama@yahoo.com', '2014-06-25', 'regular', '2014-06-25', '0000-00-00'),
(65, 'test test', 'male', 'Uganda', 'test', 'test', 'Customer', 'test@gmail.com', '2014-07-21', 'regular', '2014-07-21', '0000-00-00'),
(66, 'gaga', 'male', 'Uganda', 'gaga', 'gaga', 'Customer', 'gaga@yahoo.com', '2014-07-21', 'regular', '2014-07-21', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
