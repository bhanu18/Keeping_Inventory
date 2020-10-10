-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 10, 2020 at 10:28 AM
-- Server version: 8.0.18
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items_sale`
--

DROP TABLE IF EXISTS `items_sale`;
CREATE TABLE IF NOT EXISTS `items_sale` (
  `sale_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `sale_quantity` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  KEY `Items_sale_fk0` (`sale_id`),
  KEY `Items_sale_fk1` (`prod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items_sale`
--

INSERT INTO `items_sale` (`sale_id`, `prod_id`, `Date`, `sale_quantity`, `sale_price`) VALUES
(1, 0, '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Cost_price` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Quantiy` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Cost_price`, `price`, `Color`, `Quantiy`) VALUES
(1, 'Adda Slip Ons', 100, 300, 'Black', 5),
(2, 'Adda Slip Ons', 100, 300, 'White', 0),
(3, 'Apple Sandal', 100, 180, 'Black', 5),
(4, 'Apple Shoe', 180, 100, 'black', 10),
(5, 'Hawaiian Shirt', 280, 150, 'Blue', 14),
(6, 'Snorkeling', 150, 350, 'Yellow', 5),
(7, 'WaterProof Bag', 300, 550, 'Red', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date_time` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
