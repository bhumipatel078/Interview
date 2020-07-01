-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2020 at 02:19 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coruscate_interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `Category_id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Type` varchar(30) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`Category_id`, `Category_Type`) VALUES
(1, 'Fruits'),
(2, 'Vegetables'),
(3, 'Flowers'),
(5, 'Elecronics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(30) NOT NULL,
  `product_Name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `Quantity` varchar(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `Category_Name`, `product_Name`, `price`, `description`, `release_date`, `Quantity`) VALUES
(2, 'Fruits', 'apple', '100', 'djvhfhb', '2020-07-15', '1kg'),
(3, 'Vegetables', 'coli-Flower', '50', 'dnjdefnhrjgbhbgrgrg', '2020-07-09', '1kg'),
(4, 'Elecronics', 'phone', '5000', 'redmi note2', '2020-07-07', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
