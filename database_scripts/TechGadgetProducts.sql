-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 19, 2024 at 12:55 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmr82`
--

-- --------------------------------------------------------

--
-- Table structure for table `TechGadgetProducts`
--

CREATE TABLE IF NOT EXISTS `TechGadgetProducts` (
  `TechProductID` int(11) NOT NULL,
  `TechProductCode` varchar(255) NOT NULL,
  `TechName` varchar(255) NOT NULL,
  `TechDescription` text NOT NULL,
  `TechCategoryID` int(11) NOT NULL,
  `TechWholesalePrice` decimal(10,2) NOT NULL,
  `TechListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `Color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TechGadgetProducts`
--

INSERT INTO `TechGadgetProducts` (`TechProductID`, `TechProductCode`, `TechName`, `TechDescription`, `TechCategoryID`, `TechWholesalePrice`, `TechListPrice`, `DateCreated`, `Color`) VALUES
(1467, 'CMR', 'Camera', 'fast', 400, 399.00, 499.00, '2024-10-18 15:07:21', 'Silver'),
(1477, 'CMRA', 'Camera', 'fast', 400, 399.00, 499.00, '2024-10-18 15:05:51', 'Silver'),
(2005, 'OCLS', 'Oculus Virtual Reality Headset', 'A standalone VR headset that doesn''t require a PC or console to run.', 100, 500.00, 650.00, '2024-10-10 09:16:10', 'Blue'),
(2006, 'AIPD', 'Apple iPad Pro', 'A powerful tablet with a large display, perfect for productivity and entertainment.', 100, 750.00, 899.00, '2024-10-18 11:28:34', 'Silver'),
(2007, 'SMST', 'Samsung Galaxy Tab S7', 'A high-performance tablet with a stunning display and long battery life.', 100, 650.00, 799.00, '2024-10-18 11:28:35', 'Black'),
(3505, 'SMARTBULB', 'Philips Hue Smart Bulb', 'A smart LED bulb that can be controlled via smartphone app and voice commands, providing customizable lighting options.', 200, 49.99, 69.99, '2024-10-18 11:31:30', 'White'),
(3506, 'DOORBELL', 'Ring Video Doorbell', 'A smart doorbell that allows you to see and speak to visitors from your smartphone, with HD video and two-way audio.', 200, 99.99, 149.99, '2024-10-18 11:31:31', 'Silver'),
(4040, 'ANKRCHG', 'Anker Wireless Charger Pad', 'Complete Charging Convenience: Instantly charge your phone or earbuds simply by placing them in the center of PowerWave Pad. Never fuss around with plugging and unplugging cables again, just set down and power up.', 300, 49.99, 59.99, '2024-10-15 07:56:03', 'Black'),
(4041, 'BLUETOOTH', 'JBL Flip 5 Bluetooth Speaker', 'Portable waterproof Bluetooth speaker with powerful sound and up to 12 hours of playtime.', 300, 79.99, 99.99, '2024-10-18 11:32:16', 'Red'),
(4042, 'AIRPODS', 'Apple AirPods Pro', 'Active Noise Cancellation, Transparency mode, and customizable fit with Adaptive EQ for an immersive audio experience.', 300, 199.99, 249.99, '2024-10-18 11:32:19', 'White'),
(5505, 'RYBNGLS', 'Ray-Ban Smart Bluetooth Glasses', 'Ready for the next generation of smart glasses? The Ray-Ban Meta collection combines the latest in wearable tech with authentic Ray-Ban design, to keep you connected wherever you go.', 400, 429.00, 499.99, '2024-10-15 08:02:36', 'Shiny Caramel'),
(5512, 'KBMKIT', 'Logitech MK270 Wireless Keyboard and Mouse Combo', 'This combo includes a wireless keyboard and mouse that offers comfortable typing and precise control without cables, perfect for office or home use.', 400, 39.99, 59.99, '2024-10-18 11:35:02', 'Black'),
(5513, 'USBCADPT', 'Apple USB-C Digital AV Multiport Adapter', 'Connect your Mac or iPad Pro to HDMI displays, while also providing a standard USB port and a USB-C charging port, all in a compact design.', 400, 49.99, 69.99, '2024-10-18 11:35:04', 'Silver'),
(6066, 'GRMNWTCH', 'Garmin Forerunner 965', 'Forerunner 965 is a premium running smartwatch with a touchscreen AMOLED display & buttons, built-in maps, & up to 23 days of battery life. Train for an event, achieve a milestone, or improve your fitness with Garmin.', 500, 599.99, 699.99, '2024-10-15 08:09:42', 'Carbon Gray'),
(6068, 'WHOOP3', 'WHOOP Strap 3.0', 'The WHOOP Strap 3.0 is a fitness tracker that monitors heart rate, sleep, and recovery, providing personalized insights to improve your performance and overall health.', 500, 30.00, 40.00, '2024-10-18 11:36:33', 'Navy Blue'),
(6069, 'WYSCLE', 'Withings Body+ Smart Scale', 'The Withings Body+ Smart Scale measures weight, body fat, water percentage, and muscle mass. It syncs with your smartphone to track your progress and integrates with various health apps.', 500, 99.95, 129.95, '2024-10-18 11:36:19', 'White');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TechGadgetProducts`
--
ALTER TABLE `TechGadgetProducts`
 ADD PRIMARY KEY (`TechProductID`), ADD UNIQUE KEY `TechProductCode` (`TechProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
