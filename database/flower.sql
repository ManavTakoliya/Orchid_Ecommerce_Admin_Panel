-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2023 at 03:11 PM
-- Server version: 10.4.10-MariaDB
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
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(305) NOT NULL,
  `password` varchar(265) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(8, 'admin@gmail.com', '$2y$12$G/lZYwU6OUQlFqSUoo1OkOJQKOJR1XjoqfCUzYxxgzaaUv0M05vWK'),
(9, 'manav@gmail.com', '$2y$12$t7OjXkBdflLAoJmqQBFOT.xCvhkud/LStRmIwZ.FO6ESK/H8uP4e.');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usersid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `orderdate` varchar(300) NOT NULL,
  `ordermethod` varchar(250) NOT NULL,
  `orderstatus` int(11) NOT NULL COMMENT 'pending=1,2=order placed,3=order delivered,4=order failed,5=order cancel',
  `amount` int(11) NOT NULL,
  `billid` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `usersid`, `name`, `mobile`, `state`, `city`, `pincode`, `address`, `orderdate`, `ordermethod`, `orderstatus`, `amount`, `billid`) VALUES
(39, 15, 'manav tak', '998983599', 'guj', 'bvb', 36400, 'ndnnenen jdjdj', '2021/04/23', '1', 0, 1800, 0),
(40, 15, 'manav takoliya', '98983599', 'guj', 'bvn', 36400, 'bsbeh shshs', '2021/04/23', '1', 2, 1500, 0),
(38, 15, '\"manav takoliya\"', '\"8388383\"', '\"guj\"', '\"bvn\"', 438001, '\"gdhd\"', '2021/04/23', '1', 0, 4800, 0),
(37, 15, '\"manav takoliya\"', '\"8388383\"', '\"guj\"', '\"bvn\"', 438001, '\"gdhd\"', '2021/04/23', '1', 0, 9900, 0),
(41, 16, 'manav takoliya', '9898356662', 'guj', 'bvn', 364001, 'shree hari society', '2021/04/23', '1', 0, 300, 0),
(42, 16, 'manav takoliya', '9898359939', 'guj', 'bvn', 364001, 'jdj bsv', '2021/04/23', '1', 0, 300, 0),
(43, 16, 'manav takoliya', '9898935691', 'abb', 'sbbsh', 364111, 'hehhh hhehehh', '2021/04/23', '1', 0, 600, 0),
(44, 16, 'manav takoliya', '4664313131', 'ha', 'aggs', 123456, 'tgw ywyw', '2021/04/23', '1', 0, 900, 0),
(45, 16, 'manav takoliya', '9494979797', 'bzbssh', 'bsbsb', 123456, 'nsnw nehsb', '2021/04/23', '1', 0, 300, 0),
(46, 16, 'manav takoliya', '4664121212', 'abhs', 'svgs', 123456, 'hsgs shhs', '2021/04/23', '1', 0, 300, 0),
(47, 16, 'manav takoliya', '6454123456', 'vsvsgs', 'bava', 123456, 'ga yeyw', '2021/04/23', '1', 0, 300, 0),
(48, 16, 'manav takoliya', '6464546455', 'gbs', 'sggsg', 123456, 'ggsgs sggw', '2021/04/23', '1', 0, 300, 0),
(49, 16, 'manav takoliya', '1234567899', 'gujarat', 'bvn', 364001, 'shree hari society nilambag', '2021/04/23', '1', 0, 1500, 0),
(50, 16, 'pooja', '9797346655', 'gujarat', 'jamnagar', 364002, 'nilambag nilambag', '2021/04/23', '1', 0, 1500, 0),
(51, 16, 'manav takoliya', '3640019898', 'bs', 'bvn', 364001, 'bharatnagar maruti', '2021/04/24', '1', 0, 2100, 0),
(52, 16, 'manav takoliya', '6655553311', 'guj', 'bvn', 364001, 'maruti nagar', '2021/05/07', '1', 0, 900, 0),
(53, 16, 'manav takoliya', '9499412454', 'ggs', 'vaga', 123456, 'gsgvsv vav', '2021/05/21', '1', 0, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usersid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `billid` int(11) NOT NULL DEFAULT 0 COMMENT '0 = not payment 1=payment',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `usersid`, `productid`, `price`, `quantity`, `billid`) VALUES
(7, 15, 18, 1500, 5, 38),
(6, 15, 17, 1500, 5, 37),
(8, 15, 19, 200, 18, 37),
(9, 15, 18, 1500, 5, 39),
(10, 15, 17, 300, 5, 39),
(11, 15, 18, 300, 5, 40),
(12, 16, 18, 900, 3, 41),
(13, 16, 18, 900, 3, 42),
(14, 16, 18, 900, 3, 43),
(15, 16, 18, 900, 3, 44),
(16, 16, 18, 900, 3, 45),
(17, 16, 18, 900, 3, 46),
(18, 16, 18, 900, 3, 47),
(19, 16, 18, 900, 3, 48),
(20, 16, 18, 900, 3, 49),
(21, 16, 17, 2100, 7, 50),
(22, 16, 17, 300, 7, 51),
(23, 16, 18, 300, 3, 52),
(24, 16, 18, 300, 1, 53),
(25, 17, 18, 600, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `islive` int(11) NOT NULL COMMENT 'live =1 , not live = 0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `photo`, `islive`) VALUES
(47, 'MeriGold', '417575_merigold.jpg', 1),
(44, 'Bouquet  Flower', '172086_Bouquet.jfif', 1),
(46, 'gerbera', '588721_gerbera.png', 1),
(45, 'orchid', '859619_orchid.jpg', 1),
(42, 'Marigold', '122163_Marigold.jpg', 1),
(40, 'SunFlower', '598132_sunflower.jpg', 1),
(39, 'Lotus', '205131_lotus2.jpg', 0),
(32, 'Rose ', '761593_rose.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

DROP TABLE IF EXISTS `error`;
CREATE TABLE IF NOT EXISTS `error` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `error` text NOT NULL,
  `query` text NOT NULL,
  `datetime` text NOT NULL,
  `line` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`id`, `filename`, `error`, `query`, `datetime`, `line`) VALUES
(1, 'register', '', '', 'Mon 25-05-2020 09:54:04 PM', 18),
(2, 'offers.php', 'Table \'flower.offers\' doesn\'t exist', 'select * from offers', 'Mon 29-06-2020 06:37:13 PM', 16),
(3, 'offers.php', 'Table \'flower.offers\' doesn\'t exist', 'select * from offers', 'Mon 29-06-2020 06:37:13 PM', 16),
(4, 'offers.php', 'Table \'flower.offers\' doesn\'t exist', 'select * from offers', 'Mon 29-06-2020 06:37:24 PM', 16),
(5, 'offers.php', 'Table \'flower.offers\' doesn\'t exist', 'select * from offers', 'Mon 29-06-2020 06:37:24 PM', 16),
(6, 'offers.php', 'Table \'flower.offers\' doesn\'t exist', 'select * from offers', 'Mon 29-06-2020 07:04:57 PM', 16),
(7, 'offers.php', 'Table \'flower.offers\' doesn\'t exist', 'select * from offers', 'Mon 29-06-2020 07:04:57 PM', 16),
(8, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'16\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:02 PM', 15),
(9, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'16\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:05 PM', 15),
(10, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'16\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:08 PM', 15),
(11, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'16\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:11 PM', 15),
(12, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'16\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:15 PM', 15),
(13, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:34 PM', 15),
(14, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:15:39 PM', 15),
(15, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:16:07 PM', 15),
(16, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:16:10 PM', 15),
(17, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:16:15 PM', 15),
(18, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:16:15 PM', 15),
(19, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:16:18 PM', 15),
(20, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:16:39 PM', 15),
(21, 'addtocart.php', 'Unknown column \'usersid\' in \'where clause\'', 'select id from cart where productid=\'6\' and usersid=\'26\' and billid=0', 'Mon 29-06-2020 07:17:15 PM', 15),
(22, 'cart_total.php', 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'\'15\\\'\' at line 1', 'select price from cart where usersid=\'15\\\'', 'Thu 22-04-2021 01:00:05 PM', 16),
(23, 'add_user_detail.php', 'Incorrect integer value: \'\"1\"\' for column \'usersid\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (\'\"1\"\',\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'0\')', 'Thu 22-04-2021 04:00:22 PM', 16),
(24, 'add_user_detail.php', 'Incorrect integer value: \'\"364001\"\' for column \'pincode\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (\'1\',\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'0\')', 'Thu 22-04-2021 04:00:35 PM', 16),
(25, 'add_user_detail.php', 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'1\'\',\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'\' at line 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (\'\'1\'\',\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'0\')', 'Thu 22-04-2021 04:00:46 PM', 16),
(26, 'add_user_detail.php', 'Incorrect integer value: \'\"364001\"\' for column \'pincode\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (\'1\',\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'0\')', 'Thu 22-04-2021 04:01:23 PM', 16),
(27, 'add_user_detail.php', 'Incorrect integer value: \'\"364001\"\' for column \'pincode\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (\'1\',\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'0\')', 'Thu 22-04-2021 04:01:24 PM', 16),
(28, 'add_user_detail.php', 'Incorrect integer value: \'\"364001\"\' for column \'pincode\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (1,\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',\'0\',\'0\')', 'Thu 22-04-2021 04:01:29 PM', 16),
(29, 'add_user_detail.php', 'Incorrect integer value: \'\"364001\"\' for column \'pincode\' at row 1', 'INSERT INTO bill (usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (1,\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'\"364001\"\',\'\"dsndnsd\"\',\'0\',\'0\',0,0)', 'Thu 22-04-2021 04:06:40 PM', 16),
(30, 'checkout.php', 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \')\' at line 1', 'INSERT INTO bill (usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount) VALUES (1,\'\"manav\"\',\'\"988989889\"\',\'\"guj\"\',\'\"btn\"\',\'364001\',\'\"dsndnsd\"\',\'0\',\'0\',0,)', 'Fri 23-04-2021 12:43:36 PM', 28),
(31, 'checkout.php', 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'billid=0\' at line 1', '', 'Fri 23-04-2021 12:57:15 PM', 42),
(32, 'checkout.php', 'Incorrect integer value: \'\"438001\"\' for column \'pincode\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount, billid) VALUES (\'15\',\'\"manav takoliya\"\',\'\"8388383\"\',\'\"guj\"\',\'\"bvn\"\',\'\"438001\"\',\'\"gdhd\"\',\'2021/04/23\',\'1\',\'0\',\'9900\',\'0\')', 'Fri 23-04-2021 01:55:18 PM', 72),
(33, 'checkout.php', 'Incorrect integer value: \'hshwh\' for column \'pincode\' at row 1', 'INSERT INTO bill(usersid, name, mobile, state, city, pincode, address, orderdate, ordermethod, orderstatus, amount, billid) VALUES (\'15\',\'beh\',\'6464\',\'bshsh\',\'beheh\',\'hshwh\',\'bebbh behheg\',\'2021/04/23\',\'1\',\'0\',\'1800\',\'0\')', 'Fri 23-04-2021 02:00:00 PM', 72);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `pid`, `discount`, `photo`) VALUES
(5, 17, '20', '602620red_rose_offers.jfif'),
(4, 19, '20', '255517white_rose_offers.png'),
(3, 18, '20', '626418pink_gerbera_offers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(300) NOT NULL,
  `weight` varchar(300) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `islive` int(11) NOT NULL COMMENT 'live=1 , notlive=0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `size`, `weight`, `details`, `categoryid`, `photo`, `islive`) VALUES
(17, 'red rose', 300, 68, '10', '122', 'red rose', 32, '319794_redrose.jpg', 1),
(18, 'pink gerbera', 300, 125, '122', '122', 'pink gerbera', 46, '205434_pink_gerbera.jpg', 1),
(19, 'white rose', 200, 86, '122', '122', 'white rose', 32, '638232_white_rose.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `productid`, `photo`) VALUES
(23, 18, '481392_pink_gerbera_offers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `regid` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `regid`) VALUES
(17, 'manav@gmail.com', '$2y$12$41N6W2A2f.0Vk6bIpuOw3.IeK09Fz.HxGYXM4ZkgFYcr.8l1iEO2S', ''),
(7, 'takoliya.pooja777@gmail.com', '$2y$12$Om4btK/tYTpJVx1OuHJq1eRpWgF4Ydkta6t6kS0keCK9koB5Drvmy', '2'),
(13, 'takoliya.mi777@gmail.com', '$2y$12$HtdmbzvXCpQtOtagQgOoY.LqeiBmSybas8Y6JVzK.EjNiQlGPGGa6', '2'),
(9, 'takoliya.anil777@gmail.com', '$2y$12$ARK.0Yhs1DhEo2zr.fma9u8opgnTm7O2fASCFFpVvmF.kS7MO7OM6', '1'),
(11, 'takoliya.priyanka777@gmail.com', '$2y$12$KWyjsmSzxooOOSkcJauOGu8M0Js7w2/ymHmv8g7jax.UiCPfcgJy6', '1'),
(16, 'takoliya.manav777@gmail.com', 'manav333', 'cthzCfJm7Sw:APA91bEQb5XSZb3EIjbXPKzk6xOghnWuMt1nFN57aTMplFKYKnRnEal4HBppMuEEhNp-8Fehc3TiNOuTxAnxjr27sbPGd75HAJgFcjnZKOUz6jRfXKXbekUTpwQeTJDBftozXQS27E7R');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
