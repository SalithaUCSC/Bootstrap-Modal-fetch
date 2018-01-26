-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 08:39 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fetch_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `phone_id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `sim` varchar(50) NOT NULL,
  `display_type` varchar(50) NOT NULL,
  `display_size` varchar(50) NOT NULL,
  `resolution` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `chipset` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `gpu` varchar(50) NOT NULL,
  `cardslot` varchar(50) NOT NULL,
  `internal` varchar(50) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `cam_primary` varchar(40) NOT NULL,
  `cam_secondary` varchar(40) NOT NULL,
  `battery` varchar(30) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `released_time` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`phone_id`, `name`, `brand`, `dimension`, `sim`, `display_type`, `display_size`, `resolution`, `os`, `chipset`, `cpu`, `gpu`, `cardslot`, `internal`, `ram`, `cam_primary`, `cam_secondary`, `battery`, `image1`, `released_time`, `price`) VALUES
(1, 'Huawei GR5 2017', 'Huawei', '150.9 x 76.2 x 8.2 mm', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'LTPS IPS LCD 16M colors', '5.5 inches', '1080 x 1920 pixels', 'Android 6.0 (Marshmallow)', 'HiSilicon Kirin 655', 'Octa-core', 'Mali-T830MP2', 'microSD, up to 256 GB', '32 GB', '3 GB RAM', '12 MP + 2MP', '8 MP', '3340mAh', '1.png', '2016, October', '27600 '),
(2, 'Samsung Galaxy J7 Prime', 'Samsung', '151.7 x 75 x 8 mm', 'Single SIM (Nano-SIM) or Dual SIM', 'PLS TFT 16M colors', '5.5 inches', '1080 x 1920 pixels', 'Android 6.0.1 (Marshmallow)', 'Exynos 7870 Octa', 'Octa-core 1.6 GHz ', 'Mali-T830 MP1', 'microSD, up to 256 GB', '32 GB', '3 GB RAM', '13 MP ', '8 MP', '3300mAh', '2.png', '2016, August', '29800'),
(3, 'Apple iPhone 7', 'Apple', '138.3 x 67.1 x 7.1 mm', 'Nano-SIM', 'LED-backlit IPS LCD 16M colors', '4.7 inches', '750 x 1334 pixels', 'iOS 10.0.1', 'Apple A10 Fusion', 'Quad-core 2.34 GHz', 'PowerVR Series7XT Plus', 'No', '32 GB', '2 GB RAM', '12 MP', '7 MP ', '1960mAh', '3.png', '2016, September', '110000'),
(4, 'HTC Desire 628', 'HTC', '146.9 x 70.9 x 8.1 mm', 'Dual SIM (Nano-SIM, dual stand-by)', 'IPS LCD 16M colors', '5.0 inches', '720 x 1280 pixels', 'Android 5.1 (Lollipop)', 'Mediatek MT6753', 'Octa-core 1.3 GHz Cortex-A53', 'Mali-T720MP3', 'microSD, up to 256 GB', '32 GB', '3 GB RAM', '13 MP', '5 MP', '2200mAh', '4.png', '2016, May', '22300'),
(5, 'Huawei Nova 2', 'Huawei', '142.2 x 68.9 x 6.9 mm', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'LTPS IPS LCD 16M colors', '5.0 inches', '1080 x 1920 pixels', 'Android 7.0 (Nougat)', 'HiSilicon Kirin 659', 'Octa-core', 'Mali-T830 MP2', 'microSD, up to 256 GB', '64 GB', '4 GB RAM', '12 MP + 8 MP', '20 MP', '2950mAh', '5.png', '2017, May', '37300'),
(6, 'Sony Xperia XZ', 'Sony', '146 x 72 x 8.1 mm', 'Single SIM (Nano-SIM) or Hybrid Dual SIM', 'IPS LCD 16M colors', '5.2 inches', '1080 x 1920 pixels', 'Android 6.0.1 (Marshmallow)', 'Qualcomm MSM8996 Snapdragon 820', 'Quad-core', 'Adreno 530', 'microSD, up to 256 GB', '32 GB', '3 GB RAM', '23 MP', '13MP', '2900mAh', '6.png', '2016, October', '53900 '),
(7, 'Samsung Galaxy J7 Max', 'Samsung', '148.9 x 71.9 x 7.9 mm', 'Dual SIM (Nano-SIM, dual stand-by)', 'PLS 16M colors', '5.7 inches', '1080 x 1920 pixels', 'Android 7.0 (Nougat)', 'Mediatek MT6757 Helio P20', 'Octa-core 2.4 GHz', 'Mali-T880MP2', 'microSD, up to 256 GB', '32GB', '4GB RAM', '13 MP', '13 MP', '3300mAh', '7.png', '2017, June', ' 32300 '),
(8, 'HTC ONE A9S ', 'HTC', '146.5 x 71.5 x 8 mm', 'Nano-SIM', 'Super LCD 16M colors', '5.0 inches', '720 x 1280 pixels', 'Android 6.0 (Marshmallow)', 'Mediatek MT6755 Helio P10', 'Octa-core', 'Mali-T860MP2', 'microSD, up to 256 GB', '32GB', '3GB RAM', '13MP', '5 MP', '2300mAh', '8.png', '2016, September', '31900 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`phone_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `phone_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
