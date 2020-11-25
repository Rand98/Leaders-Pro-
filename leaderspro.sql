-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 08:57 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaderspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `U_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `descreption` varchar(100) NOT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `U_id`, `product_name`, `descreption`, `product_image`) VALUES
(1, 2, 'Shirt', 'Shirt, long pink shirt', 'Capture57.PNG'),
(3, 2, 'Dress', 'Dress, short violet flowers', '888.jpg'),
(10, 0, 'glasses', 'mmmmmmmmmm', '7888.PNG'),
(12, 4, 'dress', 'ddddddddddd', '4444.PNG'),
(13, 4, 'scarfs1233', 'mmmmmmmmmm', 'Captur55e.PNG'),
(14, 2, 'bag-12', 'A red bag with a long silver handle', 'Capturejjj.PNG'),
(15, 3, 'Shoe model11', 'High heel shoes (6 cm) light brown color', 'Capture545.PNG'),
(16, 3, 'Dress', 'Colorful long dress', '7888.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `user_email`, `user_pass`, `dateofbirth`) VALUES
(2, 'Rand Awad', 'rand.fwd@gmail.com', '202cb962ac59075b964b07152d234b70', '1998-08-05'),
(3, 'farah hammad', 'Farahhammad1610@gmail.com', '58b1216b06850385d9a4eadbedc806c4', '1995-06-09'),
(4, 'hala mohammad', 'hala12@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2004-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
