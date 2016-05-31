-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 10:36 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paypal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_detail`
--

DROP TABLE IF EXISTS `tbl_product_detail`;
CREATE TABLE IF NOT EXISTS `tbl_product_detail` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_currency` varchar(255) NOT NULL,
  `product_dec` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_detail`
--

INSERT INTO `tbl_product_detail` (`product_id`, `item_number`, `product_name`, `product_price`, `product_currency`, `product_dec`) VALUES
(1, 'Mh==', '50 Minute Session', 38, 'GBP', 'In this standard, full 50 minute session, you can share your worries and fears with me. I will listen to you and check out that I fully understand things as you see them, use all my experience, and the tried and tested strategies to help you deal with your immediate problems and to explore ways to make your future more positive and you a happier existence.\r\n						Most clients (95%) tell me that they feel progress within the first six sessions, with most saying they feel better after just one session.'),
(2, 'MQ==', '50 Minute Session (student or low income individual)', 28, 'GBP', 'This is for anyone who genuinely can’t afford the full session fee, you will get the same professional service as full fee paying clients at a discounted rate. \r\n						I offer this reduced fee because counselling isn’t just my career, its my passion. \r\n						I strive to help as many individuals as possible, to help them reach their ‘full potential’, inner peace and happiness.'),
(3, 'Mw==', 'Email Session', 39, 'GBP', 'Writing is very therapeutic, the option to write a full and in-depth history or background to your problems is something that many clients find useful. \r\n						You can use this method as a starting point, you can read it and edit it until you are completely happy with your email before sending it to me. \r\n						I will take time to read your email carefully and analyse the content before replying to you with my professional thoughts on how I can help you.\r\n						I will suggest some action points so that you can begin working on your problems right away. \r\n						Email is also a great introduction to counselling as it enables you and I to share a lot of information in one go, we can then work on the issues shared in real time via live chat counselling using Skype chat if you wanted to.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
