-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 09:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connex`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(200) NOT NULL,
  `price` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `stock` int(2) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `price`, `description`, `stock`, `status`, `name`) VALUES
('462315', '29900.00', 'ACER H7550ST PROJECTOR WITH 1080P RESOLUTION.', 2, 'New', 'Acer Projector'),
('462351', '13500.00', 'PICO 4 ALL-IN-ONE VR HEADSET 256GB - 6 FREE GAME BUNDLE\r\n', 3, 'New', 'PICO 4'),
('462589', '35000.00', 'ACER P6200 PROJECTOR, XGA RESOLUTION', 3, 'New', 'ACER P6200'),
('463524', '8450.00', 'ACER C120 PROJECTOR, 480P RESOLUTION, 100 ANSI BRIGHTNESS, USB CONNECTION, LED, LAMP LIFE 20,000 H, BLACK\r\n', 3, 'New', 'ACER C120 PROJECTOR'),
('478965', ' 1790.00', 'SMATREE META OCULUS QUEST 2 CHARGING DOCK STATION\r\n', 3, 'New', 'SMATREE META'),
('526428', '5100.00', 'WAHOO FITNESS ELEMNT BOLT BIKE COMPUTER, UNISEX ADULT, BLACK\r\n', 3, 'New', 'WHA BRand'),
('562315', '14500.00', 'PIONEER CDJ 350 MULTI PLAYER USB/CD NEW', 3, 'New', 'PIONEER CDJ'),
('596846', '39900.00', 'ACER PREDATOR GD711', 3, 'New', 'ACER PREDATOR'),
('636528', '35000.00', 'ACER P6200 PROJECTOR, XGA', 3, NULL, 'ACER P6200 PROJECTOR'),
('645289', '8450.00', 'BOSE SMART SOUNDBAR 900 WITH DOLBY ATMOS AND ALEXA VOICE ASSISTANT, BLACK\n', 3, 'New', 'BOSE SMART'),
('798659', '13900.00', 'PICO 4 ALL-IN-ONE VR HEADSET 256GB - 6 FREE GAME BUNDLE\r\n', 3, 'New', 'PICO 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
