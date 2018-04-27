-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 02:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Fasteners'),
(3, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `subcategory`, `location`, `keywords`) VALUES
(1, 'Extra Long Nails', 'Fasteners', 'Bottled Fasteners', 'A-6', ''),
(2, 'Long Nails', 'Fasteners', 'Bottled Fasteners', 'A-6', 'Fasteners, Nails, Long Nails'),
(3, 'Short Nails', 'Fasteners', 'Bottled Fasteners', 'A-6', ''),
(4, 'Extra Short Nails', 'Fasteners', 'Bottled Fasteners', 'A-6', ''),
(5, 'Staples', 'Fasteners', 'Bottled Fasteners', 'A-6', ''),
(6, 'Misc. Fasteners', 'Fasteners', 'Bottled Fasteners', 'A-6', ''),
(8, 'Fasten Masters Exterior Wood Screws 3 1/2\" 350 pack', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(9, 'Panel Board Nails 1\"', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(10, 'Craftsman Brad Nails 1 1/2\" 1000 Pack', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(11, 'Viking Nob-Staples Cable Staples 1\" x 1/2\"', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(12, 'Porter Cable Galvanized Finish Nails', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(13, 'Grip Rite 1 1/2\" Nails', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(14, 'Power-Pro Trim Screws', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(15, 'Woodex 9 x 2\" Screws 3500 Pack', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(16, 'Porter Cable 2\" Brad Nails', 'Fasteners', 'Boxed Fasteners', 'A-6', ''),
(17, '2 1/2\" Drywall Screws', 'Fasteners', 'Bottled Fasteners', 'A-6', ''),
(18, 'Paslobe Powerstar Plus Nail Gun', 'Construction', 'Power Tools', 'A-2', ''),
(19, 'Bostitch BT200 Nail Gun Set', 'Construction', 'Power Tools', 'A-2', ''),
(20, 'Craftsman Mechanical Nail Gun', 'Construction', 'Hand Tools', 'A-2', ''),
(21, 'Buck Bro\'s 9\" Smooth Plane', 'Construction', 'Hand Tools', 'A-3', ''),
(22, 'Caulk Guns (3)', 'Construction', 'Hand Tools', 'A-3', ''),
(23, 'Caulk', 'Construction', 'Materials', 'A-3', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category`) VALUES
(1, 'Boxed Fasteners', 'Fasteners'),
(2, 'Bottled Fasteners', 'Fasteners'),
(3, 'Power Tools', 'Construction'),
(4, 'Hand Tools', 'Construction'),
(5, 'Materials', 'Construction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
