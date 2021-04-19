-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2021 at 11:32 PM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `category`, `description`, `price`) VALUES
('item15', 'Kids Menu', 'Chicken Tenders', '4.00'),
('item16', 'Kids Menu', 'Hamburger', '4.00'),
('item17', 'Kids Menu', 'Hot Dog', '4.00'),
('item18', 'Kids Menu', 'Grilled Cheese Sandwich', '3.50'),
('item19', 'Kids Menu', 'Pizza - pepperoni, cheese, or sausage', '4.25'),
('item25', 'Drinks', 'Water', '0.00'),
('item26', 'Drinks', 'Lemonade', '1.00'),
('item27', 'Drinks', 'Raspberry Lemonade', '1.00'),
('item28', 'Drinks', 'Coke', '1.00'),
('item29', 'Drinks', 'Dr. Pepper', '1.00'),
('item30', 'Drinks', 'Root Beer', '1.00'),
('item31', 'Drinks', 'Ginger Ale', '1.00'),
('item32', 'Drinks', 'Coffee', '1.00'),
('item33', 'Drinks', 'Sweet Tea', '1.00'),
('item34', 'Drinks', 'Unsweetened Tea', '1.00');

('item20', 'Desserts', 'Ice Cream Bowl', '5.00'),
--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
