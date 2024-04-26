-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 02:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytrustnet
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'general',
  `status` enum('active','pending','deleted','') NOT NULL DEFAULT 'pending',
  `authtoken` varchar(250) NOT NULL,
  `plan` enum('No plans yet','basic plan','pro plan','premium plan','mining basic plan','mining pro plan','mining premium plan','mining vip plan') CHARACTER SET utf8 NOT NULL,
  `balance` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `goldplan` enum('No gold plans yet','10g Gold bar Lady Fortuna','1 oz Gold bar Lady Fortuna','Vreneli Gold coin','Fine Gold Coin 900-50 Francs Napoleon III','Fine Gold Coin 900.00-20 french Francs Napoleon','1 oz fine Gold Coin 999.9 Philharmonic BU Mixed Years','1 oz Fine Gold Bar 999.9 PAMO Suisse Lunar Snake','1 oz fine Gold Bar 999.9 PAMP Suisse Am Yisrael Chai',' 500gram Fine Gold Bar 999.9 PAMP Suisse','50g Gold bar PAMP','25 oz Fine Gold Bar Monster Box 999.9 - PAMP Suisse','5 gram Fine Gold Bar 999.9 - PAMP Suisse Lunar Ox','5 gram Fine Gold Bar 999.9 - PAMP Suisse Luna Tiger','fine Gold Coin 900.0-50 Swiss Francs Vreneli 100 years','25x1 gram multigram fine gold bar 999.0 PAMP Suisse','1 kilo fine Gold Bar 999.9 Pamp SUisse Lady Fortuna','1/10 oz Fine Gold Coin 999.9- Maple Leaf BU Mixed Years','30gram Fine Gold coin 999.0 Panda BU 2018','30gram Fine Gold coin 999.0 Panda BU 2019','1 oz fine Gold coin 999.9 Buffalo BU Mixed years') CHARACTER SET utf8 NOT NULL,
  `withdrawals` varchar(50) NOT NULL,
  `gpprofit` varchar(50) NOT NULL,
  `btcwallet` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mainbalance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `type`, `status`, `authtoken`, `plan`, `balance`, `profit`, `goldplan`, `withdrawals`, `gpprofit`, `btcwallet`, `country`, `state`, `mainbalance`) VALUES
(1, 'webb', 'damn', 'admin@webdamn.com', '202cb962ac59075b964b07152d234b70', 'female', '0709987878', 'Web developer', '', 'administrator', 'active', '', 'mining premium plan', '', '', '30gram Fine Gold coin 999.0 Panda BU 2019', '500', '', '2hwnenrjfijr', '', '', ''),
(5, 'jhonn', 'smith', 'info@webdamn.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', '', 'general', 'active', '73f66749989c7b09389894f1b27daa7387f9956fa51c87c1ba4fc4684b91acb5', 'No plans yet', '', '333', 'No gold plans yet', '', '', '', '', '', ''),
(6, 'Jimmy', 'Anderson', 'jm@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'PHP developer', '', 'general', 'active', '73f66749989c7b09389894f1b27daa736156fbd08795da8955fb36cf730f2fb0', 'No plans yet', '5656', '', 'No gold plans yet', '', '', '', '', '', ''),
(7, 'Andy', 'Flower', 'andy@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'dfdsd', '', 'general', 'active', '73f66749989c7b09389894f1b27daa738d2775af2555b0d1ed582212a3991144', 'No plans yet', '555', '444', 'No gold plans yet', '', '', '', '', '', ''),
(8, 'divine', 'okoye', 'admin@divplanet.com', '67d46ec7d84ba284982e634970c5b7df', 'female', '070999237', 'gggggggg', '', 'general', 'active', '73f66749989c7b09389894f1b27daa73dc0212588c86ff95f11311bfae717d7a', '', '555', '444', 'Fine Gold Coin 900-50 Francs Napoleon III', '556', '5566', 'rffdcbjjbjvhvhvhvhvgcghcccccccccgfcgtvbnbjhjjjjjjj', '', '', ''),
(9, 'James ', 'Mathew', 'divine@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '', '', '', 'general', 'pending', '73f66749989c7b09389894f1b27daa73ca21af7fb303db81867398824961b9b5', 'No plans yet', '', '', 'No gold plans yet', '', '', '', 'Swizaland', 'Mr', ''),
(10, 'Divine', 'okoye ', 'Divineokoye123@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '', '', '', 'general', 'active', '73f66749989c7b09389894f1b27daa730f11e3e534e3dd1e2dd25cd326ce34a5', '', '233565', '50', 'No gold plans yet', '33', '500', '2hwnenrjfijr', 'Nigeria', 'Mr', '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;