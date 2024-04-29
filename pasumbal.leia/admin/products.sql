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

-- Insert new records
INSERT INTO `products` (`name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
('Everlast Standard', 99.99, 'Gloves', NOW(), NOW(), 'High-quality standard boxing gloves.', 'everlast1.jpeg', ''),
('Everlast Beginner', 79.99, 'Gloves', NOW(), NOW(), 'Beginner boxing gloves for entry-level training.', 'everlast3.jpeg', ''),
('Auth Hoodie', 49.99, 'Apparel', NOW(), NOW(), 'Authentic hoodie for casual wear.', 'hoodie1.jpeg', ''),
('Green Hill Shorts', 34.99, 'Apparel', NOW(), NOW(), 'Comfortable shorts for training sessions.', 'shorts1.jpeg', ''),
('Green Hill Gold Shorts', 39.99, 'Apparel', NOW(), NOW(), 'Premium gold shorts for boxing.', 'shorts2.jpeg', ''),
('Green Hill Blue Shorts', 39.99, 'Apparel', NOW(), NOW(), 'Blue shorts for boxing.', 'shorts3.jpeg', ''),
('Boxing Sweater', 59.99, 'Apparel', NOW(), NOW(), 'Warm sweater for cold weather training.', 'sweater1.jpeg', ''),
('Crew Sweater', 54.99, 'Apparel', NOW(), NOW(), 'Casual sweater for training or leisure.', 'sweater3.jpeg', ''),
('Fang MouthGuard', 14.99, 'Protective Gear', NOW(), NOW(), 'Mouthguard for boxing protection.', 'teethmg1.jpeg', ''),
('Title Mouth Guard', 19.99, 'Protective Gear', NOW(), NOW(), 'Mouthguard for title protection.', 'titlehmg.jpeg', ''),
('Title Pro Mouth Guard', 24.99, 'Protective Gear', NOW(), NOW(), 'Professional mouthguard for boxing.', 'titlehmg2.jpeg', ''),
('Venum Gloves', 129.99, 'Gloves', NOW(), NOW(), 'High-quality Venum gloves for professional boxing.', 'venum.jpeg', '');

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
