-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2024 at 04:31 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxing_gear`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` date NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Leather Boxing Gloves', 120.00, 'Gloves', '2024-04-14 15:33:51', '2024-04-14', 'High-quality leather boxing gloves designed for professional training and competition.', 'leather_gloves_front.png', 'leather_gloves_full.png,leather_gloves_side.png'),
(2, 'Punching Bag', 150.00, 'Bags', '2024-04-14 15:34:02', '2024-04-14', 'Heavy-duty punching bag for strength training and boxing practice.', 'punching_bag_front.png', 'punching_bag_full.png,punching_bag_side.png'),
(3, 'Speed Ball', 85.00, 'Bags', '2024-04-14 15:29:57', '2024-04-14', 'Durable speed ball for reflex and speed training.', 'speed_ball_front.png', 'speed_ball_full.png,speed_ball_side.png'),
(4, 'Headgear', 90.00, 'Protective Gear', '2024-04-14 15:38:03', '2024-04-14', 'Cushioned headgear to ensure safety and reduce impact during sparring sessions.', 'headgear_front.png', 'headgear_full.png,headgear_side.png'),
(5, 'Boxing Shoes', 110.00, 'Apparel', '2024-04-14 15:42:00', '2024-04-14', 'Lightweight and comfortable boxing shoes offering excellent grip and mobility.', 'boxing_shoes_front.png', 'boxing_shoes_full.png,boxing_shoes_side.png'),
(6, 'Hand Wraps', 25.00, 'Protective Gear', '2024-04-14 15:45:47', '2024-04-14', 'Essential hand wraps for wrist support and protection under gloves.', 'hand_wraps_front.png', 'hand_wraps_full.png,hand_wraps_only.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
