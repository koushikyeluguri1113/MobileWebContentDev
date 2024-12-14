-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2024 at 04:50 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ombharath`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rno` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `name`, `email`, `rno`, `msg`) VALUES
(1, 'koushik', 'koushikyeluguri7@gmail.com', '3456', 'sdfghjk'),
(2, 'abk', 'madhumithauppala@gmail.com', '1234', 'asdfghjbnm'),
(3, 'Koushik Yeluguri', 'koushikyeluguri7@gmail.com', '4567891230', 'quality of product is good');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `name`, `image`, `price`, `description`) VALUES
(26, 'cultivator', 'product_images/cultivator.png', 12000, 'asdfghA cultivator is a piece of agricultural equipment used for secondary tillage'),
(28, 'plough', 'product_images/plough.png', 23666, 'A plough is a farming tool used to loosen and turn the soil before planting or sowing seeds'),
(29, 'grills', 'product_images/g1.jpg', 25000, 'These meticulously crafted grills offer a timeless aesthetic that enhances the architectural appeal of windows'),
(30, 'gates', 'product_images/g2.jpg', 30000, 'Wrought iron is a durable and sturdy product. Fences and gates made of wrought iron were once hand-forged and wrought'),
(31, 'iron Roofs', 'product_images/g3.jpg', 5000, 'They are a durable and weather-resistant option that can last for decades.'),
(32, 'Maize Sheller', 'product_images/maizesheller.jpg', 74000, 'It is a freestanding hand-operated machine that removed individual kernels of corn by pulling the cob through a series of metal-toothed cylinders which stripped the kernels off the cob'),
(33, 'Hydrolic tractor trailer', 'product_images/tractor.jpg', 70000, 'A \"hydraulic tractor trailer\" refers to a trailer attached to a tractor that utilizes a hydraulic system to perform functions like tilting or lifting the trailer bed, allowing for efficient unloading of bulk materials like soil, sand, or debris, typically used in construction or agricultural settings');

-- --------------------------------------------------------

--
-- Table structure for table `tbook`
--

CREATE TABLE `tbook` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rno` varchar(100) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `cno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbook`
--

INSERT INTO `tbook` (`sno`, `name`, `rno`, `addr`, `cno`) VALUES
(4, 'koushik', '1234', 'H.no:5-5-167 lashkar bazar hanamkonda', 9878945520),
(5, 'abk', '3456', 'h.no 7-3-322 warangal 506002', 9700220076),
(7, 'ussd', '123', 'kfdsuiiuyrewghjk', 7544354364),
(13, 'Koushik Yeluguri', '1264', 'h.no: 5-5-167 warangal', 4567891230);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `pass`) VALUES
(1, 'admin@abk.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbook`
--
ALTER TABLE `tbook`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbook`
--
ALTER TABLE `tbook`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
