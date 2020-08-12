-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 11, 2020 at 04:38 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerces`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `pid` (`pid`),
  KEY `pid_2` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`) VALUES
(1, 'Cannon EOS', 36000),
(2, 'Sony DSLR', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 60000),
(5, 'HMT Milar', 8000),
(6, 'Titan Model #201', 3000),
(7, 'Tital Model #301', 5000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Philip', 2000),
(11, 'John Zok', 1500),
(12, 'Peter England', 1499);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'test', 'test@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 9628545655, 'test1', 'tesst123'),
(5, 'test', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 9191919191, 'Gkp', 'gkp'),
(6, 'test', 'test0@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 9191910000, 'kushinagar', 'kushinagar');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` enum('Added To Cart') NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`user_id`, `product_id`, `status`) VALUES
(1, 11, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`pid`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
