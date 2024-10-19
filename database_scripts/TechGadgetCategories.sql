-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 19, 2024 at 12:51 AM
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
-- Table structure for table `TechGadgetCategories`
--

CREATE TABLE IF NOT EXISTS `TechGadgetCategories` (
  `TechCategoryID` int(11) NOT NULL,
  `TechCategoryCode` varchar(255) NOT NULL,
  `TechCategoryName` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `ShelfNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TechGadgetCategories`
--

INSERT INTO `TechGadgetCategories` (`TechCategoryID`, `TechCategoryCode`, `TechCategoryName`, `DateCreated`, `ShelfNumber`) VALUES
(123, 'VR', 'Oculus', '2024-10-17 12:33:40', 90),
(200, 'BLTH', 'Bluetooth Devices', '2024-10-10 09:02:29', 2),
(221, 'SMRT', 'Smart Devices', '2024-10-18 12:25:48', 2),
(300, 'NOWIRE', 'Wireless Devices', '2024-10-10 09:03:23', 3),
(321, 'VR', 'Oculus', '2024-10-18 11:43:28', 90),
(444, 'VR', 'Oculus', '2024-10-18 11:54:36', 90),
(500, 'SMRTFTN', 'Fitness Devices', '2024-10-10 09:04:44', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TechGadgetCategories`
--
ALTER TABLE `TechGadgetCategories`
 ADD PRIMARY KEY (`TechCategoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
