-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 11:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(20) NOT NULL,
  `discount` int(10) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `discount`, `rating`) VALUES
(1, 'Apple iPhone 16 Plus (128 GB) - Ultramarine', 'Advanced dual-camera system 48MP Fusion: 26 mm, ƒ/1.6 aperture, sensor‑shift optical image stabilisation, 100% Focus Pixels, support for super-high-resolution photos (24MP and 48MP)', 89000, 3, 4),
(2, 'Zebronics Transformer Gaming Keyboard and Mouse Combo', 'Braided Cable,Durable Al body,Multimedia keys and Gaming Mouse with 6 Buttons, Multi-Color LED Lights, High-Resolution Sensor with 3200 DPI(Black)', 2399, 46, 4),
(3, 'Zebronics Jet PRO', 'Premium Wired Gaming On Ear Headphone with LED for Headband + earcups, 40mm Neodymium Drivers, 2 Meter Braided Cable, with mic, Suspension Design, 3.5mm + USB Connector (Black, Blue)', 1099, 47, 4),
(4, 'Mattel Uno Playing Card', 'Uno Playing Card Game For 7 Yrs And Above For Adult,Set Of 112 Cards, Multicolor', 149, 9, 4),
(5, 'Casual Slim Fit Shirt', 'Men\'s Cotton Solid Casual Slim Fit Shirt Collor Short Kurta for Men', 1999, 76, 3),
(6, 'Fastrack Dezire FX1 PRO', 'Fashion Smartwatch with 1.43\" AMOLED Display with 466 * 466 Pixel Resolution|SingleSync BT Calling|AI Voice Assistant|100+ Sports Modes and Watchfaces|Upto 5 Day Battery|IP68', 5999, 42, 4),
(7, 'TIMEX Analog', 'TIMEX Analog Men\'s Watch (Dial Colored Strap)', 1595, 21, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
