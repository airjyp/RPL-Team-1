-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 05:09 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lavender`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(50) NOT NULL AUTO_INCREMENT,
  `name_category` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `img_category` text NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `description`, `img_category`, `active`) VALUES
(5, 'KIMOCHIDESU', 'WATAHI', '', 0),
(6, 'asa', '', '', 0),
(7, 'Perhiasan', 'hehe', '', 0),
(8, 'kecantikan', 'kamu cantik sekali', '', 1),
(9, 'AllinOne', 'menyediakan semua jasa dalam paketan', '', 1),
(10, 'allinone', 'sasa', '', 0),
(11, 'Photography', 'Melayani jasa pengambilan foto dan acara dll', 'Menyusul hehe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cust` int(5) NOT NULL AUTO_INCREMENT,
  `fname_cust` varchar(50) NOT NULL,
  `lname_cust` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `telephone_cust` varchar(15) NOT NULL,
  `email_cust` varchar(50) NOT NULL,
  `address_cust` text NOT NULL,
  `aboutme` text NOT NULL,
  `username_cust` varchar(20) NOT NULL,
  `password_cust` varchar(20) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cust`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=42 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `fname_cust`, `lname_cust`, `birthdate`, `telephone_cust`, `email_cust`, `address_cust`, `aboutme`, `username_cust`, `password_cust`, `active`, `avatar`) VALUES
(41, 'Prasetyo', 'Pambudi', '1997-03-11', '08988544782', 'prasetyopambudi@yahoo.com', 'Jakarta', 'Good boy', 'prasetyopamb', 'Pampam11', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` datetime NOT NULL,
  `total_amount` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_transaction`),
  KEY `id_cust` (`id_cust`),
  KEY `id_vendor` (`id_vendor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `order_date`, `total_amount`, `payment_date`, `id_cust`, `id_vendor`, `active`) VALUES
(1, '2012-12-12 00:00:00', 50000, '2012-12-14 00:00:00', 0, 0, 0),
(2, '2017-12-14 00:00:00', 150000, '0000-00-00 00:00:00', 0, 0, 0),
(3, '2017-05-09 00:00:00', 3, '2017-05-17 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id_vendor` int(100) NOT NULL AUTO_INCREMENT,
  `fname_vendor` text NOT NULL,
  `lname_vendor` varchar(20) NOT NULL,
  `telephone_vendor` varchar(15) NOT NULL,
  `email_vendor` varchar(50) NOT NULL,
  `address_vendor` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `username_vendor` varchar(10) NOT NULL,
  `password_vendor` varchar(20) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '2',
  `avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_vendor`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `fname_vendor`, `lname_vendor`, `telephone_vendor`, `email_vendor`, `address_vendor`, `id_category`, `amount`, `username_vendor`, `password_vendor`, `active`, `avatar`) VALUES
(11, 'pampam', '11', '08088080089', 'pam@gmail.com', '', 0, 0, 'pampam', 'popo09po', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
